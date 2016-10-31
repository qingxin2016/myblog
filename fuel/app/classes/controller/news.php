<?php

use Fuel\Core\Controller_Template;
use Fuel\Core\Input;

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
		$news = Model_news::find($id);
		
		
		
		$data = array('items'=>$news);
        $this->template->title = 'view';
        $this->template->content = View::forge('news/view', $data);
	}
	public function action_edit($id)
	{
		$news = Model_news::find($id);
		
		
		
		$data = array('items'=>$news);
		$this->template->title = 'Edit';
		$this->template->content = View::forge('news/edit', $data);
	}
	public function action_add()
	{
		$data = array();
        $this->template->title = 'add';
        $this->template->content = View::forge('news/add', $data);
	}

	
}
