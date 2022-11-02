@extends('adminlte::page')

@section('title', '新規登録')

@section('content_header')
    <h1>新規登録</h1>
@stop

@section('content')

    <div id="app" class="p-3">

        <div class="row">

            <div class="col-12 col-lg-6">

                <form action="{{ route('booking.store') }}" method="POST">
                    @csrf

                    <div class="row">

                        <div class="col-12 mb-2 mt-2">
                            <div class="form-group">
                                <dl class="d-flex align-items-center">
                                    <dt class="col-4">予約日</dt>
                                    <dd class="col-8 m-0">
                                        <input type="date" name="date" value="" class="form-control">
                                        @error('date')
                                        <p style="color: #f00;">必須項目です</p>
                                        @enderror
                                    </dd>
                                </dl>
                            </div>
                        </div>

                        <div class="col-12 mb-2 mt-2">
                            <div class="form-group">
                                <dl class="d-flex align-items-center">
                                    <dt class="col-4">時間帯</dt>
                                    <dd class="col-8 m-0">
                                        <select name="time_id" class="form-control">
                                            <option value="">選択してください</option>
                                            @foreach($times as $time)
                                            <option value="{{ $time->id }}">{{ $time->timeslot }}</option>
                                            @endforeach
                                        </select>
                                        @error('time_id')
                                        <p style="color: #f00;">必須項目です</p>
                                        @enderror
                                    </dd>
                                </dl>
                            </div>
                        </div>

                        <div class="col-12 mb-2 mt-2">
                            <div class="form-group">
                                <dl class="d-flex align-items-center">
                                    <dt class="col-4">プラン名</dt>
                                    <dd class="col-8 m-0">
                                        <select name="plan_id" class="form-control">
                                            <option value="">選択してください</option>
                                            @foreach($plans as $plan)
                                            <option value="{{ $plan->id }}">{{ $plan->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('plan_id')
                                        <p style="color: #f00;">必須項目です</p>
                                        @enderror
                                    </dd>
                                </dl>
                            </div>
                        </div>

                        <div class="col-12 mb-2 mt-2">
                            <div class="form-group">
                                <dl class="d-flex align-items-center">
                                    <dt class="col-4">人数</dt>
                                    <dd class="col-8 row align-items-center m-0">
                                        <input type="text" name="person" class="form-control col-3" value="" width="10">人
                                        @error('person')
                                        <p class="col-12" style="color: #f00;">必須項目です</p>
                                        @enderror
                                    </dd>
                                </dl>
                            </div>
                        </div>

                        <div class="col-12 mb-2 mt-2">
                            <div class="form-group">
                                <dl class="d-flex align-items-center">
                                    <dt class="col-4">連絡事項</dt>
                                    <dd class="col-8 row align-items-center m-0">
                                        <textarea name="note" class="form-control" rows="4"></textarea>
                                    </dd>
                                </dl>
                            </div>
                        </div>

                        <div class="col-12 mb-2 mt-2">
                            <div class="form-group">
                                <dl class="d-flex align-items-center">
                                    <dt class="col-4">お名前</dt>
                                    <dd class="col-8 row align-items-center m-0">
                                        <input type="text" name="guest" class="form-control" value="">
                                        @error('guest')
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
                                    <dd class="col-8 row align-items-center m-0">
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
                                    <dt class="col-4">メールアドレス</dt>
                                    <dd class="col-8 row align-items-center m-0">
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
