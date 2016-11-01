<?php

use Fuel\Core\Controller_Template;
use Fuel\Core\Response;
use Fuel\Core\Input;
use Fuel\Core\Session;

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
			$commens->created_at = date("Y-m-d H:i:s");
			
			
			//save action
			
			$commens->save();
			
			//save or not
			
			Session::set_flash('success','The comment has been added!');
			Response::redirect('/news/view/'.$commens->newsid);
			
		}
		
		
	}

	
}
