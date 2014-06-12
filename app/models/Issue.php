<?php

class Issue extends Eloquent {

	public function user()
	{
		return $this->belongsTo('User');
	}
	
	public function status()
	{
		return $this->belongsTo('Status');
	}
	
	public function priority()
	{
		return $this->belongsTo('Priority');
	}
}