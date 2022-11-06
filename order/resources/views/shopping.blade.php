@extends('layouts.web')

@section('page_header')
    <h1>ご注文</h1>
@stop

@section('content')
    <form action="{{ route('shopping.confirm') }}" method="POST">

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
                            <span>5本入り（700円）・・・</span>
                            <input name="長沼かりんとう饅頭（5本入り）" type="number" value="" class="orderNet" data-charcheck="digit" data-format="$1 箱" data-price="700" autocomplete="off">箱
                        </li>
                        <li>
                            <span>8本入り（1,130円）・・・</span>
                            <input name="長沼かりんとう饅頭（8本入り）" type="number" value="" class="orderNet" data-charcheck="digit" data-format="$1 箱" data-price="1130" autocomplete="off">箱
                        </li>
                        <li>
                            <span>10本入り（1,500円）・・・</span>
                            <input name="長沼かりんとう饅頭（10本入り）" type="number" value="" class="orderNet" data-charcheck="digit" data-format="$1 箱" data-price="1500" autocomplete="off">箱
                        </li>
                        <li>
                            <span>15本入り（2,200円）・・・</span>
                            <input name="長沼かりんとう饅頭（15本入り）" type="number" value="" class="orderNet" data-charcheck="digit" data-format="$1 箱" data-price="2200" autocomplete="off">箱
                        </li>
                        <li>
                            <span>20本入り（2,900円）・・・</span>
                            <input name="長沼かりんとう饅頭（20本入り）" type="number" value="" class="orderNet" data-charcheck="digit" data-format="$1 箱" data-price="2900" autocomplete="off">箱
                        </li>
                        <li>
                            <span>27本入り（3,810円）・・・</span>
                            <input name="長沼かりんとう饅頭（27本入り）" type="number" value="" class="orderNet" data-charcheck="digit" data-format="$1 箱" data-price="3810" autocomplete="off">箱
                        </li>
                        <li>
                            <span>簡易包装(5本入り4パックセット 2,200円)・・・</span>
                            <input name="長沼かりんとう饅頭（簡易包装5本入り4パックセット）" type="number" value="" class="orderNet" data-charcheck="digit" data-format="$1 セット" data-price="2200" autocomplete="off">箱
                        </li>
                    </ul>
                </dd>
            </dl>

            <dl class="orderTable">
                <dt>商品合計金額</dt>
                <dd>
                    <div class="priceSumBox">
                        <input type="hidden" name="合計金額" data-join="合計+ 円">
                        <span id="priceSum">
                            <input type="number" name="合計" value="0" class="total_sum" autocomplete="off">円（税込）
                            <span class="caution">※別途送料がかかります。送料を含めた合計金額は後ほど、ご連絡差し上げます。</span>
                        </span>
                    </div>
                </dd>
            </dl>

        </div>

        <div class="card">
            <h2>お支払い方法</h2>
            <p class="paymentMessg">・別住所に発送の場合は、事前にご入金をお願いしております。(カード可)<br>
                ・お支払いは代引きのみとさせていただいております。<br>
                ・代引き手数料　330円</p>
            <p class="paymentMessg border">代引きの際カードでお支払い出来ます。<br>
                3,000円以上のお買い物で代引き手数料は、サービスさせて頂きます。</p>
        </div>

        <div class="card">
            <h2>オプション</h2>
            <div>

                <dl class="orderTable">
                    <dt>【　の　し　】</dt>
                    <dd>
                        <div class="optSelcBtn">
                            <label><input type="radio" name="noshi" value="あり">あり</label>
                            <label><input type="radio" name="noshi" value="なし" checked>なし</label>
                        </div>
                    </dd>
                </dl>

                <div id="noshi" class="optionDetail">

                    <dl class="orderTable">
                        <dt>のし種類</dt>
                        <dd>
                            <ul class="optNoshiType">
                                <li>
                                    <label><input name="opt_noshi_type" type="radio" value="なし" checked>なし</label>
                                </li>
                                <li>
                                    <label><input name="opt_noshi_type" type="radio" value="お中元">お中元</label>
                                </li>
                                <li>
                                    <label><input name="opt_noshi_type" type="radio" value="お歳暮">お歳暮</label>
                                </li>
                                <li>
                                    <img src="https://msyofuan.com/themes/theme_msyofuan/assets/images/order/noshi_a.jpg" alt="のし　イ">
                                    <label><input name="opt_noshi_type" type="radio" value="蝶結び　（イ）">蝶結び　（イ）</label>
                                </li>
                                <li>
                                    <img src="https://msyofuan.com/themes/theme_msyofuan/assets/images/order/noshi_b.jpg" alt="のし　ロ">
                                    <label><input name="opt_noshi_type" type="radio" value="蝶結び　（ロ）">蝶結び　（ロ）</label>
                                </li>
                                <li>
                                    <img src="https://msyofuan.com/themes/theme_msyofuan/assets/images/order/noshi_c.jpg" alt="のし　ハ">
                                    <label><input name="opt_noshi_type" type="radio" value="蝶結び　（ハ）">蝶結び　（ハ）</label>
                                </li>
                                <li>
                                    <img src="https://msyofuan.com/themes/theme_msyofuan/assets/images/order/noshi_d.jpg" alt="のし　ニ">
                                    <label><input name="opt_noshi_type" type="radio" value="結び切り（ニ）">結び切り（ニ）</label>
                                </li>
                                <li>
                                    <img src="https://msyofuan.com/themes/theme_msyofuan/assets/images/order/noshi_e.jpg" alt="のし　ホ">
                                    <label><input name="opt_noshi_type" type="radio" value="結び切り（ホ）">結び切り（ホ）</label>
                                </li>
                            </ul>
                        </dd>
                    </dl>

                    <dl class="orderTable">
                        <dt>のし（結び切り　色）</dt>
                        <dd>
                            <label><input name="opt_noshi_color" type="radio" value="なし" checked>なし</label>
                            <label><input name="opt_noshi_color" type="radio" value="紅白">紅白</label>
                            <label><input name="opt_noshi_color" type="radio" value="黄白">黄白</label>
                            <label><input name="opt_noshi_color" type="radio" value="黒白">黒白</label>
                        </dd>
                    </dl>

                    <dl class="orderTable">
                        <dt>のし位置</dt>
                        <dd>
                            <label><input name="opt_noshi_position" type="radio" value="内のし（包装紙の内にのしを敷く）">内のし（包装紙の内にのしを敷く）</label>
                            <label><input name="opt_noshi_position" type="radio" value="外のし（包装紙の外にのしを敷く）">外のし（包装紙の外にのしを敷く）</label>
                        </dd>
                    </dl>

                    <dl class="orderTable">
                        <dt>氏名</dt>
                        <dd>
                            <input name="opt_noshi_name" type="text" placeholder="(例)　山田　太郎">
                        </dd>
                    </dl>

                    <dl class="orderTable">
                        <dt>備考</dt>
                        <dd>
                            <textarea name="opt_noshi_note"></textarea>
                        </dd>
                    </dl>

                </div>

                <dl class="orderTable">
                    <dt>【　送付先　】</dt>
                    <dd>
                        <div class="optSelcBtn">
                            <label><input type="radio" name="delivery" value="別住所">別住所</label>
                            <label><input type="radio" name="delivery" value="お客様情報と同じ" checked>お客様情報と同じ</label>
                        </div>
                    </dd>
                </dl>

                <div id="delivery" class="optionDetail">
                    <p>別住所へ送られる場合は、前もって振り込みご入金をお願いしております。</p>
                    <dl class="orderTable">
                        <dt>（送付先）お名前</dt>
                        <dd>
                            <input name="delivery_name" type="text">
                        </dd>
                    </dl>
                    <dl class="orderTable">
                        <dt>（送付先）フリガナ</dt>
                        <dd>
                            <input name="delivery_kana" type="text">
                        </dd>
                    </dl>
                    <dl class="orderTable">
                        <dt>（送付先）お電話番号</dt>
                        <dd>
                            <input name="delivery_phone" type="text">
                        </dd>
                    </dl>
                    <dl class="orderTable">
                        <dt>（送付先）ご住所</dt>
                        <dd>
                            <div class="address">
                                <label>（送付先）郵便番号：<input type="text" name="delivery_zip" placeholder=""></label>
                                <label>（送付先）都道府県：
                                    <select name="delivery_pref">
                                        <option value="" selected="selected">選択してください</option>
                                        <option value="北海道">北海道</option>
                                        <option value="青森県">青森県</option>
                                        <option value="岩手県">岩手県</option>
                                        <option value="秋田県">秋田県</option>
                                        <option value="宮城県">宮城県</option>
                                        <option value="山形県">山形県</option>
                                        <option value="福島県">福島県</option>
                                        <option value="茨城県">茨城県</option>
                                        <option value="栃木県">栃木県</option>
                                        <option value="群馬県">群馬県</option>
                                        <option value="埼玉県">埼玉県</option>
                                        <option value="千葉県">千葉県</option>
                                        <option value="東京都">東京都</option>
                                        <option value="神奈川県">神奈川県</option>
                                        <option value="山梨県">山梨県</option>
                                        <option value="新潟県">新潟県</option>
                                        <option value="長野県">長野県</option>
                                        <option value="富山県">富山県</option>
                                        <option value="石川県">石川県</option>
                                        <option value="福井県">福井県</option>
                                        <option value="岐阜県">岐阜県</option>
                                        <option value="静岡県">静岡県</option>
                                        <option value="愛知県">愛知県</option>
                                        <option value="三重県">三重県</option>
                                        <option value="滋賀県">滋賀県</option>
                                        <option value="京都府">京都府</option>
                                        <option value="大阪府">大阪府</option>
                                        <option value="兵庫県">兵庫県</option>
                                        <option value="奈良県">奈良県</option>
                                        <option value="和歌山県">和歌山県</option>
                                        <option value="鳥取県">鳥取県</option>
                                        <option value="島根県">島根県</option>
                                        <option value="岡山県">岡山県</option>
                                        <option value="広島県">広島県</option>
                                        <option value="山口県">山口県</option>
                                        <option value="徳島県">徳島県</option>
                                        <option value="香川県">香川県</option>
                                        <option value="愛媛県">愛媛県</option>
                                        <option value="高知県">高知県</option>
                                        <option value="福岡県">福岡県</option>
                                        <option value="佐賀県">佐賀県</option>
                                        <option value="長崎県">長崎県</option>
                                        <option value="熊本県">熊本県</option>
                                        <option value="大分県">大分県</option>
                                        <option value="宮崎県">宮崎県</option>
                                        <option value="鹿児島県">鹿児島県</option>
                                        <option value="沖縄県">沖縄県</option>
                                    </select>
                                </label>
                                <label>（送付先）丁目番地：<input type="text" name="delivery_addr" placeholder=""></label>
                                <label>（送付先）建物名等：<input type="text" name="delivery_addr2" placeholder=""></label>
                            </div>
                        </dd>
                    </dl>

                </div>

                <div class="optMessage">
                    <span>紙袋の必要な方は、備考欄にご記入お願い致します。</span>
                </div>
            </div>
        </div>

        <div class="card">
            <h2>お客様情報</h2>

            <dl class="orderTable">
                <dt>お名前<span class="hissu">必須</span></dt>
                <dd>
                    <input type="text" name="customer_name" placeholder="例)森下　太郎">
                </dd>
            </dl>

            <dl class="orderTable">
                <dt>フリガナ</dt>
                <dd>
                    <input type="text" name="customer_kana" placeholder="例)モリシタ　タロウ">
                </dd>
            </dl>

            <dl class="orderTable">
                <dt>お電話番号<span class="hissu">必須</span></dt>
                <dd>
                    <input type="text" name="customer_phone" placeholder="例)0123-88-0051">
                </dd>
            </dl>

            <dl class="orderTable">
                <dt>ご住所<span class="hissu">必須</span></dt>
                <dd>
                    <div class="address">
                        <label>郵便番号：<input type="text" name="customer_zip" placeholder=""></label>
                        <label>都道府県：
                            <select name="customer_pref">
                                <option value="" selected="selected">選択してください</option>
                                <option value="北海道">北海道</option>
                                <option value="青森県">青森県</option>
                                <option value="岩手県">岩手県</option>
                                <option value="秋田県">秋田県</option>
                                <option value="宮城県">宮城県</option>
                                <option value="山形県">山形県</option>
                                <option value="福島県">福島県</option>
                                <option value="茨城県">茨城県</option>
                                <option value="栃木県">栃木県</option>
                                <option value="群馬県">群馬県</option>
                                <option value="埼玉県">埼玉県</option>
                                <option value="千葉県">千葉県</option>
                                <option value="東京都">東京都</option>
                                <option value="神奈川県">神奈川県</option>
                                <option value="山梨県">山梨県</option>
                                <option value="新潟県">新潟県</option>
                                <option value="長野県">長野県</option>
                                <option value="富山県">富山県</option>
                                <option value="石川県">石川県</option>
                                <option value="福井県">福井県</option>
                                <option value="岐阜県">岐阜県</option>
                                <option value="静岡県">静岡県</option>
                                <option value="愛知県">愛知県</option>
                                <option value="三重県">三重県</option>
                                <option value="滋賀県">滋賀県</option>
                                <option value="京都府">京都府</option>
                                <option value="大阪府">大阪府</option>
                                <option value="兵庫県">兵庫県</option>
                                <option value="奈良県">奈良県</option>
                                <option value="和歌山県">和歌山県</option>
                                <option value="鳥取県">鳥取県</option>
                                <option value="島根県">島根県</option>
                                <option value="岡山県">岡山県</option>
                                <option value="広島県">広島県</option>
                                <option value="山口県">山口県</option>
                                <option value="徳島県">徳島県</option>
                                <option value="香川県">香川県</option>
                                <option value="愛媛県">愛媛県</option>
                                <option value="高知県">高知県</option>
                                <option value="福岡県">福岡県</option>
                                <option value="佐賀県">佐賀県</option>
                                <option value="長崎県">長崎県</option>
                                <option value="熊本県">熊本県</option>
                                <option value="大分県">大分県</option>
                                <option value="宮崎県">宮崎県</option>
                                <option value="鹿児島県">鹿児島県</option>
                                <option value="沖縄県">沖縄県</option>
                            </select>
                        </label>
                        <label>丁目番地：<input type="text" name="customer_addr" placeholder=""></label>
                        <label>建物名等：<input type="text" name="customer_addr2" placeholder=""></label>
                    </div>
                </dd>
            </dl>

            <dl class="orderTable">
                <dt>E-mail<span class="hissu">必須</span></dt>
                <dd>
                    <input type="text" name="customer_email" placeholder="">
                </dd>
            </dl>

            <dl class="orderTable">
                <dt>備考欄(その他ご質問など)</dt>
                <dd>
                    <textarea name="customer_note" rows="10"></textarea>
                </dd>
            </dl>

            <dl class="orderTable">
                <dt>個人情報の取り扱いについて<span class="hissu">必須</span></dt>
                <dd>
                    <div>
                        <p>個人情報の取り扱いにつきましては、<a href="https://msyofuan.com/privacy">こちら</a>をご覧ください。</p>
                        <label><input type="checkbox" name="customer_privacy" value="同意します">個人情報の取り扱いについて同意をします。</label>
                    </div>
                </dd>
            </dl>

            <button type="submit" class="btn_submit">確認する</button>

        </div>

    </form>
@endsection

@section('css')
@endsection

@section('js')
<script>
    $(function () {

        /**
        *
        * ご注文
        *
        */

        /*サイズ・数量　合計金額*/
        var priceSum = function () {
            $('.orderNet').on('input', function () {
                var total_sum = 0;

                $(".orderNet").each(function () {
                    var get_textbox_value = $(this).val();
                    var get_data_price = $(this).data('price');
                    if ($.isNumeric(get_textbox_value)) {
                        total_sum += parseFloat(get_textbox_value * get_data_price);
                    }
                });
                total_sum = total_sum.toString().replace(/(\d)(?=(\d{3})+$)/g, '$1,');
                $("input[name='合計']").val(total_sum);
            });
        }

        /*オプション　のし*/
        var Noshi = function () {
            $('input[name="noshi"]:radio').change(function () {
                var radioval = $(this).val();
                if (radioval == 'あり') {
                    $('#noshi').addClass('open');
                } else {
                    $('#noshi').removeClass('open');
                }
            });
        }

        /*オプション　送付先*/
        var delivery = function () {
            $('input[name="delivery"]:radio').change(function () {
                var radioval = $(this).val();
                if (radioval == '別住所') {
                    $('#delivery').addClass('open');
                } else {
                    $('#delivery').removeClass('open');
                }
            });
        }
        priceSum();
        Noshi();	//オプション　のし
        delivery();	//オプション　送付先

    });
</script>
@endsection
