@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ご注文一覧</h1>
@stop

@section('content')
    <div id="app">
        <div class="row">
            <div class="col-12">

                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">注文番号</th>
                                <th scope="col">商品名</th>
                                <th scope="col">合計金額</th>
                                <th scope="col">お客様</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody class="table-striped">

                            @foreach($orders as $order)
                            <tr>
                                <th scope="row">{{ $order->id }}</th>
                                <td><a href="{{ route('order.show', $order->id) }}">{{ $order->serialnumber }}</a></td>
                                <td>{{ $order->products->name }}</td>
                                <td>{{ number_format($order->pricesum) }}</td>
                                <td>{{ $order->guests->name }}</td>
                                <td>{{ $order->guests->email }}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
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