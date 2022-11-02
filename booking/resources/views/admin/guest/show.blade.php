@extends('adminlte::page')

@section('title', '詳細 | 顧客データ')

@section('content_header')
    <h1>詳細（顧客データ）</h1>
@stop

@section('content')

    <div id="app">

        <div class="row p-3">

            <div class="col-12 col-md-8">

                <div class="row">

                    <div class="col-12 mb-2 mt-2">
                        <div class="form-group">
                            <dl class="d-flex align-items-center">
                                <dt class="col-4">名前</dt>
                                <dd class="col-8 m-0">
                                    {{ $guest->name }}
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="col-12 mb-2 mt-2">
                        <div class="form-group">
                            <dl class="d-flex align-items-center">
                                <dt class="col-4">電話番号</dt>
                                <dd class="col-8 m-0">
                                    {{ $guest->phone }}
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="col-12 mb-2 mt-2">
                        <div class="form-group">
                            <dl class="d-flex align-items-center">
                                <dt class="col-4">Eメール</dt>
                                <dd class="col-8 m-0">
                                    {{ $guest->email }}
                                </dd>
                            </dl>
                        </div>
                    </div>

                </div>

                <div class="mt-3">
                    <a href="{{ route('guest.index') }}" class="btn btn-primary">戻る</a>
                </div>

            </div>

        </div>

    </div>

@stop

@section('css')
    <link href="{{ asset('css/admin_custom.css') }}" rel="stylesheet" />
@stop

@section('js')

@stop
