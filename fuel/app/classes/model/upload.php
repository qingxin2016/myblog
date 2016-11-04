<?php

class Model_upload extends orm\Model{
	protected static $_properties = array(
			'id',
			'pid',
			'title',
			'price',
			'number',
			'created_at'
	);
	
	protected static function validate($factory){
		
		//step1
		$val = Validation::forge($factory);

		//step2
		$val->add_field('title', 'Title', 'max_length[255]');
		$val->add_field('price', 'Price' );
		$val->add_field('number', 'Number');
		
		//step3
		return $val;
		
	}
}
