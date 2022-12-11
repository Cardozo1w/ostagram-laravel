<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index () {
        return view('auth.register');
    }

    public function store(Request $request){
        // dd($request->get('name'));

        //Validate
        $this->validate($request,[
            'name' => 'required|max:20',
            'username' => 'required|max:15|unique:users',
            'email' => 'required|email|unique:users|max:50',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password'
        ]);
    }
}
