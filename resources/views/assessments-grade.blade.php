@extends('layouts.app')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div><strong>Exams for</strong><br>
                    {{ $assessments[0]->course->code}}: {{ $assessments[0]->course->title}}
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
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assessments as $a)
                            <tr>
                                <td class="text-center text-muted">{{ $a->date}}</td>
                                <td class="text-center">{{ $a->course->code}}</td>
                                <td class="text-center text-muted">{{ $a->name}}</td>
                                <td class="text-center">
                                    <div class="badge badge-secondary">{{ $a->type}}</div>
                                </td>
                                <td class="text-center">
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">{{ $a->percentage}}%</button>
                                </td>
                                <td class="text-center">{{ $a->location}}</td>
                                <td class="text-center">{{ $a->start_time}}</td>
                                <td class="text-center">{{ $a->end_time}}</td>
                                <td class="text-center">{{ $a->max_grade}}</td>
                                <td class="text-center">
                                    <a href="/add-grades-course/{{$section->id}}/{{$a->id}}" class="btn btn-primary">Select</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    @endsection