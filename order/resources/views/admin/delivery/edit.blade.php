@extends('adminlte::page')

@section('title', '送付先')

@section('content_header')
    <h1>送付先</h1>
@stop

@section('content')
    <div id="app">
        <div class="row">
            <div class="col-12 col-md-6">

                <div class="mt-3">
                    <a href="{{ route('order.show', $id ) }}" class="btn btn-primary">戻る</a>
                </div>

                <div class="mt-3">

                    <form action="{{ route('delivery.update', $id) }}" method="post">

                        @csrf

                        <div class="row">

                            <div class="col-12 mb-2 mt-2">
                                <div class="form-group">
                                    <dl class="plan_name d-flex align-items-center">
                                        <dt class="col-4"></dt>
                                        <dd class="col-8 m-0">
                                            <label><input type="radio" name="status" value="1" @if($delivery->status == 1) checked @endif>別住所</label>
                                            <label><input type="radio" name="status" value="0" @if($delivery->status == 0) checked @endif>お客様情報と同じ</label>
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                            <div class="col-12 mb-2 mt-2">
                                <div class="form-group">
                                    <dl class="plan_name d-flex align-items-center">
                                        <dt class="col-4">（送付先）お名前</dt>
                                        <dd class="col-8 m-0">
                                            <input name="name" type="text" value="{{ $delivery->name }}">
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                            <div class="col-12 mb-2 mt-2">
                                <div class="form-group">
                                    <dl class="plan_name d-flex align-items-center">
                                        <dt class="col-4">（送付先）フリガナ</dt>
                                        <dd class="col-8 m-0">
                                            <input name="kana" type="text" value="{{ $delivery->kana }}">
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                            <div class="col-12 mb-2 mt-2">
                                <div class="form-group">
                                    <dl class="plan_name d-flex align-items-center">
                                        <dt class="col-4">（送付先）お電話番号</dt>
                                        <dd class="col-8 m-0">
                                            <input name="phone" type="text" value="{{ $delivery->phone }}">
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                            <div class="col-12 mb-2 mt-2">
                                <div class="form-group">
                                    <dl class="plan_name d-flex align-items-center">
                                        <dt class="col-4">（送付先）ご住所</dt>
                                        <dd class="col-8 m-0">
                                            <div class="address">
                                                <label>（送付先）郵便番号：<input type="text" name="zip" value="{{ $delivery->zip }}" id="opt_delivery_zip"></label>
                                                <label>（送付先）都道府県：
                                                    <select name="pref">
                                                        <option value="" selected="selected">選択してください</option>
                                                        <option value="北海道" @if($delivery->pref == '北海道') selected="selected" @endif>北海道</option>
                                                        <option value="青森県" @if($delivery->pref == '青森県') selected="selected" @endif>青森県</option>
                                                        <option value="岩手県" @if($delivery->pref == '岩手県') selected="selected" @endif>岩手県</option>
                                                        <option value="秋田県" @if($delivery->pref == '秋田県') selected="selected" @endif>秋田県</option>
                                                        <option value="宮城県" @if($delivery->pref == '宮城県') selected="selected" @endif>宮城県</option>
                                                        <option value="山形県" @if($delivery->pref == '山形県') selected="selected" @endif>山形県</option>
                                                        <option value="福島県" @if($delivery->pref == '福島県') selected="selected" @endif>福島県</option>
                                                        <option value="茨城県" @if($delivery->pref == '茨城県') selected="selected" @endif>茨城県</option>
                                                        <option value="栃木県" @if($delivery->pref == '栃木県') selected="selected" @endif>栃木県</option>
                                                        <option value="群馬県" @if($delivery->pref == '群馬県') selected="selected" @endif>群馬県</option>
                                                        <option value="埼玉県" @if($delivery->pref == '埼玉県') selected="selected" @endif>埼玉県</option>
                                                        <option value="千葉県" @if($delivery->pref == '千葉県') selected="selected" @endif>千葉県</option>
                                                        <option value="東京都" @if($delivery->pref == '東京都') selected="selected" @endif>東京都</option>
                                                        <option value="神奈川県" @if($delivery->pref == '神奈川県') selected="selected" @endif>神奈川県</option>
                                                        <option value="山梨県" @if($delivery->pref == '山梨県') selected="selected" @endif>山梨県</option>
                                                        <option value="新潟県" @if($delivery->pref == '新潟県') selected="selected" @endif>新潟県</option>
                                                        <option value="長野県" @if($delivery->pref == '長野県') selected="selected" @endif>長野県</option>
                                                        <option value="富山県" @if($delivery->pref == '富山県') selected="selected" @endif>富山県</option>
                                                        <option value="石川県" @if($delivery->pref == '石川県') selected="selected" @endif>石川県</option>
                                                        <option value="福井県" @if($delivery->pref == '福井県') selected="selected" @endif>福井県</option>
                                                        <option value="岐阜県" @if($delivery->pref == '岐阜県') selected="selected" @endif>岐阜県</option>
                                                        <option value="静岡県" @if($delivery->pref == '静岡県') selected="selected" @endif>静岡県</option>
                                                        <option value="愛知県" @if($delivery->pref == '愛知県') selected="selected" @endif>愛知県</option>
                                                        <option value="三重県" @if($delivery->pref == '三重県') selected="selected" @endif>三重県</option>
                                                        <option value="滋賀県" @if($delivery->pref == '滋賀県') selected="selected" @endif>滋賀県</option>
                                                        <option value="京都府" @if($delivery->pref == '京都府') selected="selected" @endif>京都府</option>
                                                        <option value="大阪府" @if($delivery->pref == '大阪府') selected="selected" @endif>大阪府</option>
                                                        <option value="兵庫県" @if($delivery->pref == '兵庫県') selected="selected" @endif>兵庫県</option>
                                                        <option value="奈良県" @if($delivery->pref == '奈良県') selected="selected" @endif>奈良県</option>
                                                        <option value="和歌山県" @if($delivery->pref == '和歌山県') selected="selected" @endif>和歌山県</option>
                                                        <option value="鳥取県" @if($delivery->pref == '鳥取県') selected="selected" @endif>鳥取県</option>
                                                        <option value="島根県" @if($delivery->pref == '島根県') selected="selected" @endif>島根県</option>
                                                        <option value="岡山県" @if($delivery->pref == '岡山県') selected="selected" @endif>岡山県</option>
                                                        <option value="広島県" @if($delivery->pref == '広島県') selected="selected" @endif>広島県</option>
                                                        <option value="山口県" @if($delivery->pref == '山口県') selected="selected" @endif>山口県</option>
                                                        <option value="徳島県" @if($delivery->pref == '徳島県') selected="selected" @endif>徳島県</option>
                                                        <option value="香川県" @if($delivery->pref == '香川県') selected="selected" @endif>香川県</option>
                                                        <option value="愛媛県" @if($delivery->pref == '愛媛県') selected="selected" @endif>愛媛県</option>
                                                        <option value="高知県" @if($delivery->pref == '高知県') selected="selected" @endif>高知県</option>
                                                        <option value="福岡県" @if($delivery->pref == '福岡県') selected="selected" @endif>福岡県</option>
                                                        <option value="佐賀県" @if($delivery->pref == '佐賀県') selected="selected" @endif>佐賀県</option>
                                                        <option value="長崎県" @if($delivery->pref == '長崎県') selected="selected" @endif>長崎県</option>
                                                        <option value="熊本県" @if($delivery->pref == '熊本県') selected="selected" @endif>熊本県</option>
                                                        <option value="大分県" @if($delivery->pref == '大分県') selected="selected" @endif>大分県</option>
                                                        <option value="宮崎県" @if($delivery->pref == '宮崎県') selected="selected" @endif>宮崎県</option>
                                                        <option value="鹿児島県" @if($delivery->pref == '鹿児島県') selected="selected" @endif>鹿児島県</option>
                                                        <option value="沖縄県" @if($delivery->pref == '沖縄県') selected="selected" @endif>沖縄県</option>
                                                    </select>
                                                </label>
                                                <label>（送付先）丁目番地：<input type="text" name="addr" value="{{ $delivery->addr }}"></label>
                                                <label>（送付先）建物名等：<input type="text" name="addr2" value="{{ $delivery->addr2 }}"></label>
                                            </div>
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary">更新する</button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ config('app.url') }}/css/admin.css">
@stop

@section('js')
@stop
