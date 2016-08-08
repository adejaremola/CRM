<?php

class MeetingController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /meeting
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /meeting/create
	 *
	 * @return Response
	 */
	public function meetingRequest($id)
	{
		$user = User::find($id);

		return View::make('bookKeeper.meetingRequest')->with('user', $user);
	}

	public function deleteMeeting($id)
	{
		//User::find($id)->delete();
		Meeting::destroy($id);
		return Redirect::to('meetings')->withMessage('success','User successfully deleted');
	}

	public function meetings()
	{
		$meetings = Meeting::all();
		$clients = Client::all();
		return View::make('admin.meetings')->with('meetings', $meetings)->with('clients',$clients);
	}
	/**
	 * Store a newly created resource in storage.
	 * POST /meeting
	 *
	 * @return Response
	 */
	public function meetingPost()
	{
		$meeting = new Meeting();
		$clients = Client::all();

		foreach ($clients as $client) {

			if ($client->user_id == Input::get('userId'));
				{
				$meeting->client_id = $client->id;
			}
		}
		$bookKeepers = BookKeeper::all();

		foreach ($bookKeepers as $bookK){
			if ($bookK->user_id == Auth::User()->id) {
				$meeting->bookK_id = $bookK->id;
			}
	}
		$meeting->meeting_description = Input::get('meeting_description');
		if ($meeting->save())
		{
			return Redirect::to('viewC')->with('success','Meeting request sent');
		}
		else
		{
			return Redirect::route('meetingRequest')->with('fail','Please fill out the fields ');
		}
	}

	/**
	 * Display the specified resource.
	 * GET /meeting/{id}
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
	 * GET /meeting/{id}/edit
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
	 * PUT /meeting/{id}
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
	 * DELETE /meeting/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}