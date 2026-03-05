@if(!rankView('AVP'))
<script>
    window.location.href = "{{ route('notfound') }}";
</script>
@endif

@extends('layouts.admin_app')

@section('title') Users @endsection

@section('belowcontent')



  @section('menutitle')
    Users
  @endsection

  <div class="row">
    <div class="col-md-12">
      <div class="card shadow-none border border-300">
      
          <div class="card-header d-none p-3 border-bottom border-300 bg-soft">

            <h4> List  
              {{-- <a class="fw-bold " data-bs-toggle="modal" data-bs-target="#AdminAddNewExpenseModal" >+ Add New</a> --}}
            </h4>
              
            <div class="row" hidden>
              <div class="text-start col-md-9 col-8 mt-3">
                      {{-- <button class="btn btn-primary mb-2 mb-sm-0 exportUserList">
                        Export
                       </button> --}}
              </div>
              
              <div class="text-end col-md-3 col-4 mt-3">
                  <div>
                 
                  </div>
              </div>
           </div>

          </div>
          <div class="card-body p-2">
              <div class="table-responsive scrollbar">
                <table id="admin-users-list-table" class="table  mb-0">
                  <thead>
                    <tr>
                        <th width="1%">#</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Rank</th>
                        <th>Expenses</th>
                        <th>PERNR</th>
                        <th>RSM</th>
                        <th>SSM</th>
                        <th>Division</th>
                        <th>Active</th>
                        <th>Action</th>
                     
                  </tr></thead>
                 
                </table>
              </div>

          </div>
      </div>	
    </div>
  </div>
 


   
  <div class="modal"  id="adminUserEditModal" tabindex="-1" aria-labelledby="verticallyCenteredModalLabel" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content ">
        <div class="modal-header">
          <h5 class="modal-title" id="verticallyCenteredModalLabel">Edit User</h5>
              <button class="btn btn-sm btn-phoenix-secondary" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-xmark text-danger" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"></path></svg><!-- <span class="fas fa-times text-danger"></span> Font Awesome fontawesome.com --></button>
       
        </div>
       
          @csrf
        <div class="modal-body">
            <div class="row">
              <div class="col-lg-12">
                  <form class="submit_admin_user_edit" method="POST">
                      @csrf
          
                      <!-- Hidden Fields -->
                      <input type="hidden" name="admin_user_edit_form_pernr" class="admin_user_edit_form_pernr">
                      <input type="hidden" name="admin_user_edit_form_id" class="admin_user_edit_form_id">
          
                      <!-- Row 1 -->
                      <div class="row mb-3">
                          <div class="col-md-12">
                              <label class="form-label">Full Name</label>
                              <input type="text" name="admin_user_edit_form_fullname"
                                  class="form-control admin_user_edit_form_fullname"
                                  placeholder="Full Name...">
                          </div>
          
                  
                      </div>
          
                      <!-- Row 2 -->
                      <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Username</label>
                            <input type="text" name="admin_user_edit_form_username"
                                class="form-control un-cl admin_user_edit_form_username"
                                readonly>
                        </div>

                          <div class="col-md-6">
                              <label class="form-label">Password</label>
                              <input type="text" name="admin_user_edit_form_password"
                                  class="form-control admin_user_edit_form_password"
                                  placeholder="Password...">
                          </div>
          
                          <div class="col-md-6">
                              <label class="form-label">E-mail</label>
                              <input type="text" name="admin_user_edit_form_email"
                                  class="form-control admin_user_edit_form_email"
                                  placeholder="Email...">
                          </div>

                          <div class="col-md-6">
                            <label class="form-label">Division</label>
                            <select class="form-select admin_user_edit_form_division" name="admin_user_edit_form_division">
                                <option value="" selected disabled>Select in the list</option>
                                @foreach($division as $div)
                                    <option value="{{$div->DIVISION}}">{{$div->DIVISION}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Rank</label>
                            <select class="form-select admin_user_edit_form_rank" name="admin_user_edit_form_rank">
                                <option value="" selected disabled>Select in the list</option>
                                @foreach($ranklist as $r)
                                    <option value="{{$r->RANK}}">{{$r->RANK}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">RSM</label>
                            <select class="form-select admin_user_edit_form_rsm" name="admin_user_edit_form_rsm">
                                <option value="" selected disabled>Select in the list</option>
                                @foreach($rsmlist as $rs)
                                    <option value="{{ trim($rs->PERNR) }}">
                                        {{ $rs->PERNR . ' - ' . $rs->FULLNAME}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                          <div class="col-md-6">
                              <label class="form-label">SSM</label>
                              <select class="form-select admin_user_edit_form_ssm" name="admin_user_edit_form_ssm">
                                  <option value="" selected disabled>Select in the list</option>
                                  @foreach($ssmlist as $ss)
                                      <option value="{{ trim($ss->PERNR) }}">
                                          {{ $ss->PERNR . ' - ' . $ss->FULLNAME}}
                                      </option>
                                  @endforeach
                              </select>
                          </div>

                      </div>
          
                      <!-- Row 3 -->
                      <div class="row mb-3">
                      
          
                          <div class="col-md-6 d-none">
                              <label class="form-label">Active</label>
                              <select class="form-select admin_user_edit_form_active" name="admin_user_edit_form_active">
                                  <option value="1">Yes</option>
                                  <option value="0">No</option>
                              </select>
                          </div>
                          
                      </div>
          
                      <!-- Row 4 -->
                      <div class="row mb-3">
                     
          
                 
                      </div>
          
                      <!-- Row 5 -->
                      <div class="row mb-3">
                       
          
                          <div class="col-md-12 mt-2 d-flex justify-content-end">
                              <button type="submit" class="btn btn-primary w-25">
                                  Save
                              </button>
                          </div>
                      </div>
          
                  </form>
              </div>
          </div>
        
              

            </div>
     
          <!-- Repeat similar structure for any additional input groups -->
        </div>
        <div class="modal-footer" hidden>
          <div class="mt-2 text-end"> 
           
        </div>
      
      </div>
    </div>
  </div>

  




@endsection

@section('scriptJS')


<script>


$(document).ready(function(){

  

    function adminUsersListTable(docdate = '',user='') {
           // DATATABLE -----
              var adminUsersListTable = $("#admin-users-list-table");
              var adminUsersListTableURL =  "/datatable_users_list_table";
              var adminUsersListTableColumns = [
                      { "data": "num" },
                      { "data": "fullname" },
                      { "data": "username" },
                      { "data": "rank" },
                      { "data": "expgroup" },
                      { "data": "pernr" },
                      { "data": "rsm" },
                      { "data": "ssm" },
                      { "data": "division" },
                      { "data": "active" },
                      { "data": "action" }
              ];

              dTable(adminUsersListTable, adminUsersListTableURL, adminUsersListTableColumns, 270,"",true,'',true,0,0);
            // -----DATATABLE

    }

    adminUsersListTable();


    $(document).on('click','.admin_users_add_new_expense_user_btn',function (e) {
        $('#adminUserAddExpenseModal').modal('show')
    });

    $(document).on('click','.admin_user_edit_btn',function (e) {
        var pernr = $(this).data('pernr')
        var id = $(this).data('id')

        $.ajax({
              url: '/submit_admin_users_retrieve_user_details',
              data: {
                  id : id,
                  pernr : pernr
              },
              dataType: 'json',
              beforeSend: function() {
       
                
              },
              success: function(data) {

                    var data = data[0];

                     var id = data.id;
                     var pernr = data.pernr;
                     var fullname = data.name;
                      var username = data.username;
                      var password = data.password;
                      var email = data.email;
                      var rsm = data.rsm;
                      var ssm = data.ssm ;
                      var rank = data.rank;
                      var email = data.email;

                      $('.admin_user_edit_form_id').val(id);
                      $('.admin_user_edit_form_pernr').val(pernr);
                      $('.admin_user_edit_form_fullname').val(fullname);
                      $('.admin_user_edit_form_username').val(username);
                      $('.admin_user_edit_form_password').val(password);
                      $('.admin_user_edit_form_email').val(email);
                      $('.admin_user_edit_form_rank').val(rank).trigger('change');
                      $('.admin_user_edit_form_rsm').val(rsm).trigger('change');
                      $('.admin_user_edit_form_ssm').val(ssm).trigger('change');
              }
          });




    });

    
    $(document).on('click','.exportUserList',function (e) {
        e.preventDefault();

        ExportDatatableToExcel("admin-users-list-table",'user-list-' + moment());
        

    });


    
    $(document).on('submit','.submit_admin_user_edit', function(e) {
         e.preventDefault();
         var formData = new FormData(this);

         $.ajax({
                    url: "/submit_admin_user_edit"  , 
                    data:  formData,
                            processData: false,
                            contentType: false,
                    type:'POST',
                    beforeSend: function() {

                          showLoading();

                    },
                    success:function(data){
                          console.log(data);
                          hideLoading();
                          var dat = data[0];
                        if(dat.status == "2") {
                        


                            var html = "" 
                                      + "<i class='far fa-calendar-minus text-success'></i> <span class='text-success fw-bold'>User Updated!</span>"
                                      + "";
                                toastifyShow(html)  
                        
                              
                        }
                        else {
                            swal("Oops...", "Please contact the administrator", "error");
                        }
                    
                        
                    }, 
                    error:function(data){
                
                            swal("Oops...", "Something went wrong. Please contact your administrator", "error");
                            hideLoading();
                    }
                });
      })


      $(document).on('click','.useractive-status-sw',function (e) {
        
        var id = $(this).data('id');

            if($(this).is(':checked')){
               var v = '1';
            }
            else {
                var v = '0';
            }

            $.ajax({
                     url:"/submit_update_activestatus_user", 
                     data: {
                        v : v,
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
    
    $(document).on('submit','.submit_admin_user_add_new_expense', function(e) {
         e.preventDefault();
         var formData = new FormData(this);

         $.ajax({
                    url: "/submit_admin_user_add_new_expense"  , 
                    data:  formData,
                            processData: false,
                            contentType: false,
                    type:'POST',
                    beforeSend: function() {

                          showLoading();

                    },
                    success:function(data){
                          console.log(data);
                          hideLoading();
                          var dat = data[0];
                        if(dat.status == "2") {
                        
                            $('#adminUserAddExpenseModal').modal('hide');
                            DataTableReload("#admin-user-expenses-list-table")
                            $('.submit_admin_user_add_new_expense')[0].reset(); // Reset form values


                            var html = "" 
                                      + "<i class='far fa-calendar-minus text-success'></i> <span class='text-success fw-bold'>New Expense Created!</span>"
                                      + "";
                                toastifyShow(html)  
                        
                              
                        }
                        else if(dat.status == "403") {
                                sweetalert(" ","Expense & Rate Already Exist", icon = 'warning', timer = '2000', btn = false);
                        }   
                        else {
                            swal("Oops...", "Please contact the administrator", "error");
                        }
                    
                        
                    }, 
                    error:function(data){
                
                            swal("Oops...", "Something went wrong. Please contact your administrator", "error");
                            hideLoading();
                    }
                });
      })




    $(document).on('change','.admin_user_edit_value_input',function (e) {

      var value = $(this).val();
      var id = $(this).data('id');

      $.ajax({
              url:"/submit_admin_user_edit_expense_value", 
              data: {
                    id : id,
                    value : value,
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
                    var data = data[0];
                    
                    if(data.status == '2') {
                        
                        DataTableReload("#admin-user-expenses-list-table")

                        var html = "" 
                              + "<span class='text-success fw-bold'>Expense Value Updated!</span>"
                              + "";
                        toastifyShow(html) 
                          
                          
                    }
                    else   {

                          swal("Oops...", "Something went wrong. Please contact your administrator", "error");
                    }
                    
              },
              error:function(data){
                    hideLoading();
                    $(this).val('');
                    swal("Oops...", "Something went wrong. Please contact your administrator", "error");
              }
              });



      });


      
   
//END READY
});





</script>

@endsection