<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Item;

use Mail;
use App\Mail\OrderSendmail;
class ShoppingController extends Controller
{

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $product_id)
    {
        $product = Product::where('id', $product_id)->first();
        $items = Item::where('product_id', $product_id)->get();
        // dd($items);

        return view('shopping', compact('product','items'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirm(Request $request)
    {
        $request->validate([
        ]);

        $inputs = $request->all();

        return view('shopping_confirm', compact('inputs'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        //フォームから受け取ったactionの値を取得
        $action = $request->input('action');

        //フォームから受け取ったactionを除いたinputの値を取得
        $inputs = $request->except('action');

        //actionの値で分岐
        if($action !== 'submit'){
            return redirect()
                ->back()
                ->withInput($inputs);

        } else {

            //入力されたデータをデータベースに保存
            // $this->dataSave($inputs);

            //入力されたメールアドレスにメールを送信
            Mail::send(new OrderSendmail($inputs));

            //再送信を防ぐためにトークンを再発行
            $request->session()->regenerateToken();

            return view('shopping_thanks');

        }
    }

    /**
     * Show the application thanks.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dataSave($inputs)
    {
        $guest = new Guest;
        $guest->save();
    }
}
