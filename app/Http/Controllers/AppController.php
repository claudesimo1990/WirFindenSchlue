<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AppController extends Controller
{
   public function home(){
       //dd(Hash::make('admin1234'));
       return view('welcome');
   }

   public function kontakt(){
       return view('kontakt');
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
}
