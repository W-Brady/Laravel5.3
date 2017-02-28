<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return realpath(base_path('resources/views'));
    return view('welcome');
});

// Route::get('users', ['uses' => 'UsersController@index']);

// ctrl ? to comment out in atom
Route::get('users', function() {
  $users = [
      '0' => [
        'first_name' => 'William',
        'last_name' => 'Brady',
        'location' => 'USA'
    ],
    '1' => [
        'first_name' => 'John',
        'last_name' => 'Smith',
        'location' => 'USA'
    ]
  ];
  return $users;
});
