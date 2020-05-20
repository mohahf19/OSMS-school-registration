@extends('layouts.app')
@section('content')
<div class="app-main__inner">
   <div class="app-page-title">
      <div class="page-title-wrapper">
         <div class="page-title-heading">
            <div>Assignment 1 Grading
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-10">
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
                        <th class="text-center">Course Type</th>
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
                           <div class="badge badge-secondary">ECTS: 5</div>
                        </td>
                        <td class="text-center">
                           <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Mandatory</button>
                        </td>
                        <td class="text-center">
                           <button type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm">Select</button>
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
                           <div class="badge badge-secondary">ECTS: 5</div>
                        </td>
                        <td class="text-center">
                           <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Mandatory</button>
                        </td>
                        <td class="text-center">
                           <button type="button" id="PopoverCustomT-1" class="btn btn-secondarybtn-sm">Select</button>
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
               CS 353-1 Quiz 1
               <div class="btn-actions-pane-right">
               </div>
            </div>
            <div class="table-responsive">
               <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                  <thead>
                     <tr>
                        <th class="text-center">Assignment ID</th>
                        <th class="text-center">Student Name</th>
                        <th class="text-center">Student ID</th>
                        <th class="text-center">Grade</th>
                        <th class="text-center">Comments</th>
                     </tr>
                  </thead>
                  <tbody>
                     <div class="scrollbar-container ps--active-y">
                        <tr>
                           <td class="text-center text-muted">Sample Data</td>
                           <td class="text-center text-muted">Sample Data</td>
                           <td class="text-center text-muted">2170XXXX</td>
                           <td class="text-center">
                              <input type="text" id="fname" name="fname" > /100<br>
                           </td>
                           <td class="text-center">
                              <input type="text" id="fname" name="fname" >
                           </td>
                        </tr>
                        <tr>
                           <td class="text-center text-muted">Sample Data</td>
                           <td class="text-center text-muted">Sample Data</td>
                           <td class="text-center text-muted">2170XXXX</td>
                           <td class="text-center">
                              <input type="text" id="fname" name="fname" > /100<br>
                           </td>
                           <td class="text-center">
                              <input type="text" id="fname" name="fname" >
                           </td>
                        </tr>
                        <tr>
                           <td class="text-center text-muted">Sample Data</td>
                           <td class="text-center text-muted">Sample Data</td>
                           <td class="text-center text-muted">2170XXXX</td>
                           <td class="text-center">
                              <input type="text" id="fname" name="fname" > /100<br>
                     </div>
                     </td>
                     <td class="text-center">
                     <input type="text" id="fname" name="fname" >
                     </td>
                     </tr>
                     <tr>
                        <td class="text-center text-muted">Sample Data</td>
                        <td class="text-center text-muted">Sample Data</td>
                        <td class="text-center text-muted">2170XXXX</td>
                        <td class="text-center">
                           <input type="text" id="fname" name="fname" > /100<br>
            </div>
            </td>
            <td class="text-center">
            <input type="text" id="fname" name="fname" >
            </td>
            </tr>
            <tr>
            <td class="text-center text-muted">Sample Data</td>
            <td class="text-center text-muted">Sample Data</td>
            <td class="text-center text-muted">2170XXXX</td>
            <td class="text-center">
            <input type="text" id="fname" name="fname" > /100<br>
         </div>
         </td>
         <td class="text-center">
         <input type="text" id="fname" name="fname" >
         </td>
         </tr>
         <tr>
         <td class="text-center text-muted">Sample Data</td>
         <td class="text-center text-muted">Sample Data</td>
         <td class="text-center text-muted">2170XXXX</td>
         <td class="text-center">
         <input type="text" id="fname" name="fname" > /100<br>
      </div>
      </td>
      <td class="text-center">
      <input type="text" id="fname" name="fname" >
      </td>
      </tr>
      <tr>
      <td class="text-center text-muted">Sample Data</td>
      <td class="text-center text-muted">Sample Data</td>
      <td class="text-center text-muted">2170XXXX</td>
      <td class="text-center">
      <input type="text" id="fname" name="fname" > /100<br>
   </div>
   </td>
   <td class="text-center">
   <input type="text" id="fname" name="fname" >
   </td>
   </tr>
   <tr>
   <td class="text-center text-muted"></td>
   <td class="text-center text-muted"></td>
   <td class="text-center text-muted"></td>
   <td class="text-center">
   <button class="btn btn-primary" type="submit">Submit Grade</button>
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