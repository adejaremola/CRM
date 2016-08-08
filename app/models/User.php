<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	//protected $fillable = array('roles_id','first_name','other_names','email','password');
	
	//public static $rules = [];
	
	public function role()
	{ 
		return $this->belongsTo('Role');
    }
	
	public function admin()
	{ 
		return $this->hasOne('Admin');
	}
	
	public function bookkeeper()
	{
		return $this->hasOne('BookKeeper');
	}
	
	public function crm()
	{
		return $this->hasOne('Crm');
	}

	public function isAdmin()
	{
		return $this->roles_id == 1;
	}
	public function isCrm ()
	{
		return $this->roles_id == 2;
	}

	public function isBookkeeper ()
	{
		return $this->roles_id == 3;
	}

	public function isClient ()
	{
		return $this->roles_id == 4;
	}

	
	
	
	
	
}



