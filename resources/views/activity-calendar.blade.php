@extends('layouts.app')
@section('content')
<div class="app-main__inner">
   <div class="app-page-title">
      <div class="page-title-wrapper">
         <div class="page-title-heading">
            <div>Activities
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="main-card mb-3 card">
            <div class="card-header">
               Upcoming Activities
               <div class="btn-actions-pane-right">
               </div>
            </div>
            <div class="table-responsive">
               <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                  <thead>
                     <tr>
                        <th class="text-center">Activity</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">Place</th>
                        <th class="text-center">Points</th>
                        <th class="text-center">Start Time</th>
                        <th class="text-center">End Time</th>
                        <th class="text-center">Quota</th>
                     </tr>
                  </thead>
                  <tbody>
                  @foreach ($activities as $activity)
                     <tr>
                        <td class="text-center">{{ $activity->title}}</td>
                        <td class="text-center">{{ $activity->date}}</td>
                        <td class="text-center">{{ $activity->location}}</td>
                        <td class="text-center">{{ $activity->points}}</td>
                        <td class="text-center">{{ $activity->start_time}}</td>
                        <td class="text-center">{{ $activity->end_time}}</td>
                        <td class="text-center">{{ $activity->quota}}</td>
                        <td class="text-center"><button type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm">Details</button></td>
                     </tr>
                  @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

