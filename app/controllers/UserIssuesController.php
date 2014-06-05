<?php 

class UserIssuesController extends BaseController {

	public function index($username)
	{
		$issues = User::whereUsername($username)->first()->issues;

		return View::make('issues.index', compact('issues'));
	}
}