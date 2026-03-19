@extends('layouts.admin_app')

@section('title') Users @endsection

@section('belowcontent')

  

  @section('menutitle')
  <div class="row">
    <div class="col-md-6 order-1 d-flex align-items-center">
       <div class="px-2 border-end">
          <h4 class="m-0 fw-bolder">Reports - Projection Breakdown</h4>    
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
  <div class="col-12 col-md-12 col-xxl-12 text-left">
      

      <div class="card border border-300 p-0" >    
        <div class="card-header pb-1 p-2 border-bottom border-300 bg-soft">

          <div class="row g-3 justify-content-between align-items-end">
            <div class="col-12 col-md-12 col-sm-auto">
               <div class="row">
                  <div class="col-md-5 ">
              
                      <div class="input-group w-100 mb-1">

                         <span class="input-group-text " id="basic-addon1">
                            Projection Period
                         </span>
                         
                         <select class="form-select reportsbooktitlesprojtnbreakdownstatus_period" name="reportsbooktitlesprojtnbreakdownstatus_period" required aria-label="Default select example">
                               {{-- <option value="" selected disabled >Select in the list</option> --}}
                               
                               

                               @foreach ($q as $r)
                                     <option value="{{ $r->DOCNUM }}"> {{ projection_period_display($r->DOCNUM) }}</option>
                      
                               @endforeach
                         </select>
                      
                      </div>
                </div>
                {{-- <div class="col-md-4">
                  <div class="input-group ">
                      <span class="input-group-text" id="basic-addon1">Name</span>
                      <select class="form-control reportsbooktitlesprojtnbreakdownstatus_pernr"  required name="reportsbooktitlesprojtnbreakdownstatus_pernr" id="reportsbooktitlesprojtnbreakdownstatus_pernr" aria-label="Default select example">
                       
                   
                          @if($users->count() > 1 ) 
                          
                              <option value="1" selected >All</option> 
                              
                          @endif    
                          

                        @foreach($users as $user)
                          <option value="{{$user->PERNR}}">{{$user->PERNR ." " . $user->FULLNAME}}</option>
                        @endforeach
                      </select>
                      
                  </div>
              </div> --}}
              <div class="col-md-3">
                  <div class="input-group ">
                      <span class="input-group-text" id="basic-addon1">Division</span>
                      <select class="form-control reportsbooktitlesprojtnbreakdownstatus_division"  required name="reportsbooktitlesprojtnbreakdownstatus_division" id="reportsbooktitlesprojtnbreakdownstatus_division" aria-label="Default select example">
                      <option value="1" selected >All</option>
                         @foreach($division as $div)
                            <option value="{{$div->DIVISION}}">{{$div->DIVISION}}</option>
                         @endforeach
                      
                      </select>
                      
                 </div>

              </div>
              <div class="col-md-5">
          
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
              
                      
                              <a class="dropdown-item btn-exportexcel-reports-booktitlesprojtnbreakdownstatus text-success-600" href="#"><i class="fa fa-file-excel"></i> Excel</a>
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

              <table id="reports-booktitlesprojtnbreakdown-status-list" class="fs--1 table table-striped  text-center">
                    <thead class="border border-1">
                        <tr>
                            <th scope="col" class="text-center" width="5%">#</th>
                            <th scope="col" class="text-center" width="15%">ISBN</th>
                            <th scope="col" class="text-center" width="33%">Title</th>
                            <th scope="col" class="text-center" width="10%">Type</th>
                            <th scope="col" class="text-center" width="7%">Total</th>
                            <th scope="col" class="text-center" width="30%">Breakdown</th>
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

   // var pernrOneChoice = oneChoices('.reportsbooktitlesprojtnbreakdownstatus_pernr')
   
         var basedocnum = $('.reportsbooktitlesprojtnbreakdownstatus_period').val();
       var pernr=  $('.reportsbooktitlesprojtnbreakdownstatus_pernr').val();
      

          var booktitlesprojtnbreakdownstatusListable = $("#reports-booktitlesprojtnbreakdown-status-list");
          var booktitlesprojtnbreakdownstatusListableURL =  "/datatable_reports_booktitleprojtnbreakdown?basedocnum="+basedocnum+"&division=1";
          var booktitlesprojtnbreakdownstatusListableColumns = [
                   { "data": "num" },
                   { "data": "isbn" },
                   { "data": "description" },
                   { "data": "bsadisplay" },
                   { "data": "totalprojtn" },
                   { "data": "breakdown" },
          ];

     

          dTable(booktitlesprojtnbreakdownstatusListable, booktitlesprojtnbreakdownstatusListableURL, booktitlesprojtnbreakdownstatusListableColumns, 250,"",true,'',false,0,0);
          


      $(document).on('click','.filterReportsProjectionApprovalStatus',function (e) {

            var basedocnum = $('.reportsbooktitlesprojtnbreakdownstatus_period').val();
            var division=  $('.reportsbooktitlesprojtnbreakdownstatus_division').val();
              

           var booktitlesprojtnbreakdownstatusListable = $("#reports-booktitlesprojtnbreakdown-status-list");
            var booktitlesprojtnbreakdownstatusListableURL =  "/datatable_reports_booktitleprojtnbreakdown?basedocnum="+basedocnum+"&division="+division;
            var booktitlesprojtnbreakdownstatusListableColumns = [
                     { "data": "num" },
                    { "data": "isbn" },
                    { "data": "description" },
                    { "data": "bsadisplay" },
                    { "data": "totalprojtn" },
                    { "data": "breakdown" },
          ];

     

          dTable(booktitlesprojtnbreakdownstatusListable, booktitlesprojtnbreakdownstatusListableURL, booktitlesprojtnbreakdownstatusListableColumns, 250,"",true,'',false,0,0);


    });


       $(document).on('click','.btn-exportexcel-reports-booktitlesprojtnbreakdownstatus',function (e) {

             var projectionperiodtext = $('.reportsbooktitlesprojtnbreakdownstatus_period option:selected').text()
             var pernr = $('.reportsbooktitlesprojtnbreakdownstatus_pernr option:selected').text();

             ExportExcel('reports-booktitlesprojtnbreakdown-status-list', 'Book Titles Projection Breakdown - '+ projectionperiodtext )

       });

//END READY
});





</script>

@endsection