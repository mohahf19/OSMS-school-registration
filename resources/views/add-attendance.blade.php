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
                <div class="card-header">{{ $section->course->code}}
                    <div class="btn-actions-pane-right"></div>
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>

                            <tr>
                                <th>Student ID</th>
                                <th>Name</th>
                                <th>Week No.</th>
                                <th>Current</th>
                                <th>Total</th>
                                <th>Operations</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach( $students as $s)
                            <tr>
                                <form action="/update-attendance" method="post">
                                    @csrf
                                    <input type="hidden" name="section" value="{{$section->id}}"/>
                                    <input type="hidden" name="student" value="{{ $s->id}}"/>
                                    <td class="text-muted">{{ $s->id}}</td>
                                    <td class="text-muted">{{ $s->name}} {{ $s->surname}}</td>
                                    <td class="text-muted">
                                        <input type="number" name="week" />
                                    </td>
                                    <td class="text-muted">
                                        <input type="number" name="current" />
                                    </td>
                                    <td class="text-muted">
                                        <input type="number" name="total" />
                                    </td>
                                    <td class="">
                                        <button type="submit" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Update</button>
                                    </td>
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection