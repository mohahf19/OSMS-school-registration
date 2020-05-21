@extends('layouts.app')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div><strong>Attendance</strong><br>
                    
                </div>
            </div>
            </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header"> Spring 2019-2020
                    <div class="btn-actions-pane-right">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center text-muted">Week</th>
                            <th class="text-center text-muted">Attendance</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($attendances as $attendances)
                        <tr>
                            <td class="text-muted">{{ $assessments->week_no}}1</td>
                            <td class="text-muted">{{ $assessments->attendance_count}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
                    
@endsection