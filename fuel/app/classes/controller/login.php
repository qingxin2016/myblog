<?php

class Controller_Login extends Controller
{
	
	public function action_index()
	{
		//すでにログイン済であればログイン後のページへリダイレクト
		Auth::check() and Response::redirect('upload/index');
		
		//エラーメッセージ用変数初期化
		$error = null;
		
		//ログイン用のオブジェクト生成
		$auth = Auth::instance();
		
		//ログインボタンが押されたら、ユーザ名、パスワードをチェックする
		if (Input::post('send')) {
			if ($auth->login(Input::post('username'), Input::post('password'))) {//Input::post('username'), Input::post('password')
				
				// did the user want to be remembered?
				if (Input::post('remember', false))
				{
					// create the remember-me cookie
					Auth::remember_me();
					
				}
				else
				{
					// delete the remember-me cookie if present
					Auth::dont_remember_me();
				}
				
				// logged in, go back to the page the user came from, or the
				// application dashboard if no previous page can be detected
				//\Response::redirect_back('dashboard');
				// ログイン成功時、ログイン後のページへリダイレクト
				Response::redirect('/upload/index');
			}else{
				// ログイン失敗時、エラーメッセージ作成
				$error = 'ユーザ名かパスワードに誤りがあります';
			}
		}
		
		//ビューテンプレートを呼び出し
		$title = 'Sign In';
		$view = View::forge('login/index');
		
		//エラーメッセージをビューにセット
		$view->set('error', $error);
		
		
		return $view;
	}

	
}
