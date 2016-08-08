<?php

class Note extends \Eloquent {

	protected $fillable = [ 'notes_description'];

	public function meeting()
	{ 
		return $this->hasMany('meeting');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}
}