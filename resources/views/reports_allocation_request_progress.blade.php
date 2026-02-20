@extends('layouts.admin_app')

@section('title') Users @endsection

@section('belowcontent')

  

  @section('menutitle')
  <div class="row">
    <div class="col-md-6 order-1 d-flex align-items-center">
       <div class="px-2 border-end">
          <h4 class="m-0 fw-bolder">Reports - Allocation Transfer Request Progress</h4>    
       </div>
    </div>

 </div>


  @endsection

  

  @php
   $rank = trim(session('rank'));
   $pernr = request('pernr');
   $q = ProjectionPeriodList('0',trim(session('division')))->get();
@endphp


 
<div class="row">
  <div class="col-12 col-md-12 col-xxl-6 text-left">
      

      <div class="card border border-300 p-0" >    
        <div class="card-header pb-1 p-2 border-bottom border-300 bg-soft">

           <div class="row g-3 justify-content-between align-items-end">
             <div class="col-12 col-md-12 col-sm-auto">
               <div class="row">
                 <div class="col-md-6 ">
               
                       <div class="input-group w-100 mb-1">

                          <span class="input-group-text " id="basic-addon1">
                             Projection Period
                          </span>
                          
                          <select class="form-select create_allocation_request_projectionperiod" name="create_allocation_request_projectionperiod" required aria-label="Default select example">
                                <option value="" selected disabled >Select in the list</option>
                                
                                @foreach ($q as $r)
                                      <option value="{{ $r->DOCNUM }}"> {{ projection_period_display($r->DOCNUM) }}</option>
                       
                                @endforeach
                          </select>
                       
                       </div>
                 </div>
                 <div class="col-md-5">
                   <div class="input-group ">
                       <span class="input-group-text" id="basic-addon1">Name</span>
                       <select class="form-control filterGroup1"  required name="userOpenProjection" id="userOpenProjection" aria-label="Default select example">
                        
                         @if(!in_array(trim(session('rank')),filterUsersSalesTeam())) 
                            
                             <option value="1" selected >All</option> 
                             
                         @endif       

                         @foreach($users as $user)
                           <option value="{{$user->PERNR}}">{{$user->PERNR ." " . $user->FULLNAME}}</option>
                         @endforeach
                       </select>
                       
                   </div>
               </div>

              
               </div>
               <div class="row mt-2">
                 <div class="text-start col-md-9 col-8 ">
                    
                 </div>
                 
                 <div class="text-end col-md-3 col-4 ">
                     <div>
                         {{-- <button type="submit" class="btn btn-warning resetfilteOPTReport">Reset</button> --}}
                         <button type="submit" class="btn btn-primary w-50 filteOPTReport">Filter</button>
                     </div>
                 </div>
              </div>
             </div>
             <div class="col-12 col-sm-auto">
               <div class="d-flex align-items-center">
                
               </div>
             </div>
           </div>
           
       </div>            
        <div class="card-body p-2">

           <div class="table-responsive ms-n1 ps-1 scrollbar">

              <table id="approvals-list-table" class="fs--1 table table-striped  text-center">
                    <thead class="border border-1">
                       <tr role="row">
                    
                        <th colspan="7" class="bg-white border-0 text-center" width="5%">Request Details</th>
                        <th colspan="4" class="bg-white border-0 border-start text-center" width="5%">AE Approval</th>
                        <th colspan="4" class="bg-white border-0 border-start text-center" width="5%">Requested To Approval</th>
                       
                       </tr>
                       <tr>
                        <th scope="col" class="text-center" width="3%">#</th>
                        <th scope="col" class="text-center" width="20%">Requested To</th>
                        <th scope="col" class="text-center" width="10%">ISBN</th>
                        <th scope="col" class="text-center" width="25%">Title</th>
                        <th scope="col" class="text-center" width="5%">Req. Type</th>
                        <th scope="col" class="text-center" width="5%">Qty</th>
                        <th scope="col" class="text-center" width="8%">Date<br>Submit</th>
                        <th scope="col" class="text-center" width="5%">RSM</th>
                        <th scope="col" class="text-center" width="8%">Date<br>Appr.</th>
                        <th scope="col" class="text-center" width="5%">SSM</th>
                        <th scope="col" class="text-center" width="8%">Date<br>Appr.</th>
                        <th scope="col" class="text-center" width="5%">RSM</th>
                        <th scope="col" class="text-center" width="8%">Date<br>Appr.</th>
                        <th scope="col" class="text-center" width="5%">SSM</th>
                        <th scope="col" class="text-center" width="8%">Date<br>Appr.</th>
                        <th scope="col" class="text-center" width="8%">Appr.<br>Qty</th>
                      </tr>
                    </thead>
                    
              </table>


           
           </div>
        </div>
  </div>
      

  </div>

  

</div>



@endsection

@section('scriptJS')


<script>


$(document).ready(function(){

    
        var openProjectionListable = $("#open-projection-list-table");
        var openProjectionListableURL =  "/datatable_open_projection_list_table?";
        var openProjectionListableColumns = [
                { "data": "num" },
                { "data": "projectionid" },
                { "data": "period" },
                { "data": "year" },
                { "data": "level" },
                { "data": "supplemental" },
                { "data": "status" },
                { "data": "startdate" },
                { "data": "enddate" },
                { "data": "remarks" },
        ];

        dTable(openProjectionListable, openProjectionListableURL, openProjectionListableColumns, 300,"",false,'',false,0,0);


//END READY
});





</script>

@endsection