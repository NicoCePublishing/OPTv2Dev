{{-- @if(!rankView('IMD','CRM'))
<script>
    window.location.href = "{{ route('notfound') }}";
</script>
@endif --}}


@extends('layouts.admin_app')

@section('title') Open Projection @endsection

@section('belowcontent')

  

  @section('menutitle')
  <div class="row">
    <div class="col-md-6 order-1 d-flex align-items-center">
       <div class="px-2 border-end">
          <h4 class="m-0 fw-bolder">IMD - Open Projection Period</h4>
          <a class="fw-bold h5 add-new-op text-primary " href="#!" data-bs-toggle="modal" data-bs-target="#AddNewProjectionPeriod">+ Add New</a>     
       </div>
    </div>
    <div class="col-md-2 order-1 d-flex align-items-center d-none">
       <div class=" text-center"> 
          <span class="h4  text-700"> 24<br>  
          <span class="h5 text-warning fw-bold"> 
          <i>Total Quantity </i> </span>  
          </span>
       </div>
    </div>
    <div class="col-md-2 order-1 d-flex align-items-center d-none">
       <div class=" text-center"> 
          <span class="h4  text-700"> 3<br>  
          <span class="h5 text-warning fw-bold"> 
          <i>Book Titles </i> </span>  
          </span>
       </div>
    </div>
    <div class="col-md-2 order-1 d-flex align-items-center d-none">
       <div class=" text-center"> 
          <span class="h4  text-700"> 3<br>  
          <span class="h5 text-warning fw-bold"> 
          <i>Customer </i> </span>  
          </span>
       </div>
    </div>
 </div>


  @endsection

  

 <div class="card h-100">
    <div class="card shadow-none border border-300">
       <div class="card-header p-3 d-none border-300 bg-soft">
          <div class="col-md-4" hidden>
             <div class="input-group">
                <span class="input-group-text" id="basic-addon1">Customer</span>
                <select class="form-control form-control-sm filterGroup1" required="" name="customerOpenProjection" id="customerOpenProjection" aria-label="Default select example">
                   <option value="1" selected="">All</option>
                   <option value="n"> ANGELICUM LEARNING CENTRE, INC. - BASIC EDUCATION 0001802148 </option>
                   <option value="n"> CHRISTIAN SAMARITAN HEALTH SERVICES & TECHNICAL SCH. - BASIC EDUCATION - - 0001805266 </option>
                </select>
             </div>
          </div>
          <div class="row">
             <div class="text-start col-md-9 col-8">
             </div>
             <div class="text-end col-md-3 col-4" hidden>
                <div>
                   <button type="button" class="btn btn-primary w-50">Filter</button>
                </div>
             </div>
          </div>
       </div>
       <div class="card-body p-2">
          {{-- <div class="" style="height:60vh; max-height:350vh;min-width:70vh;overflow-y:auto;overflow-x:hidden;"> --}}
             <div class="table-responsive ms-n1  scrollbar">
                <table id="open-projection-list-table" class=" table table-striped  text-center">
                   <thead class="border border-1">
                      <tr>
                        <th scope="col" class="text-center" width="5%">#</th>
                        <th scope="col" class="text-center" title="Projection ID" width="8%">Projtn </br>  ID</th>
                        <th scope="col" class="text-center" width="8%">Period</th>
                        <th scope="col" class="text-center" width="8%">Year</th>
                        <th scope="col" class="text-center" width="8%">Level</th>
                        <th scope="col" class="text-center" width="8%">Supplement</th>
                        <th scope="col" class="text-center" width="6%">Status</th>
                        <th scope="col" class="text-center" width="10%">Start</th>
                        <th scope="col" class="text-center" width="10%">End</th>
                        <th scope="col" class="text-center" width="19%">Remarks</th>
                      </tr>
                   </thead>
                   
                </table>
             </div>
          {{-- </div> --}}
       </div>
    </div>
 </div>



      

 <div class="modal" id="AddNewProjectionPeriod"  tabindex="-1" aria-labelledby="addDealModal" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content bg-100 p-3">
        <div class="modal-header p-0">
        <h5 class="mb-0"> <span class="fw-bold reference_actual_expenses_refnum_text"></span> Add New Projection Period</h5>
        <button class="btn btn-sm btn-phoenix-secondary" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-xmark text-danger" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"></path></svg><!-- <span class="fas fa-times text-danger"></span> Font Awesome fontawesome.com --></button>
        </div>
    
    
        <div class="modal-body pt-0 mt-0 ">

                <div class="card-body pt-2 pb-0">
                    <form class="submit_add_new_projectionperiod" method="POST">
                        <div class="row">

                          <div class="col-md-6">
                             <div class="input-group">
                               <span class="input-group-text text-center">Projection Type</span>
                               <select class="form-control form-control-sm form-control projection_type form-control-sm-sm" name="add_new_projection_type" id="projection_type" required="">
                                 <option value="mainprojection">Main Projection</option>
                                 <option value="supplemental">Supplemental</option>
                                                      
                                </select>
                             </div>
                           </div>
                           
                           <div class="col-md-6 d-none projection_period_select">
                                <div class="input-group">
                                    <span class="input-group-text text-center">Supplemental To</span>
                                    <select name="add_new_projection_supplemental" id="add_new_projection_supplemental" class="form-control form-control-sm form-control form-control-sm-sm">
                                        <option value="" disabled selected> Select in the list</option>
                                 
                                    </select>
                                </div>
                           </div>

                           <hr class="mt-2">
                           
                            <div class="col-md-6 ">
                                <div class="input-group">
                                  <span class="input-group-text text-center">Start</span>
                                  <input type="date" class="form-control form-control-sm input-sm text-center hasDatepicker" id="add_new_projection_startdate" name="add_new_projection_startdate" required="">
                                </div>
                              </div>
                              
                              <div class="col-md-6">
                                <div class="input-group">
                                  <span class="input-group-text text-center">End</span>
                                  <input type="date" class="form-control form-control-sm input-sm text-center hasDatepicker" id="add_new_projection_enddate" name="add_new_projection_enddate"  required="">
                                </div>
                              </div>
            
                              <div class="col-md-6">
                                <div class="input-group">
                                  <span class="input-group-text text-center w-25">Year</span>
                                  <select class="form-control form-control-sm form-control form-control-sm-sm" id="add_new_projection_school_year" name="add_new_projection_school_year" required="">

                                      
                                        <option value="" selected> Select in the list</option>

                                        @foreach (last3YearsSchoolYearFormat() as $s)

                                            <option value="{{$s}}"> {{$s}} </option>

                                        @endforeach

                                    </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="input-group">
                                  <span class="input-group-text text-center w-25">Level</span>
                                  <select class="form-control form-control-sm form-control form-control-sm-sm" id="add_new_projection_level" name="add_new_projection_level" required="">
                                    <option value="" selected> Select in the list</option>
                                    <option value="BED">BED</option><option value="HED">HED</option><option value="BED/HED">BED/HED</option> </select>
                                </div>
                              </div>
            
                            <div class="col-md-6">
                              <div class="input-group">
                                <span class="input-group-text text-center w-25">Period</span>
                                    <select  id="add_new_projection_school_period" class="form-control form-control-sm form-control form-control-sm-sm" name="add_new_projection_school_period" required="">
                                        <option value="" selected> Select in the list</option>

                                        @foreach (periodList() as $l => $v) 
                                            <option value="{{ $l }}"> {{ $v }} </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
            
                        
                            <div class="col-md-12">
                              <div class="input-group">
                                <span class="input-group-text text-center">Remarks</span>
                                <textarea class="form-control form-control-sm form-control form-control-sm-sm" name="add_new_projection_remarks" id="add_new_projection_remarks" rows="4" style="resize: none;" required=""></textarea>
                              </div>
                            </div>
                          </div>
                   
        
                </div>
            
        </div>
        
        <div class="modal-footer px-0 pb-0">
            <div class="mt-0 text-end "><button class="btn btn-sm btn-primary">Save</button></div>

                  </form>
        </div>
        

    </div>
    </div>
</div>




     <div class="offcanvas offcanvas-end content-offcanvas border offcanvas-backdrop-transparent border-start border-300 shadow-none bg-100" id="projectionperiodeditcanvas" tabindex="-1" aria-labelledby="offcanvasLeftLabel">
        <div class="offcanvas-header pb-0">
           <h5 id="offcanvasLeftLabel">Edit Projection Period</h5>
           <button class="btn btn-sm btn-phoenix-secondary" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa fa-xmark text-danger"></i></button>
        </div>
        <hr>
        <div class="offcanvas-body pt-0">
      
           <div class="row">
            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text text-center" id="basic-addon1">
                    Projection ID
                    </span>
                    <input class="form-control form-control-sm text-center un-cl" readonly="" type="text" value="125">
                 </div>
            </div>
            <div class="col-md-6">
               
            </div>
            <div class="col-md-6">
                <div class="input-group">
                  <span class="input-group-text text-center">Start</span>
                  <input type="date" class="form-control form-control-sm input-sm text-center hasDatepicker"  value="2025-03-12" required="">
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="input-group">
                  <span class="input-group-text text-center">End</span>
                  <input type="date" class="form-control form-control-sm input-sm text-center hasDatepicker"  value="2025-03-12" required="">
                </div>
              </div>

              <div class="col-md-6">
                <div class="input-group">
                  <span class="input-group-text text-center w-50">Academic Year</span>
                  <select class="form-control form-control-sm form-control form-control-sm-sm"  required="">
                    <option></option>
                    <option value="2024-2025">2024-2025</option><option value="2025-2026" selected>2025-2026</option><option value="2026-2027">2026-2027</option>									</select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-group">
                  <span class="input-group-text text-center w-50">Level</span>
                  <select class="form-control form-control-sm form-control form-control-sm-sm" name="add_new_projection_projection_level" required="">
                    <option></option>
                    <option value="BED">BED</option><option value="HED" selected>HED</option><option value="BED/HED">BED/HED</option> </select>
                </div>
              </div>

            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-text text-center w-50">Period</span>
                <select name="add_new_projection_school_period" id="dPeriod" class="form-control form-control-sm form-control form-control-sm-sm" required="">
                    <option></option>
                    <option value="1">1 - BED-JUNE</option><option value="2">2 - HED-JUNE</option><option value="3" selected>3 - HED-AUGUST</option><option value="4">4 - HED-NOVEMBER</option><option value="5">5 - HED-JANUARY</option><option value="6">6 - HED-SUMMER</option>										</select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="input-group">
                <span class="input-group-text text-center w-50">Supplement</span>
                <select name="dSuppStatus" id="dSuppStatus" class="form-control form-control-sm form-control form-control-sm-sm">
                    <option value="0"></option>
                    <option value="125">Batch: 125 Period: 3</option><option value="124">Batch: 124 Period: 1</option><option value="121">Batch: 121 Period: 5</option><option value="120">Batch: 120 Period: 4</option><option value="111">Batch: 111 Period: 3</option><option value="110">Batch: 110 Period: 2</option><option value="109">Batch: 109 Period: 1</option><option value="106">Batch: 106 Period: 5</option><option value="105">Batch: 105 Period: 3</option><option value="103">Batch: 103 Period: 3</option><option value="101">Batch: 101 Period: 2</option><option value="99">Batch: 99 Period: 6</option><option value="96">Batch: 96 Period: 1</option><option value="94">Batch: 94 Period: 5</option><option value="93">Batch: 93 Period: 4</option><option value="86">Batch: 86 Period: 3</option><option value="84">Batch: 84 Period: 2</option><option value="83">Batch: 83 Period: 6</option><option value="82">Batch: 82 Period: 1</option><option value="80">Batch: 80 Period: 5</option><option value="76">Batch: 76 Period: 4</option><option value="49">Batch: 49 Period: 3</option><option value="48">Batch: 48 Period: 1</option><option value="47">Batch: 47 Period: 2</option><option value="46">Batch: 46 Period: 6</option><option value="38">Batch: 38 Period: 5</option><option value="35">Batch: 35 Period: 3</option><option value="33">Batch: 33 Period: 3</option><option value="31">Batch: 31 Period: 2</option><option value="28">Batch: 28 Period: 2</option><option value="27">Batch: 27 Period: 1</option><option value="24">Batch: 24 Period: 4</option><option value="23">Batch: 23 Period: 3</option><option value="21">Batch: 21 Period: 2</option><option value="18">Batch: 18 Period: 4</option><option value="15">Batch: 15 Period: 1</option><option value="13">Batch: 13 Period: 4</option><option value="12">Batch: 12 Period: 3</option><option value="11">Batch: 11 Period: 2</option><option value="8">Batch: 8 Period: 4</option><option value="3">Batch: 3 Period: 1</option><option value="2">Batch: 2 Period: 5</option><option value="1">Batch: 1 Period: 4</option>									</select>
              </div>
            </div>
        
            <div class="col-md-12">
              <div class="input-group">
                <span class="input-group-text text-center">Remarks</span>
                <textarea class="form-control form-control-sm form-control form-control-sm-sm" name="dRemarks" value="Main Projection" id="dRemarks" rows="4" style="resize: none;" required=""></textarea>
              </div>
            </div>
          </div>
           <div class="mt-0 text-end mt-3  p-3 border-top"><button class="btn btn-sm btn-primary">Save</button></div>
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

        dTable(openProjectionListable, openProjectionListableURL, openProjectionListableColumns, 300,"",true,'',true,0,0);


  
    $(document).on('click','.add-new-op',function (e) {

        $.ajax({
           url:"/get_mainprojection_list", 
           type:'GET',
           headers: {
                   'X-CSRF-TOKEN': getCsrfToken() 
           },
           beforeSend: function() {
           
             
           },
           success:function(data){
               console.log(data);

               $('#add_new_projection_supplemental').empty()

               var opt = `   <option value="" disabled selected> Select in the list</option> `;

               for(i=0;i<data.length;i++) {
                        var d = data[i]
                        
                        var docnum = d.docnum
                        var projectionid = d.projectionid
                        var projectioniddisplay = d.projectioniddisplay

                        opt += `
                            <option value="`+docnum+`">`+projectioniddisplay+`</option>
                                    `;

                         
               }

               $('#add_new_projection_supplemental').append(opt)
               
           },

           error:function(data){
              
           }
           });

    });

    $(document).on('click','.projectionid-status-sw',function (e) {
        
        var docnum = $(this).data('docnum');

            if($(this).is(':checked')){
               var v = '1';
            }
            else {
                var v = '0';
            }

            $.ajax({
                     url:"/submit_update_status_projectionid", 
                     data: {
                        v : v,
                        docnum : docnum,
                     },
                     type:'POST',
                     headers: {
                              'X-CSRF-TOKEN': getCsrfToken() 
                     },
                     beforeSend: function() {
                     
                        showLoadingDiv('#open-projection-list')
                     },
                     success:function(data){
                           console.log(data);
                           hideLoadingDiv('#open-projection-list')
                           
                        //    var data = data[0];
                           
                           if(data.status == '2') {
  
                                //  sweetalert(" ","Status Updated!", icon = 'success', timer = '1000', btn = false);
                                
                                 var html = "" 
                                  + "<span class='text-success fw-bold'>Status Updated!</span>"
                                  + "";

                                toastifyShow(html)  
                           }
                           else   {

                                 swal("Oops...", "Something went wrong. Please contact your administrator", "error");
                           }
                           
                        },
                           error:function(data){
                                 hideLoading();
                                
                                 swal("Oops...", "Something went wrong. Please contact your administrator", "error");
                        }
              });

    });

    $(document).on('change','.openprojectionupdateenddate',function (e) {
         var v = $(this).val();
         var curenddate = $(this).data('curenddate');
         var docnum = $(this).data('docnum')
         swal({
            title: "Update End Date?",
            text: "Are you sure you want to update the end date of this projection period??",
            icon: "info",
            buttons: true,
            dangerMode: true
         }).then((ok) => {

             var basedocnum = $('.selected_projection_id').val();

                if (ok) {
               
                     $.ajax({
                        url:"/submit_update_enddate_projectionid", 
                        data: {
                           v : v,
                           docnum : docnum,
                        },
                        type:'POST',
                        headers: {
                                 'X-CSRF-TOKEN': getCsrfToken() 
                        },
                        beforeSend: function() {
                        
                           showLoadingDiv('#open-projection-list')
                        },
                        success:function(data){
                              console.log(data);
                              hideLoadingDiv('#open-projection-list')

                              DataTableReload('#open-projection-list-table')
                           //    var data = data[0];
                              
                              if(data.status == '2-1') {

                                   var html = "" 
                                       + "<span class='text-success fw-bold'>End date changed and projection period has been open.</span>"
                                       + "";

                                   toastifyShow(html,undefined,undefined,6000)  

                              }
                              else if(data.status == '2') {
        
                                    var html = "" 
                                    + "<span class='text-success fw-bold'>End date changed!</span>"
                                    + "";

                                   toastifyShow(html)  
                              }
                              else   {

                                    swal("Oops...", "Something went wrong. Please contact your administrator", "error");
                              }
                              
                           },
                              error:function(data){
                                    hideLoading();
                                 
                                    swal("Oops...", "Something went wrong. Please contact your administrator", "error");
                           }
               });

                } else {
                        $(this).val(curenddate);
               }

        });

         
    })
    $(document).on('change','#projection_type',function (e) {

         $('#add_new_projection_supplemental').val('')
         $('#add_new_projection_school_year').val('').trigger('change')
         $('#add_new_projection_level').val('').trigger('change')
         $('#add_new_projection_school_period').val('').trigger('change')
         $('#add_new_projection_startdate').val('').trigger('change')
         $('#add_new_projection_enddate').val('').trigger('change')
         $('#add_new_projection_remarks').val('').trigger('change')

    });
    $(document).on('change','#add_new_projection_supplemental',function (e) {

            var v = $(this).val();


            $.ajax({
                url:"/get_projectionid_details?id="+v, 
                type:'GET',
                headers: {
                        'X-CSRF-TOKEN': getCsrfToken() 
                },
                beforeSend: function() {
                    
                    showLoadingDiv('.submit_add_new_projectionperiod .row')
                },
                success:function(data){
                    // console.log(data);
                    hideLoadingDiv('.submit_add_new_projectionperiod .row')

                    var d = data[0]

                    var docnum = d.docnum
                    var projectionid = d.projectionid
                    var supplemental = d.projectionid
                    var startdate = d.startdate
                    var enddate = d.enddate
                    var year = d.year
                    var level = d.level
                    var staff = d.staff
                    var linenum= d.linenum
                    var remarks = d.remarks
                    var period = d.period
                    var projectiontype = d.projectiontype
                    var projectioniddisplay = d.projectioniddisplay

                    $('#add_new_projection_school_year').val(year).trigger('change')
                    $('#add_new_projection_level').val(level).trigger('change')
                    $('#add_new_projection_school_period').val(period).trigger('change')
                    $('#add_new_projection_startdate').val(startdate).trigger('change')
                    $('#add_new_projection_enddate').val(enddate).trigger('change')
                    $('#add_new_projection_remarks').val(remarks).trigger('change')

                },

                error:function(data){
                    
                }
                });

            });

    $(document).on('click','.projection_period_edit',function (e) {
         
         e.preventDefault();
     
            $('#projectionperiodeditcanvas').offcanvas('show')
    });
    
    $(document).on('click','.projection_type',function (e) {

        var value = $(this).val();

        if(value === 'supplemental') {
            $('.projection_period_select').removeClass('d-none')
        }
        else {
            $('.projection_period_select').addClass('d-none')
        }


    });


    $(document).on('submit','.submit_add_new_projectionperiod',function (e) {
               
               e.preventDefault();
              var formData = new FormData(this);
  
            
            $.ajax({
                     url:"/submit_add_new_projectionperiod", 
                     data: formData,
                            processData: false,
                            contentType: false,

                     type:'POST',
                     headers: {
                              'X-CSRF-TOKEN': getCsrfToken() 
                     },
                     beforeSend: function() {
                     
                           showLoading()
                     },
                     success:function(data){
                           console.log(data);
                           hideLoading();
                           
                        //    var data = data[0];
                           
                           if(data.status == '2') {
  
                            DataTableReload('#open-projection-list-table')
                            $('.submit_add_new_projectionperiod')[0].reset();
                                $('.modal').modal('hide');
                                sweetalert(" ","Created New Projection Period!", icon = 'success', timer = '5000', btn = false);
                                
                           }
                           else   {

                                 swal("Oops...", "Something went wrong. Please contact your administrator", "error");
                           }
                           
                        },
                           error:function(data){
                                 hideLoading();
                                
                                 swal("Oops...", "Something went wrong. Please contact your administrator", "error");
                        }
              });



      });
                



      
   
//END READY
});





</script>

@endsection