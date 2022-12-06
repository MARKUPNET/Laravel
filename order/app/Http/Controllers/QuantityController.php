<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Item;
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
    public function update(Request $request, $id)
    {

        $inputs = $request->all();

        foreach( $inputs as $key => $value ){


            if(strpos($key,'item_id_') !== false){

                $quantity_id = str_replace('item_id_', '', $key);

                $quantity = Quantity::find($quantity_id);
                $quantity->quantity = $value;
                $quantity->save();
            }
        }

        return redirect()->route('order.show', $id)
            ->with('success', '登録しました。');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quantity  $quantity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quantity $quantity, $id)
    {
        $quantity->delete();
        return redirect()->route('quantity.edit', $id)
            ->with('success', '削除しました。');
    }
}
