<?php
class Controller_Logout extends Controller
{

	public function action_index()
	{
		Auth::check() and Auth::logout();
		Response::redirect('/login');
	}

}