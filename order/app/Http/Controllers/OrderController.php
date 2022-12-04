<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index(Request $request)
    {
        $filter['pName'] = $request->input('pName');
        $filter['year'] = $request->input('y');
        $filter['month'] = $request->input('m');
        $filter['day'] = $request->input('d');

        $query = Order::with(['products', 'noshis', 'deliveries', 'guests']);

        if (isset($filter['pName'])) {
            $query->whereHas('products', function($query) use ($filter) {
                $query->where('name', 'like', '%'.$filter['pName']);

            });
        }

        if (isset($filter['year'])) {
            $query->whereYear('created_at', $filter['year']);
        }

        if (isset($filter['month'])) {
            $query->whereMonth('created_at', $filter['month']);
        }

        if (isset($filter['day'])) {
            $query->whereDay('created_at', $filter['day']);
        }

        $orders = $query->orderBy('created_at', 'DESC')->paginate(10);

        //　商品リスト
        $productNames = Product::pluck('name', 'id');

        //　合計金額
        $priceSum[] = 0;
        if( $orders ){
            foreach( $orders as $order ){
                $query = Quantity::with(['items'])
                    ->where('orders_id', $order->id)
                    ->get();

                $priceSum[$order->id] = 0;
                foreach( $query as $quantity ){
                    $priceSum[$order->id] = $priceSum[$order->id] + $quantity->quantity * $quantity->items->price;
                }
            }
        }

        return view('admin/order/index', compact( 'orders', 'filter', 'productNames', 'priceSum' ))
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

        //　合計金額
        $query = Quantity::with(['items'])
            ->where('orders_id', $order->id)
            ->get();

        $priceSum = 0;
        foreach( $query as $quantity ){
            $priceSum = $priceSum + $quantity->quantity * $quantity->items->price;
        }

        return view('/admin/order/show', compact('order', 'quantities', 'priceSum'));
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
