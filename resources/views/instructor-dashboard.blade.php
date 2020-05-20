@extends('layouts.app')
@section('content')
<div class="app-main__inner">
   <div class="app-page-title">
      <div class="page-title-wrapper">
         <div class="page-title-heading">
            <div>
               Welcome,<br>
               Instructor Name
               <div class="page-title-subheading">
                  Last login: 09-04-2020:14:01:11
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-8">
         <div class="main-card mb-3 card">
            <div class="card-header">
               Current Semester: Spring 2019-2020
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
                     <tr>
                        <td class="text-center text-muted">CS 353-1</td>
                        <td>
                           <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                 <div class="widget-heading">Database Systems</div>
                              </div>
                           </div>
                        </td>
                        <td class="text-center">
                           <div class="badge badge-secondary">Bilkent: 3</div>
                        </td>
                        <td class="text-center">
                           <button type="button" id="PopoverCustomT-1" class="btn btn-warning btn-sm">A</button>
                           <button type="button" id="PopoverCustomT-1" class="btn btn-warning btn-sm">G</button>
                        </td>
                     </tr>
                     <tr>
                        <td class="text-center text-muted">CS 353-2</td>
                        <td>
                           <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                 <div class="widget-heading">Database Systems</div>
                              </div>
                           </div>
                        </td>
                        <td class="text-center">
                           <div class="badge badge-secondary">Bilkent: 3</div>
                        </td>
                        <td class="text-center">
                           <button type="button" id="PopoverCustomT-1" class="btn btn-warning btn-sm">A</button>
                           <button type="button" id="PopoverCustomT-1" class="btn btn-warning btn-sm">G</button>
                        </td>
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
               Weekly Schedule
               <div class="btn-actions-pane-right">
               </div>
            </div>
            <div class="table-responsive">
               <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                  <thead>
                     <tr>
                        <th class="text-center"></th>
                        <th class="text-center">MONDAY</th>
                        <th class="text-center">TUESDAY</th>
                        <th class="text-center">WEDNESDAY</th>
                        <th class="text-center">THURSDAY</th>
                        <th class="text-center">FRIDAY</th>
                        <th class="text-center">SATURDAY</th>
                        <th class="text-center">SUNDAY</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td class="text-center">
                           <p>08.40 - 9.30</p>
                        </td>
                        <td class="text-center">
                           <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">CS 351-1 (EB-102)</button>
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                           <button type="button" id="PopoverCustomT-1" class="btn btn-secondary btn-sm">CS 351-2 (EB-102)</button>
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                     </tr>
                     <tr>
                        <td class="text-center">
                           <p>09.40 - 10.30</p>
                        </td>
                        <td class="text-center">
                           <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">CS 351-1 (EB-102)</button>
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                           <button type="button" id="PopoverCustomT-1" class="btn btn-secondary btn-sm">CS 351-2 (EB-102)</button>
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                     </tr>
                     <tr>
                        <td class="text-center">
                           <p>10.40 - 11.30</p>
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                           <button type="button" id="PopoverCustomT-1" class="btn btn-secondary btn-sm">CS 351-2 (EB-102)</button>
                        </td>
                        <td class="text-center">
                           <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">CS 351-1 (EB-102)</button>
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                     </tr>
                     <tr>
                        <td class="text-center">
                           <p>11.40 - 12.30</p>
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                           <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">CS 351-2 (EB-102)</button>                                                
                        </td>
                        <td class="text-center">
                           <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">CS 351-1 (EB-102)</button>
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                     </tr>
                     <tr>
                        <td class="text-center">
                           <p>12.40 - 13.30</p>
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                     </tr>
                     <tr>
                        <td class="text-center">
                           <p>13.40 - 14.30</p>
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                     </tr>
                     <tr>
                        <td class="text-center">
                           <p>14.40 - 15.30</p>
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                     </tr>
                     <tr>
                        <td class="text-center">
                           <p>15.40 - 16.30</p>
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                     </tr>
                     <tr>
                        <td class="text-center">
                           <p>16.40 - 17.30</p>
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                     </tr>
                     <tr>
                        <td class="text-center">
                           <p>17.40 - 18.30</p>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection