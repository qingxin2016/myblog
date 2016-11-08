<?php
use Fuel\Core\Controller_Template;
use Fuel\Core\Input;
use Fuel\Core\Session;
use Fuel\Core\Response;
class Controller_User extends Controller_Template {
	public function action_index() {
		$data ['user'] = Model_user::find ( 'all' );
		
		$data = array (
				'data' => $data ['user'] 
		);
		$this->template->title = 'User';
		$this->template->content = View::forge ( 'user/index', $data );
	}
	public function action_create() {
		if (Input::post ( 'send' )) {
			// 新しいユーザーを作成
			Auth::create_user ( Input::post ( 'username' ), Input::post ( 'password' ), Input::post ( 'email' ), Input::post ( 'group' ) );
			
			Session::set_flash('success','New user has been created.');
			Response::redirect('user/index');
		}
		
		
		
		$this->template->title = 'Create User';
		$this->template->content = View::forge ( 'user/create' );
	}
}
