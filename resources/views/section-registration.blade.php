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
      <div class="col-md-8">
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
                        <tr>
                           <td class="text-center text-muted">Sample Data</td>
                           <td>
                              <div class="widget-content p-0">
                                 <div class="widget-content-wrapper">
                                    <div class="widget-heading">Sample Data</div>
                                 </div>
                              </div>
                           </td>
                           <td class="text-center">
                              <div class="badge badge-secondary">Bilkent: 3</div>
                           </td>
                           <td class="text-center">
                              <button type="button" id="PopoverCustomT-1" class="btn btn-secondary btn-sm">Select</button>
                           </td>
                        </tr>
                        <tr>
                           <td class="text-center text-muted">Sample Data</td>
                           <td>
                              <div class="widget-content p-0">
                                 <div class="widget-content-wrapper">
                                    <div class="widget-heading">Sample Data</div>
                                 </div>
                              </div>
                           </td>
                           <td class="text-center">
                              <div class="badge badge-secondary">Bilkent: 3</div>
                           </td>
                           <td class="text-center">
                              <button type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm">Select</button>
                           </td>
                        </tr>
                        <tr>
                           <td class="text-center text-muted">Sample Data</td>
                           <td>
                              <div class="widget-content p-0">
                                 <div class="widget-content-wrapper">
                                    <div class="widget-heading">Sample Data</div>
                                 </div>
                              </div>
                           </td>
                           <td class="text-center">
                              <div class="badge badge-secondary">Bilkent: 3</div>
                           </td>
                           <td class="text-center">
                              <button type="button" id="PopoverCustomT-1" class="btn btn-secondary btn-sm">Select</button>
                           </td>
                        </tr>
                        <tr>
                           <td class="text-center text-muted">Sample Data</td>
                           <td>
                              <div class="widget-content p-0">
                                 <div class="widget-content-wrapper">
                                    <div class="widget-heading">Sample Data</div>
                                 </div>
                              </div>
                           </td>
                           <td class="text-center">
                              <div class="badge badge-secondary">Bilkent: 3</div>
                           </td>
                           <td class="text-center">
                              <button type="button" id="PopoverCustomT-1" class="btn btn-secondary btn-sm">Select</button>
                           </td>
                        </tr>
                        <tr>
                           <td class="text-center text-muted">Sample Data</td>
                           <td>
                              <div class="widget-content p-0">
                                 <div class="widget-content-wrapper">
                                    <div class="widget-heading">Sample Data</div>
                                 </div>
                              </div>
                           </td>
                           <td class="text-center">
                              <div class="badge badge-secondary">Bilkent: 3</div>
                           </td>
                           <td class="text-center">
                              <button type="button" id="PopoverCustomT-1" class="btn btn-secondary btn-sm">Select</button>
                           </td>
                        </tr>
                     </div>
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
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                           <button type="button" id="PopoverCustomT-1" class="btn btn-secondary btn-sm">Sample Data</button>
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
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                           <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Sample Data</button>
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
                           <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Sample Data</button>
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
                           <p>11.40 - 12.30</p>
                        </td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                           <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Sample Data</button>
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
   <div class="row">
      <div class="col-md-8">
         <div class="main-card mb-3 card">
            <div class="card-header">
               Available Sections for CS 353
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
                        <tr>
                           <td class="text-center text-muted">Sample Data</td>
                           <td class="text-center text-muted">Sample Data</td>
                           <td class="text-center text-muted">20/30</td>
                           <td class="text-center">
                              <button type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm">Select</button>
                           </td>
                        </tr>
                        <tr>
                           <td class="text-center text-muted">Sample Data</td>
                           <td class="text-center text-muted">Sample Data</td>
                           <td class="text-center text-muted">20/30</td>
                           <td class="text-center">
                              <button type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm">Select</button>
                           </td>
                        </tr>
                        <tr>
                           <td class="text-center text-muted">Sample Data</td>
                           <td class="text-center text-muted">Sample Data</td>
                           <td class="text-center text-muted">20/30</td>
                           <td class="text-center">
                              <button type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm">Select</button>
                           </td>
                        </tr>
                     </div>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
COPY TO CLIPBOARD	 SELECT ALL
© Free
@endsection