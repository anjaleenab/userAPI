<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    /*
    * When given a firstName, lastName, and an Email
    *It creates a User in the USER table
    */

    public function createUser($firstName, $lastName, $email) {

    }

    /*
    * Updates user in USER table when given a required id and any other table field
    */

    public function updateUser($id, $field)
    {

    }

    /*
    Responds to a GET Request to retrieve all of the Users from the USER table
    */

    public function getUsers()
    {

    }

}
