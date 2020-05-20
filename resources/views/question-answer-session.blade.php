@extends('layouts.app')
@section('content')
<div class="app-main__inner">
   <div class="app-page-title">
      <div class="page-title-wrapper">
         <div class="page-title-heading">
            <div>Question and Answer Sessions<br>
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
      <div class="col-md-8">
         <div class="main-card mb-3 card">
            <div class="card-header">
               Q&A Sessions   
               <div class="btn-actions-pane-right">
               </div>
            </div>
            <div class="table-responsive">
               <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                  <thead>
                     <tr>
                        <th class="text-center">Title</th>
                        <th class="text-center">Host</th>
                        <th class="text-center">Zoom Meeting ID</th>
                        <th class="text-center"></th>
                     </tr>
                  </thead>
                  <tbody>
                     <div class="scrollbar-container ps--active-y">
                        <tr>
                           <td class="text-center text-muted">Sample Data</td>
                           <td class="text-center text-muted">Sample Data</td>
                           <td class="text-center text-muted">Sample Data</td>
                           <td class="text-center">
                              <button type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm">Join</button>
                           </td>
                        </tr>
                        <tr>
                           <td class="text-center text-muted">Sample Data</td>
                           <td class="text-center text-muted">Sample Data</td>
                           <td class="text-center text-muted">Sample Data</td>
                           <td class="text-center">
                              <button type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm">Join</button>
                           </td>
                        </tr>
                        <tr>
                           <td class="text-center text-muted">Sample Data</td>
                           <td class="text-center text-muted">Sample Data</td>
                           <td class="text-center text-muted">Sample Data</td>
                           <td class="text-center">
                              <button type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm">Join</button>
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
      <div class="col-md-3">
         <div class="main-card mb-3 card">
            <div class="card-header text-center">
               Enter Password   
               <div class="btn-actions-pane-right">
               </div>
            </div>
            <div class="table-responsive">
               <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                  <thead>
                     <tr>
                        <td class="text-center text-muted"><input type="text" id="fname" name="fname"><br></td>
                        <td class="text-left">
                           <button type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm">Join</button>
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
@endsection