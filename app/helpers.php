<?php 

function doDump($data)
{
	
	return '<pre>'.print_r($data->toArray()). '</pre>';
}