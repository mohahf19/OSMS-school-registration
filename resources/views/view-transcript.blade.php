@extends('layouts.app')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div><strong>Transcript</strong><br>
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
                                <th class="text-center">Course Code</th>
                                <th class="text-center">Course Title</th>
                                <th class="text-center">Letter Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse ($data as $row)
                            <tr>   
                                <td class="text-center">{{ $row->code}}</td>
                                <td class="text-center text-muted">{{ $row->title}}</td>                     
                                <td class="text-center">
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">{{ $row->letter_grade}}</button>
                                </td>
                            </tr>
                        @empty
                        <div class="page-title-heading">
                            <div><strong>No grades exist yet.</strong><br>
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