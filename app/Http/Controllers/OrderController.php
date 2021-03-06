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
     * @return \Illuminate\Contracts\Routing\UrlGenerator|string
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

        //create new user
        $user = User::create([
            'name' => $request->vorname,
            'email' => $request->email,
            'UID' => '',
            'password' => Hash::make('')
        ]);

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
        $order->user_id = $user->id;
        $order->save();

        if ($request->paypal) {
            $order->paypal = $request->paypal;
        } else {
            $order->bankname = $request->bankname;
            $order->bic = $request->Bic;
            $order->iban = $request->Iban;
        }

        if($order->paypal){ return url('/paypal');}
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
     * @param \Illuminate\Http\Request $request
     * @param \App\Order $order
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {
        $order = Order::find($request->id);

        if ($request->get('Firma_name') === 'IchFindeMeinem') {
            $order->status = 0;
            $order->save();
            return ;
        }

        if ($request->status == 'IFM') {
            $order->anrede_2 = $order->anrede;
            $order->vorname_2 = $order->vorname;
            $order->nachname_2 = $order->nachname;
            $order->email_2 = $order->email;
            $order->phone_2 = $order->phone;
            $order->stadt_2 = "nicht";
            $order->strasse_2 = "nicht";
            $order->plz_2 = "nicht";
            $order->status = 1;
        } else {
            $order->anrede_2 = $request->anrede;
            $order->vorname_2 = $request->vorname;
            $order->nachname_2 = $request->nachname;
            $order->email_2 = $request->email;
            $order->phone_2 = $request->phone;
            $order->stadt_2 = $request->Ort;
            $order->strasse_2 = $request->StraßeHausnummer;
            $order->plz_2 = $request->PLZ;
            $order->status = 1;
        }

        $order->save();
        return response()->json('success');
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
        User::find($id)->delete();
    }
}
