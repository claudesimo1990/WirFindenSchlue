<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
   public function home(){
       return view('welcome');
   }
   public function kontakt(){
       return view('kontakt');
   }
    public function bestellung(){
        return view('bestellung');
    }
    public function bestellungStore(Request $request){
        return $request;
    }
    public function anmeldung(){
        return view('anmeldung');
    }
    public function anmeldungStore(Request $request){
        return $request;
    }
}
