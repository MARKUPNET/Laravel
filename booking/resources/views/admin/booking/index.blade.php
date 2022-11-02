@extends('adminlte::page')

@section('title', '予約リスト')

@section('content_header')
    <h1>予約リスト</h1>
@stop

@section('content')

    <div id="app" class="p-3">

        <div class="row">
            <div class="col-12">
                <a href="{{ route('booking.create') }}" class="btn btn-primary">新規登録</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                @if( $message = Session::get('success'))
                <div class="alert alert-success mt-3"><p>{{ $message }}</p></div>
                @endif
            </div>
        </div>

        @if ( count($bookings) > 0 )

            <div class="card mt-3 p-2">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>予約日</th>
                            <th>時間帯</th>
                            <th>名前</th>
                            <th>人数</th>
                            <th>プラン名</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $booking)
                        <tr>
                            <td>{{ $booking['id'] }}</td>
                            <td><a href="{{ route('booking.show', $booking->id) }}?page_id={{ $page_id }}">{{ $booking['date'] }}</a></td>
                            <td>{{ $booking->time->timeslot }}</td>
                            <td>{{ $booking->guest->name }}</td>
                            <td>{{ $booking['person'] }}</td>
                            <td>{{ $booking->plan->name }}</td>
                            <td><a href="{{ route('booking.edit', $booking->id) }}" class="btn btn-primary">編集</a></td>
                            <td>
                                <form action="{{ route('booking.destroy', $booking->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick='return confirm("削除しますか？")'>削除</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {!! $bookings->links('pagination::bootstrap-5') !!}

        @else
            <p>データが存在しません</p>
        @endif

    </div>
@stop

@section('css')
    <link href="{{ asset('css/admin_custom.css') }}" rel="stylesheet" />
@stop

@section('js')

@stop
