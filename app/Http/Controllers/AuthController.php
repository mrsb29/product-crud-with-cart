<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {

          $data = $request->only('name', 'password');
             $login_data=User::where('name',$data)->first();
        if (Auth::attempt($data)) {
            if ($login_data->user_type==2) {
                return redirect('/dashboard');
            }
           else
           {
            return redirect('/front-end');
           }
        } else {
            return redirect('/login_page')->with('msg', 'Sorry, credentials do not match');
        }
    }

    public function logout(Request $request)
    {
        Session::flush('message', 'flush data');
        Auth::logout();
        return redirect('/login_page');
    }
}
