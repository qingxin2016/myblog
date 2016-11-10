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
				try {
					// 新しいユーザーを作成
					$created = Auth::create_user ( Input::post ( 'username' ), Input::post ( 'password' ), Input::post ( 'email' ), Input::post ( 'group' ) );
					// if a user was created succesfully
					if ($created){
						Session::set_flash('success','New user has been created');
					
						Response::redirect('user/index');
					}else {
						Session::set_flash('erro','Failed.');
					
						Response::redirect('user/index');
					}
				} catch (Exception $e) {
					// duplicate email address
					if ($e->getCode() == 2)
					{
						//Messages::error(__('login.email-already-exists'));
						Session::set_flash('erro','email-already-exists.');
					}
					
					// duplicate username
					elseif ($e->getCode() == 3)
					{
						//Messages::error(__('login.username-already-exists'));
						Session::set_flash('erro','username-already-exists');
					}
					
					// this can't happen, but you'll never know...
					else
					{
						Messages::error($e->getMessage());
					}
				}		
		}
		$this->template->title = 'Create User';
		$this->template->content = View::forge ( 'user/create' );
	}
	
	
	public function action_delete($username){
		$username=$username;
		// delete the user
		$delete=Auth::delete_user($username);
		if ($delete){
			Session::set_flash('success','User has been deleted');
		}else {
			Session::set_flash('erro','username did not exist');
		}
		Response::redirect('user/index');
	}
	public function action_reset($username){
		$username=$username;
		// delete the user
		$new_password = Auth::reset_password($username);
		if ($new_password){
			Session::set_flash('success','New password is:  <h1>'.$new_password.'</h1>');
		}else {
			Session::set_flash('erro','Failed');
		}
		Response::redirect('user/index');
	}
	
public function action_edit(){
		
		
		$this->template->title = 'Edt User';
		$this->template->content = View::forge ( 'user/edit' );
	}
	
}
