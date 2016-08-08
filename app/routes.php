<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',array('uses' => 'HomeController@home', 'as' => 'home'));




Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::get('client', 'UsersController@client');




//Login and register routes

    Route::get('Register', array('as' => 'Register', 'uses' => 'UsersController@Register'));
    Route::get('Login', array('as' => 'Login', 'uses' => 'UsersController@Login'));
    Route::get('addBookk', 'UsersController@addBookk');



    Route::post('Register', array('as' => 'PostRegister', 'uses' => 'UsersController@storeUser'));
    Route::post('Login', array('as' => 'PostLogin', 'uses' => 'UsersController@loginUser'));
    Route::post('storeBookkeepr', array('uses' => 'UsersController@storeBookk', 'as' => 'storeBookk'));



Route::get('invite', 'UsersController@invite');
Route::post('sendInvite', array('uses' => 'UsersController@sendInvite', 'as' => 'sendInvite'));

Route::get('dashboard', 'UsersController@dashboard');

Route::get('getLogout',array('uses' => 'UsersController@getLogout', 'as' => 'getLogout' ));

Route::get('admin', 'UsersController@admin');
Route::get('calendar', 'UsersController@calendar');

Route::get('request', 'UsersController@request');
Route::get('accept/{id}',array('uses' => 'UsersController@accept', 'as' => 'accept'));
Route::get('decline/{id}',array('uses' => 'UsersController@decline', 'as' => 'decline'));

Route::get('deleteClient/{id}',array('uses' => 'UsersController@deleteClient', 'as' => 'deleteClient'));
Route::get('deleteBookk/{id}',array('uses' => 'UsersController@deleteBookk', 'as' => 'deleteBookk'));
Route::get('deleteCRM/{id}',array('uses' => 'UsersController@deleteCRM', 'as' => 'deleteCRM'));

Route::get('deleteMeeting/{id}',array('uses' => 'meetingController@deleteMeeting', 'as' => 'deleteMeeting'));

Route::get('notes/{id}', 'UsersController@attachNotes');
Route::get('notes', 'UsersController@notes');
Route::post('storeNote', array('uses' => 'UsersController@storeNote', 'as' => 'storeNote'));


Route::get('updateProfile', 'UsersController@updateProfile');
Route::post('updateProfile',array( 'uses' => 'UsersController@storeProfile', 'as' => 'storeProfile'));
Route::get('profile/{id}', array('uses' => 'UsersController@profile', 'as' => 'profile'));

Route::get('viewProfile', 'UsersController@viewProfile');
Route::get('cProfile/{id}',array('uses' => 'UsersController@cProfile', 'as' => 'cProfile'));


Route::get('bookK', 'UsersController@bookK');
Route::get('upload', 'UsersController@upload');
Route::get('viewC', 'UsersController@viewC');
Route::get('viewBC', 'UsersController@viewBC');
Route::get('viewCRM', 'UsersController@viewCRM');

Route::get('/meetingRequest/{id}', 'meetingController@meetingRequest');
Route::post('meetingRequest',array('uses' => 'meetingController@meetingPost', 'as' => 'meetingPost'));

Route::get('meetings', 'meetingController@meetings');

Route::get('retrieve/{id}', 'UsersController@retrieve');
Route::post('fileUser', array('uses' => 'UsersController@fileUser', 'as' => 'fileUser'));
Route::get('upload', 'UsersController@upload');
Route::post('uploadFile', array('uses' => 'UsersController@uploadFile', 'as' => 'uploadFile'));



Route::get('remind',array('uses' => 'RemindersController@getRemind' ,'as' => 'getRemind'));
Route::post('remind',array('uses' => 'RemindersController@postRemind' ,'as' => 'postRemind'));
Route::get('reset/{token}',array('uses' => 'RemindersController@getReset' ,'as' => 'getReset'));
Route::post('reset/{token}',array('uses' => 'RemindersController@postReset' ,'as' => 'postReset'));




Route::group(array('prefix' => 'admin'), function(){
    Route::get('adminLogin', 'admin.AdminAuthController@adminLogin');
    Route::post('adminLogin', 'admin.AdminAuthController@adminLogin');
    Route::get('adminRegister', 'admin.AdminAuthController@adminRegister');
    Route::post('adminRegister', 'admin.AdminAuthController@adminStore');


});


