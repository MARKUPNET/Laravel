@extends('layouts.web')

@section('page_header')
    <h1>ご注文</h1>
@stop

@section('content')
    <form action="{{ route('shopping.confirm') }}" method="POST">

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
                            <input name="長沼かりんとう饅頭（5本入り）" type="text" value="" class="orderNet mfp_element_text mfp_element_all mfp_defaultValue" data-charcheck="digit" data-format="$1 箱" data-price="700" autocomplete="off" id="mfp_element_2">箱
                        </li>
                        <li>
                            <span>8本入り（1,130円）・・・</span>
                            <input name="長沼かりんとう饅頭（8本入り）" type="text" value="" class="orderNet mfp_element_text mfp_element_all mfp_defaultValue" data-charcheck="digit" data-format="$1 箱" data-price="1130" autocomplete="off" id="mfp_element_3">箱
                        </li>
                        <li>
                            <span>10本入り（1,500円）・・・</span>
                            <input name="長沼かりんとう饅頭（10本入り）" type="text" value="" class="orderNet mfp_element_text mfp_element_all mfp_defaultValue" data-charcheck="digit" data-format="$1 箱" data-price="1500" autocomplete="off" id="mfp_element_4">箱
                        </li>
                        <li>
                            <span>15本入り（2,200円）・・・</span>
                            <input name="長沼かりんとう饅頭（15本入り）" type="text" value="" class="orderNet mfp_element_text mfp_element_all mfp_defaultValue" data-charcheck="digit" data-format="$1 箱" data-price="2200" autocomplete="off" id="mfp_element_5">箱
                        </li>
                        <li>
                            <span>20本入り（2,900円）・・・</span>
                            <input name="長沼かりんとう饅頭（20本入り）" type="text" value="" class="orderNet mfp_element_text mfp_element_all mfp_defaultValue" data-charcheck="digit" data-format="$1 箱" data-price="2900" autocomplete="off" id="mfp_element_6">箱
                        </li>
                        <li>
                            <span>27本入り（3,810円）・・・</span>
                            <input name="長沼かりんとう饅頭（27本入り）" type="text" value="" class="orderNet mfp_element_text mfp_element_all mfp_defaultValue" data-charcheck="digit" data-format="$1 箱" data-price="3810" autocomplete="off" id="mfp_element_7">箱
                        </li>
                        <li>
                            <span>簡易包装(5本入り4パックセット 2,200円)・・・</span>
                            <input name="長沼かりんとう饅頭（簡易包装5本入り4パックセット）" type="text" value="" class="orderNet mfp_element_text mfp_element_all mfp_defaultValue" data-charcheck="digit" data-format="$1 セット" data-price="2200" autocomplete="off" id="mfp_element_8">箱
                        </li>
                    </ul>
                </dd>
            </dl>

            <dl class="orderTable">
                <dt>商品合計金額</dt>
                <dd>
                    <input type="hidden" name="合計金額" data-join="合計+ 円">
                    <span id="priceSum">
                        <input type="text" name="合計" value="0" class="total_sum" autocomplete="off">円（税込）
                        <span class="caution">※別途送料がかかります。送料を含めた合計金額は後ほど、ご連絡差し上げます。</span>
                    </span>
                </dd>
            </dl>

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
            $('input[name="のし"]:radio').change(function () {
                var radioval = $(this).val();
                if (radioval == 'あり') {
                    $('#noshiWrap').addClass('open');
                } else {
                    $("#noshiWrap input:radio:checked").prop("checked", false);
                    $("#noshiWrap").find('input[type="text"]').val('');
                    $("#noshiWrap").find('textarea').val('');
                    $('#noshiWrap').removeClass('open');
                }
            });
        }

        /*オプション　送付先*/
        var delivery = function () {
            $('input[name="送付先"]:radio').change(function () {
                var radioval = $(this).val();
                if (radioval == '別住所') {
                    $('#deliveryAddrWrap').addClass('open');
                } else {
                    $("#deliveryAddrWrap").find('input[type="text"]').val('');
                    $('#deliveryAddrWrap').removeClass('open');
                }
            });
        }
        priceSum();
        Noshi();	//オプション　のし
        delivery();	//オプション　送付先

    });
</script>
@endsection
