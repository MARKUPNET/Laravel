<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

use App\Models\Product;
use App\Models\Item;

class OrderSendmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->product_name = $inputs['product_name'];

        $items = Item::where('products_id', $inputs['product_id'])->get();
        foreach( $items as $item ){
            if( $inputs['item_id_'.$item->id] ){
                $this->item_name[] = [
                    'name' => $item->name,
                    'quantity' => $inputs['item_id_'.$item->id],
                ];
            }
        }

        $this->price_sum    = $inputs['price_sum'];

        // のし
        $this->opt_noshi_status     = $inputs['opt_noshi_status'];
        if( $inputs['opt_noshi_status'] == 1 ){
            $this->opt_noshi_status_name = 'あり';
            $this->opt_noshi_type       = $inputs['opt_noshi_type'];
            $this->opt_noshi_color      = $inputs['opt_noshi_color'];
            $this->opt_noshi_position   = $inputs['opt_noshi_position'];
            $this->opt_noshi_name       = $inputs['opt_noshi_name'];
            $this->opt_noshi_note       = $inputs['opt_noshi_note'];
        }else{
            $this->opt_noshi_status_name = 'なし';
            $this->opt_noshi_type       = "";
            $this->opt_noshi_color      = "";
            $this->opt_noshi_position   = "";
            $this->opt_noshi_name       = "";
            $this->opt_noshi_note       = "";
        }

        // 送付先
        $this->opt_delivery_status  = $inputs['opt_delivery_status'];
        if( $inputs['opt_delivery_status'] == 1 ){
            $this->opt_delivery_status_name = '別住所';
            $this->opt_delivery_name    = $inputs['opt_delivery_name'];
            $this->opt_delivery_kana    = $inputs['opt_delivery_kana'];
            $this->opt_delivery_phone   = $inputs['opt_delivery_phone'];
            $this->opt_delivery_zip     = $inputs['opt_delivery_zip'];
            $this->opt_delivery_pref    = $inputs['opt_delivery_pref'];
            $this->opt_delivery_addr    = $inputs['opt_delivery_addr'];
            $this->opt_delivery_addr2   = $inputs['opt_delivery_addr2'];
        }else{
            $this->opt_delivery_status_name = 'お客様情報と同じ';
            $this->opt_delivery_name    = "";
            $this->opt_delivery_kana    = "";
            $this->opt_delivery_phone   = "";
            $this->opt_delivery_zip     = "";
            $this->opt_delivery_pref    = "";
            $this->opt_delivery_addr    = "";
            $this->opt_delivery_addr2   = "";
        }

        $this->customer_name    = $inputs['customer_name'];
        $this->customer_kana    = $inputs['customer_kana'];
        $this->customer_phone   = $inputs['customer_phone'];
        $this->customer_zip     = $inputs['customer_zip'];
        $this->customer_pref    = $inputs['customer_pref'];
        $this->customer_addr    = $inputs['customer_addr'];
        $this->customer_addr2   = $inputs['customer_addr2'];
        $this->customer_email   = $inputs['customer_email'];
        $this->customer_note    = $inputs['customer_note'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->customer_email)
            ->from('webmaster@markupnet.jp')
            ->with([
                'product_name'  => $this->product_name,
                'item_name'     => $this->item_name,
                'price_sum'     => $this->price_sum,

                'opt_noshi_status_name'  => $this->opt_noshi_status_name,
                'opt_noshi_status'  => $this->opt_noshi_status,
                'opt_noshi_type'    => $this->opt_noshi_type,
                'opt_noshi_color'   => $this->opt_noshi_color,
                'opt_noshi_position'=> $this->opt_noshi_position,
                'opt_noshi_name'    => $this->opt_noshi_name,
                'opt_noshi_note'    => $this->opt_noshi_note,

                'opt_delivery_status_name'   => $this->opt_delivery_status_name,
                'opt_delivery_status'   => $this->opt_delivery_status,
                'opt_delivery_name'     => $this->opt_delivery_name,
                'opt_delivery_kana'     => $this->opt_delivery_kana,
                'opt_delivery_phone'    => $this->opt_delivery_phone,
                'opt_delivery_zip'      => $this->opt_delivery_zip,
                'opt_delivery_pref'     => $this->opt_delivery_pref,
                'opt_delivery_addr'     => $this->opt_delivery_addr,
                'opt_delivery_addr2'    => $this->opt_delivery_addr2,

                'customer_name'     => $this->customer_name,
                'customer_kana'     => $this->customer_kana,
                'customer_phone'    => $this->customer_phone,
                'customer_zip'      => $this->customer_zip,
                'customer_pref'     => $this->customer_pref,
                'customer_addr'     => $this->customer_addr,
                'customer_addr2'    => $this->customer_addr2,
                'customer_email'    => $this->customer_email,
                'customer_note'     => $this->customer_note,
            ]);
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: '自動送信メール',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
