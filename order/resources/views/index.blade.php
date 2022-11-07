@extends('layouts.web')

@section('page_header')
    <h1>商品一覧</h1>
@stop

@section('content')
    <ul class="products">

        @foreach( $products as $product)
        <li><a href="{{ route('shopping.index', $product->id) }}">{{ $product->name }}</a></li>
        @endforeach

    </ul>
@endsection

@section('css')
@endsection

@section('js')
@endsection
