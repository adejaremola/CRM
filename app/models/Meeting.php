<?php

class Meeting extends \Eloquent {
	protected $fillable = [ 'meeting_description' ];

	protected $table = 'meetings';
	
	public function client()
	{ 
		return $this->belongsTo('Client'); 
	}
	
	
}