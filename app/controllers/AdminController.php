<?php

class AdminController extends BaseController {

    public function storeUser()
    {
        $user = new User;
        $data = Input::all();
        $validator = Validator::make($data, User::$rules);
        $data['password'] = Hash::make($data['password']);
        $data['roles_id'] = 1;
        $user->fill($data);
        $user->save();

        if($user->save())
        {
            return View::make('users.Login')->withMessage('You have been registered successfully. You may now login');
        }
        else
        {
            // Redirect::route('Login')->with('fail','Invalid username or password');
            return Redirect::route('Register')->withErrors($validator)->withInput();
        }

    }

}