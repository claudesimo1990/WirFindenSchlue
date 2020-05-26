<?php

namespace App\Http\Controllers;

use App\Mail\AddUserCredentials;
use App\Mail\SendCredentials;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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
    public function update(Request $request){

        $validatedData = $request->validate([
            'UID' => 'required|max:255',
        ]);

        $item = User::find($request->get('id'));

        $item->UID = $request->get('UID');
        $item->email = $request->get('email');
        $item->name = $request->get('name');

        $item->password = Hash::make($request->get('UID'));

        $item->save();

        //dd($item->email);

        Mail::to($item->email)->send(new SendCredentials($item));
    }

}
