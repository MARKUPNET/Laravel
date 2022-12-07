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
                <div class="mt-3 filter">
                    <form action="{{ route('booking.index') }}" method="get">
                        <span class="date-form">
                            <select id="year" name="year">
                                <option value="">---</option>
                                <?php $years = array_reverse(range(today()->year - 8, today()->year)); ?>
                                @foreach($years as $year)
                                  <option
                                      value="{{ $year }}"
                                      {{ $filter['year'] == $year ? 'selected' : '' }}
                                  >{{ $year }}</option>
                                @endforeach
                            </select>
                            <label for="year">年</label>
                        </span>
                        <span class="date-form">
                            <select id="month" name="month">
                                <option value="">---</option>
                                @foreach(range(1, 12) as $month)
                                  <option
                                      value="{{ $month }}"
                                      {{ $filter['month'] == $month ? 'selected' : '' }}
                                  >{{ $month }}</option>
                                @endforeach
                            </select>
                            <label for="month">月</label>
                        </span>
                        <span class="date-form">
                            <select id="day" name="day" data-old-value="{{ $filter['day'] }}">
                                <option value="">---</option>
                                @foreach(range(1, 31) as $day)
                                  <option
                                      value="{{ $day }}"
                                      {{ $filter['day'] == $day ? 'selected' : '' }}
                                  >{{ $day }}</option>
                                @endforeach
                            </select>
                            <label for="day">日</label>
                        </span>
                        <button class="button-secondary" name="action" value="select">日付選択</button>
                    </form>
                </div>
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

            <div class="card mt-3 p-3">
                <table class="m-0 table table-bordered table-hover">
                    <thead class="thead-dark">
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
            <p class="mt-3">データが存在しません</p>
        @endif

    </div>
@stop

@section('css')
    <link href="{{ asset('css/admin_custom.css') }}" rel="stylesheet" />
@stop

@section('js')
<script>
    function setDay() {
        // 年の値を取得
        const yearVal = document.getElementById('year').value;
        // 月の値を取得
        const monthVal = document.getElementById('month').value;
        // 日のセレクトボックスに挿入するHTML
        let html = '<option value="">---</option>';
        // 年月が有効な値の場合のみ日付の選択肢を加える
        if (yearVal !== '' && monthVal !== '') {
          // 特定の年月の最後の日付を取得する
          const lastDay = (new Date(yearVal, monthVal, 0)).getDate();

          // optionを組み立てる
          for (let day = 1; day <= lastDay; day++) {
            html += '<option value="' + day + '">' + day + '</option>';
          }
        }
        document.getElementById('day').innerHTML = html;
      };

      window.onload = function () {
        document.getElementById('year').addEventListener('change', setDay);
        document.getElementById('month').addEventListener('change', setDay);

        // リダイレクトした場合に元の入力値を復元する
        const dayElem = document.getElementById('day');
        dayElem.value = dayElem.getAttribute('data-old-value');
      }

</script>
@stop
