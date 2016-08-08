<?php

class Role extends Eloquent {

	
	protected $table = 'roles';
	

	
	public function user()
	{
		return $this->hasMany('User');
	}
}