<?php
use Fuel\Core\Controller_Template;
use Fuel\Core\Input;
use Fuel\Core\Response;
class Controller_Upload extends Controller_Template {
	public function action_index() {
		
		// return Response::forge(View::forge('upload/index'));
		$file = Model_upload::find ( 'all' );
		
		$data = array (
				'files' => $file 
		);
		$this->template->title = 'Upload';
		$this->template->content = View::forge ( 'upload/index', $data );
	}
	public function action_create(){
		$data = array ();
		$this->template->title = 'Create';
		$this->template->content = View::forge ( 'upload/create', $data );
	}
	public function action_upload() {
		// 設定（ファイル保存場所）
		$config = array (
				'ext_whitelist' => array (
						'csv' 
				),
				'path' => DOCROOT . 'customer_files',
				'randomize' => false 
		);
		$upload_data = array ();
		$upload_name = array ();
		
		// アップロード実行
		Upload::process ( $config );
		
		// 検証
		if (Upload::is_valid ()) {
			// アップロードファイルを保存
			Upload::save ();
			
			// データベース保存
			foreach (Upload::get_files() as $file){
				$data = file_get_contents($file['saved_to'].$file['saved_as']);
				//ファイルの削除
                File::delete($file['saved_to'].$file['saved_as']);
                $data = mb_convert_encoding($data, 'UTF-8', "auto");
				//分离数据
				$data = explode("\n", $data);
				//遍历数据 
				for($k=1;$k<(count($data)-1);$k++){
					
					$file= explode(",", $data[$k]);
					
						
						//save the data to the database
						$update=new Model_upload();
						$update->title=$file[0];
						$update->price=$file[1];
						$update->number=$file[2];
						$update->created_at=date('Y-m-d H:i:s');
						
						$update->save();
						
						Session::set_flash('success','csv has been successfully loaded!');		
					
				}
				Response::redirect('upload/index');
			}
			
		}		
 		
	}
}

