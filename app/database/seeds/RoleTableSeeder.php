<?php

class RoleTableSeeder extends DatabaseSeeder {
	public function run()
	{
		Role::create(array(
		'role_name' => 'admin'
		));
		
		Role::create(array(
		'role_name' => 'crm'
		));
		
		Role::create(array(
		'role_name' => 'bookKeeper'
		));
		
		Role::create(array(
		'role_name' => 'client'
		));
	}
}