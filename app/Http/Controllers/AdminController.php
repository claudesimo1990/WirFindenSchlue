<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function home(){
        return view('admin.home');
    }
    public function viewuser(){
        return view('admin.users');
    }

    public function allusers(){
        return User::all();
    }
    public function store(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->uiid = $request->UID;
        $user->password = $user->setPasswordAttribute($request->name);


        $user->save();
    }

}
