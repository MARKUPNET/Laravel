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
        $items = Item::where('products_id', $product_id)->get();
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
        $validated_data = $request->validate([
            'customer_name'     => 'required',
            'customer_phone'    => 'required',
            'customer_zip'      => 'required',
            'customer_pref'     => 'required',
            'customer_addr'     => 'required',
            'customer_email'    => 'required|email',
            'customer_privacy'     => 'required',
        ]);

        $inputs = $request->all();

        $items = Item::where('products_id', $inputs['product_id'])->get();

        foreach( $items as $item ){
            if( $inputs['item_id_'.$item->id] ){
                $itemArray[] = [
                    'id' => $item->id,
                    'name' => $item->name,
                    'price' => $item->price,
                    'quantity' => $inputs['item_id_'.$item->id],
                ];
            }
        }

        // のし
        if( $inputs['opt_noshi_status'] == 1 ){
            $inputs['opt_noshi_status_name'] = 'あり';
        }else{
            $inputs['opt_noshi_status_name'] = 'なし';
        }

        // 送付先
        if( $inputs['opt_delivery_status'] == 1 ){
            $inputs['opt_delivery_status_name'] = '別住所';
        }else{
            $inputs['opt_delivery_status_name'] = 'お客様情報と同じ';
        }

        return view('shopping_confirm', compact('inputs','itemArray'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {

        $inputs = $request->except('action');

        //入力されたデータをデータベースに保存
        // $this->dataSave($inputs);

        //入力されたメールアドレスにメールを送信
        Mail::send(new OrderSendmail($inputs));

        //再送信を防ぐためにトークンを再発行
        $request->session()->regenerateToken();

        return view('shopping_thanks');

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
