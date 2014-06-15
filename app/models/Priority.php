<?php

class Priority extends \Eloquent {
	protected $fillable = [];
	protected $table = 'priorities';
	
	public function issues()
	{
		return $this->hasMany('Issue');
	}
}