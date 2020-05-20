@extends('layouts.app')
@section('content')
<div class="app-main__inner">
<div class="app-page-title">
   <div class="page-title-wrapper">
      <div class="page-title-heading">
         <div>Create Question and Answer Session<br>
         </div>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-md-6">
      <div class="main-card mb-3 card">
         <div class="card-header">
            Q&A Session
            <div class="btn-actions-pane-right">
            </div>
         </div>
         <div class="table-responsive">
            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
               <thead>
                  <tr>
                     <th></th>
                     <th>Title</th>
                     <td><input type="text" id="fname" name="fname"></td>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td></td>
                     <th>Points</th>
                     <td><input type="text" id="fname" name="fname"></td>
                  </tr>
                  <tr>
                     <td></td>
                     <th>Quota</th>
                     <td><input type="text" id="fname" name="fname"></td>
                  </tr>
                  <tr>
                     <td></td>
                     <th>Zoom Meeting ID</th>
                     <td><input type="text" id="fname" name="fname"></td>
                  </tr>
               </tbody>
            </table>
            <div class="divider"></div>
            <div class="text-center">
               <div class="btn-group dropdown">
                  <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Start Session</button>
                  <br></br>
               </div>
            </div>
         </div>
         <br></br>
      </div>
   </div>
</div>
@endsection