@extends('layouts.app')
@section('content')
<div class="app-main__inner">
<div class="app-page-title">
   <div class="page-title-wrapper">
      <div class="page-title-heading">
         <div><strong>Teaching Assistant</strong><br>
            Tasks
         </div>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-md-12">
      <div class="main-card mb-3 card">
         <div class="card-header">
            EEE 391 - 1: Basics Of Signals And Systems
            <div class="btn-actions-pane-right">
            </div>
         </div>
         <div class="table-responsive">
            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
               <thead>
                  <tr>
                     <th>TASK</th>
                     <th>Due by</th>
                     <th>Task Type</th>
                     <th>Operations</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td class="text-muted">
                        <div class="badge badge-primary">Grade Quiz 1</div>
                     </td>
                     <td class="text-muted">27/03/2020</td>
                     <td class="text-muted">
                        <div class="badge badge-primary">Grading</div>
                     </td>
                     <td class="text-muted">
                        <div>
                           <div class="badge badge-primary">D</div>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td class="text-muted">
                        <div class="badge badge-primary">Grade Midterm</div>
                     </td>
                     <td class="text-muted">17/04/2020</td>
                     <td class="text-muted">
                        <div class="badge badge-primary">Grading</div>
                     </td>
                     <td class="text-muted">
                        <div>
                           <div class="badge badge-primary">D</div>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td class="text-muted">
                        <div class="badge badge-primary">Tutorial</div>
                     </td>
                     <td class="text-muted">01/05/2020</td>
                     <td class="text-muted">
                        <div class="badge badge-primary">Tutorial</div>
                     </td>
                     <td class="text-muted">
                        <div>
                           <div class="badge badge-primary">D</div>
                        </div>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection