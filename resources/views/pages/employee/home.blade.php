@extends('layouts.employee')


@section('content')
    <div class="row">
        <div class="col-8 mx-auto">

            <div class="card">
                <div class="d-flex flex-column">
                    <div class="p-3">
                        21-1-2022
                    </div>
                    <div class="p-3">
                        21-1-2022
                    </div>
                </div>
            </div>
            @php
                $lastweek = -1
            @endphp

            @foreach($shifts as $shift)
                @php
                    $currentweek = Carbon\Carbon::parse($shift->start)->weekOfYear;
                @endphp
                @if($lastweek != $currentweek)
                    @php $lastweek = $currentweek @endphp
                    <h6> Week {{Carbon\Carbon::parse($shift->start)->weekOfYear}}</h6>
                    <hr>
                @endif
                <div class="block bg-gray">
                    <div class="block-header">
                        <h3 class="block-title">{{Carbon\Carbon::parse($shift->start)->format('d - m')}}</h3>
                    </div>
                    <div class="block-content">
                        <p>{{Carbon\Carbon::parse($shift->start)->format('H:i') .' - '. Carbon\Carbon::parse($shift->end)->format('H:i')}}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
