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

        $inputs['serialnumber'] = $this->getOrderId();

        //入力されたデータをデータベースに保存
        $this->dataSave($inputs);

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

        // のし
        $noshi = new Noshi;
        $noshi->status      = $inputs['opt_noshi_status'];
        if( $inputs['opt_noshi_status'] == 1 ){
            $noshi->type        = $inputs['opt_noshi_type'];
            $noshi->color       = $inputs['opt_noshi_color'];
            $noshi->position    = $inputs['opt_noshi_position'];
            $noshi->name        = $inputs['opt_noshi_name'];
            $noshi->note        = $inputs['opt_noshi_note'];
        }else{
            $noshi->type        = null;
            $noshi->color       = null;
            $noshi->position    = null;
            $noshi->name        = null;
            $noshi->note        = null;
        }
        $noshi->save();

        // 送付先
        $delivery = new Delivery;
        $delivery->status       = $inputs['opt_delivery_status'];
        if( $inputs['opt_delivery_status'] == 1 ){
            $delivery->name         = $inputs['opt_delivery_name'];
            $delivery->kana         = $inputs['opt_delivery_kana'];
            $delivery->phone        = $inputs['opt_delivery_phone'];
            $delivery->zip          = $inputs['opt_delivery_zip'];
            $delivery->pref         = $inputs['opt_delivery_pref'];
            $delivery->addr         = $inputs['opt_delivery_addr'];
            $delivery->addr2        = $inputs['opt_delivery_addr2'];
        }else{
            $delivery->name         = null;
            $delivery->kana         = null;
            $delivery->phone        = null;
            $delivery->zip          = null;
            $delivery->pref         = null;
            $delivery->addr         = null;
            $delivery->addr2        = null;
        }
        $delivery->save();

        // お客様情報
        $guest = new Guest;
        $guest->name        = $inputs['customer_name'];
        $guest->kana        = $inputs['customer_kana'];
        $guest->phone       = $inputs['customer_phone'];
        $guest->zip         = $inputs['customer_zip'];
        $guest->pref        = $inputs['customer_pref'];
        $guest->addr        = $inputs['customer_addr'];
        $guest->addr2       = $inputs['customer_addr2'];
        $guest->email       = $inputs['customer_email'];
        $guest->save();

        // 注文
        $order = new Order;
        $order->serialnumber    = $inputs['serialnumber'];
        $order->products_id     = $inputs['product_id'];
        $order->noshis_id       = $noshi->id;
        $order->deliveries_id   = $delivery->id;
        $order->guests_id       = $guest->id;
        $order->pricesum        = str_replace(',', '',$inputs['pricesum']);
        $order->save();

        //サイズ・数量
        $items = Item::where('products_id', $inputs['product_id'])->get();
        foreach( $items as $item ){
            if( array_key_exists( 'item_id_'.$item->id, $inputs ) ){
                $quantity = new Quantity;
                $quantity->orders_id    = $order->id;
                $quantity->items_id     = $item['id'];
                $quantity->quantity     = $inputs['item_id_'.$item->id];
                $quantity->save();
            }
        }
    }


    public function getOrderId()
    {
        $order_last = Order::latest('id')->first();
        $number = date('Ymd').str_pad(($order_last->id + 1),3,0,STR_PAD_LEFT);

        return $number;
    }

}
