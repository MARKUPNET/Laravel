@extends('adminlte::page')

@section('title', '新規登録 | 顧客データ')

@section('content_header')
    <h1>新規登録（顧客データ）</h1>
@stop

@section('content')

    <div id="app">

        <div class="row p-3">

            <div class="col-12 col-md-8">

                <form action="{{ route('guest.store') }}" method="POST">

                    @csrf

                    <div class="row">

                        <div class="col-12 mb-2 mt-2">
                            <div class="form-group">
                                <dl class="d-flex align-items-center">
                                    <dt class="col-4">名前</dt>
                                    <dd class="col-8 m-0">
                                        <input type="text" name="name" class="form-control" value="">
                                        @error('name')
                                        <p class="col-12" style="color: #f00;">必須項目です</p>
                                        @enderror
                                    </dd>
                                </dl>
                            </div>
                        </div>

                        <div class="col-12 mb-2 mt-2">
                            <div class="form-group">
                                <dl class="d-flex align-items-center">
                                    <dt class="col-4">電話番号</dt>
                                    <dd class="col-8 m-0">
                                        <input type="text" name="phone" class="form-control" value="">
                                        @error('phone')
                                        <p class="col-12" style="color: #f00;">必須項目です</p>
                                        @enderror
                                    </dd>
                                </dl>
                            </div>
                        </div>

                        <div class="col-12 mb-2 mt-2">
                            <div class="form-group">
                                <dl class="d-flex align-items-center">
                                    <dt class="col-4">Eメール</dt>
                                    <dd class="col-8 m-0">
                                        <input type="text" name="email" class="form-control" value="">
                                        @error('email')
                                        <p class="col-12" style="color: #f00;">必須項目です</p>
                                        @enderror
                                    </dd>
                                </dl>
                            </div>
                        </div>

                        <div class="col-12 mb-2 mt-2">
                            <button type="submit" class="btn btn-primary w-100">登録</button>
                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

@stop

@section('css')
    <link href="{{ asset('css/admin_custom.css') }}" rel="stylesheet" />
@stop

@section('js')

@stop
