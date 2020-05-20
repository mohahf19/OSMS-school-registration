@extends('layouts.app')
@section('content')
<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div>Welcome,<br>
                                        Admin
                                        <div class="page-title-subheading">
                                            Last login: 09-04-2020:14:01:11
                                        </div>
                                    </div>
                                </div>
                              </div>
                        </div>
                        <div class="divider mt-0" style="margin-bottom: 30px;"></div>
                            <div class="row">
                                <div class="col-lg-6 col-xl-3">
                                    <div class="card mb-3 widget-content bg-night-fade">
                                        <div class="widget-content-wrapper text-white">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Total Students</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-white"><span>2303</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-3">
                                    <div class="card mb-3 widget-content bg-arielle-smile">
                                        <div class="widget-content-wrapper text-white">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Total Instructors</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-white"><span>120</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-3">
                                    <div class="card mb-3 widget-content bg-premium-dark">
                                        <div class="widget-content-wrapper text-white">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Total TAs</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-warning"><span>230</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-3">
                                    <div class="card mb-3 widget-content bg-happy-green">
                                        <div class="widget-content-wrapper text-white">
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Current Semester</div>
                                                <div class="widget-subheading">Spring 2019-2020</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="widget-numbers text-dark"><span>S'20</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="main-card mb-3 card">
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary">
                                        ADD NEW STUDENT
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-card mb-3 card">
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary">
                                        ADD NEW INSTRUCTOR
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-card mb-3 card">
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary">
                                        ADD NEW TA
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-card mb-3 card">
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary">
                                        ADD NEW ADMIN
                                    </button>
                                </div>
                            </div>
                        </div>
                       
                    </div>
@endsection