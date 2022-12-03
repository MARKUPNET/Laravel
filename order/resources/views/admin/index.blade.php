@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div id="app">
        <div class="card col-12 col-lg-6">
            <div class="card-header">
                絞り込み
            </div>
            <div class="card-body">
                <form action="{{ route('admin.index') }}" method="get">
                    <div><span>商品名：</span></div>
                    <div class="mt-1 d-flex align-items-center">
                        <span>注文日：</span>
                        <div class="filter_year"><label class="m-0"><input type="text" name="y" value="{{ $request->y }}" size="6"><span class="ml-2 mr-2">年</span></label></div>
                        <div class="filter_month"><label class="m-0"><input type="text" name="m" value="{{ $request->m }}" size="6"><span class="ml-2 mr-2">月</span></label></div>
                        <div class="filter_day"><label class="m-0"><input type="text" name="d" value="{{ $request->d }}" size="6"><span class="ml-2 mr-2">日</span></label></div>
                    </div>
                    <div class="mt-3 row justify-content-center"><button class="btn btn-primary">絞り込み</button></div>
                </form>
            </div>
        </div>
        <div class="d-flex justify-content-end">全{{ $orders->count() }}件</div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">注文番号</th>
                                <th scope="col">注文日</th>
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
                                <td>{{ $order->created_at->format('Y年m月d日') }}</td>
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
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
