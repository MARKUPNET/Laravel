<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

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
        $orders = Order::with(['products', 'noshis', 'deliveries', 'guests'])
            ->orderBy('created_at')
            ->get();

        return view('admin/index', compact( 'orders', 'request' ))
            ->with('page_id', request()->page_id);
    }
}
