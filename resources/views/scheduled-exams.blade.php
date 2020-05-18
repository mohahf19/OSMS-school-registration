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
                                <th class="text-center">Course</th>
                                <th>Exam name</th>
                                <th class="text-center">Exam type</th>
                                <th class="text-center">Credits</th>
                                <th class="text-center">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center text-muted">27/03/2020</td>
                                <td class="text-center text-muted">CS353: Database Systems</td>
                                <td class="text-center text-muted">Midterm 1</td>
                                <td class="text-center">
                                    <div class="badge badge-secondary">Midterm</div>
                                </td>
                                <td class="text-center">
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">35%</button>
                                </td>
                                <td class="text-center">Room EE-03</td>
                            </tr>

                            <tr>
                                <td class="text-center text-muted">01/05/2020</td>
                                <td class="text-center text-muted">CS353: Database Systems</td>
                                <td class="text-center text-muted">Midterm 2</td>
                                <td class="text-center">
                                    <div class="badge badge-secondary">Midterm</div>
                                </td>
                                <td class="text-center">
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">20%</button>
                                </td>
                                <td class="text-center">Room EE-04</td>
                            </tr>

                            <tr>
                                <td class="text-center text-muted">15/05/2020</td>
                                <td class="text-center text-muted">EEE391: Basics of Signals and Systems</td>
                                <td class="text-center text-muted">Presentation 1</td>
                                <td class="text-center">
                                    <div class="badge badge-secondary">Presentation</div>
                                </td>
                                <td class="text-center">
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">15%</button>
                                </td>
                                <td class="text-center">Room B-Z04</td>
                            </tr>

                            <tr>
                                <td class="text-center text-muted">27/05/2020</td>
                                <td class="text-center text-muted">CS353: Database Systems</td>
                                <td class="text-center text-muted">Final Exam</td>
                                <td class="text-center">
                                    <div class="badge badge-secondary">Final Exam</div>
                                </td>
                                <td class="text-center">
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">40%</button>
                                </td>
                                <td class="text-center">Room FF-01</td>
                            </tr>



                        </tbody>
                    </table>
                </div>

            </div>
        </div>
</div>
@endsection