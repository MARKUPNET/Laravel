<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Quantity;
use Illuminate\Http\Request;

class QuantityController extends Controller
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

        $order = Order::where('id', $id)->first();

        $quantities = Quantity::where('orders_id', $id)->get();

        return view('/admin/quantity/edit', compact('order', 'quantities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quantity $quantity)
    {
        //

        $request->validate([
            'quantity'      => 'required',
        ]);

        $quantity->orders_id     = $request->input(["orders_id"]);
        $quantity->items_id      = $request->input(["items_id"]);
        $quantity->quantity      = $request->input(["quantity"]);
        $quantity->save();

        return redirect()->route('quantity.edit')
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
