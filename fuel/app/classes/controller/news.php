<?php

use Fuel\Core\Controller_Template;
use Fuel\Core\Input;
use Fuel\Core\Session;
use Fuel\Core\Response;

class Controller_News extends Controller_Template
{
	
	public function action_index()
	{
		$news = Model_news::find('all');
		
		$data = array('news'=>$news);
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
		
		
		
		$data = array('items'=>$news);
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
