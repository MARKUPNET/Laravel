@extends('adminlte::page')

@section('title', '予約データ編集')

@section('content_header')
    <h1>予約データ詳細</h1>
@stop

@section('content')

    <div id="app" class="p-3">

        <div class="row">

            <div class="col-12 col-lg-6">

                <div class="row">

                    <div class="col-12 mb-2 mt-2">
                        <div class="form-group">
                            <dl class="d-flex align-items-center">
                                <dt class="col-4">予約日</dt>
                                <dd class="col-8 m-0">
                                    {{ $booking->date }}
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="col-12 mb-2 mt-2">
                        <div class="form-group">
                            <dl class="d-flex align-items-center">
                                <dt class="col-4">時間帯</dt>
                                <dd class="col-8 m-0">
                                    {{ $booking->time->timeslot }}
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="col-12 mb-2 mt-2">
                        <div class="form-group">
                            <dl class="d-flex align-items-center">
                                <dt class="col-4">プラン名</dt>
                                <dd class="col-8 m-0">
                                    {{ $booking->plan->name }}
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="col-12 mb-2 mt-2">
                        <div class="form-group">
                            <dl class="d-flex align-items-center">
                                <dt class="col-4">人数</dt>
                                <dd class="col-8 row align-items-center m-0">
                                    {{ $booking->person }}人
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="col-12 mb-2 mt-2">
                        <div class="form-group">
                            <dl class="d-flex align-items-center">
                                <dt class="col-4">連絡事項</dt>
                                <dd class="col-8 row align-items-center m-0">
                                    {{ $booking->note }}
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="col-12 mb-2 mt-2">
                        <div class="form-group">
                            <dl class="d-flex align-items-center">
                                <dt class="col-4">名前</dt>
                                <dd class="col-8 row align-items-center m-0">
                                    {{ $booking->guest->name }}
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="col-12 mb-2 mt-2">
                        <div class="form-group">
                            <dl class="d-flex align-items-center">
                                <dt class="col-4">電話番号</dt>
                                <dd class="col-8 row align-items-center m-0">
                                    {{ $booking->guest->phone }}
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="col-12 mb-2 mt-2">
                        <div class="form-group">
                            <dl class="d-flex align-items-center">
                                <dt class="col-4">メールアドレス</dt>
                                <dd class="col-8 row align-items-center m-0">
                                    {{ $booking->guest->email }}
                                </dd>
                            </dl>
                        </div>
                    </div>

                </div>

                <div class="mt-3">
                    <a href="{{ url('/admin/booking') }}?page={{ $page_id }}" class="btn btn-primary">戻る</a>
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
