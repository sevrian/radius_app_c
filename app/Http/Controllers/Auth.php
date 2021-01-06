<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Auth extends Controller
{
    public function login()
    {
        return view('theme.login');
    }

    public function postlogin(Request $request)
    {
       dd( $users = DB::table('radcheck')->select('username','value')->where('attribute', 'Cleartext-Password')->get());

        $request->validate(


            [
                'username' => 'required',
                'value' => 'required'
            ]


        );

        $username = $request->input('username');
        $pass = $request->input('value');



        if ($users->username == $username and $users->value == $pass) {
            return redirect('/dashboard');
        } else {

            return redirect('/');
        }
    }
}
