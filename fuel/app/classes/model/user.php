<?php
class Model_user extends orm\Model{
	
	protected static $_properties = array(
			'id',
			'username',
			'password',
			'group',
			'email',
			'last_login',
			'login_hash',
			'profile_fields',
			'created_at'
			
	);
}