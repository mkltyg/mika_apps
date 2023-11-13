<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tayag_user;

class AuthController extends Controller
{
    function performRegister(Request $request ){
        $request -> validate([
            'reg_full_name'=> 'required | max:50 | min:5',
		    'reg_email' => 'required | email | max:50 | min:5',
		    'password' => 'required | max:50 | min:5 | confirmed'
        ]);

        $tayag_user = new al_user();
        $tayag_user->full_name = $request->input('reg_full_name');
        $tayag_user->email = $request->input('reg_email');
        $tayag_user->password = $request->input('password');
        $tayag_user->date_created = date('Y-m-d');
        $tayag_user->date_modified = date('Y-m-d');

        return response ('success!');
    }
}
