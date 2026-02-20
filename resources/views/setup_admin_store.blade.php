@extends('layouts.admin_app')

@section('title') System Setup @endsection

@section('belowcontent')



<div class="row gy-3 mb-3 justify-content-between">
    <div class="col-md-9 col-auto">
      <h2 class="mb-2 text-1100">System Setup</h2>
    </div>
  </div>


<div class="row">
        <div class="col-md-6">
            <form id="submit_modify_system_setup" method="POST">

                    @csrf
                    <div class="card">
                        <div class="card-body">
                        
                            <div class="form-group row">
                                <label for="first_name" class="col-12 col-lg-5 col-from-label">Walk-In Customer Code<span class="text-danger">*</span></label>
                                <div class="col-12 col-lg-7">
                                
                                    <input type="text" required name="walkin" readonly class="form-control " value="{{ system_setup ("walkin") }}" placeholder="...">
                                                            </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="" class="col-12 col-lg-5 col-from-label">Branch ID (LGOBE)<span class="text-danger">*</span></label>
                                <div class="col-12 col-lg-7">
                                    <input type="text" required name="branchid" class="form-control" value="{{ system_setup ("branchid") }}" placeholder="...">
                                                            </div>
                            </div>
                            <div class="form-group row mt-2">
                                <label for="" class="col-12 col-lg-5 col-from-label">Time-to-Critical Threshold (mins)<span class="text-danger">*</span> </label>
                                <div class="col-12 col-lg-7">
                                    <input type="text" name="threshold" readonly value="{{ system_setup ("threshold") }}" class="form-control " placeholder="...">
                                                            </div>
                            </div>
                            
                        
                            <div class="form-group mb-0 text-end">
                                <button type="submit" class="btn btn-sm btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-6">
                <div class="col-xl-12 mb-4">
                    <div class="card shadow-none border border-300" data-component-card="data-component-card">
                      <div class="card-header p-4 border-bottom border-300 bg-soft">
                        <div class="row g-3 justify-content-between align-items-center">
                          <div class="col-12 col-md-4">
                            <h4 class="text-900 mb-0" >Printers</h4>
                            
                          </div>
                          <div class="col col-md-8">
                            <div class="input-group ">

                                <input class="form-control add_printer_ip_input" type="text" placeholder="Add another ip" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <button class="btn btn-primary btn-sm add_printer_ip " id="basic-addon2">+ Add</button>
                              </div>
                                            
                          </div>
                        </div>
                      </div>
                      <div class="card-body p-0">
                        <table id="printer-ip-table" class="table  mb-0">
                            <thead>
                              <tr>
                                <th class="sort white-space-nowrap align-middle " scope="col" data-sort="projectName" style="width:5%;">ID </th>
                                <th class="sort white-space-nowrap align-middle " scope="col" data-sort="projectName" style="width:5%;">Printer IP </th>
                                <th class="sort white-space-nowrap align-middle " scope="col" data-sort="projectName" style="width:5%;">Action </th>
                               
                              </tr>
                            </thead>
                           
                          </table>
                      </div>
                    </div>
                  </div>

            </div>

</div>

@endsection

@section('scriptStoreJS');


<script>

$(document).ready(function() {
    
    $(document).on('click',".add_printer_ip", function (e) {
  
            e.preventDefault();

            var id	= $('.add_printer_ip_input').val();
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            if(id.trim() == "") {
                $('.add_printer_ip_input').addClass('is-invalid')
                return false;
            }

            $('.add_printer_ip_input').removeClass('is-invalid')
            $.ajax({
            url: "/submit_add_printer_ip?printerip="+id,
            type: 'GET',
            beforeSend: function() {

                showLoading();

            },
            success: function(data) {
                console.log(data);
                hideLoading();
                
                if (data.status == "2") {
                    $('.add_printer_ip_input').val("")
                    var html = "<span class='text-success'> Printer IP successfully added </span>";

                     toastifyShow(html)
                     DataTableReload("#printer-ip-table")
                } else {
                    swal("Oops...", "Please contact Administrator", "warning");    
                }
            },
            error: function(data) {
                hideLoading();
                swal("Oops...", "Something went wrong. Please contact The Administrator", "error");
            }
            });

    });

    
    $(document).on('click',".deleteprinterid", function (e) {
  
        e.preventDefault();

        var id	= $(this).data('id');
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
        url: "/submit_delete_printer_ip",
        data: {
            _token: csrfToken,
            id: id
        },
        type: 'POST',
        beforeSend: function() {

            showLoading();

        },
        success: function(data) {
            console.log(data);
            hideLoading();
            
            if (data.status == "2") {

                        var html = "" 
                            + "<span class='text-danger fw-bold'>Printer IP Deleted!</span>"
                            + "";
                    DataTableReload("#printer-ip-table")
            } else {
                swal("Oops...", "Please contact Administrator", "warning");    
            }
        },
        error: function(data) {
            hideLoading();
            swal("Oops...", "Something went wrong. Please contact The Administrator", "error");
        }
        });

    });

});
</script>

@endsection