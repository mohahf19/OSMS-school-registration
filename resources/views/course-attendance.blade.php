@extends('layouts.app')
@section('content')
<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div><strong>Attendance</strong><br>
                                        Spring 2019-2020
                                    </div>
                                </div>
                              </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">{{$courseinfo->code}}: {{$courseinfo->title}}
                                        <div class="btn-actions-pane-right">
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th>Week#</th>
                                                <th>Attendance</th>
                                                <th>Comment</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            
                                            @forelse($data as $row)
                                                <tr>
                                                    <td class="text-muted">{{$row->week_no}}</td>
                                                    <td class="text-muted">{{$row->attendance_count}}/{{$row->total_count}}</td>
                                                    <td class="text-muted">{{$row->comment}}</td>
                                                </tr>
                                            @empty
                                                <div class="card-header">No attendances
                                                    <div class="btn-actions-pane-right">
                                                    </div>
                                                </div>
                                            @endforelse

                                            
                                           
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

@endsection