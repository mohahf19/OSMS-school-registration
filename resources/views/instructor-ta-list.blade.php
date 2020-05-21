@extends('layouts.app')
@section('content')
<div class="app-main__inner">
   <div class="app-page-title">
      <div class="page-title-wrapper">
         <div class="page-title-heading">
            <div>TA Manager
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="main-card mb-3 card">
            <div class="card-header">
               Teacher Assistant List
               <div class="btn-actions-pane-right">
               </div>
            </div>
            <div class="table-responsive">
               <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                  <thead>
                     <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Surname</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Course</th>
                        <th class="text-center">Task</th>
                     </tr>
                  </thead>
                  <tbody>
                     <div class="scrollbar-container ps--active-y">
                     @foreach ($tutor as $tutor)
                        <tr>
                           <td class="text-center text-muted">{{$tutor->user->name}}</td>
                           <td class="text-center text-muted">{{$tutor->user->surname}}</td>
                           <td class="text-center text-muted">{{$tutor->user->email}}</td>
                           <td class="text-center text-muted">{{$tutor->course->title}}</td>
                           <td class="text-center text-muted">Task 1, Task 2</td>
                        </tr>
                     @endforeach
                     </div>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection