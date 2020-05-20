@extends('layouts.app')
@section('content')
<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div>
                                        <div class="page-title-subheading">
                                            Last login: 09-04-2020:14:01:11
                                        </div>
                                    </div>
                                </div>
                              </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9 col-lg-3 col-xl-4">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <img src="assets/images/avatars/1.jpg" style="width: 150px; height: 180px; border-radius: 10px; ">
                                            <br><br>
                                            <div class="widget-heading">Computer Engineering</div>
                                            <div class="widget-subheading">Enrolled Semester: 6</div>
                                            <div class="widget-subheading">Cohort: 2021</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div style="padding-left: 20px;" class="widget-numbers text-primary"><span>Bilal Bin Khalid</span></div>
                                            <div style="padding-left: 20px;" class="text-secondary"><p>21701848</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Basic Details</h5>
                                        <div>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-secondary">First Name</button>
                                                </div>
                                                <input type="text" class="form-control" value="Bilal Bin"></div>
                                
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-secondary">Surname</button>
                                                </div>
                                                <input type="text" class="form-control" value="Khalid"></div>
                                
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-secondary">Bilkent ID</button>
                                                </div>
                                                <input type="text" class="form-control" value="21701848"></div>
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-secondary">Password</button>
                                                </div>
                                                <input type="text" class="form-control" value="*******"></div>
                                                <div class="input-group-postpend" style="margin-top: 10px">
                                                    <button class="btn btn-primary">Change</button>
                                                </div>
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-secondary">Email Address</button>
                                                </div>
                                                <input type="text" class="form-control" value="bilalbink@gmail.com"></div>
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-secondary">Phone Number</button>
                                                </div>
                                                <input type="text" class="form-control" value="+90-5524204902"></div>

                                                <br>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-secondary">Nationality</button>
                                                    </div>
                                                    <input type="text" class="form-control" value="Pakistan"></div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection