<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ChangePasswordRequest;


class AuthController extends Controller
{
    public function login()
    {
        return view('theme.login');
    }

    public function postlogin(Request $request)
    {
        //  DB::table('permanent_users')->where('status','1')->get();
        if (Auth::attempt($request->only('username', 'password'))) {
            return redirect('/dashboard');
        }
        return redirect('/login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function ubahpass()
    {
        return  view('client.ubahpass2');
    }
    public function updatePassword(ChangePasswordRequest $request)
    {
        $request->user()->update([
            'password' => bcrypt($request->get('password'))
        ]);

        return redirect::to('https://poltekkesjogja.ac.id/');
    }
}
