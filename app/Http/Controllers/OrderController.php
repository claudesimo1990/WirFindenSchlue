<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.orders');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'anrede' => 'required',
            'vorname' => 'required',
            'nachname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'StraßeHausnummer' => 'required',
            'Ort' => 'required',
            'PLZ' => 'required',
            'farbe' => 'required',
        ]);
        //store in Database

        $order = new Order();
        $order->anrede = $request->anrede;
        $order->vorname = $request->vorname;
        $order->nachname = $request->nachname;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->StraßeHausnummer = $request->StraßeHausnummer;
        $order->Ort = $request->Ort;
        $order->PLZ = $request->PLZ;
        $order->farbe = $request->farbe;

        //create new user
        $user = new User();
        $user->name = $request->vorname;
        $user->email = $request->email;
        $user->UID = '';
        $user->password = Hash::make('');
        $user->save();


        if ($request->paypal) {
            $order->paypal = $request->paypal;
        } else {
            $order->bankname = $request->bankname;
            $order->bic = $request->Bic;
            $order->iban = $request->Iban;
        }

        $order->id = $user->id;
        $order->save();

        return url('/anmeldung');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $order = Order::find($request->id);

        $order->anrede_2 = $request->anrede;
        $order->vorname_2 = $request->vorname;
        $order->nachname_2 = $request->nachname;
        $order->email_2 = $request->email;
        $order->phone_2 = $request->phone;
        $order->stadt_2 = $request->stadt;
        $order->strasse_2 = $request->straße;
        $order->plz_2 = $request->plz;

        $order->save();

        return url('/')."/profile/$request->id";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->get('id');
        Order::find($id)->delete();
    }
}
