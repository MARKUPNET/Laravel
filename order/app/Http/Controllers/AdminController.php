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
    public function index()
    {
        $deliverys   = Delivery::get();
        $guests      = Guest::get();
        $items       = Item::get();
        $noshis      = Noshi::get();
        $orders      = Order::get();
        $products    = Product::get();
        $quantitys   = Quantity::get();

        return view('admin/index', compact('deliverys', 'guests', 'items', 'noshis', 'orders', 'products', 'quantitys'))
            ->with('page_id', request()->page_id);
    }
}
