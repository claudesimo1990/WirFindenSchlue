<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{

    public function login(){
        return view('anmeldung');
    }

    public function postdata(Request $request){

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return \Redirect::route('profile',['id'=> Auth::id()]);
        }else{
            return back()
                ->withErrors(['email' => 'Credentials not match !!'])
                ->withInput();
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
