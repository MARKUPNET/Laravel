<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Guest;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guest = Guest::where('id', $id)->first();

        return view('/admin/guest/edit', compact('guest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guest $guest)
    {
        $request->validate([
        ]);

        $guest->name    = $request->input(["name"]);
        $guest->kana    = $request->input(["kana"]);
        $guest->phone   = $request->input(["phone"]);
        $guest->zip     = $request->input(["zip"]);
        $guest->pref    = $request->input(["pref"]);
        $guest->addr    = $request->input(["addr"]);
        $guest->addr2   = $request->input(["addr2"]);
        $guest->email   = $request->input(["email"]);
        $guest->save();

        return redirect()->route('guest.edit', $guest->id)
            ->with('success', '登録しました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
