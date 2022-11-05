@extends('layouts.web')

@section('page_header')
    <h1>確認画面</h1>
@stop

@section('content')
    <form action="{{ route('shopping.thanks') }}" method="POST">

        <div class="card">
            <h2>ご注文内容</h2>

            <dl class="orderTable">
                <dt>商品名</dt>
                <dd>長沼かりんとう饅頭</dd>
            </dl>
        </div>

    </form>
@endsection

@section('css')
@endsection

@section('js')
@endsection
