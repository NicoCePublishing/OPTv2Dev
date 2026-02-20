@extends('layouts.admin_app')

@section('title') Users @endsection

@section('belowcontent')

  

  @section('menutitle')
  <div class="row">
    <div class="col-md-6 order-1 d-flex align-items-center">
       <div class="px-2 border-end">
          <h4 class="m-0 fw-bolder">Reports - Projection Approval Status</h4>    
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
                         
                         <select class="form-select reportsprojapprovalstatus_period" name="reportsprojapprovalstatus_period" required aria-label="Default select example">
                               {{-- <option value="" selected disabled >Select in the list</option> --}}
                               
                               @foreach ($q as $r)
                                     <option value="{{ $r->DOCNUM }}"> {{ projection_period_display($r->DOCNUM) }}</option>
                      
                               @endforeach
                         </select>
                      
                      </div>
                </div>
                <div class="col-md-5">
                  <div class="input-group ">
                      <span class="input-group-text" id="basic-addon1">Name</span>
                      <select class="form-control reportsprojapprovalstatus_pernr"  required name="reportsprojapprovalstatus_pernr" id="reportsprojapprovalstatus_pernr" aria-label="Default select example">
                       
                        @if($users->count() > 1 ) 
                           
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
                   <div class="dropdown font-sans-serif d-inline-block">

                      <button class="btn btn-phoenix-secondary dropdown-toggle btn-sm" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-download me-2"></i> Download
                      </button><span class="caret"> </span>
                      <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="dropdownMenuButton">
                          {{-- <div class="border-0 dropdown-divider"></div>    --}}
              
                      
                              <a class="dropdown-item btn-exportexcel-reports-projapprovalstatus text-success-600" href="#"><i class="fa fa-file-excel"></i> Excel</a>
                      </div>
                  </div>
                   
                </div>
                
                <div class="text-end col-md-3 col-4 ">
                    <div>
                       <button type="submit" class="btn btn-primary btn-sm w-50 filterReportsProjectionApprovalStatus">Filter</button>
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

              <table id="reports-projapproval-status-list" class="fs--1 table table-striped  text-center">
                    <thead class="border border-1">
                       <tr role="row">
                    
                       
                       </tr>
                       <tr>
                            {{-- <th scope="col" class="text-center" width="3%">#</th> --}}
                            <th scope="col" class="text-center" width="25%">RSM</th>
                            <th scope="col" class="text-center" width="26%">Name</th>
                            <th scope="col" class="text-center" width="8%">Total <br> Projection</th>
                            <th scope="col" class="text-center" width="8%">Returned</th>
                            <th scope="col" class="text-center" width="8%">Pending <br> (RSM)</th>
                            <th scope="col" class="text-center" width="8%">Pending <br> (SSM)</th>
                            <th scope="col" class="text-center" width="8%">Approved</th>
                            <th scope="col" class="text-center" width="12%">Completed <br> (%)</th>
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

  var basedocnum = $('.reportsprojapprovalstatus_period').val();
         var pernr=  $('.reportsprojapprovalstatus_pernr').val();
        

            var projApprovalstatusListable = $("#reports-projapproval-status-list");
            var projApprovalstatusListableURL =  "/datatable_reports_projapprovalstatus?basedocnum="+basedocnum+"&pernr="+pernr;
            var projApprovalstatusListableColumns = [
                   
                     { "data": "pernrrsmname" },
                     { "data": "pernrname" },
                     { "data": "totalprojtn" },
                     { "data": "totalprojtnreturned" },
                     { "data": "totalprojtnpendingrsm" },
                     { "data": "totalprojtnpendingssm" },
                     { "data": "totalprojtnapproved" },
                     { "data": "percent_completed" },
            ];

       

            dTableRowGroup(projApprovalstatusListable,0, projApprovalstatusListableURL, projApprovalstatusListableColumns, 250,"",true,'',false,0,0);
            


        $(document).on('click','.filterReportsProjectionApprovalStatus',function (e) {

         var basedocnum = $('.reportsprojapprovalstatus_period').val();
         var pernr=  $('.reportsprojapprovalstatus_pernr').val();
          

           var projApprovalstatusListable = $("#reports-projapproval-status-list");
            var projApprovalstatusListableURL =  "/datatable_reports_projapprovalstatus?basedocnum="+basedocnum+"&pernr="+pernr;
            var projApprovalstatusListableColumns = [
                   
                     { "data": "pernrrsmname" },
                     { "data": "pernrname" },
                     { "data": "totalprojtn" },
                     { "data": "totalprojtnreturned" },
                     { "data": "totalprojtnpendingrsm" },
                     { "data": "totalprojtnpendingssm" },
                     { "data": "totalprojtnapproved" },
                     { "data": "percent_completed" },
            ];

       

            dTableRowGroup(projApprovalstatusListable,0, projApprovalstatusListableURL, projApprovalstatusListableColumns, 250,"",true,'',false,0,0);


      });


         $(document).on('click','.btn-exportexcel-reports-projapprovalstatus',function (e) {

               var projectionperiodtext = $('.reportsprojapprovalstatus_period option:selected').text()
               var pernr = $('.reportsprojapprovalstatus_pernr option:selected').text();

               ExportExcel('reports-projapproval-status-list', 'Projection Approval Status - '+ projectionperiodtext )

         });

//END READY
});





</script>

@endsection