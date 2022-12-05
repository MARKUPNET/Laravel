@extends('adminlte::page')

@section('title', '送付先')

@section('content_header')
    <h1>送付先</h1>
@stop

@section('content')
    <div id="app">
        <div class="row">
            <div class="col-12 col-md-6">

                <div class="mt-3">
                    <a href="#" onClick="history.back(); return false;" class="btn btn-primary">戻る</a>
                </div>

                <div class="mt-3">



                </div>

                <div class="mt-3">
                    <button class="btn btn-primary">更新する</button>
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
