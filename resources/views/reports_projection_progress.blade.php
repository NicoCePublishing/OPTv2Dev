@extends('layouts.admin_app')

@section('title') Users @endsection

@section('belowcontent')

  

  @section('menutitle')
  <div class="row">
    <div class="col-md-6 order-1 d-flex align-items-center">
       <div class="px-2 border-end">
          <h4 class="m-0 fw-bolder">Reports - Projection Progress (Detailed)</h4>    
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
                              
                              <select class="form-select reportsprojprogress_period" name="reportsprojprogress_period" required aria-label="Default select example">
                                    {{-- <option value="" selected disabled >Select in the list</option> --}}
                                    
                                    @foreach ($q as $r)
                                          <option value="{{ $r->DOCNUM }}"> {{ projection_period_display($r->DOCNUM) }}</option>
                           
                                    @endforeach
                              </select>
                           
                           </div>
                     </div>
                     <div class="col-md-6">
                     <div class="input-group ">
                           <span class="input-group-text" id="basic-addon1">Name</span>
                           <select class="form-control reportsprojprogress_pernr"  required name="reportsprojprogress_pernr" id="reportsprojprogress_pernr" aria-label="Default select example">
                           
                        
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
                
                        
                                <a class="dropdown-item btn-exportexcel-reports-projprogress text-success-600" href="#"><i class="fa fa-file-excel"></i> Excel</a>
                        </div>
                    </div>
                     
                  </div>
                  
                  <div class="text-end col-md-3 col-4 ">
                      <div>
                         <button type="submit" class="btn btn-primary btn-sm w-50 filterReportsProjectionProgress">Filter</button>
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
         <div class="card-body p-1 ">
   
            <div class="table-responsive ms-n1 ps-1 scrollbar">

               <table id="reports-projprogress-list" class="fs--1 table   text-center">
                     <thead class="border border-1">
                        <tr role="row">
                     
                        
                        </tr>
                        <tr>
                           {{-- <th scope="col" class="text-center" width="5%">#</th> --}}
                           <th scope="col" class="text-center" width="24%">Customer</th>
                           <th scope="col" class="text-center" width="14%">Customer / ISBN</th>
                           <th scope="col" class="text-center" width="28%">Title</th>
                           <th scope="col" class="text-center" width="5%">Popup.</th>
                           <th scope="col" class="text-center" width="5%">Projtn.</th>
                           <th scope="col" class="text-center" width="8%">Date<br>Subm.</th>
                           <th scope="col" class="text-center" width="15%">Status</th>
                           {{-- <th scope="col" class="text-center" width="6%">RSM</th>
                           <th scope="col" class="text-center" width="8%">Date<br>Appr.</th>
                           <th scope="col" class="text-center" width="6%">SSM</th>
                           <th scope="col" class="text-center" width="8%">Date<br>Appr.</th> --}}
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

   var pernrOneChoice = oneChoices('.reportsprojprogress_pernr')
   var basedocnum = $('.reportsprojprogress_period').val();
         var pernr=  $('.reportsprojprogress_pernr').val();
          
         if(pernr !== '1'){
            
            var projProgressListable = $("#reports-projprogress-list");
            var projProgressListableURL =  "/datatable_reports_projprogress?basedocnum="+basedocnum+"&pernr="+pernr;
            var projProgressListableColumns = [
                     // { "data": "num" },
                     { "data": "customername" },
                     { "data": "isbn" },
                     { "data": "description" },
                     { "data": "population" },
                     { "data": "projection" },
                     { "data": "datesubmit" },
                     { "data": "status" },
                     // { "data": "rsmqty" },
                     // { "data": "rsmdateapproved" },
                     // { "data": "ssmqty" },
                     // { "data": "ssmdateapproved" },
            ];

       

            dTableRowGroup(projProgressListable,0, projProgressListableURL, projProgressListableColumns, 250,"",true,'',false,0,0);

         }
            
            


        $(document).on('click','.filterReportsProjectionProgress',function (e) {

         var basedocnum = $('.reportsprojprogress_period').val();
         var pernr=  $('.reportsprojprogress_pernr').val();
          

            var projProgressListable = $("#reports-projprogress-list");
            var projProgressListableURL =  "/datatable_reports_projprogress?basedocnum="+basedocnum+"&pernr="+pernr;
            var projProgressListableColumns = [
                     // { "data": "num" },
                     { "data": "customername" },
                     { "data": "isbn" },
                     { "data": "description" },
                     { "data": "population" },
                     { "data": "projection" },
                     { "data": "datesubmit" },
                     { "data": "status" },
                     // { "data": "rsmqty" },
                     // { "data": "rsmdateapproved" },
                     // { "data": "ssmqty" },
                     // { "data": "ssmdateapproved" },
            ];

       

            dTableRowGroup(projProgressListable,0, projProgressListableURL, projProgressListableColumns, 300,"",true,'',false,0,0);


      });


         $(document).on('click','.btn-exportexcel-reports-projprogress',function (e) {

               var projectionperiodtext = $('.reportsprojprogress_period option:selected').text()
               var pernr = $('.reportsprojprogress_pernr option:selected').text();

               ExportExcel('reports-projprogress-list', 'Projection Progress - '+ projectionperiodtext + ' - ' + pernr + '  ')

         });


//END READY
});





</script>

@endsection