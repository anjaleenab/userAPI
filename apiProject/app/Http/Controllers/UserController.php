<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{

    /*
    * When given a first name, last name, and an Email
    * It creates a User in the USER table
    */

    public function createUser(Request $request)
    {
        $users = new User();

        $users->first_name = $request->first_name;
        $users->last_name = $request->last_name;
        $users->email = $request->email;

        $users->save();
        return response()-> json($users);
    }

    /*
    * Updates user in USER table when given a required id and any other table field
    */

    public function updateUser($id, $field)
    {

    }

    /*
    * Responds to a GET Request to retrieve all of the Users from the USER table
    */

    public function getUsers()
    {

    }

}
