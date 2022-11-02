@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>ダッシュボード</h1>
@stop

@section('content')
    <div id="app" class="p-3">
        <div class="admin__dashboard">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card text-center p-5">
                        <a href="{{ route('calendar.index') }}">
                            <i class="fas fa-calendar-alt"></i>
                            <p>BOOKING CALENDER</p>
                            <h2>予約カレンダー</h2>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card text-center p-5">
                        <a href="{{ route('booking.index') }}">
                            <i class="far fa-list-alt"></i>
                            <p>Booking LIST</p>
                            <h2>予約リスト</h2>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card text-center p-5">
                        <a href="{{ route('booking.create') }}">
                            <i class="fas fa-edit"></i>
                            <p>REGIST</p>
                            <h2>追加・編集</h2>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card text-center p-5">
                        <a href="{{ route('setting.index') }}">
                            <i class="fas fa-cog"></i>
                            <p>SETTING</p>
                            <h2>各種設定</h2>
                        </a>
                    </div>
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
