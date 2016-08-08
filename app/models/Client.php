<?php

class Client extends \Eloquent {
	protected $fillable = ['phoneNumber_1','phoneNumber_2'];


public static $rules = [

	'phoneNumber_1' => 'required',
	'phoneNumber_1' => 'required',

];

	public function user()
	{ 
		return $this->belongsTo('User');
	}
	
	
	public function companies()
	{ 
		return $this->hasMany('Company');
	}

	public function meetings()
	{
		return $this->belongsTo('Meeting');
	}
}