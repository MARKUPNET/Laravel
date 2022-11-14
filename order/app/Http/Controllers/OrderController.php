<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Delivery;
use App\Models\Guest;
use App\Models\Item;
use App\Models\Noshi;
use App\Models\Order;
use App\Models\Product;
use App\Models\Quantity;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders      = Order::with(['products', 'noshis', 'deliveries', 'guests'])->get();
        return view('admin/order/index', compact( 'orders' ))
            ->with('page_id', request()->page_id);
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
    public function show(Order $order)
    {
        if( $order->noshis->status == 0 ){
            $order->noshis->status_name = '無し';
        }else{
            $order->noshis->status_name = '有り';
        }

        if( $order->deliveries->status == 0 ){
            $order->deliveries->status_name = '無し';
        }else{
            $order->deliveries->status_name = '有り';
        }

        $quantities = Quantity::where('orders_id', $order->id)->get();

        return view('/admin/order/show', compact('order', 'quantities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
        return redirect()->route('admin.index')
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
