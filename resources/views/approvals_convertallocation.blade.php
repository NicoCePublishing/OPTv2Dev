@extends('layouts.admin_app')

@section('title') Approvals Convert Alloc. @endsection

@section('belowcontent')

  

  @section('menutitle')
  <div class="row d-none un-cl">
    <div class="col-md-6 order-1 d-flex align-items-center">
       <div class="px-2 border-end">
          <h4 class="mt-0 fw-bolder"></h4>
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

  @php
    $projdocnum = request('pid');
    $username = request('name');
    $fname = request('fname');

  @endphp

  <div class="">
    
    <div class="row ">

        <div class="col-md-12 mb-2  d-flex align-items-center">

            <div class="d-inline col-12"> 
                <div class="col-md-12 order-1 d-flex align-items-center">
             
                    <div class="d-inline"> 
                       <h4 class="mt-0 fw-bolder ms-0">
                          <a class="fw-bold fs--1 ms-3 mx-2" href="{{route('approvals')}}"> 
                                <i class="fas fa-arrow-left"></i> Back
                            </a>
                            <span class="text-500"> For {{ session('rank')}} Approval  - </span> Convert Allocation - {{ $fname}}
                          
                      </h4>
                    </div>
                 </div>
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

<div class="mini-db">
    <div class="row">
    
        
        <div class="col-md-7">
            <div class="input-group">
                <span class="input-group-text w-25" id="basic-addon1">
                    Projection Period
                </span>
                <span class="input-group-text status_text_creation" style="background-color:white !important;" id="basic-addon1">
                    {{projection_period_display($projdocnum)}}
                </span>
        
    
            </div>
        
       
        </div>

    </div> 
      
  </div>


<div class="for_approval_convertalloc_card row mt-2 mb-2">
        <div class="col-12 col-md-12 col-xxl-6 text-left">
            
            <div class="card border-0 p-2" >  
                {{-- <div class="" style="height:50vh; max-height:350vh;min-width:70vh;overflow-y:auto;overflow-x:hidden;">               --}}
                    <div class="ms-n1 ps-1">

                        <table id="for-approval-convertalloc-list-table" class="fs--1 table  table-responsive text-center">
                            <thead class="border border-1 sticky-top">
                                <tr>
                                    <th scope="col" class="text-center" width="5%">#</th>
                                    <th scope="col" class="text-center" width="15%">ISBN</th>
                                    <th scope="col" class="text-center" width="25%">Title</th>
                                    <th scope="col" class="text-center" width="15%">Convert </br> Type</th>
                                    <th scope="col" class="text-center" width="10%">Qty</th>
                                    <th scope="col" class="text-center" width="10%">Date Submit</th>
                                    <th scope="col" class="text-center" width="5%">
                                        <div class="d-flex justify-content-center ">
                                            <input class="form-check-input for_approval_convertalloc_checkallisbn" type="checkbox" value="">
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                                            

                            </tbody>
                        </table>
                    </div>
                {{-- </div> --}}
                <div class="">
            
                   
                        <div class="text-end border-top p-3">
                            <div>
                                
                                <button type="button" data-bs-toggle="modal" data-bs-target="#DiaapprovedAllocReqModal" class="btn btn-danger btn-sm btn-return btn-disapproved-convertalloc">Disapproved</button>
                                <button type="button" class="btn btn-success btn-sm btn-approve">Approve</button>
                            </div>
                        </div>
                
                 </div>
            </div>
            
        </div>

</div>
    
  </div>

 


<div class="modal" id="DiaapprovedAllocReqModal"  tabindex="-1" aria-labelledby="addDealModal" aria-modal="true" role="dialog">
    <div class="modal-dialog modal modal-dialog-centered">
    <div class="modal-content bg-100">

       <form class="submit_disapproved_convertalloc" method="POST">
        @csrf
        <div class="modal-header">
         
          <h5 class="modal-title" id="">Disapproved   <span class="projectioniddispla">  </span></h5>
          {{-- <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-xmark fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"></path></svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com --></button> --}}
        </div>
        <div class="modal-body">
          {{-- <h2 class="mb-2 lh-sm calendar-title"></h2> --}}
          <div class=""> 
            
          <p class="text-700 lead mb-0 text-center ">
                <span class="fw-bold "></span>  
        </p>

          <div class="">
             <div class="mb-1 text-start">
                <label class="form-label">Reason of Disapproved?</label>
                <textarea class="form-control disapproved_convertalloc_reason" maxlength="254" name="disapproved_convertalloc_reason" placeholder="...." style="height: 100px" required></textarea>
             </div>
           </div>
 
           <div class=" d-flex justify-content-center">
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="submit">Save</button>
        </div>
       </form>
      </div>
    </div>
  </div>
 </div>
 </div>

 




@endsection

@section('scriptJS')


<script>



$(document).ready(function () {

      
    var basedocnum = "{{ request('pid') }}"
    var username = "{{ request('name') }}"

    var forApprovalConvertAllocListable = $("#for-approval-convertalloc-list-table");
    var forApprovalConvertAllocListableURL =  "/datatable_for_approval_convertalloc_list?basedocnum="+basedocnum+"&username="+username;
    var forApprovalConvertAllocListableColumns = [
            { "data": "num" },
            { "data": "isbn" },
            { "data": "description" },
            { "data": "converttypedisplay" },
            { "data": "qty" },
            { "data": "datecreate" },
            { "data": "checkbox" },
    ];

    dTable(forApprovalConvertAllocListable, forApprovalConvertAllocListableURL, forApprovalConvertAllocListableColumns, 250,"",true,'',false,0,0,0,1);

    $(document).on('click','.btn-approve',function (e) {

        var forapprovalallocreqcheckbox = $('.for_approval_convertalloc_checkisbn:checked');

        if(forapprovalallocreqcheckbox.length === 0) {

            sweetalert(" ","Please select a title to approve", icon = 'warning', timer = '5000', btn = false);
            return false;

        }

        var formData = new FormData();

        // var zeroBalance = false;
     
        forapprovalallocreqcheckbox.each( function(index) {
              
              let $tr = $(this).closest('tr');           
              let $input = $(this); 

              
              let id           = $input.data('id');
              let docnum   = $input.data('docnum');
              let isbn           = $input.data('isbn');
              let basedocnum           = $input.data('basedocnum');

            //   if(qtyInt <= 0)  zeroBalance = true;;

              formData.append('id[]', id);
              formData.append('docnum[]', docnum);
              formData.append('isbn[]', isbn);
              formData.append('basedocnum[]', basedocnum);



          })
    
        //   if(reqMorethanBalance) {

        //     sweetalert(" ", "One or more titles have a requested quantity greater than the available balance.", icon = 'warning', timer = '5000', btn = false);
        
        //     return false;

        // }

        // if(zeroBalance) {   

        //     sweetalert(" ", "One or more titles have 0 requested qty. Please enter a valid quantity.", icon = 'warning', timer = '5000', btn = false);
        //     return false;

        // }

        swal({
                    title: 'Approve Titles',
                    text: "Are you sure you want to approve selected titles?",
                    icon: "info",
                    buttons: true,
                    dangerMode: true,
            })
            .then((willCancel) => {

                
                if (willCancel) {



                    $.ajax({
                                url:"/submit_approve_convertalloc", 
                                data: formData,
                                processData: false,
                                contentType: false,
                                type:'POST',
                                headers: {
                                        'X-CSRF-TOKEN': getCsrfToken() 
                                },
                                beforeSend: function() {
                                
                                showLoadingDiv('#for-approval-convertalloc-list-table')

                                },
                                success:function(data){
                                    console.log(data);
                                    hideLoadingDiv('#for-approval-convertalloc-list-table')
                                    
                                //    var data = data[0];
                                    
                                    if(data.status == '2') {

                                   
                                            var html = "" 
                                            + "<span class='text-success fw-bold'>Approved!</span>"
                                            + "";

                                            toastifyShow(html)  

                                            DataTableReload('#for-approval-convertalloc-list-table');

                                            

                                            
                                    }
                                    else   {

                                            swal("Oops...", "Something went wrong. Please contact your administrator", "error");
                                    }

                                    
                                },
                                    error:function(data){
                                        hideLoadingDiv('#for-approval-convertalloc-list-table')
                                        
                                            swal("Oops...", "Something went wrong. Please contact your administrator", "error");
                                }
                        });

                 
                    
                       

                } 
                else {
                
                        
                }
        });
      

    });

    $(document).on('submit','.submit_disapproved_convertalloc',function (e) {

        e.preventDefault();

        var forapprovalallocreqcheckbox = $('.for_approval_convertalloc_checkisbn:checked');

            if(forapprovalallocreqcheckbox.length === 0) {

                sweetalert(" ","Please select a title to disapprove", icon = 'warning', timer = '5000', btn = false);
                return false;

            }

            var formData = new FormData(this);

            // var zeroBalance = false;

            forapprovalallocreqcheckbox.each( function(index) {
                
                let $tr = $(this).closest('tr');           
                let $input = $(this); 

                
                let id           = $input.data('id');
                let docnum   = $input.data('docnum');
                let isbn           = $input.data('isbn');
                let basedocnum           = $input.data('basedocnum');


                formData.append('id[]', id);
                formData.append('docnum[]', docnum);
                formData.append('isbn[]', isbn);
                formData.append('basedocnum[]', basedocnum);



            })


            swal({
                        title: 'Disapproved Titles',
                        text: "Are you sure you want to disapprove selected titles?",
                        icon: "info",
                        buttons: true,
                        dangerMode: true,
                })
                .then((willCancel) => {

                    
                    if (willCancel) {



                        $.ajax({
                                    url:"/submit_disapproved_convertalloc", 
                                    data: formData,
                                    processData: false,
                                    contentType: false,
                                    type:'POST',
                                    headers: {
                                            'X-CSRF-TOKEN': getCsrfToken() 
                                    },
                                    beforeSend: function() {
                                    
                                    showLoadingDiv('#for-approval-convertalloc-list-table')

                                    },
                                    success:function(data){
                                        console.log(data);
                                        hideLoadingDiv('#for-approval-convertalloc-list-table')
                                        
                                    //    var data = data[0];
                                        
                                        if(data.status == '2') {

                                    
                                                var html = "" 
                                                + "<span class='text-success fw-bold'>Titles Disapproved.</span>"
                                                + "";

                                                toastifyShow(html)  

                                                $('.modal').modal('hide')
                                                DataTableReload('#for-approval-convertalloc-list-table');
                                                

                                                

                                                
                                        }
                                        else   {

                                                swal("Oops...", "Something went wrong. Please contact your administrator", "error");
                                        }

                                        
                                    },
                                        error:function(data){
                                            hideLoadingDiv('#for-approval-convertalloc-list-table')
                                            
                                                swal("Oops...", "Something went wrong. Please contact your administrator", "error");
                                    }
                            });

                    
                        
                        

                    } 
                    else {
                    
                            
                    }
            });
    })
    $(document).on('click','.for_approval_convertalloc_checkallisbn',function (e) {

   
        var checkallocreqisbn= $('.for_approval_convertalloc_checkisbn') 


        if($(this).is(':checked')){

            var v = '1';

            checkallocreqisbn.prop('checked',true)

        }
        else {
            var v = '0';
            checkallocreqisbn.prop('checked',false)

        }


    });

   
//END READY
});





</script>

@endsection

 