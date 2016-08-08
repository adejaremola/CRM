<?php

class Comment extends \Eloquent {
	protected $fillable = [];

	public function meeting()
	{
		return $this->hasMany('meeting');
	}
}

