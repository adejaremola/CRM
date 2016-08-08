<?php

class Attachment extends \Eloquent {
	protected $fillable = ['client_id','attachment_type','attachment_url','uploaded_by'];
	
	public function client()
	{ 
		return $this->belongsTo('Client'); 
	}
}