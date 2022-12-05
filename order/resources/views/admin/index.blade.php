@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ダッシュボード</h1>
@stop

@section('content')
    <div id="app">
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
<script>
    function formReset() {
      document.filterform.reset();
    }
  </script>
@stop
