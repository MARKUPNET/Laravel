@extends('adminlte::page')

@section('title', 'ご注文詳細')

@section('content_header')
    <h1>ご注文詳細</h1>
@stop

@section('content')
    <div id="app">
        <div class="row">
            <div class="col-12">

                <div class="mt-3">
                    <a href="{{ route('admin.index') }}" class="btn btn-primary">戻る</a>
                </div>

                <div class="mt-3">

                    <div class="row">
                        <div class="col-12 col-md-4">
                            <table class="table table-bordered">
                                <tr>
                                    <th class="bg-success">注文番号</th>
                                    <td>{{ $order->serialnumber }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>

                <div class="mt-3">

                    <div class="row justify-content-between">

                        <div class="col-12 col-md-6">

                            <div>
                                <h4>■商品名</h4>
                                <h4 class="pl-3">{{ $order->products->name }}</h4>
                            </div>

                            <div class="mt-5">
                                <h4>■商品内容</h4>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>商品名</th>
                                            <th class="text-center">数量</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($quantities as $quantity)
                                        <tr>
                                            <td>{{ $quantity->items->name }}</td>
                                            <td class="text-center">{{ $quantity->quantity }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr class="table-dark">
                                            <th>合計金額</th>
                                            <td class="text-center">{{ number_format($order->pricesum) }}</td>
                                        </tr>
                                    </tfoot>
                                </table>

                                <div class="p-1 text-center">
                                    <a href="{{ route('quantity.edit', $order->id) }}" class="btn btn-primary">編集</a>
                                </div>

                            </div>

                        </div>

                        <div class="col-12 col-md-6">

                            <h4>■お客様情報</h4>

                            <div class="card p-3">

                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th class="bg-info w180px">お名前</th>
                                            <td>{{ $order->guests->name }}</td>
                                        </tr>
                                        <tr>
                                            <th class="bg-info">フリガナ</th>
                                            <td>{{ $order->guests->kana }}</td>
                                        </tr>
                                        <tr>
                                            <th class="bg-info">電話番号</th>
                                            <td>{{ $order->guests->phone }}</td>
                                        </tr>
                                        <tr>
                                            <th class="bg-info">郵便番号</th>
                                            <td>{{ $order->guests->zip }}</td>
                                        </tr>
                                        <tr>
                                            <th class="bg-info">住所</th>
                                            <td>{{ $order->guests->pref }}{{ $order->guests->addr }}{{ $order->guests->addr2 }}</td>
                                        </tr>
                                        <tr>
                                            <th class="bg-info">Email</th>
                                            <td>{{ $order->guests->email }}</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="p-1 text-center">
                                    <a href="{{ route('guest.edit', $order->guests->id) }}" class="btn btn-primary">編集</a>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="mt-3">

                    <div class="row justify-content-between">

                        <div class="col-12 col-md-6">

                            <h4>■のし</h4>

                            <div class="card p-3">

                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td colspan="2">{{ $order->noshis->status_name }}</td>
                                        </tr>
                                        @if( $order->noshis->status == 1 )
                                        <tr>
                                            <th class="bg-info w180px">（のし）種類</th>
                                            <td>{{ $order->noshis->type }}</td>
                                        </tr>
                                        <tr>
                                            <th class="bg-info">（のし）結び切り</th>
                                            <td>{{ $order->noshis->color }}</td>
                                        </tr>
                                        <tr>
                                            <th class="bg-info">（のし）位置</th>
                                            <td>{{ $order->noshis->position }}</td>
                                        </tr>
                                        <tr>
                                            <th class="bg-info">（のし）氏名</th>
                                            <td>{{ $order->noshis->name }}</td>
                                        </tr>
                                        <tr>
                                            <th class="bg-info">（のし）備考</th>
                                            <td>{{ $order->noshis->note }}</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>

                                <div class="p-1 text-center">
                                    <a href="{{ route('noshi.edit', $order->noshis->id) }}" class="btn btn-primary">編集</a>
                                </div>

                            </div>

                        </div>

                        <div class="col-12 col-md-6">

                            <h4>■送付先</h4>

                            <div class="card p-3">

                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td colspan="2">{{ $order->deliveries->status_name }}</td>
                                        </tr>
                                        @if( $order->deliveries->status == 1 )
                                        <tr>
                                            <th class="bg-info w180px">（送付先）氏名</th>
                                            <td>{{ $order->deliveries->name }}</td>
                                        </tr>
                                        <tr>
                                            <th class="bg-info">（送付先）フリガナ</th>
                                            <td>{{ $order->deliveries->kana }}</td>
                                        </tr>
                                        <tr>
                                            <th class="bg-info">（送付先）電話番号</th>
                                            <td>{{ $order->deliveries->phone }}</td>
                                        </tr>
                                        <tr>
                                            <th class="bg-info">（送付先）郵便番号</th>
                                            <td>{{ $order->deliveries->zip }}</td>
                                        </tr>
                                        <tr>
                                            <th class="bg-info">（送付先）住所</th>
                                            <td>{{ $order->deliveries->pref }}{{ $order->deliveries->addr }}{{ $order->deliveries->addr2 }}</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>

                                <div class="p-1 text-center">
                                    <a href="{{ route('delivery.edit', $order->deliveries->id) }}" class="btn btn-primary">編集</a>
                                </div>


                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin.css">
@stop

@section('js')
@stop
