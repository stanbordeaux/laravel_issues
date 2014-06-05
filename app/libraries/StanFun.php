<?php

class StanFun {

	public static function doDump($data)
	{

		$dump =  "<pre>";
		$dump .= print_r($data->toArray());
		$dump .= "</pre>";
		
		return $dump;
	}
}