@extends('layouts.admin_app')

@section('title') Approvals @endsection

@section('belowcontent')



  @section('menutitle')
  <div class="row d-none un-cl">
    <div class="col-md-6 order-1 d-flex align-items-center">
       <div class="px-2 border-end">
          <h4 class="mt-0 fw-bolder">Customer - Link Accounts</h4>
          <a class="fw-bold h5 add-new-op text-primary " href="#!" data-bs-toggle="modal" data-bs-target="#AddNewLinkAccountModal">+ Add New</a>     
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

 <ul class="nav nav-underline d-none" id="myTab" role="tablist">
    <li class="nav-item"><a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="true">For Approval ( (<span class="approvalscount_display"></span>) )</a></li>
    <li class="nav-item d-none"><a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#tab-profile" role="tab" aria-controls="tab-profile" aria-selected="false">Approved</a></li>
  </ul>
  <h4 class="mt-0 w-100 fw-bolder">
    
    Approvals (<span class="approvalscount_display"></span>)
                                    
                                        
  </h4>
  @endsection

  

  <div class="">

    <div class="tab-content" id="myTabContent">
         <div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row ">

                    <div class="col-md-9 mb-2  d-flex align-items-center">
        
                        <div class="d-inline col-3"> 
                                
                        </div>
                        <div class="input-group d-none">

                            <span class="input-group-text" id="basic-addon1">
                                Projection Period
                            </span>
                            
                            <select class="form-select selected_projection_id" aria-label="Default select example">
                                <option option="" selected="" disabled="">Select in the list</option>
                                <option value="1">PID: 116 | Level: BED | Acad. Yr: 2025-2026 | BED-JUNE</option>
                                <option value="2">PID: 115 | Level: BED | Acad. Yr: 2025-2026 | BED-JUNE</option>
                                <option value="3">PID: 126 | Level: BED | Acad. Yr: 2025-2026 | BED-JUNE | Supplement to OPT ID: 124</option>
                            </select>
                
                        </div>
                </div>
                <div class="col-md-2 order-1 d-flex align-items-center d-none">
                    <div class=" text-center"> 
                        <span class="h4  text-700"> 29<br>  
                        <span class="h5 text-warning fw-bold"> 
                        <i>Total Quantity </i> </span>  
                    </span></div>
                </div>
                <div class="col-md-2 order-1 d-flex align-items-center d-none">
                <div class=" text-center"> 
                    <span class="h4  text-700"> 4<br>  
                        <span class="h5 text-warning fw-bold"> 
                        <i>Book Titles </i> </span>  
                    </span></div>
            </div>
            <div class="col-md-2 order-1 d-flex align-items-center d-none">
                <div class=" text-center"> 
                    <span class="h4  text-700"> 3<br>  
                        <span class="h5 text-warning fw-bold"> 
                        <i>Customer </i> </span>  
                    </span></div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-12 col-xxl-6 text-left">
                

                <div class="card border border-300 p-2" >                
                <div class="table-responsive ms-n1 ps-1 scrollbar">

                    <table id="approvals-list-table" class="fs--1 table table-striped  text-center">
                        <thead class="border border-1">
                            <tr role="row">
                        
                            
                            </tr>
                            <tr>
                                <th scope="col" class="text-center" width="5%">#</th>
                                <th scope="col" class="text-center" width="20%">Type</th>
                                <th scope="col" class="text-center" width="35%">Name</th>
                                <th scope="col" class="text-center" width="15%">Reference</th>
                                <th scope="col" class="text-center" width="15%">Date Submitted</th>
                                <th scope="col" class="text-center" width="10%" title="Turn-Around Time">TAT</th>
                                <th scope="col" class="text-center" width="5%">Action</th>
                            </tr>
                        </thead>
                        
                    </table>


                
                </div>
            </div>
                

            </div>

            

        </div>
        
        </div>
        
         <div class="tab-pane fade" id="tab-profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="d-inline col-3"> 
                <div class="row ">

                    <div class="col-md-9 mb-2  d-flex align-items-center">
        
                        <div class="d-inline col-3"> 
                                <h4 class="mt-0 w-100 fw-bolder mb-2">Approved
                                    
                                        
                                </h4>
                        </div>
                     
                </div>
                    <div class="col-md-2 order-1 d-flex align-items-center d-none">
                        <div class=" text-center"> 
                            <span class="h4  text-700"> 29<br>  
                            <span class="h5 text-warning fw-bold"> 
                            <i>Total Quantity </i> </span>  
                        </span></div>
                    </div>
                    <div class="col-md-2 order-1 d-flex align-items-center d-none">
                    <div class=" text-center"> 
                        <span class="h4  text-700"> 4<br>  
                            <span class="h5 text-warning fw-bold"> 
                            <i>Book Titles </i> </span>  
                        </span></div>
                </div>
                <div class="col-md-2 order-1 d-flex align-items-center d-none">
                    <div class=" text-center"> 
                        <span class="h4  text-700"> 3<br>  
                            <span class="h5 text-warning fw-bold"> 
                            <i>Customer </i> </span>  
                        </span></div>
                    </div>
                </div>

        <div class="row">
            <div class="col-12 col-md-12 col-xxl-6 border-end text-left">
                

                <div class="card" style="height:60vh; max-height:350vh;overflow-y:auto;overflow-x:hidden;">                
                <div class="table-responsive ms-n1 ps-1 scrollbar">

                    <table class="fs--1 table table-striped  text-center">
                        <thead class="border border-1">
                            <tr role="row">
                        
                            
                            </tr>
                            <tr>
                                <th scope="col" class="text-center" width="3%">#</th>
                                <th scope="col" class="text-center" width="15%">Type</th>
                                <th scope="col" class="text-center" width="20%">Name</th>
                                <th scope="col" class="text-center" width="20%">Requested To</th>
                                <th scope="col" class="text-center" width="15%">Reference</th>
                                <th scope="col" class="text-center" width="10%">Date </br> Submitted</th>
                                <th scope="col" class="text-center" width="10%">Date </br> Approved</th>
                                <th scope="col" class="text-center" width="5%" title="Turn-Around Time">Approval </br> Days</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row" class="pb-0 text-center px-2 ">
                                        1
                                </td>
                                <td scope="row" class="pb-0 text-start ">
                                        Projection
                                </td>

                                <td scope="row" class="pb-0 text-start ">
                                    
                                    
                                    ANDRADA , RSM KRISS ANN 00099994
                                
                                
                                    
                                </td>
                                <td scope="row" class="pb-0 text-start ">
                                    
                                    -
                                    
                                </td>
                                <td scope="row" class="pb-0 text-start ">
                                    <!-- <a class="" data-bs-toggle="collapse" href="#collapseExample1" role="button" title="ANGELICUM LEARNING CENTRE, INC. - BASIC EDUCATION   0001802148" aria-expanded="true" aria-controls="collapseExample1"> -->
                                    <a class="" href="teamprojectionForApproval.html" role="button" title="ANGELICUM LEARNING CENTRE, INC. - BASIC EDUCATION   0001802148" aria-expanded="true" aria-controls="collapseExample1">
                                        PID:116 | Level: BED | Acad. Yr: 2025-2026 | BED-JUNE
                                    </a> 
                                </td>
                                <td scope="row" class="pb-0 text-center ">
                                        06/06/2025
                                </td>
                                <td scope="row" class="pb-0 text-center ">
                                    06/18/2025
                                </td>
                                <td>
                                        12
                                
                                </td>
            
                                
                            </tr>
                            <tr>
                                <td scope="row" class="pb-0 text-center px-2 ">
                                        2
                                </td>
                                <td scope="row" class="pb-0 text-start ">
                                        Projection
                                </td>

                                <td scope="row" class="pb-0 text-start ">
                                    
                                    
                                    LOPEZ , MYRA 00002298
                                
                                
                                    
                                </td>
                                <td scope="row" class="pb-0 text-start ">
                                    
                                    -
                                    
                                </td>
                                <td scope="row" class="pb-0 text-start ">
                                    <!-- <a class="" data-bs-toggle="collapse" href="#collapseExample1" role="button" title="ANGELICUM LEARNING CENTRE, INC. - BASIC EDUCATION   0001802148" aria-expanded="true" aria-controls="collapseExample1"> -->
                                    <a class="" href="teamprojectionForApproval.html" role="button" title="ANGELICUM LEARNING CENTRE, INC. - BASIC EDUCATION   0001802148" aria-expanded="true" aria-controls="collapseExample1">
                                        PID:116 | Level: BED | Acad. Yr: 2025-2026 | BED-JUNE
                                    </a> 
                                </td>
                                <td scope="row" class="pb-0 text-center ">
                                        06/08/2025
                                </td>
                                <td scope="row" class="pb-0 text-center ">
                                         06/18/2025
                                </td>
                                <td>
                                     10
                                
                                </td>
            
                                
                            </tr>
                            <tr>
                                <td scope="row" class="pb-0 text-center px-2 ">
                                        3
                                </td>
                                <td scope="row" class="pb-0 text-start ">
                                        Projection
                                </td>

                                <td scope="row" class="pb-0 text-start ">
                                    
                                    
                                    BSMNM.VILLAREAL 00099945
                                
                                
                                    
                                </td>
                                <td scope="row" class="pb-0 text-start ">
                                    
                                    -
                                    
                                </td>
                                <td scope="row" class="pb-0 text-start ">
                                    <!-- <a class="" data-bs-toggle="collapse" href="#collapseExample1" role="button" title="ANGELICUM LEARNING CENTRE, INC. - BASIC EDUCATION   0001802148" aria-expanded="true" aria-controls="collapseExample1"> -->
                                    <a class="" href="teamprojectionForApproval.html" role="button" title="ANGELICUM LEARNING CENTRE, INC. - BASIC EDUCATION   0001802148" aria-expanded="true" aria-controls="collapseExample1">
                                        PID:116 | Level: BED | Acad. Yr: 2025-2026 | BED-JUNE
                                    </a> 
                                </td>
                                <td scope="row" class="pb-0 text-center ">
                                        06/18/2025
                                </td>
                                <td scope="row" class="pb-0 text-center ">
                                    06/19/2025
                                </td>
                                <td>
                                        1
                                
                                </td>
            
                                
                            </tr>
                            <tr>
                                <td scope="row" class="pb-0 text-center px-2 ">
                                        4
                                </td>
                                <td scope="row" class="pb-0 text-start ">
                                        Projection
                                </td>

                                <td scope="row" class="pb-0 text-start ">
                                    
                                    
                                    LO , NICCO BENJAMIN 00002541
                                
                                
                                    
                                </td>
                                <td scope="row" class="pb-0 text-start ">
                                    
                                    -
                                    
                                </td>
                                <td scope="row" class="pb-0 text-start ">
                                    <!-- <a class="" data-bs-toggle="collapse" href="#collapseExample1" role="button" title="ANGELICUM LEARNING CENTRE, INC. - BASIC EDUCATION   0001802148" aria-expanded="true" aria-controls="collapseExample1"> -->
                                    <a class="" href="teamprojectionForApproval.html" role="button" title="ANGELICUM LEARNING CENTRE, INC. - BASIC EDUCATION   0001802148" aria-expanded="true" aria-controls="collapseExample1">
                                        PID:116 | Level: BED | Acad. Yr: 2025-2026 | BED-JUNE
                                    </a> 
                                </td>
                                <td scope="row" class="pb-0 text-center ">
                                    06/17/2025
                                </td>
                                <td scope="row" class="pb-0 text-center ">
                                        06/22/2025 
                                </td>
                                <td>
                                        5
                                
                                </td>
            
                                
                            </tr>
                            <tr>
                                <td scope="row" class="pb-0 text-center px-2 ">
                                        5
                                </td>
                                <td scope="row" class="pb-0 text-start ">
                                        Transfer Request - In
                                </td>

                                <td scope="row" class="pb-0 text-start ">
                                    
                                    
                                    ASNAWI , AE JAYCIE   00002542
                                
                                
                                    
                                </td>
                                <td scope="row" class="pb-0 text-start ">
                                    
                                    ABOGANDA, BSO ROMMEL &nbsp 00002578
                                    
                                </td>
                                <td scope="row" class="pb-0 text-start">
                                    <!-- <a class="" data-bs-toggle="collapse" href="#collapseExample1" role="button" title="ANGELICUM LEARNING CENTRE, INC. - BASIC EDUCATION   0001802148" aria-expanded="true" aria-controls="collapseExample1"> -->
                                    <a class="" href="transferTransferIn.html" role="button" title="ANGELICUM LEARNING CENTRE, INC. - BASIC EDUCATION   0001802148" aria-expanded="true" aria-controls="collapseExample1">
                                        TR-0235
                                    </a> 
                                </td>
                                <td scope="row" class="pb-0 text-center ">
                                        06/14/2025
                                </td>
                                <td scope="row" class="pb-0 text-center ">
                                    06/17/2025
                                </td>
                                <td>
                                        3
                                
                                </td>
            
                                
                            </tr>

                            
                            

                        </tbody>
                    </table>


                
                </div>
            </div>
                

            </div>

            

        </div>
            </div>
        
    
        </div>
    </div>
  </div>

 



      

 



@endsection

@section('scriptJS')


<script>


$(document).ready(function(){

    
        var myForApprovalListable = $("#approvals-list-table");
        var myForApprovalListableURL =  "/datatable_approvals_list_table?";
        var myForApprovalListableColumns = [
                { "data": "num" },
                { "data": "approvaltype" },
                { "data": "name" },
                // { "data": "requestedto" },
                { "data": "reference" },
                { "data": "datesubmit" },
                { "data": "tat" },
                { "data": "action" },   
        ];

        dTable(myForApprovalListable, myForApprovalListableURL, myForApprovalListableColumns, 270,"",true,'',true,0,0);


  
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
    $(document).on('change','#add_new_projection_supplemental',function (e) {

            var v = $(this).val();


            $.ajax({
                url:"/get_projectionid_details?id="+v, 
                type:'GET',
                headers: {
                        'X-CSRF-TOKEN': getCsrfToken() 
                },
                beforeSend: function() {
                    
                    showLoadingDiv('.submit_add_new_projection .row')
                },
                success:function(data){
                    // console.log(data);
                    hideLoadingDiv('.submit_add_new_projection .row')

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


    $(document).on('submit','.submit_add_new_projection',function (e) {
               
               e.preventDefault();
              var formData = new FormData(this);
  
            
            $.ajax({
                     url:"/submit_add_new_projection", 
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
  
                            DataTableReload('#customer-link-accounts-table')
                            $('.submit_add_new_projection')[0].reset();
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

 