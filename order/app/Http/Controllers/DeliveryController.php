<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Delivery;

class DeliveryController extends Controller
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
        $delivery = Delivery::where('id', $id)->first();

        return view('/admin/delivery/edit', compact('delivery', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Delivery $delivery)
    {
        $delivery->status    = $request->input(["status"]);

        if( $delivery->status == 0 ){

            $delivery->name    = null;
            $delivery->kana    = null;
            $delivery->phone   = null;
            $delivery->zip     = null;
            $delivery->pref    = null;
            $delivery->addr    = null;
            $delivery->addr2    = null;

        }else{

            $delivery->name    = $request->input(["name"]);
            $delivery->kana    = $request->input(["kana"]);
            $delivery->phone   = $request->input(["phone"]);
            $delivery->zip     = $request->input(["zip"]);
            $delivery->pref    = $request->input(["pref"]);
            $delivery->addr    = $request->input(["addr"]);
            $delivery->addr2    = $request->input(["addr2"]);

        }

        $delivery->save();

        return redirect()->route('delivery.edit', $delivery->id)
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
