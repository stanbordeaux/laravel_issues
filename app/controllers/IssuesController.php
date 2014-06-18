<?php

class IssuesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /issues
	 *
	 * @return Response
	 */
	public function index()
	{
			
		//check authorisation 
		if (Auth::guest())
		{
			return Redirect::to('/login');
		}
		else	
		{
		//get all the issues with relevant relationships	
		$data['issues'] = Issue::with('user', 'status', 'priority')->orderBy('updated_at', 'desc')->get();
		$data['title'] = "All issues";
	
		//counts of issue status for reporting details
	  $data['issueCount'] = Issue::count();
		$data['activeCount'] = Issue::whereStatusId(1)->count();
		$data['closedCount'] = Issue::whereStatusId(2)->count();
		$data['unassignedCount'] = Issue::whereStatusId(3)->count();
		$data['type'] = 0;
		
	  	//calculate percentage of issue status 
		$data['activePercent'] =( $data['activeCount'] / $data['issueCount']) * 100;
		$data['closedPercent'] =( $data['closedCount'] / $data['issueCount']) * 100;
		$data['unassignedPercent'] =( $data['unassignedCount'] / $data['issueCount']) * 100;
		
		//get the view
		return View::make('issues.index', $data);
		}
				    
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /issues/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//get the add issues form
		$users = User::lists('username', 'id');
		$priorities = Priority::lists('priority', 'id');
		$status = Status::lists('status', 'id');
		return View::make('issues.create', compact('users', 'priorities', 'status'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /issues
	 *
	 * @return Response
	 */
	public function store()
	{
		
		//validate
		$rules = ['title' => 'required', 'user_id' => 'required'];
		$validator = Validator::make(Input::all(), $rules);
		
		if ($validator->fails())
		{
			return Redirect::to('issues/create')->withErrors($validator)->withInput(Input::all());
		}
		else 
		{
			//save the issue to the database
			$issue = new Issue;
			$issue->title = Input::get('title');
			$issue->desc  = Input::get('desc');
			$issue->user_id = Input::get('user_id');
			$issue->priority_id = Input::get('priority_id');
			$issue->status_id = Input::get('status_id');
			$issue->save();
			
			//redirect
			Session::flash('message', 'Successfully added and asigned Issue');
			return Redirect::to('issues');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /issues/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
// 		$user = User::with('issues')->whereId($id)->first();
		
// 		return View::make('issues.show', compact('user'));
	}
	
	/**
	 * Show the form for editing the specified resource.
	 * GET /issues/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$issue = Issue::find($id);
		$users = User::lists('username', 'id');
		$priorities = Priority::lists('priority', 'id');
		$status = Status::lists('status', 'id');
		
		return View::make('issues.edit', compact('issue', 'users', 'priorities', 'status'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /issues/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		// validate
		$rules = array(
			'title'       => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('issues/' . $id . '/edit')
				->withErrors($validator);

		} else {
			//update
			$issue = Issue::find($id);
			$issue->title = Input::get('title');
			$issue->desc  = Input::get('desc');
			$issue->user_id = Input::get('user_id');
			$issue->priority_id = Input::get('priority_id');
			$issue->status_id = Input::get('status_id');
			$issue->save();

			// redirect
			Session::flash('message', 'Successfully updated issue!');
			return Redirect::to('issues');
		}
		
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /issues/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		
	}
	
	public function issueStatus($id)
	{

// 				$data['issues'] = Issue::with('user', 'status', 'priority')->orderBy('updated_at', 'desc')->get();
// 				$data['title'] = "All issues";

				//counts of issue status for reporting details
				$data['issueCount'] = Issue::count();
				$data['activeCount'] = Issue::whereStatusId(1)->count();
				$data['closedCount'] = Issue::whereStatusId(2)->count();
				$data['unassignedCount'] = Issue::whereStatusId(3)->count();
				

					//calculate percentage of issue status 
				$data['activePercent'] =( $data['activeCount'] / $data['issueCount']) * 100;
				$data['closedPercent'] =( $data['closedCount'] / $data['issueCount']) * 100;
				$data['unassignedPercent'] =( $data['unassignedCount'] / $data['issueCount']) * 100;
			switch ($id) 
			{
				case 1:

				$data['issues'] = Issue::with('user', 'status', 'priority')->whereStatusId(1)->orderBy('updated_at', 'desc')->get();
					$data['title'] = "All active issues";
				$data['type'] = 1;
					break;

				case 2:

				$data['issues'] = Issue::with('user', 'status', 'priority')->whereStatusId(2)->orderBy('updated_at', 'desc')->get();
					$data['title'] = "All closed issues";
				$data['type'] = 2;
					break;

				case 3:

				$data['issues'] = Issue::with('user', 'status', 'priority')->whereStatusId(3)->orderBy('updated_at', 'desc')->get();
					$data['title'] = "All unassigned issues";
				$data['type'] = 3;
			
					break;
				
						
		}
			return View::make('issues.index', $data);
		
		
		
	}

}