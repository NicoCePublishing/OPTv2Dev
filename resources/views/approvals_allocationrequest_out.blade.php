@extends('layouts.admin_app')

@section('title') Approvals Alloc. Out Request @endsection

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
  
    // $qprojectiondetails = projectionDetails($projdocnum,$username);
    $projectionpernr = $qallocreqh->PERNR;
    $projdocnum = $qallocreqh->BASEDOCNUM;
    $reference = $qallocreqh->REFERENCE;
    $datesubmit = $qallocreqh->DATESUBMIT;
    $reqtoname = $qallocreqh->REQTONAME;
    $fname = $qallocreqh->USERNAME;
    $transfertype = $qallocreqh->TRANSFERTYPE;


    // dd($cntapprover);
  @endphp

  <div class="">
    
    <div class="row ">

        <div class="col-md-9 mb-2  d-flex align-items-center">

            <div class="d-inline col-12"> 
                <div class="col-md-12 order-1 d-flex align-items-center">
             
                    <div class="d-inline"> 
                       <h4 class="mt-0 fw-bolder ms-0">
                          <a class="fw-bold fs--1 ms-3 mx-2" href="{{route('approvals')}}"> 
                                <i class="fas fa-arrow-left"></i> Back
                            </a>
                            <span class="text-500"> For {{ session('rank')}} Approval  - </span> Allocation Transfer Request - Out - {{ $fname}}
                          
                      </h4>
                    </div>
                 </div>
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


<div class="mini-db">
    <div class="row">
        <div class="col-md-7 text-end">
            <div class="input-group ">
                <span class="input-group-text w-25" id="basic-addon1">
                    Reference
                </span>
                <span class="input-group-text status_text_creation" style="background-color:white !important;" id="basic-addon1">
                 
                    {{$reference}}
                </span>
            
                
             
    
            </div>
        </div>
        <div class="col-md-5">
            <div class="input-group d-flex justify-content-start">
                <span class="input-group-text" id="basic-addon1">
                    Requested To
                </span>
                <span class="input-group-text status_text_creation text-primary" style="background-color:white !important;" id="basic-addon1">
                 
                    {{ $reqtoname }}
                </span>
            
                
             
    
            </div>
           
        
       
        </div>
        
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
        <div class="col-md-5 text-end">
       
            <div class="input-group d-flex justify-content-start">
                <span class="input-group-text" id="basic-addon1">
                    Transfer Type
                </span>
                <span class="input-group-text status_text_creation" style="background-color:white !important;" id="basic-addon1">
                    {{ type_display($transfertype) }}
                </span>
        
    
            </div>
        
        </div>
    </div>
  
   
  
        
      
  </div>

<div class="for_approval_projection_card row mb-2">
        <div class="col-12 col-md-12 col-xxl-6 text-left">
            

            <div class="card border-0 p-2" >  
                <div class="" style="height:50vh; max-height:350vh;min-width:70vh;overflow-y:auto;overflow-x:hidden;">              
                    <div class="ms-n1 ps-1">

                        <table id="for-approval-allocreqout-table" class="fs--1 table  table-responsive text-center">
                            <thead class="border border-1 sticky-top">
                                <tr>
                                    <th width="3%">#</th>
                                    <th width="15%">ISBN</th>
                                    <th width="42%">Title</th>
                                    <th width="10%">Balance</th>
                                    <th width="10%">Requested</th>
                                    <th width="10%">Approve</th>
                                    {{-- <th width="15%">Status</th> --}}
                                    <th scope="col" class="text-center" width="3%">
                                        <div class="d-flex ">
                                            <input class="form-check-input for_approval_allocreqout_checkallisbn" type="checkbox" value="">
                                        </div>
                                    </th>
                                 </tr>
                            </thead>
                            <tbody>
                                                            

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="">
            
                   
                        <div class="text-end border-top p-3">
                            <div>
                                
                                <button type="button" data-bs-toggle="modal" data-bs-target="#DiaapprovedAllocReqModal" class="btn btn-danger btn-sm btn-return">Disapproved</button>
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

       <form class="submit_return_projection" method="POST">
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
                <textarea class="form-control disapprv_allocreq_reason" maxlength="254" name="disapprv_allocreq_reason" placeholder="...." style="height: 100px" required></textarea>
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



function for_approval_allocreq_out_details(docnum){

$.ajax({
       url:"/datatable_for_approval_allocreq_out_details?docnum="+docnum, 
       type:'GET',
       headers: {
               'X-CSRF-TOKEN': getCsrfToken() 
       },
       beforeSend: function() {

        //   $('#for-approval-finalreq-list-table tbody tr').empty()
      
            showLoadingDiv('#for-approval-allocreqout-table');
            
       },
       success:function(data){
            $('#for-approval-allocreqout-table tbody tr').empty()
        //    console.log(data);
            var data = data;
      
            hideLoadingDiv('#for-approval-allocreqout-table');
            let aa = '';
            var total = 0;

            if(data.num === '0'){
                aa += '<tr><td colspan="99">-</td></tr>';
                
                // window.location.href = "{{ route('approvals') }}";

            }

            for (let i = 0; i < data.length; i++) {
                let d = data[i];

                // raw values muna
    

                let num         = d.num;
                let isbn         = d.isbn;
                let description         = d.description;
                let alloctype         = d.alloctype;
                let balance         = d.balance;
                let requested         = d.requested;
                let approve         = d.approve;
                let status         = d.status;
                let action         = d.action;
                let checkbox         = d.checkbox;

                // tsaka na lang ilagay sa <td>
                aa += `
                    <tr>
                        <td class="text-center">${num}</td>
                        <td class="text-center">${isbn}</td>
                        <td class="text-center">${description}</td>
                      
                        <td class="text-center">${balance}</td>
                        <td class="text-center">${requested}</td>
                        <td class="text-center">${approve}</td>
                        
                        <td class="text-center">${checkbox}</td>
                    </tr>
                `;
            }
            // <td class="text-center">${status}</td>
            // <td class="text-center">${alloctype}</td>
                $('#for-approval-allocreqout-table tbody').append(aa)

           


       },

        error:function(data){

                
                    sweetalert(" ","Please contact the administrator!", icon = 'error', timer = '5000', btn = false);
        }
    });


}

$(document).ready(function () {

      
    var docnum = "{{ request('docnum') }}"
    for_approval_allocreq_out_details(docnum)


    $(document).on('change','.apprvallocreqqty',function (e) {

        var v = $(this).val();
        var balance = $(this).data('balance');
        var requested = $(this).data('requested');
        
        var balanceInt = parseInt(balance)
        var requestedInt = parseInt(requested)

        if(v > requestedInt) {

            sweetalert(" ","Approve is more than requested", icon = 'warning', timer = '2000', btn = false);
            $(this).val(requestedInt)
            return false;

        }

        if(v > balanceInt) {

            sweetalert(" ","You don't have enough allocation", icon = 'warning', timer = '2000', btn = false);
            $(this).val(balanceInt)
            return false;

        }


    })
    $(document).on('click','.btn-approve',function (e) {

        var forapprovalallocreqcheckbox = $('.for_approval_allocreqout_checkisbn:checked');

        if(forapprovalallocreqcheckbox.length === 0) {

            sweetalert(" ","Please select a title to approve", icon = 'warning', timer = '5000', btn = false);
            return false;

        }

        var formData = new FormData();

        var zeroBalance = false;
        var reqMorethanBalance = false;
     
        forapprovalallocreqcheckbox.each( function(index) {
              
              let $tr = $(this).closest('tr');           
              let $input = $tr.find('.apprvallocreqqty'); 

              let docnum   = $input.data('docnum');
              let alloctype   = $input.data('alloctype');
              let id           = $input.data('id');
              let isbn           = $input.data('isbn');
              let basedocnum           = $input.data('basedocnum');
              let reqfrom           = $input.data('reqfrom');
              let reqto           = $input.data('reqto');
              let balance           = $input.data('balance');
              let qty    = $input.val();


              let balanceInt = parseInt(balance);
              let qtyInt = parseInt(qty);

              if(qtyInt > balanceInt)  reqMorethanBalance = true;

              if(qtyInt <= 0)  zeroBalance = true;;

              formData.append('id[]', id);
              formData.append('docnum[]', docnum);
              formData.append('alloctype[]', alloctype);
              formData.append('qty[]', qty);
              formData.append('isbn[]', isbn);
              formData.append('basedocnum[]', basedocnum);
              formData.append('reqfrom[]', reqfrom);
              formData.append('reqto[]', reqto);



          })
    
          if(reqMorethanBalance) {

            sweetalert(" ", "One or more titles have a requested quantity greater than the available balance.", icon = 'warning', timer = '5000', btn = false);
        
            return false;

        }

        if(zeroBalance) {   

            sweetalert(" ", "One or more titles have 0 requested qty. Please enter a valid quantity.", icon = 'warning', timer = '5000', btn = false);
            return false;

        }

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
                                url:"/submit_approve_allocreqout", 
                                data: formData,
                                processData: false,
                                contentType: false,
                                type:'POST',
                                headers: {
                                        'X-CSRF-TOKEN': getCsrfToken() 
                                },
                                beforeSend: function() {
                                
                                showLoadingDiv('#for-approval-allocreqout-table')
                                },
                                success:function(data){
                                    console.log(data);
                                    hideLoadingDiv('#for-approval-allocreqout-table')
                                    
                                //    var data = data[0];
                                    
                                    if(data.status == '2') {

                                        //  sweetalert(" ","Status Updated!", icon = 'success', timer = '1000', btn = false);
                                        
                                            var html = "" 
                                            + "<span class='text-success fw-bold'>Approved!</span>"
                                            + "";

                                            toastifyShow(html)  

                                            for_approval_allocreq_out_details(docnum)

                                            
                                    }
                                    else   {

                                            swal("Oops...", "Something went wrong. Please contact your administrator", "error");
                                    }

                                    get_projectionperiodstatus (projdocnum)
                                    
                                },
                                    error:function(data){
                                            hideLoading();
                                        
                                            swal("Oops...", "Something went wrong. Please contact your administrator", "error");
                                }
                        });

                 
                    
                       

                } 
                else {
                
                        
                }
        });
      

    });

    $(document).on('click','.for_approval_allocreqout_checkallisbn',function (e) {

   
        var checkallocreqisbn= $('.for_approval_allocreqout_checkisbn') 


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

 