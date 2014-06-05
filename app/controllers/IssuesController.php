<?php

class IssuesController extends BaseController {

	public function index()
	{
		//get all the issues
		$issues = Issue::with('user')->get();
		
		//return View::make('testview')->with('issues', $issues);
		//return View::make('testview', ['issues', $issues]);
		//return View::make('testview', compact('issues'));

		// return $issues;
		return View::make('issues.index', compact('issues'));

	}

	public function show($id)
	{
	$user = User::with('issues')->whereUsername($username)->first();

	$issues = $user->issues;

		return View::make('issues.show', compact('issues', 'user'));
	}

	public function showUser($id)
	{
		// $this->id = $id;
		// $issue = Issue::with(array('user' => function($query)
		// {
		// 	$query->where('id', '=', $this->id);
		// }))->get();
		// // return $issue;
		$user = User::where('id', '=', $id)->get();
		return View::make('issues.user', compact('user'));
		
	}	
}