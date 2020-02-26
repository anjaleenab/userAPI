<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Users;

class UserController extends Controller
{

    /*
    * When given a first name, last name, and an Email
    * It creates a User in the USER table
    */

    public function createUser(Request $request)
    {
        /*
        * creates a new User object model
        */
        $users = new Users();

        /*
        *sets the values of the model to the
        *corresponding values of the request object */

        $users->first_name = $request->first_name;
        $users->last_name = $request->last_name;
        $users->email = $request->email;

        // creates an XML document with the data that was passed

        $users->save();

        //returns response to user for confirmation

        return response()-> json($users);
    }

    /*
    * Updates user in USER table when given a required id and any other table field
    */

    public function updateUser(Request $request, $id)
    {
        //retrieves field for change and saves it into a variable

        $firstName = $request->first_name;
        $lastName = $request->last_name;
        $email = $request->email;

        //removes the brackets from around the $id variable
        $userID =substr($id, 1, -1);

        // print_r($request->first_name);
        $users = new Users();
        $user = Users::find($userID);

        //conditionally sets the new field of the user
        if($firstName) {
            $user->first_name = $firstName;
            print_r($request->first_name);
        } else if ($lastName) {
            $user->last_name = $lastName;
            print_r($lastName);
        } else if ($email) {
            $user->email = $email;
            print_r($email);
        }
        //else {
            //throw error here
       // }

        $user->save();





        //loop through each piece of data and print it individually
        print_r($user->first_name);
    }

    /*
    * Responds to a GET Request to retrieve all of the Users from the USER table
    */

    public function getUsers()
    {
        // $users = new User();

        $users = Users::all();

        return response()-> json($users);

    }

}
