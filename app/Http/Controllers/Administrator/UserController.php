<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Retrieving All users
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => 'Jhon Doe', 'age' => 20, 'gender' => 'Male'],
            ['id' => 2, 'name' => 'Jane Doe', 'age' => 18, 'gender' => 'Female'],
        ];

        return view('admin.users.list', compact('users'));
    }
    //Viewing specific user
    public function show($id)
    {
        $users = [
            ['id' => 1, 'name' => 'Jhon Doe', 'age' => 20, 'gender' => 'Male'],
            ['id' => 2, 'name' => 'Jane Doe', 'age' => 18, 'gender' => 'Female'],
        ];

        return view('admin.users.show');
    }

    //showing create user form
    public function create()
    {

    }

    //showing edit user form
    public function edit()
    {

    }

    //storing users to db
    public function store()
    {

    }

    public function update()
    {

    }
}
