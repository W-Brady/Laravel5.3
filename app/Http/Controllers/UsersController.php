<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
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
      return view('admin.users.index', compact('users'));


    }
}
