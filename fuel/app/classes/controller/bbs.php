<?php

use Fuel\Core\Controller_Template;
use Fuel\Core\Response;
use Fuel\Core\Input;
use Fuel\Core\Session;
use Fuel\Core\Upload;
use Fuel\Core\Sanitization;

class Controller_Bbs extends Controller_Template
{
	
	public function action_index()
	{
		return Response::forge(View::forge('bbs/index'));
	}
	public function action_add()
	{
		if (Input::post('send')){
			//connect the database
			$commens=new Model_Comments();
			
			//save the data
			$commens->newsid = Input::post('post_id');
			$commens->email = Input::post('email');
			$commens->comment = Input::post('comment');
			$commens->file = Input::post('file');
			
			//validate the file exist/
			// 自訂此上傳的配置
			$config = array(
					'path' => DOCROOT.'files',
					'randomize' => true,
					'ext_whitelist' => array('img', 'jpg', 'jpeg', 'gif', 'png'),
			);
			// 處理 $_FILES 中上傳的檔案
			Upload::process($config);
			
			// 如果有任何有效檔案
			if (Upload::is_valid())
			{
				// 根據配置儲存他們
				Upload::save();
				
				$arr = array(Upload::get_files());
				
				// 呼叫一個模型方法來更新資料庫
				$upload =new Model_Files();
				
				$upload->commentid = Input::post('post_id');
				$upload->path      = $arr;
				$upload->created_at=date("Y-m-d H:i:s");
				
				$upload->save();
				
			}
				
			
			
			$commens->created_at = date("Y-m-d H:i:s");
			
			
			//save action
			
			$commens->save();
			
			//save or not
			
			Session::set_flash('success','The comment has been added!');
			Response::redirect('/news/view/'.$commens->newsid);
			
		}
		
		
	}

	
}
