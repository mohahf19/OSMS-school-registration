@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Courses:

                    <?php if ($teaches->count() > 0) : ?>
                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Course Code</th>
                                        <th class="text-center">Section</th>
                                        <th class="text-center">Day</th>
                                        <th class="text-center">Time</th>
                                        <th class="text-center">Location</th>
                                        <th class="text-center">Operations</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <div class="scrollbar-container ps--active-y">

                                        @foreach( $teaches as $t)
                                        <tr>
                                            <td class="text-center text-muted">{{ $t->course->code}}</td>

                                            <td class="text-center text-muted">{{ $t->section->section_code}}</td>

                                            <td class="text-center text-muted">{{ $t->section->day}}</td>

                                            <td class="text-center text-muted">{{ $t->section->time}}</td>

                                            <td class="text-center text-muted">{{ $t->section->classroom}}</td>

                                            <td class="text-center">
                                                <a href="/add-attendance/{{$t->section->id}}" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Attendance</a>
                                                <a href="/add-grades-index/{{$t->section->id}}" id="PopoverCustomT-1" class="btn btn-warning btn-sm">Grades</a>
                                            </td>

                                        </tr>

                                        @endforeach


                                    </div>
                                </tbody>
                            </table>
                        </div>
                    <?php else : ?>
                        There are no courses today. Sleep well!
                    <?php endif; ?>


                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="btn-actions-pane-right">
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center"></th>
                                <th class="text-center">MONDAY</th>
                                <th class="text-center">TUESDAY</th>
                                <th class="text-center">WEDNESDAY</th>
                                <th class="text-center">THURSDAY</th>
                                <th class="text-center">FRIDAY</th>
                                <th class="text-center">SATURDAY</th>
                                <th class="text-center">SUNDAY</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count = 0; ?>
                            @for( $i = 0; $i <= 23; $i++) <tr>
                                <td class="text-center">
                                    <p>{{$i}}:40 - {{$i + 1}}.30</p>
                                </td>
                                @for( $j = 1; $j <= 7; $j++) <td class="text-center">
                                    @if( strcmp($calendar[$count], "") )
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">{{$calendar[$count]}}</button>
                                    @endif
                                    </td>
                                    <?php $count++; ?>
                                    @endfor
                                    </tr>
                                    @endfor
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection