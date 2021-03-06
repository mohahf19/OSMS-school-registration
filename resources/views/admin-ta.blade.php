@extends('layouts.app')
@section('content')
<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div>
                                        <div class="widget-heading">ADD NEW TA</div>
                                        <div class="page-title-subheading">
                                            Department: Computer Engineering
                                        </div>
                                    </div>
                                </div>
                              </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Basic Details</h5>
                                        <div>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-secondary">First Name</button>
                                                </div>
                                                <input disabled="true" type="text" class="form-control" value="Bilal Bin"></div>
                                
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-secondary">Surname</button>
                                                </div>
                                                <input disabled="true" type="text" class="form-control" value="Khalid"></div>
                                
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-secondary">Bilkent ID</button>
                                                </div>
                                                <input type="text" class="form-control" value="21701848"></div>
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Contact Details</h5>
                                        <div>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-secondary">Permanent Address</button>
                                                </div>
                                                <input type="text" class="form-control" value="125 House, Sunset Boulevard, Karachi, Pakistan"></div>
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-secondary">Current Address</button>
                                                </div>
                                                <input type="text" class="form-control" value="Dorm 77, Bilkent University"></div>
                                            <br>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-secondary">Emergency Contact</button>
                                                </div>
                                                <input type="text" class="form-control"  value="Daniyal Khalil"></div>
                                            <br>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection