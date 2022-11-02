@extends('adminlte::page')

@section('title', '時間帯')

@section('content_header')
    <h1>時間帯</h1>
@stop

@section('content')

    <div id="app">

        <div class="row p-3">

            <div class="col-12 col-md-8">

                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('time.create') }}" class="btn btn-primary">新規登録</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        @if( $message = Session::get('success'))
                        <div class="alert alert-success mt-3"><p>{{ $message }}</p></div>
                        @endif
                    </div>
                </div>

                <div class="row mt-3">

                    <div class="col-12">

                        @if ( count($times) > 0 )
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>時間帯</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($times as $data)
                                    <tr>
                                        <td>{{ $data['id'] }}</td>
                                        <td><a href="{{ route('time.show', $data->id) }}">{{ $data['timeslot'] }}</a></td>
                                        <td>
                                            <a href="{{ route('time.edit', $data->id) }}" class="btn btn-primary">編集</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('time.destroy', $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick='return confirm("削除しますか？")'>削除</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>データが存在しません</p>
                        @endif

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
