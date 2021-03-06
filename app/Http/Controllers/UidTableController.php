<?php

namespace App\Http\Controllers;

use App\UidTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UidTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $uids = UidTable::all();
        return view('admin.uids', compact('uids'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return UidTable[]|\Illuminate\Database\Eloquent\Collection
     */
    public function geAllUids()
    {
        return  UidTable::all();

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
     * @return \Illuminate\Http\RedirectResponse
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
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required|max:255',
        ]);

        $item = UidTable::find($request->get('id'));

        $item->content = $request->get('content');
        $item->status = $request->get('status');

        $item->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\UidTable $uidTable
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Request $request)
    {
        $id = $request->get('id');
        UidTable::find($id)->delete();
    }
}
