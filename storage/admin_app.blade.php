{{-- CHECK SESSION EXIST --}}
@if (!Session::has("staff"))
    <script>
        window.location.href = "{{ route('login_page') }}";
    </script>
@endif
{{-- CHECK SESSION EXIST --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Sales Itinerary - @yield('title')</title>
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendors/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>

    <link href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
<link href="{{ asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
<link href="{{ asset('assets/css/theme-rtl.min.css') }}" type="text/css" rel="stylesheet" id="style-rtl">
<link href="{{ asset('assets/css/theme.min.css') }}" type="text/css" rel="stylesheet" id="style-default">
<link href="{{ asset('assets/css/user-rtl.min.css') }}" type="text/css" rel="stylesheet" id="user-style-rtl">
<link href="{{ asset('assets/css/user.min.css') }}" type="text/css" rel="stylesheet" id="user-style-default">

<link href="{{ asset('vendors/fullcalendar/main.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/leaflet/leaflet.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/leaflet.markercluster/MarkerCluster.css') }}" rel="stylesheet">
<link href="{{ asset('vendors/leaflet.markercluster/MarkerCluster.Default.css') }}" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('mazer_assets/vendors/toastify/toastify.css') }}">
<link rel="stylesheet" href="{{ asset('mazer_assets/vendors/simple-datatables/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('mazer_assets/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('mazer_assets/vendors/choices.js/choices.min.css')}}" />
<link rel="stylesheet" href="{{ asset('mazer_assets/vendors/sweetalert2/sweetalert2.min.css') }}">
<link rel="icon" href="{{ asset('mazer_assets/images/cetablogo.png') }}" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('mazer_assets/vendors/iconly/bold.css') }}">
<link href="{{ asset('mazer_assets/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
<link href="{{ asset('mazer_assets/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ asset('mazer_assets/css/buttons.dataTables.min.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('mazer_assets/css/rowReorder.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('mazer_assets/css/responsive.dataTables.min.css') }}">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="{{ asset('mazer_assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
<link rel="stylesheet" href="{{ asset('mazer_assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
<link rel="stylesheet" href="{{ asset('mazer_assets/owl-carousel/owl.carousel.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('mazer_assets/pages/notification/notification.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('mazer_assets/css/animate.css/css/animate.css') }}">
<link href="{{ asset('mazer_assets/css/materialdesignicons.css') }}" rel="stylesheet">

<link href="{{ asset('assets/css/daterangepicker.css') }}" type="text/css" rel="stylesheet" id="user-style-default">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">


<style>
.ui-autocomplete {
    z-index: 99999999 !important;
    max-height:200px;
    overflow-y: auto;
    width:20vh;
}

table thead tr  {
    --phoenix-bg-opacity: 1 !important;
    background-color: rgba(var(--phoenix-light-rgb), var(--phoenix-bg-opacity)) !important;

}
.choices__inner .choices__item  {
    font-size:0.8rem !important;
}

.choices__list--dropdown {
  position: absolute;
  z-index: 9999;
  max-height: 300px; /* Adjust if needed */
  overflow-y: auto;
  bottom: auto !important;
  top: 100% !important; /* Forces it to always open downward */
}


.border-none {
    border-style: none !important;
}
/* Target previous days from the current month */
.fc-day-past:not(.fc-day-other) {
    opacity: 0.75 !important;
}
.fc-daygrid-event {
    cursor: pointer;
}


 .fc .fc-h-event .fc-event-main::after, .fc .fc-daygrid-event .fc-event-main::after {
  display: none;
}

.fc .fc-daygrid-event {
    padding: .3rem .3rem !important;
    font-size: 0.8rem;
}
.fc .fc-h-event .fc-event-main, .fc .fc-daygrid-event .fc-event-main {
    padding-left:0px !important; 
}

.datepicker-dropdown {
            z-index: 9999 !important;
        }

.ui-autocomplete li {
    font-family: "Nunito Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    font-size: 0.8rem;
}


.un-cl {
/* position: absolute; */
    background-color: rgba(196, 192, 192, 0.5); /* Gray with 50% opacity */
    pointer-events: none;
    
}

a {
    cursor: pointer;
}

.dropdown-menu {
    z-index: 9999999999999999 !important;
}

.loading {
  position: fixed;
  z-index: 9999999999;
  height: 2em;
  width: 2em;
  overflow: show;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

.fs-8 {
    font-size: .8rem !important;
}
/* Remove the border-bottom from frozen header cells */
.DTFC_RightHeadWrapper th {
    background-color: #eff2f6;
    border-bottom: none !important; /* Remove the border-bottom */
}

.popover {
    max-height: 300px; /* Set your desired height */
    overflow-y: auto; /* Enable vertical scrolling */
}

/* 
.offcanvas  {
    z-index:99999999999 !important;
} */

/* .fc-daygrid-event {
  width: 100%;
  display: inline-block;
  margin-right: 5px;
  padding: 0px !important;
  white-space: normal;
}

.fc-daygrid-day-events {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.fc-daygrid-day-events > * {
  flex: 0 0 50%;
  max-width: 50%;
  padding: 0px !important;
  box-sizing: border-box;
} */

.fc-more-popover {
    background-color: white !important;
    max-height: 200px; /* Set a maximum height for the popover */
    overflow-y: auto; /* Enable vertical scrolling */
}
/* Additional specificity to override any conflicting styles */
.DTFC_RightHeadWrapper table thead th {
    border-bottom: none !important;
}

.DTFC_RightBodyLiner {
    overflow-x: hidden !important;
}



/* Remove the border-bottom from frozen header cells */
.DTFC_LeftHeadWrapper th {
    background-color: #fff;
    border-bottom: none !important; /* Remove the border-bottom */
}

/* Additional specificity to override any conflicting styles */
.DTFC_LeftHeadWrapper table thead th {
    border-bottom: none !important;
}

.DTFC_Cloned {
    border-bottom: 1px solid rgba(0, 0, 0, 0.1) !important;
}
.DTFC_LeftBodyLiner {
    overflow-x: hidden !important;
}

.DTFC_LeftBodyLiner td {
    margin-top: 100px !important;
}

table.dataTable {
    border-collapse: collapse;
    border-spacing: 0;
    margin-top: 0 !important;
    margin-bottom: 0 !important;
}

table.dataTable th,
table.dataTable td {
    border-bottom: 1px solid rgba(0, 0, 0, 0.1); /* Set border color with 10% opacity */
}

.choices--wide {
    width: 100%; /* Ensure it matches the container's width */
    max-width: 100%; /* Avoid over-expansion */
}

/* Additional specificity for table headers */
table.dataTable thead th {
    border: 1px solid rgba(0, 0, 0, 0.1); /* Set border color with 10% opacity */
}

/* Transparent Overlay */

/* Transparent Overlay */
.loading {
  position: fixed;
  z-index: 999999;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(244, 244, 244, 0.5); 
  display: flex;
  justify-content: center;
  align-items: center;
}


.spinner {
  position: fixed;
  z-index: 9999999;
  height: 20.2px;
  width: 20.2px;
  overflow: show;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

.spinner div {
   animation: spinner-4t3wzl 1.875s infinite backwards;
   background-color: #ed1d26;
   border-radius: 50%;
   height: 100%;
   position: absolute;
   width: 100%;
}

.spinner div:nth-child(1) {
   animation-delay: 0.15s;
   background-color: rgba(1,108,48,0.9);
}

.spinner div:nth-child(2) {
   animation-delay: 0.3s;
   background-color: rgba(1,108,48,0.8);
}

.spinner div:nth-child(3) {
   animation-delay: 0.45s;
   background-color: rgba(1,108,48,0.7);
}

.spinner div:nth-child(4) {
   animation-delay: 0.6s;
   background-color: rgba(1,108,48,0.6);
}

.spinner div:nth-child(5) {
   animation-delay: 0.75s;
   background-color: rgba(1,108,48,0.5);
}

.dataTables_wrapper .paginate_button:hover {
    background-color: transparent !important;
    color: inherit !important;
}
@keyframes spinner-4t3wzl {
   0% {
      transform: rotate(0deg) translateY(-200%);
   }

   60%, 100% {
      transform: rotate(360deg) translateY(-200%);
   }
}

.ui-menu-item-wrapper {
  width:800px !important;
  min-width:700px !important;
  flex: 1 1 auto !important;
}

@keyframes blinkAnimation {
      0% { opacity: 0; }
      50% { opacity: 1; }
      100% { opacity: 0; }
  }
  
.blink-text {
      animation: blinkAnimation 1s infinite !important;
  } 



</style>
</head>

<body>

@php 

    $segment = request()->segments();
    $staff = session('staff');
    $staff_username = session('user_staff')
@endphp 

{{-- MENU --}}

<nav class="navbar navbar-vertical navbar-expand-lg">
    <script>
      var navbarStyle = window.config.config.phoenixNavbarStyle;
      if (navbarStyle && navbarStyle !== 'transparent') {
        document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
      }
    </script>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
      <!-- scrollbar removed-->
      <div class="navbar-vertical-content">
        <ul class="navbar-nav flex-column" id="navbarVerticalNav">
        
            <li class="nav-item">
                <div class="nav-item-wrapper ">
                    <a class="nav-link @if( count($segment) == 1 && $segment[0] == 'itinerary')  {{ 'active' }} @endif  label-1" href="{{route('dashboard_admin')}}" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="home"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Dashboard</span></span>
                    </div>
                  </a>
                </div>
            </li>
        
        @if(userAccess($staff,'itinerary',false,true) == 1 )

        <li class="nav-item">
            <!-- label-->
            <p class="navbar-vertical-label">Itinerary
            
            @if(userAccess($staff,'myitinerary',false,false) == 1  )
            <div class="nav-item-wrapper"><a class="nav-link @if( count($segment) > 1 &&  $segment[1] == 'myitinerary')  {{ 'active' }} @endif label-1" href="{{route('itinerary_myitinerary')}}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="calendar"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">My Itinerary</span></span>
                </div>
              </a>
            </div>
            @endif

            {{-- @if(userAccess($staff,'paid',false,false) == 1 )
            <div class="nav-item-wrapper"><a class="nav-link @if( count($segment) > 1 &&  $segment[1] == 'paid')  {{ 'active' }} @endif label-1" href="{{route('paid_store')}}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span>₱</span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Paid</span></span>
                </div>
              </a>
            </div>
            @endif --}}
        

            {{-- @if(userAccess($staff,'itinerary_budget_for_approval',false,false) == 1 && strpos(trim(session('rank')), 'AE') === false )
            <div class="nav-item-wrapper">
                <a class="nav-link @if( count($segment) > 1 &&  $segment[1] == 'itinerary_budget_for_approval')  {{ 'active' }} @endif label-1" href="{{route('itinerary_budget_for_approval')}}" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><span class="fas fa-file-signature" ></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Budget For Approval</span></span>
                    </div>
                </a>
            </div>
            @endif --}}


            {{-- @if(userAccess($staff,'for_release',false,false) == 1 )
            <div class="nav-item-wrapper"><a class="nav-link @if( count($segment) > 1 &&  $segment[1] == 'for_release')  {{ 'active' }} @endif label-1" href="{{route('itinerary_approved')}}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon"><span data-feather="list"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Masterlist</span></span>
                </div>
              </a>
            </div>
            @endif --}}

            
            @if(userAccess($staff,'itinerary_liquidate_expenses',false,false) == 1 )
            <div class="nav-item-wrapper"><a class="nav-link @if( count($segment) > 1 &&  $segment[1] == 'liquidate_expenses')  {{ 'active' }} @endif label-1" href="{{route('itinerary_liquidate_expenses')}}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon"><span class="fas fa-money-bill-wave" ></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Liquidate Expenses</span></span>
                </div>
              </a>
            </div>
            @endif
            
        </li>	
        @endif
        
        
        @if(userAccess($staff,'admin',false,true) == 1 && strpos(trim(session('rank')), 'AE') === false)  
          <li class="nav-item">
            <!-- label-->
            <p class="navbar-vertical-label">Team
            </p>
            <hr class="navbar-vertical-line" />
            <!-- parent pages-->

            
                
            @if(userAccess($staff,'itinerary_for_approval',false,false) == 1 && strpos(trim(session('rank')), 'AE') === false )
            <div class="nav-item-wrapper">
                <a class="nav-link @if( count($segment) > 1 &&  $segment[1] == 'for_approval')  {{ 'active' }} @endif label-1" href="{{route('itinerary_for_approval')}}" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><span class="fas fa-file-signature" ></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Itineraries For Approval</span></span>
                    </div>
                </a>
            </div>
            @endif

            @if(userAccess($staff,'approved_itineraries',false,false) == 1 && strpos(trim(session('rank')), 'AE') === false )
            <div class="nav-item-wrapper">
                <a class="nav-link @if( count($segment) > 1 &&  $segment[1] == 'approved_itineraries')  {{ 'active' }} @endif label-1" href="{{route('itinerary_approved')}}" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><span class="far fa-check-circle" ></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Approved Itineraries</span></span>
                    </div>
                </a>
            </div>
            @endif


                      
            @if(userAccess($staff,'itinerary_team_schedule',false,false) == 1 && !preg_match('/AE/', session('rank')) )
            {{-- <div class="nav-item-wrapper"><a class="nav-link @if( count($segment) > 1 &&  $segment[1] == 'team_schedule')  {{ 'active' }} @endif label-1" href="{{route('itinerary_team_schedule')}}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon"><span class="fas fa-users" ></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Team Schedule</span></span>
                </div>
              </a>
            </div> --}}
            @endif

            
          </li>
          @endif


        @if(userAccess($staff,'reports',false,true) == 1 )
        <li class="nav-item">
            <!-- label-->
            <p class="navbar-vertical-label">Reports
            <hr class="navbar-vertical-line" />
            <!-- parent pages-->
            {{-- @if(userAccess($staff,'dsr',false,false) == 1 )
            <div class="nav-item-wrapper"><a class="nav-link  @if( count($segment) > 1 &&  $segment[1] == 'references_list')  {{ 'active' }} @endif label-1" href="{{route('reports_references_list')}}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon">
                        <span data-feather="flag"></span></span>
                        <span class="nav-link-text-wrapper">
                             <span class="nav-link-text">References List </span>
                         </span>
                </div>
              </a>
            </div>
            @endif --}}

            @if(userAccess($staff,'dsr',false,false) == 1 )
            <div class="nav-item-wrapper"><a class="nav-link  @if( count($segment) > 1 &&  $segment[1] == 'preitinerary_list')  {{ 'active' }} @endif label-1" href="{{route('reports_preitinerary_list')}}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon">
                        <span data-feather="flag"></span></span>
                        <span class="nav-link-text-wrapper">
                             <span class="nav-link-text">Itinerary List </span>
                         </span>
                </div>
              </a>
            </div>
            @endif

  
            
            @if(userAccess($staff,'dsr',false,false) == 1 )
            <div class="nav-item-wrapper"><a class="nav-link  @if( count($segment) > 1 &&  $segment[1] == 'preitinerary_budget')  {{ 'active' }} @endif label-1" href="{{route('reports_preitinerary_budget')}}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon">
                        <span data-feather="flag"></span></span>
                        <span class="nav-link-text-wrapper">
                             <span class="nav-link-text">Itinerary Budget </span>
                         </span>
                </div>
              </a>
            </div>
            @endif


            @if(userAccess($staff,'dsr',false,false) == 1 )
            <div class="nav-item-wrapper"><a class="nav-link  @if( count($segment) > 1 &&  $segment[1] == 'activity_list')  {{ 'active' }} @endif label-1" href="{{route('reports_activity_list')}}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon">
                        <span data-feather="flag"></span></span>
                        <span class="nav-link-text-wrapper">
                             <span class="nav-link-text">Activity List </span>
                         </span>
                </div>
              </a>
            </div>
            @endif

            @if(userAccess($staff,'dsr',false,false) == 1 )
            <div class="nav-item-wrapper"><a class="nav-link  @if( count($segment) > 1 &&  $segment[1] == 'liquidation')  {{ 'active' }} @endif label-1" href="{{route('reports_liquidation')}}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon">
                        <span data-feather="flag"></span></span>
                        <span class="nav-link-text-wrapper">
                             <span class="nav-link-text"> Liquidation Report    </span>
                         </span>
                </div>
              </a>
            </div>
            @endif

                
            @if(userAccess($staff,'dsr',false,false) == 1 )
            <div class="nav-item-wrapper"><a class="nav-link  @if( count($segment) > 1 &&  $segment[1] == 'customer_activity_summary')  {{ 'active' }} @endif label-1" href="{{route('reports_customer_activity_summary')}}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon">
                        <span data-feather="flag"></span></span>
                        <span class="nav-link-text-wrapper">
                             <span class="nav-link-text">Customer Activity Summary  </span>
                         </span>
                </div>
              </a>
            </div>
            @endif

            @if(userAccess($staff,'dsr',false,false) == 1 )
            <div class="nav-item-wrapper"><a class="nav-link  @if( count($segment) > 1 &&  $segment[1] == 'it_counts')  {{ 'active' }} @endif label-1" href="{{route('reports_it_counts')}}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon">
                        <span data-feather="flag"></span></span>
                        <span class="nav-link-text-wrapper">
                             <span class="nav-link-text">IT Counts </span>
                         </span>
                </div>
              </a>
            </div>
            @endif

     

            {{-- @if(userAccess($staff,'dsr',false,false) == 1 )
            <div class="nav-item-wrapper"><a class="nav-link  @if( count($segment) > 1 &&  $segment[1] == 'dsr')  {{ 'active' }} @endif label-1" href="{{route('reports_actual_expense')}}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon">
                        <span data-feather="flag"></span></span>
                        <span class="nav-link-text-wrapper">
                             <span class="nav-link-text">Actual Expense </span>
                         </span>
                </div>
              </a>
            </div>
            @endif

            @if(userAccess($staff,'dsr',false,false) == 1 )
            <div class="nav-item-wrapper"><a class="nav-link  @if( count($segment) > 1 &&  $segment[1] == 'dsr')  {{ 'active' }} @endif label-1" href="{{route('reports_addendumitinerary_expense')}}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon">
                        <span data-feather="flag"></span></span>
                        <span class="nav-link-text-wrapper">
                             <span class="nav-link-text">Addendum Itinerary Expense </span>
                         </span>
                </div>
              </a>
            </div>
            @endif --}}

        </li>
        @endif
        
        @if(userAccess($staff,'admin',false,true) == 1 && session('rank') == 'ADMIN' )  
          <li class="nav-item">
            <!-- label-->
            <p class="navbar-vertical-label">Admin
            </p>
            <hr class="navbar-vertical-line" />
            <!-- parent pages-->

            @if(userAccess($staff,'usersadmin',false,false) == 1 )
            <div class="nav-item-wrapper"><a class="nav-link @if( count($segment) > 1 &&  $segment[1] == 'users')  {{ 'active' }} @endif label-1" href="{{ route('admin_users')}}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="users"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Users</span></span>
                </div>
              </a>
            </div>
            @endif

            @if(userAccess($staff,'usersadmin',false,false) == 1 )
            <div class="nav-item-wrapper"><a class="nav-link @if( count($segment) > 1 &&  $segment[1] == 'expenses')  {{ 'active' }} @endif label-1" href="{{ route('admin_expenses')}}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon">
                    <span data-feather="archive"></span></span><span class="nav-link-text-wrapper">
                        <span class="nav-link-text">Expenses</span></span>
                </div>
              </a>
            </div>
            @endif

            @if(userAccess($staff,'usersadmin',false,false) == 1 )
            <div class="nav-item-wrapper"><a class="nav-link @if( count($segment) > 1 &&  $segment[1] == 'purpose')  {{ 'active' }} @endif label-1" href="{{ route('admin_purpose')}}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon">
                    <span data-feather="briefcase"></span></span><span class="nav-link-text-wrapper">
                        <span class="nav-link-text">Purpose</span></span>
                </div>
              </a>
            </div>
            @endif

            {{-- @if(userAccess($staff,'usersadmin',false,false) == 1 )
            <div class="nav-item-wrapper"><a class="nav-link @if( count($segment) > 1 &&  $segment[1] == 'users')  {{ 'active' }} @endif label-1" href="{{ route('admin_activities')}}" role="button" data-bs-toggle="" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="activity"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Activities</span></span>
                </div>
              </a>
            </div>
            @endif --}}

            
          </li>
          @endif

        </ul>
      </div>
    </div>
    <div class="navbar-vertical-footer">
      <button class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-0"></span><span class="uil uil-arrow-from-right fs-0"></span><span class="navbar-vertical-footer-text ms-2">Collapsed</span></button>
    </div>
  </nav>
 
  <nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault">
    <div class="collapse navbar-collapse justify-content-between">
       <div class="navbar-logo">
          <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="{{ route("dashboard_admin")}}">
          <div class="d-flex align-items-center">
             <div class="d-flex align-items-center"><img src="{{ asset("assets/img/C&EALS_Horizontal.jpg") }} " alt="phoenix" />
             </div>
          </div>
          </a>
       </div>
       {{-- @php 
       $uniqueDeviceIdentifier = uniqid('device_', true);
       @endphp
       {{ $uniqueDeviceIdentifier}} --}}
       
       <ul class="navbar-nav navbar-nav-icons flex-row">
            
        @if(userAccess($staff,'itinerary_for_approval',false,false) == 1 && strpos(trim(session('rank')), 'AE') === false )
          <li class="nav-item">
             <a class="nav-link px-2 icon-indicator icon-indicator-warning" title="Itineraries For Approval" href="{{route('itinerary_for_approval')}}" role="button">
             <span class="text-700 fas fa-file-signature" style="height:20px;width:20px;"></span>
             <span class="icon-indicator-number"><span class=""></span><div class="for-approval-count-display"></div></span>
             </a>
          </li>
        @endif
        
          <li class="nav-item dropdown">
            <a class="nav-link px-2 icon-indicator itinerary-notification-btn icon-indicator-success" title="Notification"  href="#" style="min-width: 2.5rem" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside">
            <span class="text-700" data-feather="bell" style="height:20px;width:20px;"></span>
            <span class="icon-indicator-number"><span class=""></span> <div class="itinerary-notification-total-display"></div></span>
            </a>

            <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border border-300 navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                <div class="card position-relative border-0">
                  <div class="card-header p-2">
                    <div class="d-flex justify-content-between">
                      <h5 class="text-black mb-0">Notificatons</h5>
                     
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="scrollbar-overlay" style="height: 27rem;">
                    
                        <div class="itinerary-notification-display"></div>
                    </div>
                  </div>
                  <div class="card-footer p-0 border-top border-0">
                    <div class="my-2 text-center fw-bold  text-600"><a class="fw-bolder" href="#">Notification history</a></div>
                  </div>
                </div>
              </div>
         </li>
    
          <li class="nav-item">
             <div class="nav-link mx-2">
                {{ formatDate(date_now(),'date') }}  </br> 
                {{-- <span id="clock"></span> --}}
             </div>
          </li>
          <li class="nav-item dropdown">
             <a class="nav-link lh-1 pe-0" id="navbarDropdownUser"  role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-l ">
                   <img class="rounded-circle " src="{{ asset("mazer_assets/images/avatar.png") }}" alt="" />
                </div>
             </a>
             <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                <div class="card position-relative border-0">
                   <div class="card-body p-0">
                      <div class="text-center pt-4 pb-3">
                         <div class="avatar avatar-xl ">
                            <img class="rounded-circle " src="{{ asset("mazer_assets/images/avatar.png")}}" alt="" />
                         </div>
                         <h6 class="mt-2 text-black">{{ userNameDetails(session('user_staff'),'FULLNAME') }}</h6>
                         <h6 class="mt-2 opacity-75 text-black">{{ session('user_staff') }}</h6>
                         <h6 class="opacity-50">{{ session('pernr') }}</h6>
                      </div>
                   </div>
                   {{-- 
                   <div class="overflow-auto scrollbar" style="height: 10rem;">
                      <ul class="nav d-flex flex-column mb-2 pb-1">
                         <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user"></span><span>Profile</span></a></li>
                         <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                         <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="lock"></span>Posts &amp; Activity</a></li>
                         <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                         <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
                         <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="globe"></span>Language</a></li>
                      </ul>
                   </div>
                   --}}
                   <div class="card-footer border border-0 p-0">
                      {{-- 
                      <ul class="nav d-flex flex-column my-3">
                         <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                      </ul>
                      --}}
                      <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="{{ route('logoff_admin') }}"> 
                         <span class="me-2" data-feather="log-out"> </span>Sign out</a>
                      </div>
                      <div class="my-2 text-center fw-bold  text-600">
                         <a class="text-600 pe-none me-1" >Privacy policy</a>&bull;
                         <a class="text-600 pe-none mx-1" >Terms</a>&bull;
                         <a class="text-600 pe-none ms-1" >Cookies</a>
                      </div>
                   </div>
                </div>
             </div>
          </li>
       </ul>
    </div>
 </nav>
  




<div class="modal fade" id="addMoreProductsOrder"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-centered modal-dialog-scrollable"
        role="document">
        <div class="modal-content border border-secondary">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">
                    Add New Product...
                </h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <form method="POST" id="submit_add_new_item_order"  class="my-5">
                    @csrf
                  
                @php
                    // $itemsQuery = get_items_matdel();
                    //  $getItems = $itemsQuery->get();
         
                 @endphp
                {{-- <h5>Choose Item:</h5> --}}
                   

                        {{-- <option  value="{{ $item->EAN11 }}">   {{ $item->EAN11 . " - " . $item->ZZLONGTEXT }} </option> --}}
                   
                    <input type="text" required class="form-control form-control AddNewItemList" autocomplete="off" placeholder="Find ISBN,Title,Author..." name="ItemChoices" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    <input type="text" hidden class="form-control form-control selectedAddNewItem" placeholder="" name="itemcode" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                       
                    <div class="col-sm-12 mt-2 ">
                        <div class="d-flex text-left">
                                <div class="col-lg-4">
                                     <div class="input-group mb-3 w-100 ">
                                    
                                        <label class="input-group-text" for="inputGroupSelect01">
                                            <div class="mx-auto">
                                                Qty
                                            </div>
                                        </label>
                                        <input name="qty" required name="itemcode" class="form-control text-center w-25">
                                        <div id="AddNewItemStocksDisplay"></div>

                                          
                                     </div>
                                </div>
                         </div>
                    </div>
                <input type="text" name="docnum" class="orderDetailsAddProduct" value=""  hidden readonly>
                <div class="text-end">
                    <button type="submit" class="btn  btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">SAVE</span>
                    </button>
                </div>
                <input type="text" name="customer" class="customerAddProduct" value=""  hidden readonly>
                <input type="text" name="basedocnumcart" class="basedocnumcartAddProduct" value="" hidden   readonly>
                <input type="text" name="ordnumsus" class="ordnumsusAddProduct" value="" hidden   readonly>

             </form>


            </div>

            <div class="modal-footer" hidden >
                <button type="button" class="btn btn-light-secondary"2301307
                    data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="button" class="btn btn-primary ml-1"
                    data-bs-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Save</span>
                </button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="adjustmentModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-centered modal-dialog-scrollable"
        role="document">
        <div class="modal-content border border-secondary">
            <div class="modal-header bg-warning">
                <h5 class="modal-title text-white" id="exampleModalCenterTitle">
                    Adjustment
                </h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                <form method="POST" id="submit_adjustment_item_inventory"  class="my-5">
                    @csrf
                    <div class="col-sm-12 mt-2 ">
                        <div class="d-flex text-left">
                                <div class="col-lg-6">
                                    <div class="input-group mb-3 w-100 ">
                                    
                                        <label class="input-group-text" for="inputGroupSelect01">
                                            <div class="mx-auto">
                                                ISBN
                                            </div>
                                        </label>
                                        <input name="isbn" required readonly id="adjustmentItemCode" class="form-control ">
                                          
                                     </div>
                                     <div class="input-group mb-3 w-75 ">
                                    
                                        <label class="input-group-text" for="inputGroupSelect01">
                                            <div class="mx-auto">
                                                 Type
                                            </div>
                                        </label>
                                        <select class="form-select " name="type" id="adjustmentType" aria-label="Default select example">
                                            <option selected="" disabled>--Choose in the list--</option>
                                            <option value="add">Add</option>
                                            <option value="deduct">Deduct</option>
                                          </select>
                                     </div>
                                     <div class="input-group mb-3 w-50 ">
                                        
                                        <label class="input-group-text" for="inputGroupSelect01">
                                            <div class="mx-auto">
                                                Qty
                                            </div>
                                        </label>
                                        <input name="qty" required name="qty" class="form-control w-25" id="adjustmentQty">
                                          
                                     </div>
                                </div>
                         </div>
                    </div>
                <input type="text" name="docnum" class="orderDetailsAddProduct" value=""  hidden readonly>
                <div class="text-end">
                    <button type="submit" class="btn w-25 btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">SAVE</span>
                    </button>
                </div>
             </form>


            </div>

            <div class="modal-footer" hidden >
                <button type="button" class="btn btn-light-secondary"
                    data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="button" class="btn btn-primary ml-1"
                    data-bs-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Save</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal"  id="GroupExpensesDetailsModal" tabindex="-1" aria-labelledby="verticallyCenteredModalLabel" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content ">
            <div class="modal-header">
            <h5 class="modal-title" id="verticallyCenteredModalLabel">Group Expenses</h5>
                <button class="btn btn-sm btn-phoenix-secondary" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-xmark text-danger" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"></path></svg><!-- <span class="fas fa-times text-danger"></span> Font Awesome fontawesome.com --></button>
        
            </div>
        
            <div class="modal-body">
            
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="viewItineraryRefNoOptionModal"  tabindex="-1" aria-labelledby="addDealModal" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content bg-100 p-3">
        <div class="modal-header border-0 p-0">
          <h3 class="mb-0">Itinerary Reference Details</h3>

       
          
          <button class="btn btn-sm btn-phoenix-secondary" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-xmark text-danger" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"></path></svg><!-- <span class="fas fa-times text-danger"></span> Font Awesome fontawesome.com --></button>
        </div>
       
       
          <div class="modal-body pt-0 mt-0 ">
 
                <div class="card-body pt-4 pb-0">
                  
                
                      <div class="row g-4">
                         <div class="col-lg-5 card p-3">
                            <div class="">
                               <div class="d-flex justify-content-between">
                                  <p class="text-900 fw-bold">Reference</p>
                                  <p class="text-1100 fw-bold"><span class="itinerary_reference_details_no_option_refnum"></span></p>
                               </div>
                              
                           </div>
                           {{-- <div class="">
                               <div class="d-flex justify-content-between">
                                  <p class="text-900 fw-bold">Itinerary Type</p>
                                  <p class="text-1100 fw-bold"><span class="itinerary_reference_details_no_option_ititype"></span></p>
                               </div>
                              
                           </div> --}}
                           <div class="">
                               <div class="d-flex justify-content-between">
                                  <p class="text-900 fw-bold">Status</p>
                                  <p class="text-1100 fw-bold"><span class="itinerary_reference_details_no_option_status"></span></p>
                               </div>
                             
                          </div>
                           {{-- <div class="">
                                  <div class="d-flex justify-content-between">
                                     <p class="text-900 fw-bold">Budget Type</p>
                                   
                                  </div>
                             
                          </div> --}}
                          <div class="">
                               <div class="d-flex justify-content-between">
                                  <p class="text-900 fw-bold">Itinerary Dates</p>
                                  <p class="text-1100 fw-bold"><span class="itinerary_reference_details_no_option_daterange"></span></p>
                               </div>
                             
                          </div>
                          <div class="d-flex justify-content-between">
                            {{-- <p class="text-1100 fw-bold"><span class="itinerary_reference_details_no_option_budgettype"></span></p> --}}
                            <p class="text-1000 fw-bold">Budget</p>
                            <p class="text-900 fw-bold">₱<span class="itinerary_reference_details_no_option_totalamount"></span></p>
                          
                         </div>
                        
                         {{-- <a class="fw-bold  "   data-bs-toggle="offcanvas" data-bs-target="#myitinerary-actual-expense-canvas" href="#!">+ Add New</a> --}}
                            <div class="">
                               <table id="itinerary-reference-expense-no-option-table" class="table  mb-0" style="width:100%">
                                  <thead class="thead-bgcolor">
                                     <tr>
                                     
                                        
                                         <th width="1%">#</th>
                                         <th >Expense</th>
                                        <th width="20%">Rate</th>
                                        <th width="20%">Qty</th>
                                        <th width="20%">Amount</th>
                                        <th width="20%">Total</th>
                                     </tr>
                                  </thead>
                                  <tbody>
                            
                                  </tbody>
                               </table>
                            </div>
                    
                          </div>
 
                          <div class="col-lg-7 card p-3">
                            <label class="text-1000 fw-bold mb-2">Itineraries</label>   
                             
                        
                            <div class="">
                               <table id="itinerary-reference-itinerary-list-no-option-table" class="table  mb-0" width="100%">
                                  <thead class="thead-bgcolor">
                                     <tr>
                                        
                                        <th width="1%">#</th>
                                        <th >Date</th>
                                        <th width="15%">Purpose</th>
                                        <th width="40%">Name</th>
                                        <th  width="25%">Activities</th>
                                        <th width="15%">Remarks</th>
                                        <th width="15%">Status</th>
                                     </tr>
                                  </thead>
                                 
                               </table>
                            </div>

                            </div>
                       
                         {{-- <div class="col-lg-12 card p-3 mt-0 pt-2 mb-2">
                          
                        </div> --}}
                        
                       </div>
           
                </div>
            
       </div>
        
        <div class="modal-footer border-0 px-0 pb-0">
          <div class="itinerary_reference_details_no_option_on_hold_info"></div>
          
          <div id="itinerary_reference_details_no_option_btn">     </div>
      
        </div>
      </div>
    </div>
  </div>


<div class="content">
    <div class="row mb-3">
        <div class="col-12 col-lg-8 ">
            <h4 class="mb-0 text-1100 fw-bold fs-md-2"><span class="calendar-day d-block d-md-inline mb-1">
                </span><span class="px-3  h2 d-none d-md-inline"> @yield('menutitle') </span>
            </h4>
   
        </div>
        <div class="col-12 col-lg-4 text-end">
            <h5 class="text-700 fw-semi-bold">OPT</h5>
        </div>
    </div>
    @yield('belowcontent')


      
</div>


<div class="loading" hidden>
    <div class="spinner">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<script type="text/javascript" src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery-ui/jquery-ui.min.js') }}"></script>   

<script src="{{ asset('vendors/popper/popper.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendors/anchorjs/anchor.min.js') }}"></script>
<script src="{{ asset('vendors/is/is.min.js') }}"></script>
<script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
<script src="{{ asset('vendors/lodash/lodash.min.js') }}"></script>
<script src="{{ asset('vendors/list.js/list.min.js') }}"></script>
<script src="{{ asset('vendors/fullcalendar/main.min.js') }}"></script>
<script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('vendors/dayjs/dayjs.min.js') }}"></script>
<script src="{{ asset('assets/js/phoenix.js') }}"></script>
<script src="{{ asset('vendors/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('vendors/leaflet/leaflet.js') }}"></script>
<script src="{{ asset('vendors/leaflet.markercluster/leaflet.markercluster.js') }}"></script>
<script src="{{ asset('vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js') }}"></script>
<script src="{{ asset('assets/js/ecommerce-dashboard.js') }}"></script>


{{-- MAZER JS --}}

<script src="{{ asset('assets/js/dataTables.min.js') }}"></script>

<script src="{{ asset('assets/js/adapter.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-growl.min.js') }}"></script>
<script src="{{ asset('assets/js/canvasjs.min.js') }}"></script>
<script src="{{ asset('assets/js/classie.js') }}"></script>
<script src="{{ asset('assets/js/common-pages.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.fixedColumns.min.js') }}"></script>

<script src="{{ asset('assets/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/js/dataTables.rowReorder.min.js') }}"></script>
<script src="{{ asset('assets/js/file-size.js') }}"></script>
<script src="{{ asset('assets/js/instascan.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.doubleScroll.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mousewheel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/lottie-player.js') }}"></script>
<script src="{{ asset('assets/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
<script src="{{ asset('assets/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/js/script.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/sum().js') }}"></script>
<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/js/time.js') }}"></script>
<script src="{{ asset('assets/js/vendors.js') }}"></script>
<script src="{{ asset('assets/js/vfs_fonts.js') }}"></script>

<script src="{{ asset('assets/js/daterangepicker.min.js') }}"></script>
<script src="{{ asset('assets/js/xlsx.full.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.twbsPagination.min.js') }}"></script>

<script src="{{ asset('assets/js/xlsx.full.min.js') }}"></script>

<script src="{{ asset('mazer_assets/vendors/choices.js/choices.js')}}" ></script>
<script src="{{ asset('mazer_assets/vendors/toastify/toastify.js') }}"></script>
<script src="{{ asset('mazer_assets/js/extensions/toastify.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>



<script>
    var phoenixIsRTL = window.config.config.phoenixIsRTL;
    if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
    } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
    }
</script>



<script>


function customerAutocomplete(inputSelector, pernr, selectedElementSelector,withcode = '0') {
        $(inputSelector).autocomplete({
            source: function(request, response) {
                // Minimum character limit
                const minChars = 2;

                if (request.term.length < minChars) {
                    response([]);
                } else {
                    $.ajax({
                        url: '/submit_find_customer?customer='+request.term+'&pernr='+pernr+'&withcode='+withcode,
                        dataType: 'json',
                        beforeSend: function() {
                            //   $('#myitinerary_form_customer_code').val("");
                            response([{ 
                                    num: '0',
                                    label: 'Searching....'
                                }]);
                        
                            $(selectedElementSelector).val("");

                             $(inputSelector).removeClass("is-valid is-invalid");
                        
                        },
                        success: function(data) {
                            if (data.length === 0) {
                                response([{ 
                                    num: '0',
                                    label: 'Searching....'
                                }]);
                            } else {
                                response(data);
                            }
                        }
                    });
                }
            },
            minLength: 2, // Minimum characters before triggering autocomplete
            select: function(event, ui) {
                // Handle the selected item
                var label = ui.item.label;
                var num = ui.item.num;
                var kunnr = ui.item.kunnr;
                var customername = ui.item.customername;

                console.log('Selected: ' + customername);

                if (num !== '0') { 
                    $(selectedElementSelector).val(kunnr);
                    $(inputSelector).val(customername);

                    $(inputSelector).removeClass("is-invalid");
                    $(inputSelector).addClass("is-valid");
                } else {
                    $(inputSelector).addClass("is-invalid");
                }

                return false; // Prevent the default behavior of filling the input with the selected value
            }
        })
    }

    
function truncatelimitWords(str, limit = 30) {
    if (str.length > limit) {
        return str.substring(0, limit) + '...'; // Add ellipsis if truncated
    }
    return str;
}

    

function getReferenceDetailsNoOption(refnum){

$.ajax({
        url: '/get_myitinerary_reference_details?refnum='+refnum,
        dataType: 'json',
        beforeSend: function() {

            showLoading();

        },
        success: function(data) {

            hideLoading();
            var dat = data[0];
            var reference = dat.reference;
            var ititype = dat.ititype;
            var budgettype = dat.budgettype;
            var totalamount = dat.totalamount;
            var daterange = dat.daterange;
            var approveoptions = dat.approveoptions;
            var status = dat.status;

            $('.itinerary_reference_details_no_option_refnum').html(reference)
            $('.itinerary_reference_details_no_option_ititype').html(ititype)
            $('.itinerary_reference_details_no_option_status').html(status)
            $('.itinerary_reference_details_no_option_budgettype').html(budgettype)
            $('.itinerary_reference_details_no_option_daterange').html(daterange)
            $('.itinerary_reference_details_no_option_totalamount').html(totalamount)
            $('#itinerary_reference_no_option_btn').html(approveoptions)
            

            // DATATABLE -----

            var myitineraryExpenseTable = $("#itinerary-reference-expense-no-option-table");
            var myitineraryExpenseTableURL =  "/datatable_myitinerary_expense_table?refnum="+reference
            var myitineraryExpenseTableColumns = [
                        { "data": "num" },
                        { "data": "description" },
                        { "data": "ratetype" },
                        { "data": "qty" },
                        { "data": "amount" },
                        { "data": "linetotal" }
                        // { "data": "status" },
                        // { "data": "action" }
            ];

            dTable(myitineraryExpenseTable, myitineraryExpenseTableURL, myitineraryExpenseTableColumns, 200,"No Budget Declared",false,'',false,0,0);

            var myitineraryReferenceItineraryListTable = $("#itinerary-reference-itinerary-list-no-option-table");
            var myitineraryReferenceItineraryListTableURL =  "/datatable_reference_itinerary_list?refnum="+reference
            var myitineraryReferenceItineraryListTableColumns = [
                        { "data": "num" },
                        { "data": "docdate" },
                        { "data": "purpose" },
                        { "data": "title" },
                        { "data": "activity" },
                        { "data": "remarks" },
                        { "data": "status" },
                        // { "data": "remarksnext" },
                        // { "data": "remarksdone" },
                        // { "data": "action" }
            ];

            dTable(myitineraryReferenceItineraryListTable, myitineraryReferenceItineraryListTableURL, myitineraryReferenceItineraryListTableColumns, 400,"",false,'',true,0,0);

            // -----DATATABLE
            
            $.ajax({
                url: '/get_myitinerary_reference_hold_remarks?refnum='+refnum,
                dataType: 'json',
                success: function(data) {
                  var dat = data[0];

                  $('.on_hold_info').html(dat.comments)
                  $('[data-bs-toggle="popover"]').popover();
                }
            });

        }
    });

}


function activityOthersAutocomplete(inputSelector, selectedElementSelector,fn = '1',effects= "1") {
        $(inputSelector).autocomplete({
            source: function(request, response) {
                // Minimum character limit
                const minChars = 2;

                if (request.term.length < minChars) {
                    response([]);
                } else {
                    $.ajax({
                        url: '/submit_find_activity_others?activity='+request.term,
                        dataType: 'json',
                        success: function(data) {
                            if (data.length === 0) {
                                response([{ 
                                    label: 'none',
                                    description: "N/A",
                                    isbn : "..."
                                }]);
                            } else {
                                response(data);
                            }
                        }
                    });
                }
            },
            minLength: 2, // Minimum characters before triggering autocomplete
            select: function(event, ui) {
                // Handle the selected item
                var label = ui.item.label;
                var tcode = ui.item.tcode;

                console.log('Selected: ' + label);

                if (tcode !== '0') { 
                    $(selectedElementSelector).val(tcode);
                    $(inputSelector).val(label);

                    if(effects == "1") {
                        $(inputSelector).removeClass("is-invalid");
                        $(inputSelector).addClass("is-valid");
                    }
                  
                } else {
                    if(effects == "1") {
                        $(inputSelector).addClass("is-invalid");
                    }
                  
                }

                return false; // Prevent the default behavior of filling the input with the selected value
            }
        })
    }


function filterUsersSalesTeam() {

    var r = [
        'AE',
        'SSM',
        'RSM',
    ]

    return r

}

function selectChoices (className) {
    var choices = new Choices(className, {
        removeItems: true,
        removeItemButton: true,
        placeholder: false,
        position: 'bottom', 
    });
    
    return choices
}

function generateRandomStringAndInt(length) {
    var chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    var randomString = '';
    for (var i = 0; i < length; i++) {
        randomString += chars.charAt(Math.floor(Math.random() * chars.length));
    }
    var randomInt = Math.floor(Math.random() * 1000); // Change 1000 to the maximum integer value you want
    return randomString + randomInt;
}


function getUrlParameter(name) {
      name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
      var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
      var results = regex.exec(location.search);
      return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
  }


  function ExportExcel(table_id, fileName) {
    var table = document.getElementById(table_id);
    var dataTable = $(table).DataTable();

    // Disable pagination and redraw the table to show all rows
    dataTable.page.len(-1).draw();

    // Clone the table to avoid modifying the original
    var clonedTable = table.cloneNode(true);

    // Remove unwanted content (like Font Awesome icons and specific text)
    $(clonedTable)
        .find('i') // Target <i> elements
        .remove(); // Remove Font Awesome icons
    
    // Remove unwanted text "Font Awesome fontawesome.com" and "-->"
    $(clonedTable)
        .find('td, th') // Target all table data and header cells
        .each(function() {
            var text = $(this).text();
            text = text.replace(/Font Awesome fontawesome.com/g, '').replace(/-->/g, ''); // Remove the unwanted text
            $(this).text(text); // Update the cell text
        });

    // Create a new Workbook
    var wb = XLSX.utils.book_new();
    var ws = XLSX.utils.table_to_sheet(clonedTable);

    // Add a new row at the bottom with date and time
    var currentDateTime = new Date();
    var formattedDateTime = currentDateTime.toLocaleString(); // Format to readable date and time

    var lastRowIndex = table.rows.length + 1; // Adding below the last row
    XLSX.utils.sheet_add_aoa(ws, [[`Created on: ${formattedDateTime}`]], { origin: `A${lastRowIndex}` });

    // Add the worksheet to the workbook
    XLSX.utils.book_append_sheet(wb, ws, 'Sheet1');

    // Save the workbook to a file
    XLSX.writeFile(wb, fileName + '.xlsx');

    // Re-enable pagination and redraw the table to return to the original state
    dataTable.page.len(10).draw(); // Set this to your default pagination length
}

  

//   function ExportExcel(table_id, fileName) {
//     var table = document.getElementById(table_id);

//     // Create a new Workbook
//     var wb = XLSX.utils.book_new();
//     var ws = XLSX.utils.table_to_sheet(table);

//     // Get current date and time
//         var currentDateTime = new Date();
//         var formattedDateTime = currentDateTime.toLocaleString(); // Format to readable date and time

//     // Add a new row at the bottom with date and time
//         var lastRowIndex = table.rows.length + 1; // Adding below the last row
//         XLSX.utils.sheet_add_aoa(ws, [[`Created on: ${formattedDateTime}`]], { origin: `A${lastRowIndex}` });
        
//     // Add the worksheet to the workbook
//     XLSX.utils.book_append_sheet(wb, ws, 'Sheet1');

//     // Save the workbook to a file
//     XLSX.writeFile(wb, fileName + '.xlsx');
// }


    function updateClock() {
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds();

        // Determine AM/PM
        var ampm = (hours < 12) ? "AM" : "PM";

        // Convert 24-hour format to 12-hour format
        hours = (hours % 12 === 0) ? 12 : hours % 12;

        // Add leading zeros to single-digit hours, minutes, and seconds
        hours = (hours < 10) ? "0" + hours : hours;
        minutes = (minutes < 10) ? "0" + minutes : minutes;
        seconds = (seconds < 10) ? "0" + seconds : seconds;

        // Display the formatted time in the #clock element
        $('#clock').text(hours + ":" + minutes + ":" + seconds + " " + ampm);
    }

    // Update the clock every second (1000 milliseconds)
    setInterval(updateClock, 1000);

    // Initial call to display the clock immediately
    updateClock();
  
  function showLoading(divClass = '.loading' ) {
    $(divClass).removeAttr("hidden");
  }

  function hideLoading(divClass = '.loading' ) {
    $(divClass).attr("hidden", "hidden");
  }

  function DataTableReload(id) {
	
    $(id).DataTable().ajax.reload(null,false);
  }

  function fileIcon(ext = '1') {
        const fileIcons = {
            'pdf': 'fa-file-pdf text-danger',
            'doc': 'fa-file-word text-primary',
            'docx': 'fa-file-word text-primary ',
            'xls': 'fa-file-excel text-success',
            'xlsx': 'fa-file-excel text-success',
            'ppt': 'fa-file-powerpoint text-danger',
            'pptx': 'fa-file-powerpoint text-danger',
            'txt': 'fa-file-alt text-dark',
            'jpg': 'fa-file-image text-primary',
            'jpeg': 'fa-file-image text-primary',
            'png': 'fa-file-image text-primary',
            'gif': 'fa-file-image text-primary',
            'zip': 'fa-file-archive text-dark',
            'rar': 'fa-file-archive text-dark'
        };

        const defaultIconClass = 'fa-file-alt';

        var iconClass = fileIcons[ext] || defaultIconClass;

        return iconClass;
  }
  function type_status_badge (ititype){
    
    if (ititype == 'clv') {
        var status = '<span class="badge badge-phoenix  badge-phoenix-success"><span class="badge-label">• Client Visit</span></span>';
    }
    else if (ititype == 'mit') {
        var status = '<span class="badge badge-phoenix  badge-phoenix-info"><span class="badge-label">• Miscellaneous</span></span>';
    }
    else if(ititype == 'off') {
        var status = '<span class="badge badge-phoenix  badge-phoenix-warning"><span class="badge-label">• Office Visit</span></span>';
    }
    else {
        var status = "";
    }

    return status;
  }

  function sweetalert(_title,_text,icon = 'success',timer = '2000',btn = false) {
    var con1 = document.createElement('div');
    var con2 = document.createElement('div');

    // Set the innerHTML of the containers
    con1.innerHTML = _title;
    con2.innerHTML = _text;

        swal({
            title: con1.innerHTML,
            content: con2,
            icon: icon,
            timer: timer,
            buttons: btn
        });
  }

  $('select').each(function () {
        // Filter out the placeholder or blank options
        var options = $(this).find('option').filter(function () {
            return $(this).val() !== "";
        });

        // If only one valid option remains, select it
        if (options.length === 1) {
            options.prop('selected', true);
        }
    });

  function resetWizard(formClass) {
    // Reset the form fields
    $(formClass).trigger("reset");

    // Remove 'done', 'complete', and 'active' classes from all nav-links
    $('.nav-wizard .nav-link').removeClass('done complete active');

    // Add 'active' class to the first nav-link
    $('.nav-wizard .nav-link').first().addClass('active');

    // Remove 'active show' from all tab panes
    $('.tab-pane').removeClass('active show');

    // Show the first tab content
    $('#bootstrap-wizard-tab1').addClass('active show');

    // Remove dynamically added rows from itineraries and budget tables
    $('.myitinerary_add_itinerary_new_row').remove();
    $('.myitinerary_add_budget_new_row').remove();

    // Reset any additional form or wizard-specific classes
    $('.myitinerary_form_customer_name').removeClass("is-invalid is-valid");

    // Ensure the "Next" button is visible
    $('[data-wizard-next-btn]').removeClass('d-none');

    // Enable the 'Previous' button for the first step
    $('[data-wizard-prev-btn]').addClass('d-none');

    // Re-enable the 'Next' button for the first step
    $('[data-wizard-next-btn]').removeClass('d-none');

    // Re-enable the "Next" button for each step
    $('.nav-wizard .nav-link').each(function(index) {
        var step = $(this).data('wizard-step');
        if (step > 1) {
            $('[data-wizard-next-btn]').removeClass('d-none');
        }
    });

    // Remove 'done' and 'complete' classes from all steps
    $('.nav-wizard .nav-item .nav-link').each(function(index) {
        var step = $(this).data('wizard-step');
        if (step > 1) {
            $(this).removeClass('done complete');
        }
    });

    // Add the 'complete' class to the first step
    $('.nav-wizard .nav-link').first().addClass('complete');
}


  function displayItemPagination(page, itemsPerPage,className) {
            var startIndex = (page - 1 ) * itemsPerPage;
            var endIndex = startIndex + itemsPerPage;

            // Hide all items
            $(className).hide();

            // Display items for the current page
            $(className).slice(startIndex, endIndex).show();
    }

  function formatDatePickerDateRange(dateRange) {


        var startDate = dateRange.split(' - ')[0];
        var endDate = dateRange.split(' - ')[1];
        
        startDate = moment(startDate, 'MM/DD/YYYY').format('YYYY-MM-DD');
        endDate = moment(endDate, 'MM/DD/YYYY').format('YYYY-MM-DD');

        return startDate + ' - ' + endDate;
    }

  function refreshPage (time = 3000) {

      setTimeout(function() {
        location.reload(true); 
      }, time);

  }
  $('a[href]').click(function(event) {
        
    if ($(this).attr('href').indexOf('#') === -1) {
        showLoading(); // Call your showLoading function
    }
});


$(document).on('change','input', function(e) {

    var value = $(this).val();

    $(this).attr('title',value);
     
});

$(document).on('click','.viewRefnumDetailsNoOption', function(e) {

    var refnum = $(this).data('refnum');
    getReferenceDetailsNoOption(refnum);
    $('#viewItineraryRefNoOptionModal').modal('show')
    


});


function dateConvertFullCalendar(date,val = 'fulldate') {

    var newDate = new Date(date);
    if(val== 'fulldate'){
        var options = { year: 'numeric', month: 'long', day: 'numeric' };
        var formatter = new Intl.DateTimeFormat('en-PH', options);
        var formattedDate = formatter.format(newDate);
    }
    else {
        var formattedDate = newDate;
    }

    return formattedDate;
}

function setHidden(className,val = 'hidden') {
        if(val == 'hidden') {
            document.querySelector(className).setAttribute('hidden', 'true');
        }
        else {
            document.querySelector(className).removeAttribute('hidden');
        }
       
       
}

function setHiddenDNone(className,val = 'hidden') {
        if(val == 'hidden') {
            $(className).addClass('d-none');
        }
        else {
            $(className).removeClass('d-none');
        }
       
       
}


function ExportDatatableToExcel(table_id, fileName) {
    var table = document.getElementById(table_id);
    var dataTable = $(table).DataTable();

    // Disable pagination and redraw the table to show all rows
    dataTable.page.len(-1).draw();

    // Clone the table to avoid modifying the original
    var clonedTable = table.cloneNode(true);

    // Clean up the cloned table before exporting
    $(clonedTable)
        .find('i, svg') // Remove Font Awesome icons or SVG elements
        .remove(); 

    $(clonedTable)
        .find('.exclude-from-export') // Remove any elements with the 'exclude-from-export' class
        .remove();

    // Convert the cleaned-up table to an Excel sheet
    var wb = XLSX.utils.book_new();
    var ws = XLSX.utils.table_to_sheet(clonedTable);

    // Add the worksheet to the workbook
    XLSX.utils.book_append_sheet(wb, ws, 'Sheet1');

    // Save the workbook as an Excel file
    XLSX.writeFile(wb, fileName + '.xlsx');

    // Re-enable pagination and redraw the table to restore the original state
    dataTable.page.len(10).draw(); // Reset pagination to its original value
}



    function date_now_js(type = 'datetime') {
        var currentDate = new Date();
        var options = { timeZone: 'Asia/Manila' };

        if (type === 'dateonly') {
            return currentDate.toLocaleDateString('en-US', options);
        } else if (type === 'year') {
            return currentDate.getFullYear();
        } else {
            return currentDate.toLocaleString('en-US', {
                ...options,
                year: 'numeric',
                month: '2-digit',
                day: '2-digit',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
            });
        }
    }



function getCsrfToken() {
    return $('meta[name="csrf-token"]').attr('content');
}


function status_display(val, type = 'badge') {
    var style = 'font-size:0.8rem; position:sticky;';
    var status;

    if (val === 'pre_itinerary') {
        status = '<span style="' + style + '" class="badge bg-info">Pre-Itinerary</span>';
    } else if (val === 'actual_itinerary') {
        status = '<span style="' + style + '" class="badge bg-primary">Actual Itinerary</span>';
    } else if (val === 'for_approval_itinerary') {
        status = '<span style="' + style + '" class="badge bg-warning">  <i class="fas fa-file-signature"></i> Itinerary For Approval</span>';
    } else if (val === 'approved_itinerary') {
        status = '<span style="' + style + '" class="badge bg-success"> <i class="fas fa-user-check"></i> Itinerary  Approved</span>';
    } else if (val === 'for_approval_expense'){
        status = '<span style="' + style + '" class="badge bg-warning"> <i class="far fa-money-bill-alt"></i> Expense for Approval</span>';

    }

    else {
        status = val;
    }

    return status;
}  

function checkItineraryStatus(date) {
    var eventDate = new Date(date);
    var today = new Date();

    // Calculate the difference in milliseconds
    var timeDiff = eventDate.getTime() - today.getTime();

    // Convert milliseconds to days and return as integer
    var daysDiff = Math.floor(timeDiff / (1000 * 3600 * 24));

    return daysDiff;
}


function getTodayDate(type = '' ) {
    var today = new Date();
    var asiaDate = today.toLocaleString('en-US', { timeZone: 'Asia/Manila' });
    var dateParts = asiaDate.split(", ")[0].split("/");
    var formattedDate = dateParts[2] + "-" + dateParts[0].padStart(2, '0') + "-" + dateParts[1].padStart(2, '0');
    var dateslash = dateParts[0].padStart(2, '0') + "/" + dateParts[1].padStart(2, '0') + "/" + dateParts[2] ;
    if(type == 'fullcalendar') {
        var formattedDateDisplay = dateslash + ' - ' + dateslash ;
    }else {
        var formattedDateDisplay = formattedDate;
    }
    
    return formattedDateDisplay;
}

  // function toastifyShow (textDisplay = "", pos="right", bgColor = "linear-gradient(to right, #006B32, #068e46)") {
  function toastifyShow (textDisplay = "", pos="center", bgColor = "linear-gradient(to right, white, white)") {
    Toastify({
        text: textDisplay,
        duration: 2000,
        close:false,
        gravity:"top",
        position: pos,
        backgroundColor: bgColor,
    }).showToast();
  }

  function select_one(element_classname) {
	$(document)(function() {
		$(element_classname).select2({
			maximumSelectionSize: 1
			
		});
	});
}



function oneChoices(className) {
    let choices = document.querySelectorAll(className);
    let initChoice;
    let choiceInstances = [];

    for (let i = 0; i < choices.length; i++) {
        if (choices[i].classList.contains("multiple-remove")) {
            initChoice = new Choices(choices[i], {
                delimiter: ',',
                editItems: true,
                shouldSort: false,
                maxItemCount: -1,
                removeItemButton: true,
            });
        } else {
            initChoice = new Choices(choices[i], {
                shouldSort: false,
                allowHTML: true, // Prevent the input from rendering unwanted HTML
                classNames: {
                    containerOuter: 'choices col-8', // Add custom class
                }
            });
        }

           // Push each initialized Choices instance into the array
           choiceInstances.push(initChoice);
    }
    return choiceInstances;
}
function select_one_modal(element_classname,class_modal_parent) {
	$(document).ready(function() {
		$(element_classname).select2({
			dropdownParent: $(class_modal_parent),
			maximumSelectionSize: 1
			
		});
	});
}



document.addEventListener("DOMContentLoaded", function() {
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl, {
            container: 'body'  // Append to body to avoid canvas issues
        });
    });
});

 

function dTable(divTable, url, columns, width = "400px", $emptyTableText = "", searching = true, sInfoDisplay = "<span class=''> _START_ to _END_ Items of _TOTAL_ </span>", _paging = false, LeftfixedColumns = 0, RightfixedColumns = 0) {
    var sInfoDisplay_ = sInfoDisplay || "<span class=''> _START_ to _END_ Items of _TOTAL_ </span>";

    // Initialize DataTable
    $(divTable).DataTable({
        stateSave: true,
        stateSaveCallback: function (settings, data) {
            try {
                localStorage.setItem('DataTables_' + settings.sInstance, JSON.stringify(data));
            } catch (e) {
                console.error("State save error: ", e);
            }
        },
        stateLoadCallback: function (settings) {
            try {
                return JSON.parse(localStorage.getItem('DataTables_' + settings.sInstance)) || {};
            } catch (e) {
                console.error("State load error: ", e);
                return {};
            }
        },
        scrollY: width,
        scrollX: true,
        searching: searching,
        destroy: true,
        paging: _paging,
        ajax: {
            url: url,
            dataSrc: "",
        },
        language: {
            emptyTable: $emptyTableText,
            sInfo: sInfoDisplay_,
            sInfoEmpty: sInfoDisplay_,
            paginate: {
                previous: '<button class="page-link btn-sm p-0 btn-no-hover fs-8" data-list-pagination="prev"><i class="fa fa-chevron-left"></i></button>',
                next: '<button class="page-link btn-sm p-0 btn-no-hover" data-list-pagination="next"><i class="fa fa-chevron-right"></i></button>',
            },
        },
        columns: columns,
        order: [[0, 'asc']],
        columnDefs: [
            { targets: '_all', className: "dt-center" },
            { targets: [0], width: "1%" },
        ],
        fixedColumns: {
            leftColumns: LeftfixedColumns,
            rightColumns: RightfixedColumns,
        },
        drawCallback: function (settings) {
            // Optimize by minimizing redundant DOM manipulations
            var table = $(settings.nTableWrapper);
            table.find('.paginate_button').addClass('btn mt-2 p-2');
            table.find('.current').addClass('btn-primary');
            table.find('.dataTables_length label').addClass(' mb-2');
            table.find('.dataTables_filter label').addClass('col-form-label-sm');
            table.find('.dataTables_filter input').addClass('form-control');

            // Initialize tooltips only once per draw
            table.find('[data-bs-toggle="tooltip"]').tooltip({ container: 'body', trigger: 'hover' });
        },
    });
}




    function getCSRFToken() {
        return $('meta[name="csrf-token"]').attr('content');
    }


    $(document).on('click','.loading',function (e) {
        hideLoading();
    });


    $(document).on('keypress', 'input', function(e) {
            // Get the character code of the pressed key
            let char = String.fromCharCode(e.which);

            // Check if the character is ' or ,
            if (char === "'" || char === "," || char === "ñ" || char === "Ñ")  {
               e.preventDefault();
            }
    });

    $(document).on('click','.itinerary-notification-btn',function (e) {
        
             $.ajax({
                url:"/submit_update_status_notification", 
                type:'GET',
                headers: {
                        'X-CSRF-TOKEN': getCsrfToken() 
                },
                beforeSend: function() {
                
                  
                },
                success:function(data){
                    console.log(data);
                    showItineraryNotification()
                                   
                },
                error:function(data){
                   
                }
                });

    });

   

</script>

<script> 

// showLoading();

// setInterval(hideLoading(), 2000); 

function showItineraryNotification() {

    $.ajax({
        url: '/itinerary_notification_display',
        dataType: 'json',
        beforeSend: function() {
            // Add any code you need to run before the request is sent
        },
        success: function(data) {
            var notif = '';
            var statusnum = data.n.statusnum.statusnum;
            var forapprovalcount = data.n.forapprovalcount
            for (var i = 0; i < data.n.notifications.length; i++) {
                var dat = data.n.notifications[i];
                if (dat) {
                    var desc = dat.desc || '';
                    var notifDisplay = dat.notifdisplay;
                    notif += notifDisplay;
                }
            }
            $('.for-approval-count-display').html(forapprovalcount);
            $('.itinerary-notification-display').html(notif);
            $('.itinerary-notification-total-display').html(statusnum);
        }
    });

}

var showNotif = showItineraryNotification();
setInterval(showItineraryNotification, 15000);

$(document).ready(function() {
    hideLoading();
    // oneChoices (".AddNewItemList")
    
    //CHECK SESSION EXPIRES USING LARAVE MIDDLEWARE---
    $(document).ajaxError(function (event, xhr) {
        if (xhr.status == 401) {
            alert("Session has expired. Please log in again.");
        }
    });
     //---CHECK SESSION EXPIRES USING LARAVE MIDDLEWARE

//END READY 

});




function checkSessionStatus() {
    // Send an AJAX request to check the session status
    $.get('/session-store-check', function(data) {
        if (data.sessionExpired) {
            // Session has expired, take some action (e.g., show a message)
            alert("Please log in again.");

            window.location.href = "{{ route('login_page') }}";
        }
    });
}

checkSessionStatus()

// Check session status every minute
setInterval(checkSessionStatus, 30000); 


</script>

@yield('scriptJS')



</body>

</html>
