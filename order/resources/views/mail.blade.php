ご注文を受け付けました。<br>
<br>
■商品名<br>
{!! $product_name !!}<br>
<br>
■サイズ・数量<br>
@foreach( $item_name as $item )
{!! $item['name'] !!}・・・{!! $item['quantity'] !!}{!! $item['unit'] !!}<br>
@endforeach
<br>
【　商品合計金額　】<br>
<br>
{!! $price_sum !!} 円<br>
<br>
<br>
------------------------<br>
<br>
【　オプション　】<br>
<br>
■（のし）<br>
{!! $opt_noshi_status_name !!}<br>
<br>
@if( $opt_noshi_status == '1')
    <br>
    ■（のし）種類<br>
    {!! $opt_noshi_type !!}<br>
    <br>
    ■（のし）結び切り　色<br>
    {!! $opt_noshi_color !!}<br>
    <br>
    ■（のし）位置<br>
    {!! $opt_noshi_position !!}<br>
    <br>
    ■（のし）氏名<br>
    {!! $opt_noshi_name !!}<br>
    <br>
    ■（のし）備考<br>
    {!! nl2br($opt_noshi_note) !!}<br>
    <br>
    <br>
@endif
■（送付先）<br>
{!! $opt_delivery_status_name !!}<br>
<br>
@if( $opt_delivery_status == '1')
    <br>
    ■（送付先）お名前<br>
    {!! $opt_delivery_name !!}<br>
    <br>
    ■（送付先）フリガナ<br>
    {!! $opt_delivery_kana !!}<br>
    <br>
    ■（送付先）お電話番号<br>
    {!! $opt_delivery_phone !!}<br>
    <br>
    ■（送付先）郵便番号<br>
    {!! $opt_delivery_zip !!}<br>
    <br>
    ■（送付先）都道府県<br>
    {!! $opt_delivery_pref !!}<br>
    <br>
    ■（送付先）丁目番地<br>
    {!! $opt_delivery_addr !!}<br>
    <br>
    ■（送付先）建物名等<br>
    {!! $opt_delivery_addr2 !!}<br>
    <br>
    <br>
@endif
------------------------<br>
<br>
【　お客様情報　】<br>
<br>
■お名前<br>
{!! $customer_name !!}<br>
<br>
■フリガナ<br>
{!! $customer_kana !!}<br>
<br>
■お電話番号<br>
{!! $customer_phone !!}<br>
<br>
■郵便番号<br>
{!! $customer_zip !!}<br>
<br>
■都道府県<br>
{!! $customer_pref !!}<br>
<br>
■丁目番地<br>
{!! $customer_addr !!}<br>
<br>
■建物名等<br>
{!! $customer_addr2 !!}<br>
<br>
■E-mail<br>
{!! $customer_email !!}<br>
<br>
■備考欄<br>
{!! nl2br($customer_note) !!}<br>
<br>
