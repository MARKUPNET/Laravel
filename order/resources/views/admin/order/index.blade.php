@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ご注文一覧</h1>
@stop

@section('content')
    <div id="app">
        <div class="filter__block card">
            <div class="card-header">
                <div class="d-flex justify-content-between"><p class="m-0">絞り込み検索</p></div>
            </div>
            <div class="card-body">
                <form name="filterform" action="{{ route('order.index') }}" method="get">

                    @csrf

                    <dl class="filter__item d-flex align-items-center">
                        <dt>
                            <span>商品名：</span>
                        </dt>
                        <dd>
                            <select class="form-control" name="pName">
                                <option value=""></option>-</option>
                                @foreach ($productNames as $id => $name)
                                <option value="{{ $name }}" @if( $filter['pName'] === $name ) selected @endif>{{ $name }}</option>
                                @endforeach
                            </select>
                        </dd>
                    </dl>
                    <dl class="filter__item d-flex align-items-center">
                        <dt>
                            <span>注文日：</span>
                        </dt>
                        <dd>
                            <div class="filter__year"><label class="d-flex align-items-center m-0"><input class="form-control" type="text" name="y" value="{{ $filter['year'] }}" size="6"><span class="ml-2">年</span></label></div>
                            <div class="filter__month ml-2"><label class="d-flex align-items-center m-0"><input class="form-control" type="text" name="m" value="{{ $filter['month'] }}" size="6"><span class="ml-2">月</span></label></div>
                            <div class="filter__day ml-2"><label class="d-flex align-items-center m-0"><input class="form-control" type="text" name="d" value="{{ $filter['day'] }}" size="6"><span class="ml-2">日</span></label></div>
                        </dd>
                    </dl>
                    <div class="mt-3 row justify-content-center"><button class="btn btn-primary col-6">検索</button></div>
                    {{--  <div class="mt-3 row justify-content-center"><input type="reset" value="条件クリア" onclick="return confirm('入力内容を削除しますか？')" class="btn btn-secondary"></div>  --}}
                </form>
            </div>
        </div>
        {!! $orders->links('pagination::bootstrap-5') !!}
        <div class="row mt-3">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
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
                            <tr data-id="{{ $order->id }}">
                                <td><a href="{{ route('order.show', $order->id) }}">{{ $order->serialnumber }}</a></td>
                                <td>{{ $order->created_at->format('Y-m-d') }}</td>
                                <td>{{ $order->products->name }}</td>
                                <td>{{ number_format($priceSum[$order->id]) }}</td>
                                <td>{{ $order->guests->name }}</td>
                                <td>{{ $order->guests->email }}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {!! $orders->links('pagination::bootstrap-5') !!}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ config('app.url') }}/css/admin.css">
@stop

@section('js')
@stop
