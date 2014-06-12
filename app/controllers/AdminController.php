<?php

class AdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		if (Auth::guest())
		{
			return Redirect::to('/login');
		}
		else
		{
			$data['issueCount'] = Issue::count();
			$data['issues'] = Issue::with('user')->orderBy('created_at', 'desc')->get();
			$data['activeCount'] = Issue::whereStatusId(1)->count();
			$data['fixedCount'] = Issue::whereStatusId(2)->count();
			$data['deferredCount'] = Issue::whereStatusId(3)->count();
			$data['unassignedCount'] = Issue::whereStatusId(4)->count();
			
			$data['activePercent'] =( $data['activeCount'] / $data['issueCount']) * 100;
			$data['fixedPercent'] =( $data['fixedCount'] / 30) * 100;
			$data['unassignedPercent'] =( $data['unassignedCount'] / 30) * 100;
			
// 			return 'active = ' .$activeCount;
			
// 			return $issues;
			
			return View::make('issues.index', $data);
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}