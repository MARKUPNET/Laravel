<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Product;
use App\Models\Quantity;

class AdminController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $query = Order::with(['products', 'noshis', 'deliveries', 'guests']);

        $orders = $query->orderBy('created_at', 'DESC')->paginate(20);

        //　合計金額
        foreach( $orders as $order ){
            $query = Quantity::with(['items'])
                ->where('orders_id', $order->id)
                ->get();

            $priceSum[$order->id] = 0;
            foreach( $query as $quantity ){
                $priceSum[$order->id] = $priceSum[$order->id] + $quantity->quantity * $quantity->items->price;
            }
        }


        return view('admin/index', compact( 'orders', 'priceSum' ))
            ->with('page_id', request()->page_id);
    }
}
