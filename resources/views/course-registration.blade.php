@extends('layouts.app')
@section('content')
<div class="app-main__inner">
   <div class="app-page-title">
      <div class="page-title-wrapper">
         <div class="page-title-heading">
            <div>Course Registration<br>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="main-card mb-3 card">
            <div class="card-header">
               Available Courses
               <div class="btn-actions-pane-right">
               </div>
            </div>
            <div class="table-responsive">
               <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                  <thead>
                     <tr>
                        <th class="text-center">Course Code</th>
                        <th>Course Name</th>
                        <th class="text-center">Credits</th>
                        <th class="text-center">Operations</th>
                     </tr>
                  </thead>
                  <tbody>
                     <div class="scrollbar-container ps--active-y">
                        @foreach( $courses as $course)
                        <tr>
                           <td class="text-center text-muted">{{ $course->code}}</td>
                           <td>
                              <div class="widget-content p-0">
                                 <div class="widget-content-wrapper">
                                    <div class="widget-heading">{{ $course->title}}</div>
                                 </div>
                              </div>
                           </td>
                           <td class="text-center">
                              <div class="badge badge-secondary">Bilkent: {{ $course->credits}}</div>
                           </td>
                           <td class="text-center">
                              <a href="/course-sections/{{$course->id}}" id="PopoverCustomT-1" class="btn btn-primary btn-sm text-white">Select</a>
                           </td>
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