<?php

class Note extends \Eloquent {

	protected $table = 'notes';


	public function meeting()
	{ 
		return $this->hasMany('meeting');
	}


}