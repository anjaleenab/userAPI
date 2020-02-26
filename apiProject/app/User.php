<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Http\Controllers\UserController;


class User extends Model
{

    protected $table = 'users';

    /*
    *declares a primary key that is not assumed
    */
    protected $primaryKey = 'user_id';
    protected $fillable= ['first_name', 'last_name', 'email'];
}
