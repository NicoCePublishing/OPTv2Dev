{{-- @if(!rankView('IMD','CRM'))
<script>
    window.location.href = "{{ route('notfound') }}";
</script>
@endif --}}


@extends('layouts.admin_app')

@section('title') Update Customer Temp @endsection

@section('belowcontent')

  

  @section('menutitle')
  <div class="row">
    <div class="col-md-6 order-1 d-flex align-items-center">
       <div class="px-2 border-end">
          <h4 class="m-0 fw-bolder">Update Customer Temp</h4>
          <a class="fw-bold h5 d-none text-primary " href="#!" data-bs-toggle="modal" data-bs-target="#AddNewProjectionPeriod">+ Add New</a>     
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
       <div class="card-header p-3  border-300 bg-soft">
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
                <table id="update-temp-customer-list-table" class=" table table-striped  text-center">
                   <thead class="border border-1">
                      <tr>
                         <th scope="col" class="text-center" width="3%">#</th>
                         <th scope="col" class="text-center" width="15%">Temp</th>
                         <th scope="col" class="text-center" width="35%">Name</th>
                         <th scope="col" class="text-center" width="30%">Added By</th>
                         <th scope="col" class="text-center" width="10%">Action</th>
                      </tr>
                   </thead>
                   
                </table>
             </div>
          {{-- </div> --}}
       </div>
    </div>
 </div>



      



     <div class="offcanvas offcanvas-end content-offcanvas border offcanvas-backdrop-transparent border-start border-300 shadow-none bg-100" id="UpdateCustomerTempOffCanvas" tabindex="-1" aria-labelledby="offcanvasLeftLabel">
        <div class="offcanvas-header pb-0">
           <h5 id="offcanvasLeftLabel">Update</h5>
           <button class="btn btn-sm btn-phoenix-secondary" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa fa-xmark text-danger"></i></button>
        </div>
        <hr>
        <div class="offcanvas-body pt-0">
      
        <form class="submit_update_customer_temp" method="POST">
            @csrf
           <div class="row">
            <div class="col-md-12">
                <div class="input-group">
                    <span class="input-group-text text-center" id="basic-addon1">
                     Temp Name
                    </span>
                    <input class="form-control form-control-sm text-center un-cl update_customertemp_text" name="customername" required readonly="" type="text" >
                 </div>
            </div>
            <div class="col-md-6">
               
            </div>
            <div class="col-md-12 mt-2">
                <div class="input-group">
                    <span class="input-group-text text-center" id="basic-addon1">
                    Update Customer
                    </span>
                    <input class="form-control form-control-sm text-center update_customertemp_customername" name="customercode" required  placeholder="Please type customer name,customer code..." type="text" >
                    <input class="form-control form-control-sm text-center d-none un-cl  update_customertemp_customercode" name="customercode"  readonly="readonly"  type="text" >
                 </div>
              </div>
              
              
          </div>
           <div class="mt-0 text-end mt-3  p-3 border-top"><button type="submit" class="btn btn-sm btn-primary">Save</button></div>
        </form>
        </div>
     </div>



@endsection

@section('scriptJS')


<script>


$(document).ready(function(){


    customerAutocomplete('.update_customertemp_customername', '1', '.update_customertemp_customercode') 

    
    var updateCustomerTempListable = $("#update-temp-customer-list-table");
    var updateCustomerTempListableURL =  "/datatable_update_customer_temp_list";
    var updateCustomerTempListableColumns = [
            { "data": "num" },
            { "data": "tempcode" },
            { "data": "customertemp" },
            { "data": "addedby" },
            { "data": "action" },
    
    ];

    dTable(updateCustomerTempListable, updateCustomerTempListableURL, updateCustomerTempListableColumns, 280,"",true,'',true,0,0);


  
   //  $(document).on('click','.fw-bolder',function (e) {

   //    var rowObj = {
   //      num: 999,
   //      tempcode: "TEMP-001",
   //      customertemp: "Juan Dela Cruz",
   //      addedby: "Nico",
   //      action: "<button class='btn btn-sm btn-danger'>Delete</button>"
   //  };
    
   //    var dt = $('#update-temp-customer-list-table').DataTable();
   //    dt.row.add(rowObj).draw(false);
   //    dt.order([0,'desc']).draw(false);

   //  })

    $(document).on('click','.update-customertemp-btn',function (e) {

        var customertemp = $(this).data('customertemp')
        $('#UpdateCustomerTempOffCanvas').offcanvas('show')
        $('.update_customertemp_text').val(customertemp)
        $('.update_customertemp_customercode').val('')
        $('.update_customertemp_customername').val('')

    })


    $(document).on('submit','.submit_update_customer_temp',function (e) {
               
            e.preventDefault();
            var formData = new FormData(this);
  
            var customercode = $('.update_customertemp_customercode').val();

            if(customercode === "") {
                sweetalert(" ","Please select from the customer list", icon = 'warning', timer = '3000', btn = false);

                return false
            }
            
            swal({
                    title: "Update Customer Code",
                    text: "Are you sure you want to update all customer with this temp?",
                    icon: "info",
                    buttons: true,
                    dangerMode: true,
            })
            .then((willCancel) => {

                
                if (willCancel) {
                    
                    $.ajax({
                    url:"/submit_update_customer_temp", 
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

                            DataTableReload('#update-temp-customer-list-table')
                            $('.submit_update_customer_temp')[0].reset();
                                $('#UpdateCustomerTempOffCanvas').offcanvas('hide');
                                sweetalert(" ","Success!", icon = 'success', timer = '5000', btn = false);
                                
                        }
                        else if(data.status == '403') {
                            
                    
                                sweetalert(" ","Customer code not found.", icon = 'error', timer = '3000', btn = false);
                                
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

          



      });


  

//END READY
});





</script>

@endsection