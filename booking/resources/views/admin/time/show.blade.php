@extends('adminlte::page')

@section('title', '詳細 | 時間帯')

@section('content_header')
    <h1>詳細（時間帯）</h1>
@stop

@section('content')

    <div id="app" class="p-3">

        <div class="row">

            <div class="col-6">

                    <div class="row">

                        <div class="col-12 mb-2 mt-2">
                            <div class="form-group">
                                <dl class="time_timeslot d-flex align-items-center">
                                    <dt class="col-4">時間帯</dt>
                                    <dd class="col-8 row align-items-center m-0">
                                        {{ $time->timeslot }}
                                    </dd>
                                </dl>
                            </div>
                        </div>

                    </div>

                    <div class="mt-3">
                        <a href="{{ route('time.index') }}" class="btn btn-primary">戻る</a>
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
