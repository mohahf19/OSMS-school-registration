@extends('layouts.app')
@section('content')
<div class="app-main__inner">
<div class="app-page-title">
   <div class="page-title-wrapper">
      <div class="page-title-heading">
         <div><strong>Task Details</strong><br>
         </div>
      </div>
   </div>
</div>
<div class="row">
<div style="margin-right: 20px; margin-left: 15px; padding-top: 15px" class="col-md-3 main-card mb-3 card">
   <div class="card mb-3 widget-content">
      <div class="widget-content-wrapper">
         <div class="widget-content-left">
            <div class="widget-heading">Task</div>
            <div class="widget-subheading">Title</div>
         </div>
         <div class="widget-content-right">
            <div class="widget-numbers text-primary"><span>Grade Midterm 1</span></div>
         </div>
      </div>
   </div>
   <div class="card mb-3 widget-content">
      <div class="widget-content-wrapper">
         <div class="widget-content-left">
            <div class="widget-heading">Due</div>
            <div class="widget-subheading">Date</div>
         </div>
         <div class="widget-content-right">
            <div class="widget-numbers text-primary"><span>27/03/2020</span></div>
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
               <label for="validationTooltip01">Course</label>
               <input type="text" class="form-control" id="validationTooltip01" placeholder="EEE391: Signals and Systems" value="Mark" required>
               <div class="valid-tooltip">
                  Looks good!
               </div>
            </div>
         </div>
         <div class="form-row">
            <div class="col-md-6 mb-3">
               <label for="validationTooltipUsername">Instructor</label>
               <div class="input-group">
                  <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Billur Barshan" aria-describedby="validationTooltipUsernamePrepend" required>
                  <div class="invalid-tooltip">
                     Please choose a unique and valid username.
                  </div>
               </div>
            </div>
            <div class="col-md-6 mb-3">
               <label for="validationTooltip03">Section</label>
               <input type="text" class="form-control" id="validationTooltip03" placeholder="3" required>
               <div class="invalid-tooltip">
                  Please provide a valid city.
               </div>
            </div>
         </div>
      </form>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="main-card mb-3 card">
            <div class="card-header">
               Status
               <div class="btn-actions-pane-right">
                  <div class="badge badge-success">Completed</div>
                  <div class="badge badge-secondary">Uncompleted</div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection