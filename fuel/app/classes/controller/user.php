<?php

use Fuel\Core\Controller_Template;

class Controller_User extends Controller_Template
{
	
	public function action_index()
	{
		$data['user']=Model_user::find('all');
		
		$data= array(
				'data'=>$data['user']
		);		
		$this->template->title = 'User';
		$this->template->content = View::forge('user/index',$data);
	}
	public function action_create()
	{
		
		$this->template->title = 'User';
		$this->template->content = View::forge('user/create');
	}

	
}
