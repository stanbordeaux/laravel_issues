<?php

class IssuesController extends BaseController {

	public function show($id)
	{
		
		$user = User::with('issues')->whereId($id)->first();
		
		return View::make('issues.show', compact('user'));
// 		return $user;
	}
}