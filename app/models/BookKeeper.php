<?php

class BookKeeper extends \Eloquent {
	protected $fillable = [];

	protected $table = 'bookKeepers';

    public function user()
	{ 
		return $this->belongsTo('User');
    }
}