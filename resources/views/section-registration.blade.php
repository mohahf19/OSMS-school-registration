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
               Available Sections for "{{$course->code}}: {{$course->title}}"
               <div class="btn-actions-pane-right">
               </div>
            </div>
            <div class="table-responsive">
               <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                  <thead>
                     <tr>
                        <th class="text-center">Sections</th>
                        <th class="text-center">Instructor</th>
                        <th class="text-center">Quota</th>
                        <th class="text-center">Operations</th>
                     </tr>
                  </thead>
                  <tbody>
                     <div class="scrollbar-container ps--active-y">
                     <form action="/register-course" method = "post">
                        @csrf
                        @foreach( $sections as $section)
                        <tr>
                           <td class="text-center text-muted">{{ $section->section_code }}</td>
                           <td class="text-center text-muted">Teddy Westside</td>
                           <td class="text-center text-muted">{{ $section->quota }}</td>
                           <td class="text-center">
                           <button name="selected" value="{{$section->id}}" type="submit">Select</button>
                           </td>
                        </tr>
                        @endforeach
                     </form>
                     </div>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection