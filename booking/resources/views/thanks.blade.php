@extends('layouts.website')

@section('content_header')
    <h1>TANKS | 予約フォーム</h1>
@stop

@section('content')
    <div id="app" class="p-3">

        <div class="row">

            <div class="col-12">

                <h2 class="text-center">正常に送信されました。</h2>

                <div class="mt-5 text-center">
                    <a href="{{ route('form.index') }}" class="btn btn-primary">トップへ戻る</a>
                </div>

            </div>

        </div>

    </div>

@stop

@section('css')
@stop

@section('js')

@stop
