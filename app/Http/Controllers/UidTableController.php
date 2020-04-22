<?php

namespace App\Http\Controllers;

use App\UidTable;
use Illuminate\Http\Request;

class UidTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uids = UidTable::all();
        return view('admin.uids', compact('uids'));
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
            'content' => 'required|unique:uid_tables|max:255',
        ]);

        $id = new UidTable();
        $id->content = $request->get('content');
        $id->save();
        return back();

        //return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UidTable  $uidTable
     * @return \Illuminate\Http\Response
     */
    public function show(UidTable $uidTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UidTable  $uidTable
     * @return \Illuminate\Http\Response
     */
    public function edit(UidTable $uidTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UidTable  $uidTable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UidTable $uidTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UidTable  $uidTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(UidTable $uidTable)
    {
        //
    }
}
