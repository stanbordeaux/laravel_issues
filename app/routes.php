<?php
// Event::listen('illuminate.query', function($query){
// 	var_dump($query);
// });
// Route::resource('sessions', 'SessionsController');

// Route::resource('registration', 'RegistrationController' );


// Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

// Route::get('/register', 'RegistrationController@create');

// Route::get('/login', 'SessionsController@create');

// Route::post('/store', 'RegistrationController@store');

// Route::get('/issues/{id}', 'IssuesController@show');

// Route::get('/user/{id}', 'IssuesController@showUser');

// Route::get('logout', 'SessionsController@destroy');

// Route::get('/admin', 'AdminController@index');

// Route::get('/', function()
// {
// 	$issues = Issue::with('user')->get();

// 	return View::make('tests.index', compact('issues'));
// });

// Route::get('issues/{id}', function($id)
// {
// 	$issue = Issue::find($id);

// 	return View::make('tests.show', compact('issue'));
// });

// Route::get('{username}/issues/{id}', function($username, $id)
// {
// 	$user = User::with('issues')->whereUsername($username)->first();

// 	$issues = $user->issues;

// 	return View::make('tests.show', compact('user', 'issues'));
// });

// Route::get('{username}/issues', function($username)
// {
	
// 	$user =  User::whereUsername($username)->first();
	

// foreach ($user->issues as $i)
// 	{{echo $i->user->username.'<br';}}

// 	// return $user->issues;
// 	//return $user->id;
// 	// return Issue::whereUserId($user->id)->get();

// 	// return Issue::find(11)->user;
// });

// Route::get('{username}', function($username)
// {
// 	//$user =  User::whereUsername($username)->first();
// 	$users = User::all();

// 	return View::make('tests.user', compact('users'));
// });

Route::get('/', function()
{
	// $user = User::with('issues')->whereId(3)->first();
	// $issues = $user->issues;
	// echo $user->username;
	// foreach($issues as $i)
	// {
	// 	echo  '<br>'.$i->title.'<br>'.$i->desc;
	// }

	// return $issues->user->username;
	// $issues = Issue::with('user')->whereUserId(11)->get();
   
 //   $issues->sortBy('title')->all();
 //   return $issues;
	// foreach($issues as $i)
	// {
	// 	echo $i->user->username.'<br>'.$i->title.'<br>';
	// }

	// $issues = User::find(1)->issues;

	// foreach($issues as $i)
	// {
	// 	echo $i->title .'<br>'.$i->desc.'<br>';
	// }

	// 

	$users = User::all();
	$users->sortBy('username')->all();
	return $users;
});