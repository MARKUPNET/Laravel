@extends('layouts.web')

@section('page_header')
    <h1>確認画面</h1>
@stop

@section('content')
    <form action="{{ route('shopping.thanks') }}" method="POST">

        @CSRF

        <div class="card">
            <h2>ご注文</h2>

            <dl class="orderTable">
                <dt>商品名</dt>
                <dd>長沼かりんとう饅頭</dd>
            </dl>

            <dl class="orderTable">
                <dt>サイズ・数量</dt>
                <dd>
                    <ul class="productList">
                        <li>
                            <span>5本入り（700円）・・・</span> 0 箱
                            <input name="長沼かりんとう饅頭（5本入り）" type="hidden" value="0">
                        </li>
                        <li>
                            <span>8本入り（1,130円）・・・</span> 0 箱
                            <input name="長沼かりんとう饅頭（8本入り）" type="hidden" value="0">
                        </li>
                        <li>
                            <span>10本入り（1,500円）・・・</span> 0 箱
                            <input name="長沼かりんとう饅頭（10本入り）" type="hidden" value="0">
                        </li>
                        <li>
                            <span>15本入り（2,200円）・・・</span> 0 箱
                            <input name="長沼かりんとう饅頭（15本入り）" type="hidden" value="0">
                        </li>
                        <li>
                            <span>20本入り（2,900円）・・・</span> 0 箱
                            <input name="長沼かりんとう饅頭（20本入り）" type="hidden" value="0">
                        </li>
                        <li>
                            <span>27本入り（3,810円）・・・</span> 0 箱
                            <input name="長沼かりんとう饅頭（27本入り）" type="hidden" value="0">
                        </li>
                        <li>
                            <span>簡易包装(5本入り4パックセット 2,200円)・・・</span> 0 箱
                            <input name="長沼かりんとう饅頭（簡易包装5本入り4パックセット）" type="hidden" value="0">
                        </li>
                    </ul>
                </dd>
            </dl>

            <dl class="orderTable">
                <dt>商品合計金額</dt>
                <dd>
                    <div class="priceSumBox">
                        <span id="priceSum">0,000 円（税込）</span>
                        <input type="hidden" name="合計" value="0">
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
                            あり
                            <input type="hidden" name="noshi" value="あり">
                        </div>
                    </dd>
                </dl>

                <div id="noshi" class="optionDetail open">

                    <dl class="orderTable">
                        <dt>のし種類</dt>
                        <dd>
                            なし
                            <input type="hidden" name="opt_noshi_type" value="なし">
                        </dd>
                    </dl>

                    <dl class="orderTable">
                        <dt>のし（結び切り　色）</dt>
                        <dd>
                            なし
                            <input type="hidden" name="opt_noshi_color" value="なし">
                        </dd>
                    </dl>

                    <dl class="orderTable">
                        <dt>のし位置</dt>
                        <dd>
                            なし
                            <input type="hidden" name="opt_noshi_position" value="">
                        </dd>
                    </dl>

                    <dl class="orderTable">
                        <dt>氏名</dt>
                        <dd>
                            山田　太郎
                            <input type="hidden" name="opt_noshi_name" value="山田　太郎">
                        </dd>
                    </dl>

                    <dl class="orderTable">
                        <dt>備考</dt>
                        <dd>
                            ここに文章を入力します。
                            <input type="hidden" name="opt_noshi_note" value="ここに文章を入力します。">
                        </dd>
                    </dl>

                </div>

                <dl class="orderTable">
                    <dt>【　送付先　】</dt>
                    <dd>
                        <div class="optSelcBtn">
                            別住所
                            <input type="hidden" name="delivery" value="別住所">
                        </div>
                    </dd>
                </dl>

                <div id="delivery" class="optionDetail open">
                    <dl class="orderTable">
                        <dt>（送付先）お名前</dt>
                        <dd>
                            山田　太郎
                            <input type="hidden" name="delivery_name" value="山田　太郎">
                        </dd>
                    </dl>
                    <dl class="orderTable">
                        <dt>（送付先）フリガナ</dt>
                        <dd>
                            山田　太郎
                            <input type="hidden" name="delivery_kana" value="ヤマダ　タロウ">
                        </dd>
                    </dl>
                    <dl class="orderTable">
                        <dt>（送付先）お電話番号</dt>
                        <dd>
                            090-0000-0000
                            <input type="hidden" name="delivery_phone" value="090-0000-0000">
                        </dd>
                    </dl>
                    <dl class="orderTable">
                        <dt>（送付先）ご住所</dt>
                        <dd>
                            <div class="address">
                                <input type="hidden" name="delivery_zip" value="〇〇〇〇〇〇〇〇〇〇〇">
                                <input type="hidden" name="delivery_pref" value="〇〇〇〇〇〇〇〇〇〇〇">
                                <input type="hidden" name="delivery_addr" value="〇〇〇〇〇〇〇〇〇〇〇">
                                <input type="hidden" name="delivery_addr2" value="〇〇〇〇〇〇〇〇〇〇〇">

                                <label>（送付先）郵便番号：〇〇〇〇〇〇〇〇〇〇〇</label>
                                <label>（送付先）都道府県：〇〇〇〇〇〇〇〇〇〇〇</label>
                                <label>（送付先）丁目番地：〇〇〇〇〇〇〇〇〇〇〇</label>
                                <label>（送付先）建物名等：〇〇〇〇〇〇〇〇〇〇〇</label>
                            </div>
                        </dd>
                    </dl>

                </div>
            </div>
        </div>

        <div class="card">
            <h2>お客様情報</h2>

            <dl class="orderTable">
                <dt>お名前</dt>
                <dd>
                    森下　太郎
                    <input type="hidden" name="customer_name" value="森下　太郎">
                </dd>
            </dl>

            <dl class="orderTable">
                <dt>フリガナ</dt>
                <dd>
                    モリシタ　タロウ
                    <input type="hidden" name="customer_kana" value="モリシタ　タロウ">
                </dd>
            </dl>

            <dl class="orderTable">
                <dt>お電話番号</dt>
                <dd>
                    0123-88-0051
                    <input type="hidden" name="customer_phone" value="0123-88-0051">
                </dd>
            </dl>

            <dl class="orderTable">
                <dt>ご住所</dt>
                <dd>
                    <div class="address">
                        <input type="hidden" name="customer_zip" value="〇〇〇〇〇〇〇〇〇〇〇">
                        <input type="hidden" name="customer_pref" value="〇〇〇〇〇〇〇〇〇〇〇">
                        <input type="hidden" name="customer_addr" value="〇〇〇〇〇〇〇〇〇〇〇">
                        <input type="hidden" name="customer_addr2" value="〇〇〇〇〇〇〇〇〇〇〇">
                        <label>（送付先）郵便番号：〇〇〇〇〇〇〇〇〇〇〇</label>
                        <label>（送付先）都道府県：〇〇〇〇〇〇〇〇〇〇〇</label>
                        <label>（送付先）丁目番地：〇〇〇〇〇〇〇〇〇〇〇</label>
                        <label>（送付先）建物名等：〇〇〇〇〇〇〇〇〇〇〇</label>
                    </div>
                </dd>
            </dl>

            <dl class="orderTable">
                <dt>E-mail</dt>
                <dd>
                    xxxxxx@xxx.jp
                    <input type="hidden" name="customer_email" value="xxxxxx@xxx.jp">
                </dd>
            </dl>

            <dl class="orderTable">
                <dt>備考欄(その他ご質問など)</dt>
                <dd>
                    xxxxxx
                    <input type="hidden" name="customer_note" value="xxxxxx">
                </dd>
            </dl>

            <dl class="orderTable">
                <dt>個人情報の取り扱いについて</dt>
                <dd>
                    同意します
                    <input type="hidden" name="customer_privacy" value="同意します">
                </dd>
            </dl>

            <button type="submit" class="btn_submit">送信する</button>

        </div>

    </form>
@endsection

@section('css')
@endsection

@section('js')
@endsection
