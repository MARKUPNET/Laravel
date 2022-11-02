<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guests = Guest::all();
        return view('/admin/guest/index', compact('guests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/guest/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'phone'     => 'required',
            'email'     => 'required',
        ]);

        $guest = new Guest;
        $guest->name      = $request->input(["name"]);
        $guest->phone     = $request->input(["phone"]);
        $guest->email     = $request->input(["email"]);
        $guest->save();

        return redirect()->route('guest.index')
            ->with('success', '登録しました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function show(guest $guest)
    {
        return view('/admin/guest/show', compact('guest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function edit(guest $guest)
    {
        return view('/admin/guest/edit', compact('guest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, guest $guest)
    {
        $request->validate([
            'name'      => 'required',
            'phone'      => 'required',
            'email'      => 'required',
        ]);

        $guest->name      = $request->input(["name"]);
        $guest->phone     = $request->input(["phone"]);
        $guest->email     = $request->input(["email"]);
        $guest->save();

        return redirect()->route('guest.index')
            ->with('success', '編集しました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function destroy(guest $guest)
    {
        $guest->delete();
        return redirect()->route('guest.index')
            ->with('success', '削除しました。');
    }
}
