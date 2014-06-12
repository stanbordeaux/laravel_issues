<?php

Route::resource('sessions', 'SessionsController');

Route::resource('issues', 'IssuesController');

// Route::resource('registration', 'RegistrationController' );


Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

// Route::get('/issues/{id}', 'IssuesController@show');
Route::get('/register', 'RegistrationController@create');

Route::get('/login', 'SessionsController@create');

Route::post('/store', 'RegistrationController@store');

Route::get('/users', 'UsersController@index');

Route::get('logout', 'SessionsController@destroy');

Route::get('/admin', 'IssuesController@index');

Route::get('issues', 'IssuesController@index');

Route::get('issues/create', 'IssuesController@create');

Route::get('issues/{id}/edit', 'IssuesController@edit');

Route::put('issues/{id}', 'IssuesController@update');

// Route::post('store', 'IssuesController@store');



// Route::get('/', function()
// {
// 	return User::all();
// });
// Event::listen('illuminate.query', function($query){
// 	var_dump($query);
// });

// Route::get('/', function(){	
// // 	$projects = Project::with('user')->get();
	
// 		$users = User::with('projects')->get();
	
// 	return View::make('test', compact('users'));
	
// });