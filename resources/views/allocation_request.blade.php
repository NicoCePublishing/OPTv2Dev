@extends('layouts.admin_app')


@section('title') Allocation Transfer Request @endsection

@section('belowcontent')



  @section('menutitle')
  <div class="row">
    <div class="col-md-6 order-1 d-flex align-items-center">
       <div class="px-2 border-end">
          <h4 class="m-0 fw-bolder d-inline">Allocation Transfer Request</h4>
          <a class="fw-bold h5 add-new-op text-primary d-inline " href="{{ route('create_allocation_request')}}" >+ Add New</a>     
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
 $q = ProjectionPeriodList('0',trim(session('division')))->get();
  @endphp 

  <div class="mini-db">
  <div class="row">
      <div class="col-md-8">
          <div class="input-group">
              <span class="input-group-text" id="basic-addon1">
                  Projection Period
              </span>
              
              <select class="form-select selected_projection_id" aria-label="Default select example">
                
                 
                  @foreach ($q as $r)
                        <option value="{{ $r->DOCNUM }}"> {{ projection_period_display($r->DOCNUM) }}</option>
        
                @endforeach

                <option option="" disabled >Select in the list</option>
              </select>
  
          </div>
      
     
      </div>
      <div class="col-md-4 text-end d-none">
          <div class="input-group d-flex justify-content-end ">
              <span class="input-group-text" id="basic-addon1">
                  Status
              </span>
              <span class="input-group-text projectionid_status_text text-danger" style="background-color:white !important;" id="basic-addon1">
                  -
              </span>
          </div>
      
      </div>
  </div>

      
    <div class="row g-1 flex-between-end mb-2">
   
        
    </div>
</div>
  

 <div class="card h-100">
    <div class="card shadow-none border-0 border-300">
       <div class="card-header p-0 border-0 border-300 bg-soft">
          <div class="col-md-4" hidden>
             <div class="input-group">
                <span class="input-group-text" id="basic-addon1"></span>
            
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
       <div class="card-body p-2 border-0 ">
        <table id="allocation-request-list-table" class="fs--1 table table-striped  text-center">
            <thead class="border border-1">
             
                <tr>
                    <th scope="col" class="text-center" width="5%">#</th>
                    <th scope="col" class="text-center" width="8%">Reference</th>
                    <th scope="col" class="text-center" width="15%">Type</th>
                    <th scope="col" class="text-center" width="37%">Requested To</th>
                    <th scope="col" class="text-center" width="12%">Date<br>Requested</th>
                    <th scope="col" class="text-center" width="12%">Date<br>Submitted</th>
                    <th scope="col" class="text-center" width="8%">Action</th>
                </tr>
            </thead>
        </table>
       </div>
    </div>
 </div>


 
 <div class="modal" id="TRDetailsModal"  tabindex="-1" aria-labelledby="addDealModal" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content bg-100 p-3">
        <div class="modal-header p-0">
        <h5 class="mb-0"> <span class="text-600 "> Request Details - </span> <span class="allocreq_refnum"> - </span> </h5>
        <button class="btn btn-sm p-0 pe-none border-0 btn-phoenix-secondary">
            <div class="input-group d-flex justify-content-end">
                                
                    <span class="input-group-text allocreq_datesubmit" style="" id="basic-addon1">-</span>
        
                </div>
            </button>
        </div>
    
    
        <div class="modal-body pt-0 ">
            <div class="row d-none">

                <input class="allocreq_docnum un-cl d-none form-control" readonly="readonly" hidden>
                <input class="allocreq_to_val un-cl d-none form-control" readonly="readonly" hidden>
                <input class="allocreq_transfertype_val un-cl d-none form-control" readonly="readonly" hidden>
                <div class="col-md-7 card card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group ">
                                <span class="input-group-text" id="basic-addon1">
                                    Reference
                                </span>
                                <span class="input-group-text " style="background-color:white !important;" id="basic-addon1">TR-0001</span>
                    
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group  d-flex justify-content-end ">
                                <span class="input-group-text" id="basic-addon1">
                                    Status
                                </span>
                                <span class="input-group-text text-warning " style="background-color:white !important;" id="basic-addon1">Created</span>
                    
                            </div>
                        </div>
                    </div>
                       
                        
                   
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group ">
                                <span class="input-group-text" id="basic-addon1">
                                    Transfer Type
                                </span>
                                <span class="input-group-text " style="background-color:white !important;" id="basic-addon1">BSA to Non-BSA</span>
                    
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group  d-flex justify-content-end ">
                                <span class="input-group-text" id="basic-addon1">
                                    Date Created
                                </span>
                                <span class="input-group-text " style="background-color:white !important;" id="basic-addon1">2025-02-03
                                </span>
                    
                            </div>
                        </div>
                    </div>

                </div>


            </div>

            

            <div class="row card">
                <div class="col-lg-12 card-body  border-bottom mt-0 pt-2">

                    <div class="row mb-2">

                        <div class="col-6 mt-auto col-md-6 col-xxl-6 text-start">
                            <div class="input-group mb-2 ">
                                <span class="input-group-text" id="basic-addon1">
                                    Requested To
                                </span>
                                <span class="input-group-text allocreq_to" style="background-color:white !important;" id="basic-addon1">
                                    -
                                </span>
        
                            </div>
                            <label class="text-1000 fw-bold">Titles <a class="fw-bold fs--1 allocreq_add_books" href="#!">+ Add New</a>
                      
                  
                            </label>   
                        
                        </div>
                        <div class="col-6 col-md-6 col-xxl-6 text-end">
                            <div class="input-group d-flex justify-content-end">
                                <span class="input-group-text" id="basic-addon1">
                                    Transfer Type
                                </span>
                                <span class="input-group-text allocreq_transfertype" style="background-color:white !important;" id="basic-addon1">
                                    -
                                </span>

                                {{-- <span class="input-group-text text-primary fs-1 allocreq_status" style="background-color:white !important;" id="basic-addon1">
                                    -
                                </span> --}}
                             
                                
                             
                    
                            </div>
                        
                        </div>

                    </div>
                    
                    
                 
                       
                    {{-- <div style="height:50vh; max-height:100vh;min-width:70vh;overflow-y:auto;overflow-x:hidden;"> --}}
                       <table id="allocreq-details-table" class="fs--1 table table-striped  text-center" width="100%">
                          <thead class="thead-bgcolor text-center" style="position: sticky; top: 0; background-color: white; z-index: 10;">
                             <tr>
                                <th width="3%">#</th>
                                <th width="12%">ISBN</th>
                                <th width="31%">Title</th>
                                {{-- <th width="8%">Type</th> --}}
                                <th width="8%">Balance</th>
                                <th width="8%">Request</th>
                                <th width="20%">To Branch/Whouse</th>
                                <th width="13%">Status</th>
                                <th width="5%">Action</th>
                             </tr>
                          </thead>
                          <tbody>
        
                        
                        </tbody>
                    </table>
                {{-- </div> --}}
            </div>
               
    
            </div>

            
            
        </div>
        
        <div class="modal-footer px-0 pb-0 ">
            <div class="mt-0 text-end"><button class="btn btn-sm btn-danger btn_allocreq_cancel">Cancel</button></div>
            <div class="mt-0 text-end"><button class="btn btn-sm btn-info btn_allocreq_submitforapproval">Submit - For Approval </button></div>
            {{-- <div class="mt-0 text-end"><button class="btn btn-sm btn-primary btn_allocreq_save">Save </button></div> --}}

                  </form>
        </div>
        

    </div>
    </div>
</div>

<div class="modal bg-opacity-75 border bg-light" id="AddNewBookTitleDocnumModal"  tabindex="-1" aria-labelledby="addDealModal" aria-modal="true" role="dialog">
    <div class="modal-dialog border-300 modal-lg modal-dialog-centered">
    <div class="modal-content border bg-100 p-3">
        <div class="modal-header p-0">
        <h5 class="mb-0"> <span class="fw-bold reference_actual_expenses_refnum_text"></span> Add New Book Title</h5>
        <button class="btn btn-sm btn-phoenix-secondary" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-xmark text-danger" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"></path></svg><!-- <span class="fas fa-times text-danger"></span> Font Awesome fontawesome.com --></button>
        </div>
    
    
        <div class="modal-body card p-2 mt-2 ">
 
                <div class="card-body p-0">
                    {{-- <form class="submit_allocreq_new_title" method="POST"> --}}
                        <table id="allocreq-pernr-new-title-table" width="100%" class="fs--1 w-100 table table-striped bg-white text-center">
                            <thead class="border border-1">
                               <tr>
                                  {{-- <th colspan="" scope="col" class="bg-white border text-center"></th> --}}
                                  <th colspan="8" scope="col" class="bg-white border text-center"><span class="allocreq_to"></th>
                               </tr>
                               <tr>
                                  <th scope="col" class="text-center" width="5%">#</th>
                                  <th scope="col" class="text-center" width="14%">ISBN</th>
                                  <th scope="col" class="text-center" width="40%">Title</th>
                                  <th scope="col" class="text-center" width="10%">Type</th>
                                  <th scope="col" class="text-center" width="10%">Balance</th>
                                  <th scope="col" class="text-center" width="10%">Request</th>
                                  {{-- <th scope="col" class="text-center" width="10%">Action</th> --}}
                               </tr>
                            </thead>
                            <tbody>
                            
                            </tbody>
                         </table>
                </div>
            
        </div>
        
        <div class="modal-footer px-0 pb-0 d-none">
            <div class="mt-0 text-end ">
              
             </div>
 
                  {{-- </form> --}}
        </div>
        
 
    </div>
    </div>
 </div>

    

@endsection

@section('scriptJS')


<script>



$(document).ready(function(){

  
    $('.allocreq_newtitle_title').each(function() {

        let $input = $(this);

        if ($input.data('ui-autocomplete')) {
            $input.autocomplete('destroy'); // ⚠️ Destroy existing para walang duplicate
        }

        $input.autocomplete({
            source: function(request, response) {
                const minChars = 2;
                if (request.term.length < minChars) return response([]);

          
                $.ajax({
                    url: '/submit_find_item',
                    dataType: 'json',
                    data: {
                        search: request.term
                    },
                    beforeSend: function() {
                        response([{ num: 0, description: "Searching..." }]);
                        
                    },
                    success: function(data) {
                        if (!data || data.length === 0) {
                            response([{ num: 0, description: "No records found." }]);
                        } else {
                            response(data);
                        }
                    }
                });
            },
            minLength: 2,
            select: function(event, ui) {

            
                if (ui.item.num == 0) {
                    $input.addClass("is-invalid");
                    return false;
                }

                // $('.addnewtitleisbndisp').val(ui.item.isbn);

                // $('.create_projection_search_title_isbn').val(ui.item.isbn);

                var isbn = ui.item.isbn;
                var title = ui.item.description;
                var titleDisplay = ui.item.descriptionDisplay;
                var budget = 0;
                var totalprev1 = ui.item.total1;
                var totalprev2 = ui.item.total2;
                var totalprev3 = ui.item.total3;
                var projection = 0;
                var population = 0;
                var disc = 0;
                var linetotal = 0;
                var unitprice = ui.item.unitprice;
                var isbnunitpriceclean = ui.item.isbnunitpriceclean;
                var isbnunitpriceDisplay = ui.item.unitpriceDisplay;
                
                var exists = false;


                $input.val(title)
                $('.allocreq_newtitle_isbn').val(isbn)

                

                return false;

            }
        }).data("ui-autocomplete")._renderItem = function(ul, item) {
            ul.css({
                "max-height": "40vh",
                "width": "100%",
                "overflow-y": "auto"
            });

            if (item.num == 0) {
                return $("<li>").append('<div style="padding:5px;color:#999;">' + item.description + '</div>').appendTo(ul);
            }

            var html = '<div>' +
                '<strong>ISBN:</strong> ' + item.isbn +  '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <strong>Copyright:</strong> ' + item.copyright + 
                '<br>' +
                '<strong>Description:</strong> ' + item.description + 
                '<br>' +
                '<strong>Author:</strong> ' + item.author 
                
                + '</div>';

            return $("<li>").append(html).appendTo(ul);
        };
    });

    $(document).on('change','.allocreq_new_title_qty',function (e) {

        var trClosest = $(this).closest("tr");
        var allocreqnewQty = $(this)
        var docnum = $('.allocreq_docnum').val();
        var reqQty = parseInt(allocreqnewQty.val());
        var isbn = allocreqnewQty.data('isbn');
        var reqtopernr = allocreqnewQty.data('reqtopernr');
        var balance = allocreqnewQty.data('balance');
        var reqtopernrname = allocreqnewQty.data('reqtopernrname');
        var alloctype = allocreqnewQty.data('type');
        var balance = allocreqnewQty.data('balance');

        if(reqQty <= 0) {

            // sweetalert(" ","Quantity cannot be 0", icon = 'warning', timer = '2000', btn = false);
            return false;

        }

        if(reqQty > balance){
            
            sweetalert(" ","Your declared qty is more than the AE's balance", icon = 'warning', timer = '2000', btn = false);
            allocreqnewQty.val('')
            return false;
        }

        swal({
                    title: "New Title",
                    text: "Are you sure you to request this title?",
                    icon: "info",
                    buttons: true,
                    dangerMode: true,
            })
            .then((willCancel) => {

                
                if (willCancel) {
                    
                    
                    $.ajax({
                            url:"/submit_allocreq_new_title", 
                            data: {
                                allocreq_newtitle_docnum : docnum,
                                allocreq_newtitle_qty : reqQty,
                                allocreq_newtitle_isbn : isbn,
                                allocreq_newtitle_alloctype : alloctype,
                                allocreq_newtitle_balance : balance,
                            },
                            type:'POST',
                            headers: {
                                    'X-CSRF-TOKEN': getCsrfToken() 
                            },
                            beforeSend: function() {
                            
                                showLoading()
                            },
                            success:function(data){
                                console.log(data);
                                hideLoading()
                                
                                //    var data = data[0];
                                
                                if(data.status == '2') {
        
                                
                                         DataTableReload('#allocreq-details-table');
                                        DataTableReload('#allocreq-pernr-new-title-table');
                                        var html = "" 
                                        + "<span class='text-success fw-bold'>New title added!</span>"
                                        + "";

                                        toastifyShow(html)  
                                        
                                }
                                else if(data.status == '403')   {

                                          sweetalert(" ","Please select a reference", icon = 'warning', timer = '2000', btn = false);


                                }
                                else if(data.status == '405')   {

                                          sweetalert(" ","ISBN already exist on this reference", icon = 'warning', timer = '2000', btn = false);


                                }
                                
                                else{

                                        swal("Oops...", "Something went wrong. Please contact your administrator", "error");
                                }
                                
                                },
                                error:function(data){
                                        hideLoading();
                                        
                                        swal("Oops...", "Something went wrong. Please contact your administrator", "error");
                                }
                    });

                } 
                else {
                
                    $('.allocreq_new_title_qty').val(0)
                        
                }
            });


    });
    $(document).on('click','.allocreq_add_books',function (e) {

        $('#AddNewBookTitleDocnumModal').modal('show')
        var projdocnum = $('.selected_projection_id').val();
        var reqtopernr = $('.allocreq_to_val').val()
        var docnum = $('.allocreq_docnum').val();
        var transfertype = $('.allocreq_transfertype_val').val()

        var allocReqPernrNewTitletable = $("#allocreq-pernr-new-title-table");
        var allocReqPernrNewTitletableURL =  "/datatable_allocreq_pernr_new_title?reqtopernr="+reqtopernr+"&projdocnum="+projdocnum+"&docnum="+docnum+"&transfertype="+transfertype;
        var allocReqPernrNewTitletableColumns = [
            { "data": "num" },
            { "data": "isbn" },
            { "data": "titlename" },
            { "data": "alloctype" },
            { "data": "balance" },
            
            { "data": "reqqty" },
            // { "data": "addbtn" },

        ];

        dTable(allocReqPernrNewTitletable, allocReqPernrNewTitletableURL, allocReqPernrNewTitletableColumns, 300,"No allocated title on this projection period.",true,'',true,0,0);


    })


    $(document).on('click','.btn_allocreq_submitforapproval',function (e) {

        var docnum = $('.allocreq_docnum').val();

        var notEmptyBranchWhouse = false;

       $('.update_allocreq_branchwhouse').each(function() {
            const v = $(this).val();

            if(v === ' '){

                notEmptyBranchWhouse = true;
            }

        })

        if(notEmptyBranchWhouse){

            sweetalert(" ","Please select branch/whouse", icon = 'warning', timer = '3000', btn = false);
            return false;
        }

        swal({
                    title: "Submit For Approval",
                    text: "Are you sure you want to submit?",
                    icon: "info",
                    buttons: true,
                    dangerMode: true,
            })
            .then((willCancel) => {

                
                if (willCancel) {
                    
                    
                    $.ajax({
                            url:"/submit_allocreq_forapproval", 
                            data: {
                                docnum : docnum,
                            },
                            type:'POST',
                            headers: {
                                    'X-CSRF-TOKEN': getCsrfToken() 
                            },
                            beforeSend: function() {
                            
                                showLoading()
                            },
                            success:function(data){
                                console.log(data);
                                hideLoading()
                                
                                //    var data = data[0];
                                
                                if(data.status == '2') {
        
                                        //  sweetalert(" ","Status Updated!", icon = 'success', timer = '1000', btn = false);

                                        $('.modal').modal('hide')

                                        DataTableReload('#allocation-request-list-table')

                                        var html = "" 
                                        + "<span class='text-success fw-bold'>Status Updated!</span>"
                                        + "";

                                        toastifyShow(html)  
                                        
                                }
                                else if(data.status == '403')   {

                                          sweetalert(" ","Please add at least one title to request", icon = 'success', timer = '2000', btn = false);


                                }
                                
                                else{

                                        swal("Oops...", "Something went wrong. Please contact your administrator", "error");
                                }
                                
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

        

    })
    $(document).on('click','.btn_allocreq_cancel',function (e) {

        var docnum = $('.allocreq_docnum').val();
        swal({
                    title: "Cancel Request",
                    text: "Are you sure you want to cancel?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
            })
            .then((willCancel) => {

                
                if (willCancel) {
                    
                    $.ajax({
                            url:"/submit_allocreq_cancel", 
                            data: {
                                docnum : docnum,
                            },
                            type:'POST',
                            headers: {
                                    'X-CSRF-TOKEN': getCsrfToken() 
                            },
                            beforeSend: function() {
                            
                                showLoading()
                            },
                            success:function(data){
                                console.log(data);
                                hideLoading()
                                
                                
                                //    var data = data[0];
                                
                                if(data.status == '2') {
        
                                        //  sweetalert(" ","Status Updated!", icon = 'success', timer = '1000', btn = false);
                                        
                                        
                                        $('.modal').modal('hide')

                                        DataTableReload('#allocation-request-list-table')
                                        
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

                } 
                else {
                
                        
                }
            });



    })


    $(document).on('click','.cancel-btn-allocreqd-isbn',function (e) {
        var id = $(this).data('id')

    

    })

    $(document).on('click','.remove-btn-allocreqd-isbn',function (e) {
        var id = $(this).data('id')

        
        swal({
                    title: "Remove ISBN",
                    text: "Are you sure you want to remove?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
            })
            .then((willCancel) => {

                
                if (willCancel) {
                    
                    $.ajax({
                            url:"/submit_allocreq_isbn_remove", 
                            data: {
                                id : id,
                            },
                            type:'POST',
                            headers: {
                                    'X-CSRF-TOKEN': getCsrfToken() 
                            },
                            beforeSend: function() {
                            
                                showLoading()
                            },
                            success:function(data){
                                console.log(data);
                                hideLoading()
                                
                                var docnum = $('.allocreq_docnum').val()
                                
                                //    var data = data[0];
                                
                                if(data.status == '2') {
        
                                     

                                        DataTableReload('#allocreq-details-table')

                                        
                                        var html = "" 
                                        + "<span class='text-success fw-bold'>Removed!</span>"
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

                } 
                else {
                
                        
                }
            });
    })
    $(document).on('click','.btn_reftrdetails',function (e) {
        var reftr = $(this).data('reftr')
        var docnum = $(this).data('docnum')
        var reqto = $(this).data('reqto')
        var reqtopernr = $(this).data('reqtopernr')
        var status = $(this).data('status')
        var submitted = $(this).data('submitted')
        var cancelled = $(this).data('cancelled')
        var transfertype = $(this).data('transfertype')
        var transfertypetext = $(this).data('transfertypetext')
        var datereq = $(this).data('datereq')
        var datesubmit = $(this).data('datesubmit')
        var projdocnum = $('.selected_projection_id').val();

        $('.allocreq_transfertype').text(transfertypetext)
        $('.allocreq_refnum').text(reftr)
        $('.allocreq_to').text(reqto)
        $('.allocreq_docnum').val(docnum)
        $('.allocreq_transfertype_val').val(transfertype)
        $('.allocreq_to_val').val(reqtopernr)
        $('.allocreq_datereq').text(formatDate(datereq, type = "date"))
        $('.allocreq_datesubmit').text(formatDate(datesubmit, type = "date") || '-')
        $('.allocreq_status').html(getStatusBadge(status, adhtml = ''))
        

        if(submitted === 1 || cancelled === 1) {

            $('.btn_allocreq_cancel, .btn_allocreq_submitforapproval, .btn_allocreq_save, .allocreq_add_books').addClass('d-none un-cl')

        } else {

            $('.btn_allocreq_cancel, .btn_allocreq_submitforapproval, .btn_allocreq_save, .allocreq_add_books').removeClass('d-none un-cl')

        }



        var allocReqDetailstable = $("#allocreq-details-table");
        var allocReqDetailstableURL =  "/datatable_allocreq_details?docnum="+docnum;
        var allocReqDetailstableColumns = [
            { "data": "num" },
            { "data": "isbn" },
            { "data": "description" },
            { "data": "balance" },
            { "data": "qty" },
            { "data": "tobranchwhouse" },
            { "data": "status" },
            { "data": "action" },
            // { "data": "addbtn" },

        ];

        dTable(allocReqDetailstable, allocReqDetailstableURL, allocReqDetailstableColumns, 250,"No allocated title on this projection period.",false,'',false,0,0);



    });
    
    $(document).on('change','.update_allocreq_qty',function (e) {
        var id = $(this).data('id')
        var balance = parseInt($(this).data('balance'))
        var curreqqty = parseInt($(this).data('reqqty'))
        var v = parseInt($(this).val());

        if(v > balance){
            
            sweetalert(" ","Your declared qty is more than the AE's balance", icon = 'warning', timer = '2000', btn = false);
            $(this).val(curreqqty)
            return false;
        }

        $.ajax({
                url:"/submit_update_allocreq_qty", 
                data: {
                v : v,
                id : id,
                balance : balance
                },
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
                    
        
                    
                    if(data.status == '2') {

                        
                            var html = "" 
                            + "<span class='text-success fw-bold'>Qty Updated</span>"
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


    })
    

    var v = $('.selected_projection_id').val();
         var allocationRequestListable = $("#allocation-request-list-table");
        var allocationRequestListableURL =  "/datatable_allocation_request_list_table?basedocnum="+v;
        var allocationRequestListableColumns = [
            { "data": "num" },
            { "data": "reference" },
            { "data": "transfertype" },
            { "data": "reqtoname" },
            { "data": "docdate" },
            
            { "data": "datesubmit" },
            { "data": "action" },

      ];

      dTable(allocationRequestListable, allocationRequestListableURL, allocationRequestListableColumns, 300,"",false,'',false,0,0);

    $(document).on('change','.selected_projection_id',function (e) {

        var v = $(this).val();

        var allocationRequestListable = $("#allocation-request-list-table");
        var allocationRequestListableURL =  "/datatable_allocation_request_list_table?basedocnum="+v;
        var allocationRequestListableColumns = [
            { "data": "num" },
            { "data": "reference" },
            { "data": "transfertype" },
            { "data": "reqtoname" },
            { "data": "docdate" },
            
            { "data": "datesubmit" },
            { "data": "action" },

      ];

      dTable(allocationRequestListable, allocationRequestListableURL, allocationRequestListableColumns, 300,"",false,'',false,0,0);



    });
    $(document).on('change','.addnewlinkaccount_from',function (e) {

      var pernr = $(this).val();
      var linktocode = $('.addnewlinkaccount_to_customercode').val()
      var linkfromcode = $('.addnewlinkaccount_from_customercode').val()

      $('.addnewlinkaccount_to_customercode').val('')
      $('.addnewlinkaccount_to').val('')
      $('.addnewlinkaccount_from_customercode').val(pernr)

      var addNewLinkCustomerFromListable = $("#add-new-link-customer-from-table");
      var addNewLinkCustomerFromListableURL =  "/get_pernr_customer?pernr="+pernr;
      var addNewLinkCustomerFromListableColumns = [
            { "data": "num" },
            { "data": "customercode" },
            { "data": "customername" },
            { "data": "actionlink" },

      ];

      dTable(addNewLinkCustomerFromListable, addNewLinkCustomerFromListableURL, addNewLinkCustomerFromListableColumns, 250,"",false,'',false,0,0);


   });





   
//END READY
});





</script>

@endsection