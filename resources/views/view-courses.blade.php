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

                    <?php if ($todays_sections->count() > 0) : ?>
                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Course Code</th>
                                        <th class="text-center">Section</th>
                                        <th class="text-center">Day</th>
                                        <th class="text-center">From</th>
                                        <th class="text-center">To</th>
                                        <th class="text-center">Location</th>
                                        <th class="text-center">Operations</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <div class="scrollbar-container ps--active-y">
                                        <?php $length = $todays_sections->count();
                                        $days = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'); ?>
                                        <?php for ($i = 0; $i < $length; $i++) : ?>

                                            <tr>
                                                <td class="text-center text-muted">{{ $todays_courses[$i]->code}}</td>

                                                <td class="text-center text-muted">{{ $todays_sections[$i]->section_code}}</td>

                                                <td class="text-center text-muted">{{ $days[$todays_slots[$i]->day]}}</td>

                                                <td class="text-center text-muted">{{ $todays_slots[$i]->time}}:40</td>

                                                <td class="text-center text-muted">{{ $todays_slots[$i]->time + 1}}:40</td>

                                                <td class="text-center text-muted">{{ $todays_sections[$i]->classroom}}</td>

                                                <td class="text-center">
                                                    <a href="/view-attendance/{{$todays_courses[$i]->id}}" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Attendance</a>
                                                    <a href="/view-grades/{{$todays_courses[$i]->id}}" id="PopoverCustomT-1" class="btn btn-warning btn-sm">Grades</a>
                                                </td>

                                            </tr>


                                        <?php endfor; ?>

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
</div>
@endsection