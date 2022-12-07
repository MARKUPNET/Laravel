@extends('adminlte::page')

@section('title', '予約カレンダー')

@section('content_header')
    <h1>予約カレンダー</h1>
@stop

@section('content')
    <div id="app" class="p-5">
        <div id='calendar'></div>
    </div>
@stop

@section('css')
    <link href="{{ asset('fullcalendar-5.11.3/lib/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/admin_custom.css') }}" rel="stylesheet" />
@stop

@section('js')
        <script src="{{ asset('fullcalendar-5.11.3/lib/main.js') }}"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var url = "{{ config('APP.URL') }}";
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    locale: 'ja',
                    height: 'auto',
                    firstDay: 0,
                    headerToolbar: {
                        left: "dayGridMonth,timeGridWeek,listMonth",
                        center: "title",
                        right: "today prev,next"
                    },
                    buttonText: {
                        today: '今月',
                        month: '月',
                        week: '週',
                        list: 'リスト'
                    },
                    views: {
                        timeGridWeek: {
                          slotMinTime: '09:00:00',
                          slotMaxTime: '18:00:00'
                        },
                        timeGridDay: {
                          slotMinTime: '09:00:00',
                          slotMaxTime: '18:00:00'
                        }
                    },
                    noEventsContent: 'スケジュールはありません',
                    eventSources: [
                        {
                            url: url + '/getbookings',
                        },
                    ],
                    eventSourceFailure () {
                        console.error('エラーが発生しました。');
                    },
                    eventMouseEnter (info) {
                        $(info.el).popover({
                            title: info.event.title,
                            content: info.event.extendedProps.description,
                            trigger: 'hover',
                            placement: 'top',
                            container: 'body',
                            html: true
                        });
                    }

                });
                calendar.render();
            });
        </script>
@stop
