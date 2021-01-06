<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Auth extends Controller
{
    public function postlogin(Request $request)
    {
        $this->validate(
            $request,

            ['username' => 'required'],

            ['password' => 'required']

        );

        $user = $request->input('username');
        $pass = $request->input('password');

        $users = DB::table('radcheck')->select('username','value')->where('attribute', 'Cleartext-Password')->pluck('username', 'value')->dd();


        if ($users->username == $user and $users->value == $pass) {

            return redirect('/dashboard');
        } else {

            return redirect('/');
        }
    }
}
