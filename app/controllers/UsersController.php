<?php

class UsersController extends BaseController {

	public function create()
	{
		return View::make('users.create');
	}

	public function client()
	{
		return View::make('users.client');
	}
		
	public function admin()
	{
		$meetingAccepted = Meeting::where('accepted', '=', 1)->get()->count();
		return View::make('admin.admin')->with('meetingAccepted',$meetingAccepted);
	}
	
	
	public function bookK()
	{
		return View::make('bookkeeper.bookK');
	}
	

	public function updateProfile()
	{

		return View::make('users.updateProfile');
	}
	public function profile($id)
	{
		$user = User::find($id);
		
		$clients = Client::all();
		$companies = Company::all();
		return View::make('client.profile')->with('user', $user)->with('clients', $clients)->with('companies', $companies);

	}

	public function cProfile($id)
	{
		$user = User::find($id);
		$clients = Client::all();
		$companies = Company::all();
		//$clients = Client::all();

		return View::make('bookKeeper.cProfile')->with('user', $user)->with('clients', $clients)->with('companies', $companies);
	}

	public function deleteClient($id)
	{
		//User::find($id)->delete();
		User::destroy($id);
		return Redirect::to('viewC')->withMessage('User successfully deleted');
	}

	public function deleteBookk($id)
	{
		//User::find($id)->delete();
		User::destroy($id);
		return Redirect::to('viewBC')->withMessage('User successfully deleted');
	}

	public function deleteCRM($id)
	{
		//User::find($id)->delete();
		User::destroy($id);
		return Redirect::to('viewCRM')->withMessage('User successfully deleted');
	}

	
	
	public function viewProfile()
	{
		$user = User::all();
		$clients = Client::all();
		$companies = Company::all();
		return View::make('bookKeeper.viewProfile')->with('user', $user)->with('clients', $clients)->with('companies', $companies);
	}

	public function upload()
	{

		return View::make('bookkeeper.upload');
	}

	public function retrieve()
	{

		return View::make('bookkeeper.retrieve');
	}

	public function request()
	{
		$meetings = Meeting::all();
		$clients = Client::all();
		return View::make('client.request')->with('meetings', $meetings)->with('clients',$clients);
	}

	
	
	public function accept($id)
	{
		$meetings = Meeting::find($id);
		$meetings->accepted = 1;
		$meetings->save();
		return Redirect::to('request')->withMessage('success', 'Meeting request accepted');

	}

	public function decline($id)
	{
		$meetings = Meeting::find($id);
		$meetings->accepted = 0;
		$meetings->save();
		return Redirect::to('request')->withMessage('success', 'Meeting request declined');
	}
	



	public function fileUser()
	{
		
		$email = Input::get('email');
		$user = User::where('email', '=', $email)->first();
		$clients = Client::all();
	if(!User::where('email', '=', $email)->get())
		{
			return Redirect::route('retrieve');
		}
		else {
			foreach ($clients as $client) {
				if ($client->user_id == $user->id)
				{
					return View::make('bookKeeper.upload')->with('client', $client);
				}
			}
		}
	}


	public function uploadFile()
	{
		$validate = Validator::make(Input::all(), array(
			'attachment_type' => 'required',
			'uploaded_by' => 'required'
		));

		if ($validate->fails()) {
			dd($validate->errors()->all());
			return Redirect::route('bookKeeper.bookK')->withErrors($validate)->withInput();
		} else {
			$attachment = new Attachment();
			$attachment->client_id = Input::get('client_id');
			$attachment->uploaded_by = Input::get('uploaded_by');
			$file = Input::file('attach');
			$filename['attachment'] = 'files/' . time() . $file->getClientOriginalName();
			$file->move(public_path('files/'), $filename['attachment']);
			$attachment->attachment_type = $file->getClientOriginalName();
			$attachment->attachment_url = url('files/' . $filename['attachment']);
			$attachment->save();
		}
			return Redirect::to('home')->with('Files Uploaded');

	}


	public function storeProfile()
	{
		$id = Input::get('user_id');
		//$client = Client::find($id);

		$client = new Client();
		$client->user_id = $id;
		$client->phoneNumber_1 = Input::get('phoneNumber_1');
		$client->phoneNumber_2 = Input::get('phoneNumber_2');
		$client->save();
		$clients = Client::all();
		foreach ($clients as $client)
		{
			if($client->user_id == $id) {
				$company = new Company();
				$company->client_id = $client->id;
				$company->company_name = Input::get('company_name');
				$company->company_address = Input::get('company_address');
				$company->company_details = Input::get('company_details');
				$company->save();
				
				return Redirect::to('profile');
			}
		}


	}

	/**
	 * Store a newly created user in storage.
	 *
	 * @return Response
	 */
	
	public function Register()
	{
		return View::make('users.Register');
	}

	public function meeting()
	{
		return View::make('users.meeting');
	}

	

	public function attachNotes($id)
	{
		$meeting = Meeting::find($id);
		//dd($meeting);
		return View::make('users.notes')->with('meeting', $meeting);
	}
	
	public function storeNote()
	{
		$validate = Validator::make(Input::all(), array(
			'notes_description' => 'required',
		));
		if($validate->passes())
		{
			$clients = Client::all();
			$meetings  = Meeting::all();
			$note = new Note();
			$note->meet_id = Input::get('meet_id');
			$note->notes_description = Input::get('notes_description');
			$note->created_by = Input::get('created_by');
			if($note->save())
			{
				return View::make('admin.meetings')->with('clients',$clients)->with('meetings', $meetings)->withMessage('success','A note has been added ro this meeting');
			}
			else
			{
				return View::make('admin.meetings')->with('meetings', $meetings)->withErrors();
			}
		}
		else
		{
			$meeting = Meeting::find(Input::get('meet_id'));
			Input::flash();
			return View::make('users.notes')->with('meeting', $meeting)->withErrors($validate);
		}
	}

	//this function shows details of meetings and notes attached to it.
	public function viewMeetingNotes()
	{
		$meetings = Meeting::all();
		$notes = Note::all();
		return View::make('admin.viewMeetNote')->with('meetings',$meetings)->with('notes',$notes);
	}
	


	public function viewC()
	{
			$users = User::where('roles_id','=', 4)->get();
			return View::make('admin.viewC')->withUsers($users);

	}
	public function viewBC()
	{
		$users = User::where('roles_id','=', 3)->get();
		return View::make('admin.viewBC')->withUsers($users);

	}

	public function viewCRM()
	{
		$users = User::where('roles_id','=', 2)->get();
		return View::make('admin.viewCRM')->withUsers($users);

	}

	public function Login()
	{
		return View::make('users.Login');
	}
	public function getLogout()
	{
		Auth::logout();
        Session::flush();
		return Redirect::route('home');
	}

	
    public function LoginUser()
	{
	    $email = Input::get('email');
        $password = Input::get('password');
       
        if(Auth::attempt(array('email' => $email, 'password' => $password),true))
        {
             $user = Auth::user();

        	 if ( Auth::user()->roles_id == 4)
        	 {
        	 	 return View::make('users.client')->withUser($user);
        	 }
			elseif (Auth::user()->roles_id == 1)
			{
				return View::make('admin.admin')->withUser($user);
			}
			 elseif ( Auth::user()->roles_id == 3)
			{
				return View::make('admin.admin')->withUser($user);
			}
           
           
        } 
        else
        {
        	//return Redirect::route('Login')->with('fail','Invalid username or password');
        }
        
    }	
    
	
	
 	public function storeUser()
	{

		$validate = Validator::make(Input::all(), array(
			'first_name' => 'min:3|Alpha|required',
			'other_names' => 'min:3|required',
			'email' => 'Required|Between:3,64|Email|Unique:users',
			'password' => 'Required|AlphaNum|Confirmed',
		));

		if($validate->fails())
		{
			return Redirect::route('Register')->withErrors($validate)->withInput();
		}
		else
		{

			$user = new User;
			$user->first_name = Input::get('first_name');
			$user->other_names = Input::get('other_names');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user['roles_id'] = 4;
			$user->save();

		Mail::send('users.mails.welcome', array('first_name'=>Input::get('first_name')), function($message){
			$message->to(Input::get('email'), Input::get('first_name').' '.Input::get('other_names'))->subject('Welcome to Sci Accounting Hub!');
		});

		}
		if($user->save())
		{
			return View::make('users.Login')->withMessage('You have been registered successfully. You may now login');
		}


	}
	
	public function addBookk()
	{
		return View::make('admin.addBookk');
	}

	public function storeBookk()
	{
		$validate = Validator::make(Input::all(), array(
			'first_name' => 'min:3|Alpha|required',
			'other_names' => 'min:3|required',
			'email' => 'Required|Between:3,64|Email|Unique:users',
			'password' => 'Required|AlphaNum',
		));

		if ($validate->fails()) {
			return Redirect::to('addBookk')->withErrors($validate)->withInput();
		} else {

			$user = new User;
			$user->first_name = Input::get('first_name');
			$user->other_names = Input::get('other_names');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->roles_id = Input::get('roles_id');
			$user->save();


			Mail::send('users.mails.welcome', array('first_name'=>Input::get('first_name')), function($message){
				$message->to(Input::get('email'), Input::get('first_name').' '.Input::get('other_names'))->subject('Welcome to Sci Accounting Hub!');
			});

		}
		if($user->save())
		{
			return View::make('admin.addBookk')->withMessage('success','You have successfully registered a new user');
		}
	}
	
	public function invite()
	{
		return View::make('admin.invite');
	}

	public function sendInvite()
	{
		$validate = Validator::make(Input::all(), array(
			'name' => 'required',
			'email' => 'Required|Email',

		));
       if($validate->fails()){
		   return Redirect::to('invite')->withErrors($validate)->withInput();
	   } else {

		Mail::send('users.mails.invitation', array('name'=>Input::get('name')), function($message){
			$message->to(Input::get('email'), Input::get('name'))->subject('An invitation to sign up on Sci Accounting Hub!');
		});

		   return View::make('admin.invite')->with('success','Invitation sent');
	   }


	}


	

	/**
	 * Display the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::findOrFail($id);

		return View::make('users.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);

		return View::make('users.edit', compact('user'));
	}

	/**
	 * Update the specified user in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::findOrFail($id);

		$validator = Validator::make($data = Input::all(), User::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$user->update($data);

		return Redirect::route('users.index');
	}



}
