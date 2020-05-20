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
      <div class="col-md-9">
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
                        <th class="text-center">Date/Time</th>
                        <th class="text-center">Place</th>
                        <th class="text-center">Points</th>
                        <th class="text-center">Language</th>
                        <th class="text-center">Duration</th>
                        <th class="text-center">Total Space</th>
                        <th class="text-center">Available Space</th>
                        <th class="text-center">Operation</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td class="text-center">Sample Activity</td>
                        <td class="text-center">16/04/2020 12:40</td>
                        <td class="text-center">Sample Place</td>
                        <td class="text-center">10</td>
                        <td class="text-center">Turkish</td>
                        <td class="text-center">60 minutes</td>
                        <td class="text-center">250</td>
                        <td class="text-center">250</td>
                        <td class="text-center"><button type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm">Details</button></td>
                     </tr>
                     <tr>
                        <td class="text-center">Sample Activity</td>
                        <td class="text-center">16/04/2020 12:40</td>
                        <td class="text-center">Sample Place</td>
                        <td class="text-center">10</td>
                        <td class="text-center">Turkish</td>
                        <td class="text-center">60 minutes</td>
                        <td class="text-center">250</td>
                        <td class="text-center">250</td>
                        <td class="text-center"><button type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm">Details</button></td>
                     </tr>
                     <tr>
                        <td class="text-center">Sample Activity</td>
                        <td class="text-center">16/04/2020 12:40</td>
                        <td class="text-center">Sample Place</td>
                        <td class="text-center">10</td>
                        <td class="text-center">Turkish</td>
                        <td class="text-center">60 minutes</td>
                        <td class="text-center">250</td>
                        <td class="text-center">250</td>
                        <td class="text-center"><button type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm">Details</button></td>
                     </tr>
                     <tr>
                        <td class="text-center">Sample Activity</td>
                        <td class="text-center">16/04/2020 12:40</td>
                        <td class="text-center">Sample Place</td>
                        <td class="text-center">10</td>
                        <td class="text-center">Turkish</td>
                        <td class="text-center">60 minutes</td>
                        <td class="text-center">250</td>
                        <td class="text-center">250</td>
                        <td class="text-center"><button type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm">Details</button></td>
                     </tr>
                     <tr>
                        <td class="text-center">Sample Activity</td>
                        <td class="text-center">16/04/2020 12:40</td>
                        <td class="text-center">Sample Place</td>
                        <td class="text-center">10</td>
                        <td class="text-center">Turkish</td>
                        <td class="text-center">60 minutes</td>
                        <td class="text-center">250</td>
                        <td class="text-center">250</td>
                        <td class="text-center"><button type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm">Details</button></td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
         <div class="main-card mb-3 card">
            <div class="card-header">
               Past Activities
               <div class="btn-actions-pane-right">
               </div>
            </div>
            <div class="table-responsive">
               <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                  <thead>
                     <tr>
                        <th class="text-center">Activity</th>
                        <th class="text-center">Date/Time</th>
                        <th class="text-center">Place</th>
                        <th class="text-center">Points</th>
                        <th class="text-center">Language</th>
                        <th class="text-center">Duration</th>
                        <th class="text-center">Total Space</th>
                        <th class="text-center">Available Space</th>
                        <th class="text-center">Operation</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td class="text-center">Sample Activity</td>
                        <td class="text-center">16/04/2020 12:40</td>
                        <td class="text-center">Sample Place</td>
                        <td class="text-center">10</td>
                        <td class="text-center">Turkish</td>
                        <td class="text-center">60 minutes</td>
                        <td class="text-center">250</td>
                        <td class="text-center">250</td>
                        <td class="text-center"><button type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm">Details</button></td>
                     </tr>
                     <tr>
                        <td class="text-center">Sample Activity</td>
                        <td class="text-center">02/02/2020 12:40</td>
                        <td class="text-center">Sample Place</td>
                        <td class="text-center">10</td>
                        <td class="text-center">Turkish</td>
                        <td class="text-center">60 minutes</td>
                        <td class="text-center">250</td>
                        <td class="text-center">250</td>
                        <td class="text-center"><button type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm">Details</button></td>
                     </tr>
                     <tr>
                        <td class="text-center">Sample Activity</td>
                        <td class="text-center">>02/02/2020 12:40</td>
                        <td class="text-center">Sample Place</td>
                        <td class="text-center">10</td>
                        <td class="text-center">Turkish</td>
                        <td class="text-center">60 minutes</td>
                        <td class="text-center">250</td>
                        <td class="text-center">250</td>
                        <td class="text-center"><button type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm">Details</button></td>
                     </tr>
                     <tr>
                        <td class="text-center">Sample Activity</td>
                        <td class="text-center">>02/02/2020 12:40</td>
                        <td class="text-center">Sample Place</td>
                        <td class="text-center">10</td>
                        <td class="text-center">Turkish</td>
                        <td class="text-center">60 minutes</td>
                        <td class="text-center">250</td>
                        <td class="text-center">250</td>
                        <td class="text-center"><button type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm">Details</button></td>
                     </tr>
                     <tr>
                        <td class="text-center">Sample Activity</td>
                        <td class="text-center">>02/02/2020 12:40</td>
                        <td class="text-center">Sample Place</td>
                        <td class="text-center">10</td>
                        <td class="text-center">Turkish</td>
                        <td class="text-center">60 minutes</td>
                        <td class="text-center">250</td>
                        <td class="text-center">250</td>
                        <td class="text-center"><button type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm">Details</button></td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection