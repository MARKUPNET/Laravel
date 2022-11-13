@extends('layouts.web')

@section('page_header')
    <h1>確認画面</h1>
@stop

@section('content')
    <div class="shoppingFlow">
        <ul>
            <li class="current"><span>ご注文</span></li>
            <li class="current"><span>確認</span></li>
            <li><span>送信</span></li>
        </ul>
    </div>

    <form action="{{ route('shopping.thanks') }}" method="POST">

        @csrf

        <div class="card">
            <h2>ご注文</h2>

            <dl class="orderTable">
                <dt>商品名</dt>
                <dd>
                    {{ $inputs['product_name'] }}
                    <input type="hidden" name="product_name" value="{{ $inputs['product_name'] }}">
                    <input type="hidden" name="product_id" value="{{ $inputs['product_id'] }}">
                </dd>
            </dl>

            <dl class="orderTable">
                <dt>サイズ・数量</dt>
                <dd>
                    <ul class="productList">
                        @foreach( $itemArray as $item )
                        <li>
                            <span>{{ $item['name'] }}（{{ $item['price'] }}円）・・・</span> {{ $item['quantity'] }} 箱
                            <input name="item_id_{{ $item['id'] }}" type="hidden" value="{{ $item['quantity'] }}">
                        </li>
                        @endforeach
                    </ul>
                </dd>
            </dl>

            <dl class="orderTable">
                <dt>商品合計金額</dt>
                <dd>
                    <div class="priceSumBox">
                        <span id="priceSum">{{ $inputs['pricesum'] }} 円（税込）</span>
                        <input type="hidden" name="pricesum" value="{{ $inputs['pricesum'] }}">
                    </div>
                </dd>
            </dl>

        </div>

        <div class="card">
            <h2>オプション</h2>
            <div>

                <dl class="orderTable">
                    <dt>【　の　し　】</dt>
                    <dd>
                        <div class="optSelcBtn">
                            {{ $inputs['opt_noshi_status_name'] }}
                            <input type="hidden" name="opt_noshi_status" value="{{ $inputs['opt_noshi_status'] }}">
                        </div>
                    </dd>
                </dl>

                @if( $inputs['opt_noshi_status'] == 1 )

                <div id="noshi" class="optionDetail open">

                    <dl class="orderTable">
                        <dt>のし種類</dt>
                        <dd>
                            {{ $inputs['opt_noshi_type'] }}
                            <input type="hidden" name="opt_noshi_type" value="{{ $inputs['opt_noshi_type'] }}">
                        </dd>
                    </dl>

                    <dl class="orderTable">
                        <dt>のし（結び切り　色）</dt>
                        <dd>
                            {{ $inputs['opt_noshi_color'] }}
                            <input type="hidden" name="opt_noshi_color" value="{{ $inputs['opt_noshi_color'] }}">
                        </dd>
                    </dl>

                    <dl class="orderTable">
                        <dt>のし位置</dt>
                        <dd>
                            {{ $inputs['opt_noshi_position'] }}
                            <input type="hidden" name="opt_noshi_position" value="{{ $inputs['opt_noshi_position'] }}">
                        </dd>
                    </dl>

                    <dl class="orderTable">
                        <dt>氏名</dt>
                        <dd>
                            {{ $inputs['opt_noshi_name'] }}
                            <input type="hidden" name="opt_noshi_name" value="{{ $inputs['opt_noshi_name'] }}">
                        </dd>
                    </dl>

                    <dl class="orderTable">
                        <dt>備考</dt>
                        <dd>
                            {{ $inputs['opt_noshi_note'] }}
                            <input type="hidden" name="opt_noshi_note" value="{{ $inputs['opt_noshi_note'] }}">
                        </dd>
                    </dl>

                </div>

                @endif

                <dl class="orderTable">
                    <dt>【　送付先　】</dt>
                    <dd>
                        <div class="optSelcBtn">
                            {{ $inputs['opt_delivery_status_name'] }}
                            <input type="hidden" name="opt_delivery_status" value="{{ $inputs['opt_delivery_status'] }}">
                        </div>
                    </dd>
                </dl>

                @if( $inputs['opt_delivery_status'] == 1 )

                <div id="delivery" class="optionDetail open">
                    <dl class="orderTable">
                        <dt>（送付先）お名前</dt>
                        <dd>
                            {{ $inputs['opt_delivery_name'] }}
                            <input type="hidden" name="opt_delivery_name" value="{{ $inputs['opt_delivery_name'] }}">
                        </dd>
                    </dl>
                    <dl class="orderTable">
                        <dt>（送付先）フリガナ</dt>
                        <dd>
                            {{ $inputs['opt_delivery_kana'] }}
                            <input type="hidden" name="opt_delivery_kana" value="{{ $inputs['opt_delivery_kana'] }}">
                        </dd>
                    </dl>
                    <dl class="orderTable">
                        <dt>（送付先）お電話番号</dt>
                        <dd>
                            {{ $inputs['opt_delivery_phone'] }}
                            <input type="hidden" name="opt_delivery_phone" value="{{ $inputs['opt_delivery_phone'] }}">
                        </dd>
                    </dl>
                    <dl class="orderTable">
                        <dt>（送付先）ご住所</dt>
                        <dd>
                            <div class="address">
                                <input type="hidden" name="opt_delivery_zip" value="{{ $inputs['opt_delivery_zip'] }}">
                                <input type="hidden" name="opt_delivery_pref" value="{{ $inputs['opt_delivery_pref'] }}">
                                <input type="hidden" name="opt_delivery_addr" value="{{ $inputs['opt_delivery_addr'] }}">
                                <input type="hidden" name="opt_delivery_addr2" value="{{ $inputs['opt_delivery_addr2'] }}">

                                <label>（送付先）郵便番号：{{ $inputs['opt_delivery_zip'] }}</label>
                                <label>（送付先）都道府県：{{ $inputs['opt_delivery_pref'] }}</label>
                                <label>（送付先）丁目番地：{{ $inputs['opt_delivery_addr'] }}</label>
                                <label>（送付先）建物名等：{{ $inputs['opt_delivery_addr2'] }}</label>
                            </div>
                        </dd>
                    </dl>

                </div>

                @endif

            </div>
        </div>

        <div class="card">
            <h2>お客様情報</h2>

            <dl class="orderTable">
                <dt>お名前</dt>
                <dd>
                    {{ $inputs['customer_name'] }}
                    <input type="hidden" name="customer_name" value="{{ $inputs['customer_name'] }}">
                </dd>
            </dl>

            <dl class="orderTable">
                <dt>フリガナ</dt>
                <dd>
                    {{ $inputs['customer_kana'] }}
                    <input type="hidden" name="customer_kana" value="{{ $inputs['customer_kana'] }}">
                </dd>
            </dl>

            <dl class="orderTable">
                <dt>お電話番号</dt>
                <dd>
                    {{ $inputs['customer_phone'] }}
                    <input type="hidden" name="customer_phone" value="{{ $inputs['customer_phone'] }}">
                </dd>
            </dl>

            <dl class="orderTable">
                <dt>ご住所</dt>
                <dd>
                    <div class="address">
                        <input type="hidden" name="customer_zip" value="{{ $inputs['customer_zip'] }}">
                        <input type="hidden" name="customer_pref" value="{{ $inputs['customer_pref'] }}">
                        <input type="hidden" name="customer_addr" value="{{ $inputs['customer_addr'] }}">
                        <input type="hidden" name="customer_addr2" value="{{ $inputs['customer_addr2'] }}">
                        <label>郵便番号：{{ $inputs['customer_zip'] }}</label>
                        <label>都道府県：{{ $inputs['customer_pref'] }}</label>
                        <label>丁目番地：{{ $inputs['customer_addr'] }}</label>
                        <label>建物名等：{{ $inputs['customer_addr2'] }}</label>
                    </div>
                </dd>
            </dl>

            <dl class="orderTable">
                <dt>E-mail</dt>
                <dd>
                    {{ $inputs['customer_email'] }}
                    <input type="hidden" name="customer_email" value="{{ $inputs['customer_email'] }}">
                </dd>
            </dl>

            <dl class="orderTable">
                <dt>備考欄(その他ご質問など)</dt>
                <dd>
                    {{ $inputs['customer_note'] }}
                    <input type="hidden" name="customer_note" value="{{ $inputs['customer_note'] }}">
                </dd>
            </dl>

            <dl class="orderTable">
                <dt>個人情報の取り扱いについて</dt>
                <dd>
                    同意します
                    <input type="hidden" name="customer_privacy" value="同意します">
                </dd>
            </dl>

            <div class="submitButtons">
                <button type="button" onclick="history.back()" class="btn_submit">入力内容修正</button>
                <button type="submit" name="action" value="submit" class="btn_submit">送信</button>
            </div>

        </div>

    </form>
@endsection

@section('css')
@endsection

@section('js')
@endsection
