<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index () {
        return view('auth.register');
    }

    public function store(Request $request){

        $request->request->add(['username' => Str::slug($request->get('username'))]);

        //Validate
        $this->validate($request,[
            'name' => 'required|max:20',
            'username' => 'required|max:15|unique:users',
            'email' => 'required|email|unique:users|max:50',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password'
        ]);

        User::create([
            'name' => $request->get('name'),
            'username' => Str::slug($request->get('username')),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
        ]);

        //Auth user
        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('posts.index');

    }
}
