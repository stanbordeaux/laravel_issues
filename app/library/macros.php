<?php

// extends the HTML::link in HtmlBuilder.php with a 5th parameter "$nested"
HTML::macro('link_nested', function($url, $title = null, $attributes = array(), $secure = null, $nested = null) 
{
	$url = URL::to($url, array(), $secure);

	$title = $title ?: $url;

	if (empty($attributes))	$attributes = null;

	return '<a href="'.$url.'"'.HTML::attributes($attributes).'>'.$nested.''.HTML::entities($title).'</a>';
});

HTML::macro('clever_link', function($route, $text) {	
	if( Request::path() == $route ) {
		$active = "class = 'active'";
	}
	else {
		$active = '';
	}
 
  return '<li ' . $active . '>' . link_to($route, $text) . '</li>';
});