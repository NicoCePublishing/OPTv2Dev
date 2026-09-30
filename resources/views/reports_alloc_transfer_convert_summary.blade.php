@extends('layouts.admin_app')

@section('title') Reports - Allocation Transfer & Convert
Summary @endsection

@section('belowcontent')

  

  @section('menutitle')
  <div class="row">
    <div class="col-md-6 order-1 d-flex align-items-center">
       <div class="px-2 border-end">
          <h4 class="m-0 fw-bolder">Reports - Allocation Transfer & Convert
            Summary</h4>    
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
                           
                           <select class="form-select reportsalloctransferconvertsummary_period" name="reportsalloctransferconvertsummary_period" required aria-label="Default select example">
                                 {{-- <option value="" selected disabled >Select in the list</option> --}}
                                 
                                 

                                 @foreach ($q as $r)
                                       <option value="{{ $r->DOCNUM }}"> {{ projection_period_display($r->DOCNUM) }}</option>
                        
                                 @endforeach
                           </select>
                        
                        </div>
                  </div>
                  <div class="col-md-4">
                    <div class="input-group ">
                        <span class="input-group-text" id="basic-addon1">Name</span>
                        <select class="form-control reportsalloctransferconvertsummary_pernr"  required name="reportsalloctransferconvertsummary_pernr" id="reportsalloctransferconvertsummary_pernr" aria-label="Default select example">
                         
                     
                            @if($users->count() > 1 ) 
                            
                                <option value="1" selected >All</option> 
                                
                            @endif    
                            

                          @foreach($users as $user)
                            <option value="{{$user->PERNR}}">{{$user->PERNR ." " . $user->FULLNAME}}</option>
                          @endforeach
                        </select>
                        
                    </div>
                </div>
                <div class="col-md-3 d-none">
                    <div class="input-group ">
                        <span class="input-group-text" id="basic-addon1">Division</span>
                        <select class="form-control "  required name="" id="" aria-label="Default select example">
                        </select>
                        
                   </div>

                </div>
                <div class="col-md-5">
            
               </div>


            
                </div>
                <div class="row">
                  <div class="text-start col-md-9 col-8 mt-3">
                    <div class="text-start col-md-9 col-8 ">
                        <div class="dropdown font-sans-serif d-inline-block">
     
                           <button class="btn btn-phoenix-secondary dropdown-toggle btn-sm" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i class="fa fa-download me-2"></i> Download
                           </button><span class="caret"> </span>
                           <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="dropdownMenuButton">
                               {{-- <div class="border-0 dropdown-divider"></div>    --}}
                   
                           
                                   <a class="dropdown-item btn-exportexcel-reports-alloctransferconvertsummary text-success-600" href="#"><i class="fa fa-file-excel"></i> Excel</a>
                           </div>
                       </div>
                        
                     </div>
                     
                     
                  </div>
                  
                  <div class="text-end col-md-3 col-4 mt-3">
                      <div>
                          <button type="submit" class="btn btn-danger resetfilteralloctransferconvertsummaryReport">Reset</button>
                          <button type="submit" class="btn btn-primary w-50 filteralloctransferconvertsummaryReport">Filter</button>
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

                <table id="reports-alloctransferconvertsummary-list" class="fs--1 table table-striped  text-center">
                    <thead class="border border-1">
                        <tr role="row">
                    
                        
                        </tr>
                        <tr>
                            <th scope="col" class="text-center" width="3%">#</th>
                            <th scope="col" class="text-center" width="10%">Type</th>
                            <th scope="col" class="text-center" width="14%">ISBN</th>
                            <th scope="col" class="text-center" width="15%">Title</th>
                            <th scope="col" class="text-center" width="24%">AE</th>
                            <th scope="col" class="text-center" title="Allocation Type" width="17%">Alloc. Type</th>
                            
                            <th scope="col" class="text-center" width="8%">Qty</th>
                            <th scope="col" class="text-center" width="9%">To </br> Branch/Whouse</th>
                            {{-- <th scope="col" class="text-center" width="8%">Status</th> --}}
                            
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

    var pernrOneChoice = oneChoices('.reportsalloctransferconvertsummary_pernr')


        $(document).on('click','.resetfilteralloctransferconvertsummaryReport',function (e) {

            let myChoices = $('.reportsalloctransferconvertsummary_pernr');

            // assuming gusto mong palitan yung unang instance:
            pernrOneChoice[0].setChoiceByValue('1');


        });

        // @if(request()->has('pid'))

        //     var pidurl = "{{ request()->get('pid')}}";
        //     $('.reportsalloctransferconvertsummary_period').val(pidurl).trigger('change')
        //     var reportsalloctransferconvertsummaryListable = $("#reports-alloctransferconvertsummary-list");
        //     var reportsalloctransferconvertsummaryListableURL =  "/datatable_reports_alloctransferconvertsummary?basedocnum="+pidurl+"&pernr=1&division=1";
        //     var reportsalloctransferconvertsummaryListableColumns = [
        //             { "data": "num" },
        //             { "data": "isbn" },
        //             { "data": "description" },
        //             { "data": "pernrname" },
                   
        //             { "data": "type" },
        //             { "data": "projection" },
        //             { "data": "allocation" },
        //             { "data": "breakdown" },
        //     ];

        //     dTable(reportsalloctransferconvertsummaryListable, reportsalloctransferconvertsummaryListableURL, reportsalloctransferconvertsummaryListableColumns, 250,"",true,'',false,0,0);


        // @endif


        $(document).on('click','.filteralloctransferconvertsummaryReport',function (e) {

            var basedocnum = $('.reportsalloctransferconvertsummary_period').val();
            var pernr=  $('.reportsalloctransferconvertsummary_pernr').val();
            var division=  $('.reportsalloctransferconvertsummary_division').val();
            

            var reportsalloctransferconvertsummaryListable = $("#reports-alloctransferconvertsummary-list");
            var reportsalloctransferconvertsummaryListableURL =  "/datatable_reports_alloctransferconvertsummary?basedocnum="+basedocnum+"&pernr="+pernr+"&division="+division;
            var reportsalloctransferconvertsummaryListableColumns = [
                    { "data": "num" },
                    { "data": "type" },
                    { "data": "isbn" },
                    { "data": "description" },
                    { "data": "pernrDisplay" },
                   
                    { "data": "alloctype" },
                    { "data": "qty" },
                    { "data": "branchwhouse" },
                    // { "data": "num" },
            ];

            dTable(reportsalloctransferconvertsummaryListable, reportsalloctransferconvertsummaryListableURL, reportsalloctransferconvertsummaryListableColumns, 250,"",true,'',false,0,0);




        });

        

        $(document).on('click','.btn-exportexcel-reports-alloctransferconvertsummary',function (e) {

                var projectionperiodtext = $('.reportsalloctransferconvertsummary_period option:selected').text()
                var pernr = $('.reportsalloctransferconvertsummary_pernr option:selected').text();

                ExportExcel('reports-alloctransferconvertsummary-list', 'alloctransferconvertsummary - '+ projectionperiodtext )

        });

//END READY
});





</script>

@endsection