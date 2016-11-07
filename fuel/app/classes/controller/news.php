<?php

use Fuel\Core\Controller_Template;
use Fuel\Core\Input;
use Fuel\Core\Session;
use Fuel\Core\Response;
use Fuel\Core\Model;

class Controller_News extends Controller_Template
{
	public function before()
	{
		parent::before();// この行がないと、テンプレートが動作しません!
		if (!Auth::check())
		{
			Response::redirect('/login');
		}
	}
	
	public function action_index()
	{
		//$news = Model_news::find('all');
		
		//ページネーションで設定するため、表示させるデータの全件数をcount関数で取得します。
		$total = count(Model_news::find('all'));
		
		//ページネーションの設定用変数を作成します。
		$config = array(
				'pagination_url' => 'news/index',
				'uri_segment' => 3,
				'per_page' => 2,
				'total_items' => $total
		);
		// 'mypagination' という名前の pagination インスタンスを作る
		$pagination = Pagination::forge('mypagination', $config);
		
		//モデルからデータを取得、
		$data['news'] = Model_news::find('all',array(
				'order_by' => array(
						'created_at' => 'desc'
				),
				'limit' => $pagination->per_page,
				'offset' => $pagination->offset
			)
		);
		
		//return View::forge('news/index',$data);
		
		//$data = array('news'=>$news);
        $this->template->title = 'News';
        $this->template->content = View::forge('news/index', $data);
	}
	
	public function action_view($id)
	{
		$news = Model_news::find('first',array(
				'where'=>array(
						'id'=>$id
				)
		));
		$str="comments.id,comments.newsid as cnewsid,comments.comment as ccomment,comments.file as filename,comments.created_at as created_time,files.path as file_path";
		$sql="SELECT ".$str." FROM `comments` LEFT JOIN `files` ON (files.commentid=comments.id) WHERE comments.newsid=".$id." ORDER BY comments.created_at DESC";
		
		$comment=DB::query($sql) -> execute()->as_array();
		
		//important.对于引用的页面设定全局，不然会出错误信息
		$this->template->set_global('comments', $comment, false);
		
		$data = array('items'=>$news,'comments'=>$comment);
        $this->template->title = 'view';
        $this->template->content = View::forge('news/view', $data);
	}
	public function action_edit($id)
	{
		if (Input::post('send')){
			$news =Model_news::find('post_id');
			$news = Model_news::find($id);
			$news->title=Input::post('title');
			$news->body=Input::post('body');
			$news->created_at=date('Y-m-d H:i:s');
				
			$news->save();
				
			Session::set_flash('success','The news Updated');
				
			Response::redirect('/');
				
				
		}
		$news = Model_news::find('first',array(
				'where'=>array(
						'id'=>$id
				)
		));
		
		
		
		$data = array('items'=>$news);
		$this->template->title = 'Edit';
		$this->template->content = View::forge('news/edit', $data);
	}
	public function action_add()
	{
		if (Input::post('send')){
			$news =new Model_news();
			$news->title=Input::post('title');
			$news->body=Input::post('body');
			$news->created_at=date('Y-m-d H:i:s');
			
			$news->save();
			
			Session::set_flash('success','The news Added');
			
			Response::redirect('/');
			
			
		}
		
		$data = array();
        $this->template->title = 'add';
        $this->template->content = View::forge('news/add', $data);
	}
	public function action_delete($id)
	{
		$news = Model_news::find('first',array(
				'where'=>array(
						'id'=>$id
				)
		));
	
		$news->delete();
		
		
		Session::set_flash('success','The news deleted');
			
		Response::redirect('/');
		
	
		
	}

	
}
