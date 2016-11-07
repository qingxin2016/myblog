<?php
class Model_login extends orm\Model{
	protected static $_properties=array(
			'id',
			'username',
			'password',
			'email',
			'group',
			'updated_at',
			'created_at'
	);
}