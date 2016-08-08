<?php

class Invite extends \Eloquent {
	protected $fillable = ['name', 'email'];

	protected $table = 'invites';
}