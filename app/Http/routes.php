<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    /**
     * creates a user when the route is hit
     */

//    $user = App\User::create([
//       'first_name' => 'john',
//        'last_name' => 'kagga',
//        'username'  => 'jokamjohn',
//        'email'     => 'johnagga@gmail.com',
//        'password'  => 'kags02',
//        'expires_at'=> \Carbon\Carbon::now()->addMonth(),
//        'explodes_at'=>\Carbon\Carbon::now()->addDay()
//
//    ]);
    return view('welcome');
});

\Illuminate\Support\Facades\Route::resource('user', 'UserController');
