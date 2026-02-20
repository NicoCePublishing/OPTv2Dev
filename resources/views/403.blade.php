@extends('layouts.admin_app')

@section('title') 403 @endsection

@section('belowcontent')


@section('menutitle')  @endsection



<div class="col-12 col-xl-12 col-xxl-12">
  <div class="row justify-content-center align-items-center g-5">
    <div class="col-12 col-lg-6 text-center order-lg-1"><img class="img-fluid w-lg-100 d-dark-none" src="../../assets/img/spot-illustrations/403-illustration.png" alt="" width="400"><img class="img-fluid w-md-50 w-lg-100 d-light-none" src="../../assets/img/spot-illustrations/dark_403-illustration.png" alt="" width="540"></div>
    <div class="col-12 col-lg-6 text-center text-lg-start"><img class="img-fluid mb-6 w-50 w-lg-75 d-dark-none" src="../../assets/img/spot-illustrations/403.png" alt=""><img class="img-fluid mb-6 w-50 w-lg-75 d-light-none" src="../../assets/img/spot-illustrations/dark_403.png" alt="">
      <h2 class="text-800 fw-bolder mb-3">Access Forbidden!</h2>
      <p class="text-900 mb-5">Halt! Thou art endeavouring to trespass upon a realm not granted unto thee.<br class="d-none d-sm-block"></p>
    </div>
  </div>
</div>




   
@endsection

@section('scriptJS')


<script src="{{ asset('assets/js/echarts-example.js') }}"></script>
<script src="{{ asset('vendors/dropzone/dropzone.min.js') }}"></script>
<script src="{{ asset('vendors/dayjs/dayjs.min.js') }}"></script>

<script>

$(document).ready(function () {


  // dashboard_graphs_data('');

  // $(document).on('change','#userFilterDashboard',function (e) {

  //   var pernr = $(this).val();

    
  //   dashboard_graphs_data(pernr);

  // });


//END READY
});

</script>

@endsection