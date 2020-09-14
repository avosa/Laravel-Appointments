@extends('layouts.admin')
@section('styles')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css'/>
@endsection
@section('content')

    <div class="container mb-4">
        <div class="row">
            @if(isset($settings1))
                <div class="{{$settings1['column_class']}}">
                    <div class="card-counter {{$settings1['background_class']}}">
                        <i class="{{$settings1['icon_class']}}"></i>
                        <span class="count-numbers">{{number_format($settings1['total_number'])}}</span>
                        <span class="count-name">{{$settings1['chart_title']}}</span>
                    </div>
                </div>
            @endif

            @if(isset($settings2))
                <div class="{{$settings2['column_class']}}">
                    <div class="card-counter {{$settings2['background_class']}}">
                        <i class="{{$settings2['icon_class']}}"></i>
                        <span class="count-numbers">{{number_format($settings2['total_number'])}}</span>
                        <span class="count-name">{{$settings2['chart_title']}}</span>
                    </div>
                </div>
            @endif

            @if(isset($settings3))
                <div class="{{$settings3['column_class']}}">
                    <div class="card-counter {{$settings3['background_class']}}">
                        <i class="{{$settings3['icon_class']}}"></i>
                        <span class="count-numbers">{{number_format($settings3['total_number'])}}</span>
                        <span class="count-name">{{$settings3['chart_title']}}</span>
                    </div>
                </div>
            @endif

            @if(isset($settings4))
                <div class="{{$settings4['column_class']}}">
                    <div class="card-counter {{$settings4['background_class']}}">
                        <i class="{{$settings4['icon_class']}}"></i>
                        <span class="count-numbers">{{number_format($settings4['total_number'])}}</span>
                        <span class="count-name">{{$settings4['chart_title']}}</span>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <h3 class="page-title">{{ trans('global.systemCalendar') }}</h3>
    <div class="card">
        <div class="card-header">
            {{ trans('global.systemCalendar') }}
        </div>

        <div class="card-body">

            <div id='calendar'></div>

        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script>
        $(document).ready(function () {
            // page is now ready, initialize the calendar...
            events ={!! json_encode($events) !!};
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                events: events,
                defaultView: 'agendaWeek',
                weekends : false,
            })
        })
    </script>
@stop
