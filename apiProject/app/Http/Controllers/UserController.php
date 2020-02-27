<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Users;

use App\Http\Controllers\Controller;

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

        $firstName = $request->first_name;
        $lastName = $request->last_name;
        $email = $request->email;

        /*checks to make sure required fields are all there
        if anything is missing it lets the user know
        */

        if(!$firstName || !$lastName || !$email) {
            return 'First Name, Last Name, and Email are required!';
        }

        /*
        *sets the values of the model to the
        *corresponding values of the request object */

        $users->first_name = $firstName;
        $users->last_name = $lastName;
        $users->email = $email;

         //updates model

        $users->save();

        $resp= $users;

        //returns a view and passes it the newly created data

        return view('createUser') ->with('data', $resp);

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

        if(!$id) {
            return 'ID and Field are required';
        }

        //removes the brackets from around the $id variable
        $userID =substr($id, 1, -1);

        $field = null;
        // print_r($request->first_name);
        $users = new Users();
        $user = Users::find($userID);

        if(!$user) {
            return 'invalid User ID';
        }

        //conditionally sets the new field of the user

        if($firstName) {
            $user->first_name = $firstName;
        } else if ($lastName) {
            $user->last_name = $lastName;
        } else if ($email) {

            //checks to see if email is "valid"
            /*assumes valid emails only contain numbers, letters, an @ sign, periods, underscores, pluses
            and do not have spaces */

            if(!preg_match('\b[A-Z0-9._+-]+@[A-Z0-9.-]+\.[A-Z]{2,}\b', $email)) {
                return 'Invalid Email';
            }

            $user->email = $email;
        }

        $user->save();

        return view('updateUser')->with('data', $user);

    }

    /*
    * Responds to a GET Request to retrieve all of the Users from the USER table
    */

    public function getUsers()
    {

        $users = Users::all();

        return response()-> json($users);

    }

}
