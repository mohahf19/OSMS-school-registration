@extends('layouts.app')
@section('content')
<div class="app-main__inner">
<div class="app-page-title">
   <div class="page-title-wrapper">
      <div class="page-title-heading">
         <div><strong>Payments</strong><br>
         </div>
      </div>
   </div>
</div>
<div class="row">
   <div style="margin-right: 20px; margin-left: 15px; padding-top: 15px" class="col-md-3 main-card mb-3 card">
      <div class="card mb-3 widget-content">
         <div class="widget-content-wrapper">
            <div class="widget-content-left">
               <div class="widget-heading">Current Semester</div>
               <div class="widget-subheading">Spring 2019-2020</div>
            </div>
         </div>
      </div>
      <div class="card mb-3 widget-content">
         <div class="widget-content-wrapper">
            <div class="widget-content-left">
               <div class="widget-heading">Payment Due</div>
               <div class="widget-subheading"></div>
            </div>
            <div class="widget-content-right">
               <div class="widget-numbers text-primary"><span>3900 TL</span></div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-md-6 main-card mb-3 card">
      <div class="card-body">
         <h5 class="card-title">Payment Info</h5>
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
            <div class="form-row">
               <div class="col-md-12 mb-3">
                  <label for="validationTooltip01">Comment</label>
                  <input type="text" class="form-control" id="validationTooltip01" placeholder="" value="" required>
                  <div class="valid-tooltip">
                     Looks good!
                  </div>
               </div>
            </div>
            <button class="btn btn-primary" type="submit">Make Payment</button>
         </form>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-md-8">
      <div class="main-card mb-3 card">
         <div class="card-header">
            Previous Transactions
            <div class="btn-actions-pane-right">
            </div>
         </div>
         <div class="table-responsive">
            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
               <thead>
                  <tr>
                     <th class="text-center">Date</th>
                     <th class="text-center">Payment</th>
                     <th class="text-center">Comment</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td class="text-muted text-center">27/03/2011</td>
                     <td class="text-muted text-center">999</td>
                     <td class="text-muted text-center">Sample Comment</td>
                  </tr>
                  <tr>
                     <td class="text-muted  text-center">13/05/2014</td>
                     <td class="text-muted text-center">999</td>
                     <td class="text-muted text-center">Sample Comment</td>
                  </tr>
                  <tr>
                     <td class="text-muted text-center">6/04/2015</td>
                     <td class="text-muted text-center">999</td>
                     <td class="text-muted text-center">Sample Comment</td>
                  </tr>
                  <tr>
                     <td class="text-muted text-center">2/02/2017</td>
                     <td class="text-muted text-center">999</td>
                     <td class="text-muted text-center">Sample Comment</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection