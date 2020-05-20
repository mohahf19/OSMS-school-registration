@extends('layouts.app')
@section('content')
<div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div><strong>Meals</strong><br>
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
                                            <div class="widget-subheading">Meal Count</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-primary"><span>34</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3 widget-content">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Meal</div>
                                            <div class="widget-subheading">Price</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-primary"><span>6.75 TL</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Purchase Meals</h5>
                                    <form class="needs-validation" novalidate>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationTooltip01">Card Name</label>
                                                <input type="text" class="form-control" id="validationTooltip01" placeholder="Card Name" value="Mark" required>
                                                <div class="valid-tooltip">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationTooltipUsername">Card No.</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Card Number" aria-describedby="validationTooltipUsernamePrepend" required>
                                                    <div class="invalid-tooltip">
                                                        Please choose a unique and valid username.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationTooltip03">Expiry Date</label>
                                                <input type="text" class="form-control" id="validationTooltip03" placeholder="" required>
                                                <div class="invalid-tooltip">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="validationTooltip04">CVC Code</label>
                                                <input type="text" class="form-control" id="validationTooltip04" placeholder="" required>
                                                <div class="invalid-tooltip">
                                                    Please provide a valid state.
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Purchase meals</button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Previous Meal Transactions
                                        <div class="btn-actions-pane-right">
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Meals Purchased</thclass="text-center">
                                                <th class="text-center">Card Type</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-muted">27/03/2011</td>
                                                <td class="text-muted">3</td>
                                                <td class="text-center text-muted"><div class="badge badge-success">Credit</div></td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">13/05/2014</td>
                                                <td class="text-muted">10</td>
                                                <td class="text-center text-muted"><div class="badge badge-success">Credit</div></td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">6/04/2015</td>
                                                <td class="text-muted">15</td>
                                                <td class="text-center text-muted"><div class="badge badge-primary">Debit</div></td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">2/02/2017</td>
                                                <td class="text-muted">18</td>
                                                <td class="text-center text-muted"><div class="badge badge-success">Credit</div></td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">10/03/2018</td>
                                                <td class="text-muted">19</td>
                                                <td class="text-center text-muted"><div class="badge badge-success">Credit</div></td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">13/03/2018</td>
                                                <td class="text-muted">20</td>
                                                <td class="text-center text-muted"><div class="badge badge-primary">Debit</div></td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">27/04/2019</td>
                                                <td class="text-muted">17</td>
                                                <td class="text-center text-muted"><div class="badge badge-success">Credit</div></td>
                                            </tr>
                                            <tr>
                                                <td class="text-muted">20/06/2020</td>
                                                <td class="text-muted">10</td>
                                                <td class="text-center text-muted"><div class="badge badge-primary">Debit</div></td>
                                            </tr>


                                            
                                           
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                       
@endsection