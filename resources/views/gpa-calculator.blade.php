@extends('layouts.app')
@section('content')
<div class="app-main__inner">
   <div class="app-page-title">
      <div class="page-title-wrapper">
         <div class="page-title-heading">
            <div>CGPA Calculator</div>
         </div>
      </div>
   </div>
   <div class="row">
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
                        <th class="text-center">Product</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td class="text-center text-muted">EEE 391-3</td>
                        <td>
                           <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                 <div class="widget-heading">Basics of Signals and Systems</div>
                              </div>
                           </div>
                        </td>
                        <td class="text-center">
                           <div class="badge badge-secondary">Bilkent: 3</div>
                        </td>
                        <td class="text-center">
                           <div class="mb-2 mr-2 btn-group">
                              <button class="btn btn-outline-dark">---</button>
                              <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-outline-dark"><span class="sr-only">Toggle Dropdown</span></button>
                              <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                 <button type="button" tabindex="0" class="dropdown-item">A</button>
                                 <button type="button" tabindex="0" class="dropdown-item">A-</button>
                                 <button type="button" tabindex="0" class="dropdown-item">B+</button>
                                 <button type="button" tabindex="0" class="dropdown-item">B</button>
                                 <button type="button" tabindex="0" class="dropdown-item">B-</button>
                                 <button type="button" tabindex="0" class="dropdown-item">C+</button>
                                 <button type="button" tabindex="0" class="dropdown-item">C</button>
                                 <button type="button" tabindex="0" class="dropdown-item">C-</button>
                                 <button type="button" tabindex="0" class="dropdown-item">D+</button>
                                 <button type="button" tabindex="0" class="dropdown-item">D</button>
                                 <button type="button" tabindex="0" class="dropdown-item">F</button>
                              </div>
                           </div>
                        </td>
                        <td class="text-center">0.0</td>
                        <td class="text-center">0.0</td>
                     </tr>
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
                           <div class="mb-2 mr-2 btn-group">
                              <button class="btn btn-outline-dark">---</button>
                              <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-outline-dark"><span class="sr-only">Toggle Dropdown</span></button>
                              <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                 <button type="button" tabindex="0" class="dropdown-item">A</button>
                                 <button type="button" tabindex="0" class="dropdown-item">A-</button>
                                 <button type="button" tabindex="0" class="dropdown-item">B+</button>
                                 <button type="button" tabindex="0" class="dropdown-item">B</button>
                                 <button type="button" tabindex="0" class="dropdown-item">B-</button>
                                 <button type="button" tabindex="0" class="dropdown-item">C+</button>
                                 <button type="button" tabindex="0" class="dropdown-item">C</button>
                                 <button type="button" tabindex="0" class="dropdown-item">C-</button>
                                 <button type="button" tabindex="0" class="dropdown-item">D+</button>
                                 <button type="button" tabindex="0" class="dropdown-item">D</button>
                                 <button type="button" tabindex="0" class="dropdown-item">F</button>
                              </div>
                           </div>
                        </td>
                        <td class="text-center">0.0</td>
                        <td class="text-center">0.0</td>
                     </tr>
                     <tr>
                        <td class="text-center text-muted">POLS 101-4</td>
                        <td>
                           <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                 <div class="widget-heading">Introduction to Political Science 1</div>
                              </div>
                           </div>
                        </td>
                        <td class="text-center">
                           <div class="badge badge-secondary">Bilkent: 3</div>
                        </td>
                        <td class="text-center">
                           <div class="mb-2 mr-2 btn-group">
                              <button class="btn btn-outline-dark">---</button>
                              <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-outline-dark"><span class="sr-only">Toggle Dropdown</span></button>
                              <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                 <button type="button" tabindex="0" class="dropdown-item">A</button>
                                 <button type="button" tabindex="0" class="dropdown-item">A-</button>
                                 <button type="button" tabindex="0" class="dropdown-item">B+</button>
                                 <button type="button" tabindex="0" class="dropdown-item">B</button>
                                 <button type="button" tabindex="0" class="dropdown-item">B-</button>
                                 <button type="button" tabindex="0" class="dropdown-item">C+</button>
                                 <button type="button" tabindex="0" class="dropdown-item">C</button>
                                 <button type="button" tabindex="0" class="dropdown-item">C-</button>
                                 <button type="button" tabindex="0" class="dropdown-item">D+</button>
                                 <button type="button" tabindex="0" class="dropdown-item">D</button>
                                 <button type="button" tabindex="0" class="dropdown-item">F</button>
                              </div>
                           </div>
                        </td>
                        <td class="text-center">0.0</td>
                        <td class="text-center">0.0</td>
                     </tr>
                     <tr>
                        <td class="text-center text-muted">CS 342-2</td>
                        <td>
                           <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                 <div class="widget-heading">Operating Systems</div>
                              </div>
                           </div>
                        </td>
                        <td class="text-center">
                           <div class="badge badge-secondary">Bilkent: 4</div>
                        </td>
                        <td class="text-center">
                           <div class="mb-2 mr-2 btn-group">
                              <button class="btn btn-outline-dark">---</button>
                              <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-outline-dark"><span class="sr-only">Toggle Dropdown</span></button>
                              <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                 <button type="button" tabindex="0" class="dropdown-item">A</button>
                                 <button type="button" tabindex="0" class="dropdown-item">A-</button>
                                 <button type="button" tabindex="0" class="dropdown-item">B+</button>
                                 <button type="button" tabindex="0" class="dropdown-item">B</button>
                                 <button type="button" tabindex="0" class="dropdown-item">B-</button>
                                 <button type="button" tabindex="0" class="dropdown-item">C+</button>
                                 <button type="button" tabindex="0" class="dropdown-item">C</button>
                                 <button type="button" tabindex="0" class="dropdown-item">C-</button>
                                 <button type="button" tabindex="0" class="dropdown-item">D+</button>
                                 <button type="button" tabindex="0" class="dropdown-item">D</button>
                                 <button type="button" tabindex="0" class="dropdown-item">F</button>
                              </div>
                           </div>
                        </td>
                        <td class="text-center">0.0</td>
                        <td class="text-center">0.0</td>
                     </tr>
                     <tr>
                        <td class="text-center text-muted">ENG 401-7</td>
                        <td>
                           <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                 <div class="widget-heading">Technical Report Writing and Presentation</div>
                              </div>
                           </div>
                        </td>
                        <td class="text-center">
                           <div class="badge badge-secondary">Bilkent: 2</div>
                        </td>
                        <td class="text-center">
                           <div class="mb-2 mr-2 btn-group">
                              <button class="btn btn-outline-dark">---</button>
                              <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle-split dropdown-toggle btn btn-outline-dark"><span class="sr-only">Toggle Dropdown</span></button>
                              <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                 <button type="button" tabindex="0" class="dropdown-item">A</button>
                                 <button type="button" tabindex="0" class="dropdown-item">A-</button>
                                 <button type="button" tabindex="0" class="dropdown-item">B+</button>
                                 <button type="button" tabindex="0" class="dropdown-item">B</button>
                                 <button type="button" tabindex="0" class="dropdown-item">B-</button>
                                 <button type="button" tabindex="0" class="dropdown-item">C+</button>
                                 <button type="button" tabindex="0" class="dropdown-item">C</button>
                                 <button type="button" tabindex="0" class="dropdown-item">C-</button>
                                 <button type="button" tabindex="0" class="dropdown-item">D+</button>
                                 <button type="button" tabindex="0" class="dropdown-item">D</button>
                                 <button type="button" tabindex="0" class="dropdown-item">F</button>
                              </div>
                           </div>
                        </td>
                        <td class="text-center">0.0</td>
                        <td class="text-center">0.0</td>
                     </tr>
                     <tr>
                        <td class="text-center text-muted"></td>
                        <td>
                           <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                 <div class="widget-heading"></div>
                              </div>
                           </div>
                        </td>
                        <td class="text-center"></td>
                        <td class="text-center">
                        </td>
                        <td class="text-center">
                           <div class="mb-2 mr-2 btn-group">
                           </div>
                        </td>
                        <td class="text-center"> <button class="btn btn-success" type="submit">Calculate Academic Standing</button> </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
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
                        <th class="text-center"> GPA</th>
                        <td class="text-left text-muted">0.0</td>
                     </tr>
                  </thead>
                  <tbody>
                     <div class="scrollbar-container ps--active-y">
                        <tr>
                           <th class="text-center">CGPA    </th>
                           <td class="text-left text-muted">0.0</td>
                        </tr>
                        <tr>
                           <th class="text-center">Standing</th>
                           <td class="text-left text-muted">---</td>
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