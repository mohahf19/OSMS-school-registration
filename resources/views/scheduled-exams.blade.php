@extends('layouts.app')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div><strong>Scheduled Exams</strong><br>
                    Spring 2019-2020
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Date</th>
                                <th class="text-center">Coures ID</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Type</th>
                                <th class="text-center">Percentage</th>
                                <th class="text-center">Location</th>
                                <th class="text-center">Start Time</th>
                                <th class="text-center">End Time</th>
                                <th class="text-center">Max Grade</th>  
                            </tr>
                        </thead>
                        <tbody>
                         @foreach ($assessments as $assessments)
                            <tr>
                                <td class="text-center text-muted">{{ $assessments->date}}</td>    
                                <td class="text-center">{{ $assessments->course_id}}</td>
                                <td class="text-center text-muted">{{ $assessments->name}}</td>
                                <td class="text-center">
                                    <div class="badge badge-secondary">{{ $assessments->type}}</div>
                                </td>                               
                                <td class="text-center">
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">{{ $assessments->percentage}}%</button>
                                </td>
                                <td class="text-center">{{ $assessments->location}}</td>
                                <td class="text-center">{{ $assessments->start_time}}</td>
                                <td class="text-center">{{ $assessments->end_time}}</td>
                                <td class="text-center">{{ $assessments->max_grade}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
</div>
@endsection