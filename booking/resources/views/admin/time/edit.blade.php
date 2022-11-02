@extends('adminlte::page')

@section('title', '編集 | 時間帯')

@section('content_header')
    <h1>編集(時間帯)</h1>
@stop

@section('content')

    <div id="app" class="p-3">

        <div class="row">

            <div class="col-12 col-md-6">

                <form action="{{ route('time.update', $time->id) }}" method="POST">

                    @csrf

                    <div class="row">

                        <div class="col-12 mb-2 mt-2">
                            <div class="form-group">
                                <dl class="time_timeslot d-flex align-items-center">
                                    <dt class="col-4">時間帯</dt>
                                    <dd class="col-8 m-0">
                                        <input type="text" name="timeslot" class="form-control" value="{{ $time->timeslot }}">
                                        @error('timeslot')
                                        <p class="col-12" style="color: #f00;">必須項目です</p>
                                        @enderror
                                    </dd>
                                </dl>
                            </div>
                        </div>

                        <div class="col-12 mb-2 mt-2">
                            <button type="submit" class="btn btn-primary w-100">更新</button>
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
