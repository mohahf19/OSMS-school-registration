@extends('layouts.app')
@section('content')
<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div><strong>Dormitory</strong><br>
                                    </div>
                                </div>
                              </div>
                        </div>
                        <div class="row">
                            <div style="margin-right: 20px; margin-left: 15px; padding-top: 15px" class="col-md-3 main-card mb-3 card">
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Current</div>
                                            <div class="widget-subheading">Dormitory</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-primary"><span>77</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Current</div>
                                            <div class="widget-subheading">Room No.</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-primary"><span>207</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Details</h5>
                                    <form class="needs-validation" novalidate>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationTooltip01">Accommodation Semester</label>
                                                <input type="text" class="form-control" id="validationTooltip01" placeholder="Spring 2020" value="Mark" required>
                                                <div class="valid-tooltip">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationTooltipUsername">Room Type</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="validationTooltipUsername" placeholder="2/D double" aria-describedby="validationTooltipUsernamePrepend" required>
                                                    <div class="invalid-tooltip">
                                                        Please choose a unique and valid username.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationTooltip03">Room Number</label>
                                                <input type="text" class="form-control" id="validationTooltip03" placeholder="207" required>
                                                <div class="invalid-tooltip">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationTooltip04">Room Price</label>
                                                <input type="text" class="form-control" id="validationTooltip04" placeholder="3500 TL/ Semester" required>
                                                <div class="invalid-tooltip">
                                                    Please provide a valid state.
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Roommate(s)</h5>
                                    <form class="needs-validation" novalidate>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationTooltip01">Name</label>
                                                <input type="text" class="form-control" id="validationTooltip01" placeholder="Yousuf Bashir" value="Mark" required>
                                                <div class="valid-tooltip">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationTooltipUsername">Bilkent ID</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="validationTooltipUsername" placeholder="21701832" aria-describedby="validationTooltipUsernamePrepend" required>
                                                    <div class="invalid-tooltip">
                                                        Please choose a unique and valid username.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationTooltip03">Department</label>
                                                <input type="text" class="form-control" id="validationTooltip03" placeholder="MATH" required>
                                                <div class="invalid-tooltip">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Previous Accommodations
                                        <div class="btn-actions-pane-right">
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th>Semester</th>
                                                <th>Dorm</thclass="text-center">
                                                <th class="text-center">Room/ Room-type</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-muted">Fall 2017</td>
                                                <td class="text-muted">54</td>
                                                <td class="text-center text-muted"><div class="badge badge-success">304/ 3B-Triple</div></td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">Spring 2018</td>
                                                <td class="text-muted">54</td>
                                                <td class="text-center text-muted"><div class="badge badge-success">304/ 3B-Triple</div></td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">Fall 2019</td>
                                                <td class="text-muted">77</td>
                                                <td class="text-center text-muted"><div class="badge badge-success">207/ 2B-Double</div></td>
                                            </tr>


                                            
                                           
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                     
@endsection