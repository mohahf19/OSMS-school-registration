@extends('layouts.app')
@section('content')
<div class="app-main__inner">
   <div class="app-page-title">
      <div class="page-title-wrapper">
         <div class="page-title-heading">
            <div>GPA Calculator</div>
         </div>
      </div>
   </div>
   
   <div class="row justify-content-center"">
      <div class="col-md-8">
         <div class="main-card mb-3 card">
            <div class="card-header">
               Current Courses
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
                        <th class="text-center">Expected Grade</th>
                        <th class="text-center">Quality Points</th>
                        <th class="text-center">Total</th>
                     </tr>
                  </thead>
                  <tbody>
                  <form action="/home/gpacalc" method = "post">
                  @csrf 
                  @foreach ($courses as $course)
                  <tr>
                        <td class="text-center text-muted">{{$course->code}}</td>
                        <td>
                           <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                 <div class="widget-heading">{{$course->title}}</div>
                              </div>
                           </div>
                        </td>
                        <td class="text-center">
                           <div class="badge badge-secondary">Bilkent: {{$course->credits}}</div>
                        </td>
                        <td class="text-center">
                           <select name="{{$course->id}}">
                              <option value="4">A</option>
                              <option value="3.7">A-</option>
                              <option value="3.3">B+</option>
                              <option value="3">B</option>
                              <option value="2.7">B-</option>
                              <option value="2.3">C+</option>
                              <option value="2">C</option>
                              <option value="1.7">C-</option>
                              <option value="1.3">D+</option>
                              <option value="1">D</option>
                              <option value="0" selected="selected">F</option>
                           </select> 
                        </td>
                        <td class="text-center">0.0</td>
                        <td class="text-center">0.0</td>
                     </tr>
                  @endforeach
                  <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td class="text-center"><button class="btn btn-success"> Calculate! </button></td>
                  </tr>
                  </form>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <div class="row justify-content-center"">
      <div class="col-md-6">
         <div class="main-card mb-3 card">
            <div class="card-header">
               Expected Academic Standing
               <div class="btn-actions-pane-right">
               </div>
            </div>
            <div class="table-responsive">
               <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                  <thead>
                     <tr>
                        <th class="text-center"> Old GPA</th>
                        <td class="text-left text-muted"> {{sprintf('%0.2f', round($student->gpa, 2))}}</td>
                     </tr>
                  </thead>
                  <tbody>
                     <div class="scrollbar-container ps--active-y">
                        <tr>
                           <th class="text-center">New GPA</th>
                           <td class="text-left text-muted">{{sprintf('%0.2f', round($newgpa, 2))}}</td>
                        </tr>
                     </div>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection