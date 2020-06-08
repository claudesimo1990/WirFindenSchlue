<?php

namespace App\Http\Controllers;

use App\Mail\SendCredentials;
use App\Message;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use MercurySeries\Flashy\Flashy;

class AppController extends Controller
{
   public function home(){
       //dd(Hash::make('admin1234'));
       return view('welcome');
   }

   public function kontakt(){
       return view('kontakt');
   }
   public function postmessage(Request $request){
       $validateData = $request->validate([
          'name' => 'required',
           'email' => 'required|email',
           'content' => 'required',
           'subject' => 'required',
       ]);

       $message = new Message();
       $message->name = $request->get('name');
       $message->email = $request->get('email');
       $message->subject = $request->get('subject');
       $message->content = $request->get('content');

       $message->save();
       
       Flashy::success('Ihre Nachricht wurde erfolreich versendet');


       return redirect('/');


   }

    public function bestellung(){
        return view('bestellung');
    }

    public function bestellungStore(Request $request){
       dd($request);
        //return $request;
    }

    public function update(Request $request){
        dd($request);
    }

    public function fetchAllData(){
       return order::all();
    }

    public function profile($id){
       $profile = Order::find($id);
       return view('dasboard',compact('profile'));
    }
    public function finder($uid){
        $pate = Order::find(User::where('UID',$uid)->first()->id);
        return view('finderpage',compact('pate'));
    }
}
