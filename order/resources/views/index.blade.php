@extends('layouts.web')

@section('page_header')
    <h1>商品一覧</h1>
@stop

@section('content')
    <ul class="products">
        <li><a href="{{ route('shopping.index') }}">かりんとう饅頭</a></li>
        <li><a href="#">〇〇〇〇〇</a></li>
        <li><a href="#">〇〇〇〇〇</a></li>
    </ul>
@endsection

@section('css')
@endsection

@section('js')
@endsection
