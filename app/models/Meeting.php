<?php

class Meeting extends \Eloquent {
	protected $fillable = [ 'meeting_description' ];

	
	public function client()
	{ 
		return $this->belongsTo('Client'); 
	}
	
	
}