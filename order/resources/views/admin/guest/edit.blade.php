@extends('adminlte::page')

@section('title', 'お客様情報')

@section('content_header')
    <h1>お客様情報</h1>
@stop

@section('content')
    <div id="app">
        <div class="row">
            <div class="col-12 col-md-6">

                <div class="mt-3">
                    <a href="#" onClick="history.back(); return false;" class="btn btn-primary">戻る</a>
                </div>

                <div class="mt-3">

                    <form action="{{ route('guest.update', $guest->id) }}" method="POST">

                        @csrf

                        <div class="row">

                            <div class="col-12 mb-2 mt-2">
                                <div class="form-group">
                                    <dl class="plan_name d-flex align-items-center">
                                        <dt class="col-4">お名前</dt>
                                        <dd class="col-8 m-0">
                                            <input type="text" name="name" class="form-control" value="{{ $guest->name }}">
                                            @error('name')
                                            <p class="col-12" style="color: #f00;">必須項目です</p>
                                            @enderror
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                            <div class="col-12 mb-2 mt-2">
                                <div class="form-group">
                                    <dl class="plan_name d-flex align-items-center">
                                        <dt class="col-4">フリガナ</dt>
                                        <dd class="col-8 m-0">
                                            <input type="text" name="kana" class="form-control" value="{{ $guest->kana }}">
                                            @error('kana')
                                            <p class="col-12" style="color: #f00;">必須項目です</p>
                                            @enderror
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                            <div class="col-12 mb-2 mt-2">
                                <div class="form-group">
                                    <dl class="plan_name d-flex align-items-center">
                                        <dt class="col-4">お電話番号</dt>
                                        <dd class="col-8 m-0">
                                            <input type="text" name="phone" class="form-control" value="{{ $guest->phone }}">
                                            @error('phone')
                                            <p class="col-12" style="color: #f00;">必須項目です</p>
                                            @enderror
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                            <div class="col-12 mb-2 mt-2">
                                <div class="form-group">
                                    <dl class="plan_name d-flex align-items-center">
                                        <dt class="col-4">郵便番号</dt>
                                        <dd class="col-8 m-0">
                                            <input type="text" name="zip" class="form-control" value="{{ $guest->zip }}">
                                            @error('zip')
                                            <p class="col-12" style="color: #f00;">必須項目です</p>
                                            @enderror
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                            <div class="col-12 mb-2 mt-2">
                                <div class="form-group">
                                    <dl class="plan_name d-flex align-items-center">
                                        <dt class="col-4">都道府県</dt>
                                        <dd class="col-8 m-0">
                                            <input type="text" name="pref" class="form-control" value="{{ $guest->pref }}">
                                            @error('pref')
                                            <p class="col-12" style="color: #f00;">必須項目です</p>
                                            @enderror
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                            <div class="col-12 mb-2 mt-2">
                                <div class="form-group">
                                    <dl class="plan_name d-flex align-items-center">
                                        <dt class="col-4">丁目番地</dt>
                                        <dd class="col-8 m-0">
                                            <input type="text" name="addr" class="form-control" value="{{ $guest->addr }}">
                                            @error('addr')
                                            <p class="col-12" style="color: #f00;">必須項目です</p>
                                            @enderror
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                            <div class="col-12 mb-2 mt-2">
                                <div class="form-group">
                                    <dl class="plan_name d-flex align-items-center">
                                        <dt class="col-4">建物名等</dt>
                                        <dd class="col-8 m-0">
                                            <input type="text" name="addr2" class="form-control" value="{{ $guest->addr2 }}">
                                            @error('addr2')
                                            <p class="col-12" style="color: #f00;">必須項目です</p>
                                            @enderror
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                            <div class="col-12 mb-2 mt-2">
                                <div class="form-group">
                                    <dl class="plan_name d-flex align-items-center">
                                        <dt class="col-4">メールアドレス</dt>
                                        <dd class="col-8 m-0">
                                            <input type="text" name="email" class="form-control" value="{{ $guest->email }}">
                                            @error('email')
                                            <p class="col-12" style="color: #f00;">必須項目です</p>
                                            @enderror
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">更新する</button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin.css">
@stop

@section('js')
@stop
