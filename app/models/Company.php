<?php

class Company extends \Eloquent {
	protected $fillable = ['company_name', 'company_address', 'company_details'];

	
	public function client()
	{ 
		return $this->belongsTo('Client');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
}