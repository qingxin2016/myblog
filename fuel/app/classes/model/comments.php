<?php

class Model_Comments extends orm\Model{
	protected static $_properties = array(
			'id',
			'newsid',
			'email',
			'comment',
			'file',
			'created_at',
	);	
}
