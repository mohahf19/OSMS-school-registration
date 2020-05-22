@extends('layouts.app')
@section('content')
<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div><strong>Grades</strong><br>
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
                                                <th>Assessment</th>
                                                <th>Grade</th>
                                                <th>Total</th>
                                                <th>Min</th>
                                                <th>Max</th>
                                                <th>Average</th>
                                                <th>Comment</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $codes = ['exam'=>'danger', 'homework' => 'primary',
                                             'quiz' => 'secondary' , 'project' =>'warning'] ?>
                                            @forelse ($data as $row) 
                                            <?php $avg = $averages[$row->id];?>
                                            <?php $min = $mins[$row->id];?>
                                            <?php $max = $maxs[$row->id];?>
                                            <tr>
                                                <td class="text-muted"><div class="badge badge-{{$codes[$row->type]}}">{{$row->name}}</div></td>
                                                <td class="text-muted">{{sprintf("%.2f", $row->grade)}}</td>
                                                <td class="text-muted">{{$row->max_grade}}</td>
                                                <td class="text-muted">{{$min}}</td>
                                                <td class="text-muted">{{$max}}</td>
                                                <td class="text-muted">{{$avg}}</td>
                                                <td class="text-muted">{{$row->comment}}</td>
                                            </tr>
                                            @empty
                                            <div class="card-header">No grades available.
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