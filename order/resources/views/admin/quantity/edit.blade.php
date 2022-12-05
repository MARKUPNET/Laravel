@extends('adminlte::page')

@section('title', '注文数')

@section('content_header')
    <h1>注文数</h1>
@stop

@section('content')
    <div id="app">
        <div class="row">
            <div class="col-12 col-md-6">

                <div class="mt-3">
                    <a href="#" onClick="history.back(); return false;" class="btn btn-primary">戻る</a>
                </div>

                <div class="mt-3">
                    <div>
                        <h3>商品名：{{ $order->products->name }}</h3>
                    </div>
                    <form action="{{ route('quantity.update', $order->id) }}" method="get">

                        @csrf

                        <input type="hidden" name="orders_id" value="">
                        <input type="hidden" name="items_id" value="">

                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">商品名</th>
                                        <th scope="col">単価</th>
                                        <th scope="col">数量</th>
                                    </tr>
                                </thead>
                                <tbody class="table-striped">
                                    @foreach($quantities as $quantity)
                                    <tr>
                                        <td>{{ $quantity->items->name }}</td>
                                        <td>{{ $quantity->items->price }}</td>
                                        <td>
                                            <input type="text" name="quantity" value="{{ $quantity->quantity }}" class="form-control">
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </form>

                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">更新する</button>
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
