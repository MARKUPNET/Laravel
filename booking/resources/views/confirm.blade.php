@extends('layouts.website')

@section('content_header')
    <h1>確認 | 予約フォーム</h1>
@stop

@section('content')
    <div id="app" class="p-3">

        <form action="{{ route('form.send') }}" method="POST">

            @csrf

            <div class="row">

                <div class="col-12 mb-2 mt-2">
                    <div class="form-group">
                        <dl class="d-flex align-items-center">
                            <dt class="col-4">日付</dt>
                            <dd class="col-8 m-0">
                                {{ $inputs['date'] }}
                                <input type="hidden" name="date" value="{{ $inputs['date'] }}">
                            </dd>
                        </dl>
                    </div>
                </div>

                <div class="col-12 mb-2 mt-2">
                    <div class="form-group">
                        <dl class="d-flex align-items-center">
                            <dt class="col-4">時間帯</dt>
                            <dd class="col-8 m-0">
                                {{ $inputs['time_name'] }}
                                <input type="hidden" name="time_id" value="{{ $inputs['time_id'] }}">
                            </dd>
                        </dl>
                    </div>
                </div>

                <div class="col-12 mb-2 mt-2">
                    <div class="form-group">
                        <dl class="d-flex align-items-center">
                            <dt class="col-4">プラン</dt>
                            <dd class="col-8 m-0">
                                {{ $inputs['plan_name'] }}
                                <input type="hidden" name="plan_id" value="{{ $inputs['plan_id'] }}">
                            </dd>
                        </dl>
                    </div>
                </div>

                <div class="col-12 mb-2 mt-2">
                    <div class="form-group">
                        <dl class="d-flex align-items-center">
                            <dt class="col-4">人数</dt>
                            <dd class="col-8 m-0">
                                {{ $inputs['person'] }}
                                <input type="hidden" name="person" value="{{ $inputs['person'] }}">
                            </dd>
                        </dl>
                    </div>
                </div>

                <div class="col-12 mb-2 mt-2">
                    <div class="form-group">
                        <dl class="d-flex align-items-center">
                            <dt class="col-4">連絡事項</dt>
                            <dd class="col-8 m-0">
                                {{ $inputs['note'] }}
                                <input type="hidden" name="note" value="{{ $inputs['note'] }}">
                            </dd>
                        </dl>
                    </div>
                </div>

                <div class="col-12 mb-2 mt-2">
                    <div class="form-group">
                        <dl class="d-flex align-items-center">
                            <dt class="col-4">お名前</dt>
                            <dd class="col-8 m-0">
                                {{ $inputs['guest'] }}
                                <input type="hidden" name="guest" value="{{ $inputs['guest'] }}">
                            </dd>
                        </dl>
                    </div>
                </div>

                <div class="col-12 mb-2 mt-2">
                    <div class="form-group">
                        <dl class="d-flex align-items-center">
                            <dt class="col-4">電話番号</dt>
                            <dd class="col-8 m-0">
                                {{ $inputs['phone'] }}
                                <input type="hidden" name="phone" value="{{ $inputs['phone'] }}">
                            </dd>
                        </dl>
                    </div>
                </div>

                <div class="col-12 mb-2 mt-2">
                    <div class="form-group">
                        <dl class="d-flex align-items-center">
                            <dt class="col-4">メールアドレス</dt>
                            <dd class="col-8 m-0">
                                {{ $inputs['email'] }}
                                <input type="hidden" name="email" value="{{ $inputs['email'] }}">
                            </dd>
                        </dl>
                    </div>
                </div>

                <div class="col-12 mb-2 mt-2 d-flex justify-content-center">
                    <button type="submit" name="action" value="back" class="btn btn-secondary">入力内容修正</button>
                    <button type="submit" name="action" value="submit" class="btn btn-primary">送信</button>
                </div>

            </div>

        </form>

    </div>

@stop

@section('css')
@stop

@section('js')

@stop
