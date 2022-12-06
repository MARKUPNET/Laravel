@extends('adminlte::page')

@section('title', 'のし')

@section('content_header')
    <h1>のし</h1>
@stop

@section('content')
    <div id="app">
        <div class="row">
            <div class="col-12 col-md-6">

                <div class="mt-3">
                    <a href="{{ route('order.show', $id ) }}" class="btn btn-primary">戻る</a>
                </div>

                <div class="mt-3">

                    <form action="{{ route('noshi.update', $id) }}" method="post">

                        @csrf

                        <div class="row">

                            <div class="col-12 mb-2 mt-2">
                                <div class="form-group">
                                    <dl class="plan_name d-flex align-items-center">
                                        <dt class="col-4"></dt>
                                        <dd class="col-8 m-0">
                                            <label><input type="radio" name="status" value="1" @if($noshi->status == 1) checked @endif>あり</label>
                                            <label><input type="radio" name="status" value="0" @if($noshi->status == 0) checked @endif>なし</label>
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                            <div class="col-12 mb-2 mt-2">
                                <div class="form-group">
                                    <dl class="plan_name d-flex align-items-center">
                                        <dt class="col-4">（のし）種類</dt>
                                        <dd class="col-8 m-0">
                                            <ul class="optNoshiType">
                                                <li>
                                                    <label><input name="type" type="radio" value="なし" @if($noshi->type == 'なし') checked @endif>なし</label>
                                                </li>
                                                <li>
                                                    <label><input name="type" type="radio" value="お中元" @if($noshi->type == 'お中元') checked @endif>お中元</label>
                                                </li>
                                                <li>
                                                    <label><input name="type" type="radio" value="お歳暮" @if($noshi->type == 'お歳暮') checked @endif>お歳暮</label>
                                                </li>
                                                <li>
                                                    <img src="https://msyofuan.com/themes/theme_msyofuan/assets/images/order/noshi_a.jpg" alt="のし　イ">
                                                    <label><input name="type" type="radio" value="蝶結び　（イ）" @if($noshi->type == '蝶結び　（イ）') checked @endif>蝶結び　（イ）</label>
                                                </li>
                                                <li>
                                                    <img src="https://msyofuan.com/themes/theme_msyofuan/assets/images/order/noshi_b.jpg" alt="のし　ロ">
                                                    <label><input name="type" type="radio" value="蝶結び　（ロ）" @if($noshi->type == '蝶結び　（ロ）') checked @endif>蝶結び　（ロ）</label>
                                                </li>
                                                <li>
                                                    <img src="https://msyofuan.com/themes/theme_msyofuan/assets/images/order/noshi_c.jpg" alt="のし　ハ">
                                                    <label><input name="type" type="radio" value="蝶結び　（ハ）" @if($noshi->type == '蝶結び　（ハ）') checked @endif>蝶結び　（ハ）</label>
                                                </li>
                                                <li>
                                                    <img src="https://msyofuan.com/themes/theme_msyofuan/assets/images/order/noshi_d.jpg" alt="のし　ニ">
                                                    <label><input name="type" type="radio" value="結び切り（ニ）" @if($noshi->type == '結び切り（ニ）') checked @endif>結び切り（ニ）</label>
                                                </li>
                                                <li>
                                                    <img src="https://msyofuan.com/themes/theme_msyofuan/assets/images/order/noshi_e.jpg" alt="のし　ホ">
                                                    <label><input name="type" type="radio" value="結び切り（ホ）" @if($noshi->type == '結び切り（ホ）') checked @endif>結び切り（ホ）</label>
                                                </li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                            <div class="col-12 mb-2 mt-2">
                                <div class="form-group">
                                    <dl class="plan_name d-flex align-items-center">
                                        <dt class="col-4">（のし）結び切り　色</dt>
                                        <dd class="col-8 m-0">
                                            <label><input name="color" type="radio" value="なし" @if($noshi->color == 'なし') checked @endif>なし</label>
                                            <label><input name="color" type="radio" value="紅白" @if($noshi->color == '紅白') checked @endif>紅白</label>
                                            <label><input name="color" type="radio" value="黄白" @if($noshi->color == '黄白') checked @endif>黄白</label>
                                            <label><input name="color" type="radio" value="黒白" @if($noshi->color == '黒白') checked @endif>黒白</label>
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                            <div class="col-12 mb-2 mt-2">
                                <div class="form-group">
                                    <dl class="plan_name d-flex align-items-center">
                                        <dt class="col-4">（のし）位置</dt>
                                        <dd class="col-8 m-0">
                                            <label><input name="position" type="radio" value="なし" @if($noshi->position == 'なし') checked @endif>なし</label>
                                            <label><input name="position" type="radio" value="内のし（包装紙の内にのしを敷く）" @if($noshi->position == '内のし（包装紙の内にのしを敷く）') checked @endif>内のし（包装紙の内にのしを敷く）</label>
                                            <label><input name="position" type="radio" value="外のし（包装紙の外にのしを敷く）" @if($noshi->position == '外のし（包装紙の外にのしを敷く）') checked @endif>外のし（包装紙の外にのしを敷く）</label>
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                            <div class="col-12 mb-2 mt-2">
                                <div class="form-group">
                                    <dl class="plan_name d-flex align-items-center">
                                        <dt class="col-4">（のし）氏名</dt>
                                        <dd class="col-8 m-0">
                                            <input type="text" name="name" class="form-control" value="{{ $noshi->name }}">
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                            <div class="col-12 mb-2 mt-2">
                                <div class="form-group">
                                    <dl class="plan_name d-flex align-items-center">
                                        <dt class="col-4">（のし）備考</dt>
                                        <dd class="col-8 m-0">
                                            <textarea name="note" id="" class="form-control" cols="30" rows="10">{{ $noshi->note }}</textarea>
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                        <div>

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
