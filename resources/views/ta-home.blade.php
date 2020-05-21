@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
</div>
@endsection