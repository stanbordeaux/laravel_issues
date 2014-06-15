<?php

class Status extends \Eloquent {
	protected $fillable = [];
	protected $table = 'status';
	
	public function issues()
	{
		return $this->hasMany('Issue');
	}
}