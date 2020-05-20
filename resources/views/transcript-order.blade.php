@extends('layouts.app')
@section('content')
<div class="app-main__inner">
   <div class="app-page-title">
      <div class="page-title-wrapper">
         <div class="page-title-heading">
            <div>Official Transcript Order<br>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-7">
         <div class="main-card mb-3 card">
            <div class="card-header">
               Order Details
               <div class="btn-actions-pane-right">
               </div>
            </div>
            <div class="table-responsive">
               <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                  <thead>
                     <tr>
                        <th></th>
                        <th>Student Name</th>
                        <td>Muhammad Bilal Bin Khalid</td>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td></td>
                        <th>Bilkent ID</th>
                        <td>21701834</td>
                     </tr>
                     <tr>
                        <td></td>
                        <th>Program</th>
                        <td>Computer Engineering</td>
                     </tr>
                     <tr>
                        <td></td>
                        <th>Language</th>
                        <td>
                           <div class="position-relative form-check"><label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> English &nbsp &nbsp &nbsp</label>
                              <label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> Turkish</label>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td></td>
                        <th>Delivery Method</th>
                        <td>
                           <div class="position-relative form-check"><label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> Online &nbsp &nbsp &nbsp</label>
                              <label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> Physical</label>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td></td>
                        <th>Address</th>
                        <td>  <textarea id="w3mission" rows="4" cols="50"></textarea></td>
                     </tr>
                     <tr>
                        <td></td>
                        <th>Payment Method</th>
                        <td>
                           <div class="position-relative form-check"><label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> Cash &nbsp &nbsp &nbsp</label>
                              <label class="form-check-label"><input name="radio1" type="radio" class="form-check-input"> Card</label>
                           </div>
                        </td>
                     </tr>
                     <tr>
                        <td></td>
                        <th>Fee</th>
                        <td>7 TL</td>
                     </tr>
                  </tbody>
               </table>
               <div class="divider"></div>
               <div class="text-center">
                  <div class="btn-group dropdown">
                     <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Make Payment</button>
                     <br></br>
                  </div>
               </div>
            </div>
            <br></br>
         </div>
      </div>
   </div>
</div>
@endsection