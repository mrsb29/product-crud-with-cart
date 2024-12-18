<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth/registration');
    }

    public function store(Request $request)
    {
        $data=new User;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password = Hash::make($request->password);
        $data->save();
        return redirect('/login_page');
    }

    
}
