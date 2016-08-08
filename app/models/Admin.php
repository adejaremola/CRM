<?php

class Admin extends \Eloquent {
	protected $fillable = [];
	
	public function user()
	{
		return $this->belongsTo('User');
	}
}