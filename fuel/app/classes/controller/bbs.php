<?php
use Fuel\Core\Controller_Template;
use Fuel\Core\Response;
use Fuel\Core\Input;
use Fuel\Core\Session;
use Fuel\Core\Upload;
use Fuel\Core\Sanitization;
class Controller_Bbs extends Controller_Template {
	public function action_index() {
		return Response::forge ( View::forge ( 'bbs/index' ) );
	}
	public function action_add() {
		if (Input::post ( 'send' )) {
			// connect the database
			$comments = new Model_Comments ();
			
			// save the data
			$comments->newsid = Input::post ( 'post_id' );
			$comments->email = Input::post ( 'email' );
			$comments->comment = Input::post ( 'comment' );
			$comments->file = '';
			$comments->created_at = date ( "Y-m-d H:i:s" );
			
			
			// save action
			
			$comments->save ();
			
			// validate the file exist/
			
			//get the id
			$commentsid=$comments->id;
			
			// 自訂此上傳的配置
			$config = array (
					'path' => DOCROOT . 'files',
					'randomize' => true,
					'ext_whitelist' => array (
							'img',
							'jpg',
							'jpeg',
							'gif',
							'png'
					)
			);
			// 處理 $_FILES 中上傳的檔案
			Upload::process ( $config );
				
			// 如果有任何有效檔案
			if (Upload::is_valid ()) {
				
			
			
				//if you want to save to tha database lets grab the file name
				$value = Upload::get_files();
				$path = $value[0]['saved_to'];
				$filename =$value[0]['saved_as'];
				//update the file name in the comments table.
				
				//get the Model_comments
				//*************
				$upfile=Model_Comments::find($commentsid);
				$upfile->file=$filename;
				//save to the database
				$upfile->save();
				//***********
				// 呼叫一個模型方法來更新資料庫
				$upload = new Model_Files ();

				$upload->commentid = $commentsid;
				$upload->path = $path;
				$upload->created_at = date ( "Y-m-d H:i:s" );
				
				$upload->save ();

			}
				
			
			
			
			
			// save or not
			
			Session::set_flash ( 'success', 'The comment has been added!' );
			Response::redirect ( '/news/view/' . $comments->newsid );
		}
	}
}
