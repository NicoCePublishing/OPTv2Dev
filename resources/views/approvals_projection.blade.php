@extends('layouts.admin_app')

@section('title') Approval Projection @endsection

@section('belowcontent')

  

  @section('menutitle')
  <div class="row d-none un-cl">
    <div class="col-md-6 order-1 d-flex align-items-center">
       <div class="px-2 border-end">
          <h4 class="mt-0 fw-bolder"></h4>
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


  @endsection

  @php
    $projdocnum = request('pid');
    $username = request('name');
    $fname = request('fname');
    $qprojectiondetails = projectionDetails($projdocnum,$username);
    $projectionpernr = $qprojectiondetails->PERNR;
    $cntapprover = $qprojectiondetails->CNTAPPROVER1;
    $approver1 = $qprojectiondetails->APPROVER1;
    $status = $qprojectiondetails->STATUS;
    $docdate = $qprojectiondetails->DOCDATE;
    $dateapprover1 = $qprojectiondetails->DATEAPPROVER1;
    $statusDisplay = $cntapprover == '1' ? status_display('approved','text') : status_display($status,'text');
    $docdateDisplay = $cntapprover == '1' ? $dateapprover1 : $docdate;

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
                            <span class="text-500"> Projection For RSM Approval  - </span> {{ $fname}}
                          
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
        <div class="col-md-8">
            <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                    Projection Period
                </span>
                <span class="input-group-text status_text_creation" style="background-color:white !important;" id="basic-addon1">
                    {{projection_period_display($projdocnum)}}
                </span>
        
    
            </div>
        
       
        </div>
        <div class="col-md-4 text-end">
            <div class="input-group d-flex justify-content-end">
                <span class="input-group-text" id="basic-addon1">
                    Status
                </span>
                <span class="input-group-text projperiodstatus text-primary" style="background-color:white !important;" id="basic-addon1">
                    {{-- @php echo $statusDisplay; @endphp --}}
                    
                    -
                </span>
                {{-- <span class="input-group-text" style="background-color:white !important;" id="basic-addon1">
                    {{ formatDate($docdateDisplay,'mdy') }}
                </span> --}}
                
             
    
            </div>
        
        </div>
    </div>
  
    {{-- <hr class="mb-0">  --}}
  
        
      <div class="row g-1 mt-2 flex-between-end mb-2">
          <!-- <div class="col-auto">
                      <h2 class="mb-2 text-1100">Create Budget</h2>
                  </div> -->
          <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center"><span class="fa-stack" style="min-height: 46px;min-width: 46px;"><svg class="svg-inline--fa fa-square fa-stack-2x text-warning-300" data-fa-transform="down-4 rotate--10 left-4" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.1875em 0.75em;"><g transform="translate(224 256)"><g transform="translate(-128, 128)  scale(1, 1)  rotate(-10 0 0)"><path fill="currentColor" d="M0 96C0 60.65 28.65 32 64 32H384C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96z" transform="translate(-224 -256)"></path></g></g></svg><!-- <span class="fa-solid fa-square fa-stack-2x text-warning-300" data-fa-transform="down-4 rotate--10 left-4"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-circle fa-stack-2x stack-circle text-warning-100" data-fa-transform="up-4 right-3 grow-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.6875em 0.25em;"><g transform="translate(256 256)"><g transform="translate(96, -128)  scale(1.125, 1.125)  rotate(0 0 0)"><path fill="currentColor" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="fa-solid fa-circle fa-stack-2x stack-circle text-warning-100" data-fa-transform="up-4 right-3 grow-2"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-peso-sign fa-stack-1x text-warning" data-fa-transform="shrink-2 up-8 right-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="peso-sign" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="" style="transform-origin: 0.75em 0em;"><g transform="translate(192 256)"><g transform="translate(192, -256)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M176 32C244.4 32 303.7 71.01 332.8 128H352C369.7 128 384 142.3 384 160C384 177.7 369.7 192 352 192H351.3C351.8 197.3 352 202.6 352 208C352 213.4 351.8 218.7 351.3 224H352C369.7 224 384 238.3 384 256C384 273.7 369.7 288 352 288H332.8C303.7 344.1 244.4 384 176 384H96V448C96 465.7 81.67 480 64 480C46.33 480 32 465.7 32 448V288C14.33 288 0 273.7 0 256C0 238.3 14.33 224 32 224V192C14.33 192 0 177.7 0 160C0 142.3 14.33 128 32 128V64C32 46.33 46.33 32 64 32H176zM254.4 128C234.2 108.2 206.5 96 176 96H96V128H254.4zM96 192V224H286.9C287.6 218.8 288 213.4 288 208C288 202.6 287.6 197.2 286.9 192H96zM254.4 288H96V320H176C206.5 320 234.2 307.8 254.4 288z" transform="translate(-192 -256)"></path></g></g></svg><!-- <span class="fa-stack-1x fa-solid fa-peso-sign text-warning " data-fa-transform="shrink-2 up-8 right-6"></span> Font Awesome fontawesome.com --></span>
                <div class="ms-3">
                    <h4 class="mb-0">
                        <div class="text-warning" id="bty"> <span class="thisprjtnperid_totaldisplay">-</span></div>
                    </h4>
                    <h5 class="mb-0">
                        {{-- <div class="text-600"><span class="thisprjtnperid_projtntotal_display">-</span></div> --}}
                    </h5>
                    <p class="text-800 fs--1 mb-0">This Projtn Period</p>
                </div>
            </div>
          </div>
          <div class="col-12 col-md-auto">
              <div class="d-flex align-items-center"><span class="fa-stack" style="min-height: 46px;min-width: 46px;"><svg class="svg-inline--fa fa-square fa-stack-2x text-danger-300" data-fa-transform="down-4 rotate--10 left-4" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.1875em 0.75em;"><g transform="translate(224 256)"><g transform="translate(-128, 128)  scale(1, 1)  rotate(-10 0 0)"><path fill="currentColor" d="M0 96C0 60.65 28.65 32 64 32H384C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96z" transform="translate(-224 -256)"></path></g></g></svg><!-- <span class="fa-solid fa-square fa-stack-2x text-danger-300" data-fa-transform="down-4 rotate--10 left-4"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-circle fa-stack-2x stack-circle text-danger-100" data-fa-transform="up-4 right-3 grow-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.6875em 0.25em;"><g transform="translate(256 256)"><g transform="translate(96, -128)  scale(1.125, 1.125)  rotate(0 0 0)"><path fill="currentColor" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="fa-solid fa-circle fa-stack-2x stack-circle text-danger-100" data-fa-transform="up-4 right-3 grow-2"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-peso-sign fa-stack-1x text-danger" data-fa-transform="shrink-2 up-8 right-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="peso-sign" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="" style="transform-origin: 0.75em 0em;"><g transform="translate(192 256)"><g transform="translate(192, -256)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M176 32C244.4 32 303.7 71.01 332.8 128H352C369.7 128 384 142.3 384 160C384 177.7 369.7 192 352 192H351.3C351.8 197.3 352 202.6 352 208C352 213.4 351.8 218.7 351.3 224H352C369.7 224 384 238.3 384 256C384 273.7 369.7 288 352 288H332.8C303.7 344.1 244.4 384 176 384H96V448C96 465.7 81.67 480 64 480C46.33 480 32 465.7 32 448V288C14.33 288 0 273.7 0 256C0 238.3 14.33 224 32 224V192C14.33 192 0 177.7 0 160C0 142.3 14.33 128 32 128V64C32 46.33 46.33 32 64 32H176zM254.4 128C234.2 108.2 206.5 96 176 96H96V128H254.4zM96 192V224H286.9C287.6 218.8 288 213.4 288 208C288 202.6 287.6 197.2 286.9 192H96zM254.4 288H96V320H176C206.5 320 234.2 307.8 254.4 288z" transform="translate(-192 -256)"></path></g></g></svg><!-- <span class="fa-stack-1x fa-solid fa-peso-sign text-danger " data-fa-transform="shrink-2 up-8 right-6"></span> Font Awesome fontawesome.com --></span>
                  <div class="ms-3">
                      <h4 class="mb-0">
                          <div class="text-danger" id="sly"> <span class="ytdsales_totaldisplay">-</span></div>
                      </h4>
                      <h5 class="mb-0">
                          {{-- <div class="text-600"><span class="thisprjtnperid_projtntotal_display">-</span></div> --}}
                      </h5>
                      <p class=" text-800 fs--1 mb-0">YTD Sales</p>
                  </div>
              </div>
          </div>
          <div class="col-12 col-md-auto">
              <div class="d-flex align-items-center"><span class="fa-stack" style="min-height: 46px;min-width: 46px;"><svg class="svg-inline--fa fa-square fa-stack-2x text-primary-300" data-fa-transform="down-4 rotate--10 left-4" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.1875em 0.75em;"><g transform="translate(224 256)"><g transform="translate(-128, 128)  scale(1, 1)  rotate(-10 0 0)"><path fill="currentColor" d="M0 96C0 60.65 28.65 32 64 32H384C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96z" transform="translate(-224 -256)"></path></g></g></svg><!-- <span class="fa-solid fa-square fa-stack-2x text-primary-300" data-fa-transform="down-4 rotate--10 left-4"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-circle fa-stack-2x stack-circle text-primary-100" data-fa-transform="up-4 right-3 grow-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.6875em 0.25em;"><g transform="translate(256 256)"><g transform="translate(96, -128)  scale(1.125, 1.125)  rotate(0 0 0)"><path fill="currentColor" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256z" transform="translate(-256 -256)"></path></g></g></svg><!-- <span class="fa-solid fa-circle fa-stack-2x stack-circle text-primary-100" data-fa-transform="up-4 right-3 grow-2"></span> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-peso-sign fa-stack-1x text-primary" data-fa-transform="shrink-2 up-8 right-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="peso-sign" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="" style="transform-origin: 0.75em 0em;"><g transform="translate(192 256)"><g transform="translate(192, -256)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M176 32C244.4 32 303.7 71.01 332.8 128H352C369.7 128 384 142.3 384 160C384 177.7 369.7 192 352 192H351.3C351.8 197.3 352 202.6 352 208C352 213.4 351.8 218.7 351.3 224H352C369.7 224 384 238.3 384 256C384 273.7 369.7 288 352 288H332.8C303.7 344.1 244.4 384 176 384H96V448C96 465.7 81.67 480 64 480C46.33 480 32 465.7 32 448V288C14.33 288 0 273.7 0 256C0 238.3 14.33 224 32 224V192C14.33 192 0 177.7 0 160C0 142.3 14.33 128 32 128V64C32 46.33 46.33 32 64 32H176zM254.4 128C234.2 108.2 206.5 96 176 96H96V128H254.4zM96 192V224H286.9C287.6 218.8 288 213.4 288 208C288 202.6 287.6 197.2 286.9 192H96zM254.4 288H96V320H176C206.5 320 234.2 307.8 254.4 288z" transform="translate(-192 -256)"></path></g></g></svg><!-- <span class="fa-stack-1x fa-solid fa-peso-sign text-primary " data-fa-transform="shrink-2 up-8 right-6"></span> Font Awesome fontawesome.com --></span>
                  <div class="ms-3">
                      <h4 class="mb-0">
                          <div class="text-primary" id="bly"> <span class="tybudget_totaldisplay">-</span></div>
                      </h4>
                      <h5 class="mb-0">
                          {{-- <div class="text-600"><span class="thisprjtnperid_projtntotal_display">-</span></div> --}}
                      </h5>
                      <p class="text-800 fs--1 mb-0">TY Budget</p>
                  </div>
              </div>
          </div>
          <div class="col-12 col-md-auto">
              <div class="d-flex align-items-center"><span class="fa-stack" style="min-height: 46px;min-width: 46px;">
                  <svg class="svg-inline--fa fa-square fa-stack-2x text-success-300" data-fa-transform="down-4 rotate--10 left-4" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.1875em 0.75em;"><g transform="translate(224 256)"><g transform="translate(-128, 128)  scale(1, 1)  rotate(-10 0 0)"><path fill="currentColor" d="M0 96C0 60.65 28.65 32 64 32H384C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96z" transform="translate(-224 -256)"></path></g></g></svg>
                  <svg class="svg-inline--fa fa-circle fa-stack-2x stack-circle text-success-100" data-fa-transform="up-4 right-3 grow-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.6875em 0.25em;"><g transform="translate(256 256)"><g transform="translate(96, -128)  scale(1.125, 1.125)  rotate(0 0 0)"><path fill="currentColor" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256z" transform="translate(-256 -256)"></path></g></g></svg>
                  <svg class="svg-inline--fa fa-peso-sign fa-stack-1x text-success" data-fa-transform="shrink-2 up-8 right-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="peso-sign" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="" style="transform-origin: 0.75em 0em;"><g transform="translate(192 256)"><g transform="translate(192, -256)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M176 32C244.4 32 303.7 71.01 332.8 128H352C369.7 128 384 142.3 384 160C384 177.7 369.7 192 352 192H351.3C351.8 197.3 352 202.6 352 208C352 213.4 351.8 218.7 351.3 224H352C369.7 224 384 238.3 384 256C384 273.7 369.7 288 352 288H332.8C303.7 344.1 244.4 384 176 384H96V448C96 465.7 81.67 480 64 480C46.33 480 32 465.7 32 448V288C14.33 288 0 273.7 0 256C0 238.3 14.33 224 32 224V192C14.33 192 0 177.7 0 160C0 142.3 14.33 128 32 128V64C32 46.33 46.33 32 64 32H176zM254.4 128C234.2 108.2 206.5 96 176 96H96V128H254.4zM96 192V224H286.9C287.6 218.8 288 213.4 288 208C288 202.6 287.6 197.2 286.9 192H96zM254.4 288H96V320H176C206.5 320 234.2 307.8 254.4 288z" transform="translate(-192 -256)"></path></g></g></svg><!-- <span class="fa-stack-1x fa-solid fa-peso-sign text-success " data-fa-transform="shrink-2 up-8 right-6"></span> Font Awesome fontawesome.com --></span>
                  <div class="ms-3">
                      <h4 class="mb-0">
                          <div class="text-success" id="aly"> <span class="ytdprojtn_totaldisplay">-</span></div>
                      </h4>
                      <h5 class="mb-0">
                          {{-- <div class="text-600"><span class="thisprjtnperid_projtntotal_display">-</span></div> --}}
                      </h5>
                      <p title="Approved" class="text-800 fs--1 mb-0">YTD Projection</p>
                  </div>
              </div>
          </div>
          <div class="col-12 col-md-auto">
              <div class="d-flex align-items-center"><span class="fa-stack" style="min-height: 46px;min-width: 46px;">
                  <svg class="svg-inline--fa fa-square fa-stack-2x text-primary-200" data-fa-transform="down-4 rotate--10 left-4" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.1875em 0.75em;"><g transform="translate(224 256)"><g transform="translate(-128, 128)  scale(1, 1)  rotate(-10 0 0)"><path fill="currentColor" d="M0 96C0 60.65 28.65 32 64 32H384C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96z" transform="translate(-224 -256)"></path></g></g></svg>
                  <svg class="svg-inline--fa fa-circle fa-stack-2x stack-circle text-primary-100" data-fa-transform="up-4 right-3 grow-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.6875em 0.25em;"><g transform="translate(256 256)"><g transform="translate(96, -128)  scale(1.125, 1.125)  rotate(0 0 0)"><path fill="currentColor" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256z" transform="translate(-256 -256)"></path></g></g></svg>
                  <svg class="svg-inline--fa fa-peso-sign fa-stack-1x text-primary-300" data-fa-transform="shrink-2 up-8 right-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="peso-sign" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="" style="transform-origin: 0.75em 0em;"><g transform="translate(192 256)"><g transform="translate(192, -256)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M176 32C244.4 32 303.7 71.01 332.8 128H352C369.7 128 384 142.3 384 160C384 177.7 369.7 192 352 192H351.3C351.8 197.3 352 202.6 352 208C352 213.4 351.8 218.7 351.3 224H352C369.7 224 384 238.3 384 256C384 273.7 369.7 288 352 288H332.8C303.7 344.1 244.4 384 176 384H96V448C96 465.7 81.67 480 64 480C46.33 480 32 465.7 32 448V288C14.33 288 0 273.7 0 256C0 238.3 14.33 224 32 224V192C14.33 192 0 177.7 0 160C0 142.3 14.33 128 32 128V64C32 46.33 46.33 32 64 32H176zM254.4 128C234.2 108.2 206.5 96 176 96H96V128H254.4zM96 192V224H286.9C287.6 218.8 288 213.4 288 208C288 202.6 287.6 197.2 286.9 192H96zM254.4 288H96V320H176C206.5 320 234.2 307.8 254.4 288z" transform="translate(-192 -256)"></path></g></g></svg><!-- <span class="fa-stack-1x fa-solid fa-peso-sign text-primary-300 " data-fa-transform="shrink-2 up-8 right-6"></span> Font Awesome fontawesome.com --></span>
                  <div class="ms-3">
                      <h4 class="mb-0">
                          <div class="text-primary-300" id="ably"> <span class="lysales_totaldisplay">-</span>
                          <input type="text" class="lysales_totalval text-primary-300 d-none un-cl" readonly="readonly" hidden id="ably"> 
                          </div>
                      </h4>
                      <h5 class="mb-0">
                          {{-- <div class="text-600"><span class="thisprjtnperid_projtntotal_display">-</span></div> --}}
                      </h5>
                      <p class="text-800 fs--1 mb-0">LY Sales</p>
                  </div>
              </div>
          </div>
          <div class="col-12 col-md-auto">
              <div class="d-flex align-items-center"><span class="fa-stack" style="min-height: 46px;min-width: 46px;">
                  {{-- <i class="fa fa-square fa-stack-2x text-400" data-fa-transform="down-4 rotate--10 left-4"></i>
                  <i class="fa fa-circle fa-stack-2x stack-circle text-400" data-fa-transform="up-4 right-3 grow-2" ></i>
                  <i class="fa fa-peso-sign fa-stack-1x text-200" data-fa-transform="shrink-2 up-8 right-6"></i> --}}
                  <svg class="svg-inline--fa fa-square fa-stack-2x text-500" data-fa-transform="down-4 rotate--10 left-4" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="" style="transform-origin: 0.1875em 0.75em;"><g transform="translate(224 256)"><g transform="translate(-128, 128)  scale(1, 1)  rotate(-10 0 0)"><path fill="currentColor" d="M0 96C0 60.65 28.65 32 64 32H384C419.3 32 448 60.65 448 96V416C448 451.3 419.3 480 384 480H64C28.65 480 0 451.3 0 416V96z" transform="translate(-224 -256)"></path></g></g></svg>
                  <svg class="svg-inline--fa fa-circle fa-stack-2x stack-circle text-500" data-fa-transform="up-4 right-3 grow-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="" style="transform-origin: 0.6875em 0.25em;"><g transform="translate(256 256)"><g transform="translate(96, -128)  scale(1.125, 1.125)  rotate(0 0 0)"><path fill="currentColor" d="M512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256z" transform="translate(-256 -256)"></path></g></g></svg>
                  <svg class="svg-inline--fa fa-peso-sign fa-stack-1x text-200" data-fa-transform="shrink-2 up-8 right-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="peso-sign" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="" style="transform-origin: 0.75em 0em;"><g transform="translate(192 256)"><g transform="translate(192, -256)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M176 32C244.4 32 303.7 71.01 332.8 128H352C369.7 128 384 142.3 384 160C384 177.7 369.7 192 352 192H351.3C351.8 197.3 352 202.6 352 208C352 213.4 351.8 218.7 351.3 224H352C369.7 224 384 238.3 384 256C384 273.7 369.7 288 352 288H332.8C303.7 344.1 244.4 384 176 384H96V448C96 465.7 81.67 480 64 480C46.33 480 32 465.7 32 448V288C14.33 288 0 273.7 0 256C0 238.3 14.33 224 32 224V192C14.33 192 0 177.7 0 160C0 142.3 14.33 128 32 128V64C32 46.33 46.33 32 64 32H176zM254.4 128C234.2 108.2 206.5 96 176 96H96V128H254.4zM96 192V224H286.9C287.6 218.8 288 213.4 288 208C288 202.6 287.6 197.2 286.9 192H96zM254.4 288H96V320H176C206.5 320 234.2 307.8 254.4 288z" transform="translate(-192 -256)"></path></g></g></svg><!-- <span class="fa-stack-1x fa-solid fa-peso-sign text-primary-300 " data-fa-transform="shrink-2 up-8 right-6"></span> Font Awesome fontawesome.com --></span>
                  <div class="ms-3">
                      <h4 class="mb-0">
                          <div class="text-600" id="ably"> <span class="projtnbudget_totaldisplay">-</span></div>
                      </h4>
                      <h5 class="mb-0">
                          {{-- <div class="text-600"><span class="thisprjtnperid_projtntotal_display">-</span></div> --}}
                      </h5>
                      <p class="text-800 fs--1 mb-0">Projtn Over Budget</p>
                  </div>
              </div>
          </div>
          
      </div>
  </div>

<div class="for_approval_projection_card row mb-2">
        <div class="col-12 col-md-12 col-xxl-12 text-left">
            

            <div class="card border-0 p-2" >  
                <div class="" style="height:60vh; max-height:350vh;min-width:70vh;overflow-y:auto;overflow-x:hidden;">              
                    <div class="ms-n1 ps-1 scrollbar">

                        <table id="for-approval-projection-customer-list-table" class="fs--1 table  table-responsive text-center">
                            <thead class="border border-1 sticky-top">
                                <tr role="row">
                                    <th colspan="2" class="bg-white text-center" rowspan="1">&nbsp</th>
                                    
                                    <th colspan="3" class="bg-white border-end text-center" rowspan="1">Projection</th>
                                    <th colspan="0" class="bg-white  text-center" rowspan="1">&nbsp</th>
                                    <th colspan="3" class="bg-white  text-center" rowspan="1">Sales History</th>
                                
                                </tr>
                                <tr>
                                    <th scope="col" class="text-center" width="5%">#</th>
                                    <th scope="col" class="text-center" width="40%">Customer / Titles </th>
                                    
                                    <th scope="col" class="text-center" width="7%">Amount</th>
                                    {{-- <th scope="col" class="text-center" width="7%"># of </br> Titles</th> --}}
                                    <th scope="col" class="text-center" width="7%">Projtn</th>
                                    <th scope="col" class="text-center" title="This year approved projections" width="7%">This </br> Year</th>
                                    <th scope="col" class="text-center" width="7%">Budget</th>
                                    <th scope="col" class="text-center" width="5%">{{ getPreviousYear(1) }} </th>
                                    <th scope="col" class="text-center" width="5%">{{ getPreviousYear(2) }} </th>
                                    <th scope="col" class="px-1 text-center" width="5%">{{ getPreviousYear(3) }} </th>
                                    <th scope="col" class="text-center" width="3%">
                                        <div class="d-flex ">
                                            <input class="form-check-input for_approval_checkallcustomerisbn" type="checkbox" value="">
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
                                
                                <button type="button" data-bs-toggle="modal" data-bs-target="#ReturnProjectionModal" class="btn btn-danger btn-sm btn-return returnprojtnmodalbtn">Return</button>
                                <button type="button" class="btn btn-success btn-sm btn-approve">Approve</button>
                            </div>
                        </div>
                
                 </div>
            </div>
            
        </div>

</div>
    
  </div>

 

  <div class="input-group mt-0 d-none un-cl w-75 pt-3 mt-3">
    <form class="submit_approve_projection d-none sb-form un-cl" readonly="readonly" method="POST">
        @csrf


        <button type="submit" class="submit-approve-projection-btn"></button>
    </form>
</div>


<div class="modal" id="ReturnProjectionModal"  tabindex="-1" aria-labelledby="addDealModal" aria-modal="true" role="dialog">
    <div class="modal-dialog modal modal-dialog-centered">
    <div class="modal-content bg-100">

       <form class="submit_return_projection" method="POST">
        @csrf
        <div class="modal-header">
          <input type="text" class="form-control " value="" name="" hidden readonly="readonly">
          <h5 class="modal-title" id="">Return Projection  <span class="projectioniddispla">  </span></h5>
          {{-- <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-xmark fs--1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"></path></svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com --></button> --}}
        </div>
        <div class="modal-body">
          {{-- <h2 class="mb-2 lh-sm calendar-title"></h2> --}}
          <div class=""> 
            
    
          <div class="">
             <div class="mb-1 text-start">
                <label class="form-label">Reason of Return?</label>
                <textarea class="form-control return_projection_reason" maxlength="254" name="return_projection_reason" placeholder="Brief Description..." style="height: 100px" required></textarea>
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

 
<div class="offcanvas offcanvas-end content-offcanvas border offcanvas-backdrop-transparent border-start border-300 shadow-none bg-100" style="width:60rem !important;" id="MyForApprovalProjectionISBNListOffCanvas" tabindex="-1" aria-labelledby="offcanvasLeftLabel">
    <div class="offcanvas-header pb-0">
       <h5 id="offcanvasLeftLabel">
            <span class="fw-bold text-900 approvals_isbnlist_customername"> - 
                
                
            </span><span class="isbnlist_customer_bsastatus"></span>
                </br>
                    <span class="fw-bold text-600 approvals_isbnlist_customercode">- </span>    
                    <input class="d-none un-cl form-control approvals_isbnlist_docnum_val" readonly="readonly">
                    <input class="d-none un-cl form-control approvals_isbnlist_customercode_val" readonly="readonly">
                    <input class="d-none un-cl form-control approvals_isbnlist_customername_val" readonly="readonly">
           

       </h5>
       {{-- <button class="btn btn-sm btn-phoenix-secondary" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa fa-xmark text-danger"></i></button> --}}
       <button class="btn d-none btn-sm btn-primary" data-bs-dismiss="offcanvas" aria-label="Close">Save</button>
      
    </div>
    <hr>
    <div class="offcanvas-body p-0">
     
        @php
              //select type only
                    $activeWarehouses = activeWarehouses();
                    $activeBranches = activeBranches();
                    
                    $ab = '';
                    $aw = '';
                
            //------
        @endphp

        <div class="card">
              <div class="" style="height:70vh; max-height:350vh;min-width:70vh;overflow-y:auto;overflow-x:hidden;">
                    <table class="fs--1 table  table-responsive table-striped table-responsive text-center isbntable" style="position: relative;">
                        <thead class="sticky-top">
                          
                            <tr class="border">      
                                <th scope="col" class="text-center" width="12%">ISBN </th>
                                <th scope="col" class="text-center" width="21%">Title </th>
                                <th scope="col" class="text-center" width="7%">Amount </th>
                                <th scope="col" class="text-center" width="7%">Unit </br> Price </th>
                                <th scope="col" class="text-center" width="11%" title="Population">Popup.</th>
                                <th scope="col" class="text-center" width="11%">Projtn</th>
                                <th scope="col" class="text-center" width="11%">Approve </br> Qty</th>
                                <th scope="col" class="text-center" width="8%">Budget</th>
                        
                                <th scope="col" class="text-center" width="5%">{{ getPreviousYear(1) }} </th>
                                <th scope="col" class="text-center" width="5%">{{ getPreviousYear(2) }} </th>
                                <th scope="col" class="px-1 text-center" width="5%">{{ getPreviousYear(3) }} </th>
                                <th scope="col" class="text-center px-2" title="Include to approval" width="%">
                                    Action
                                    <div class="d-none">
                                        Approve

                                        <div class="form-check d-flex justify-content-center">
                                            <input class="form-check-input for_approval_checkallcustomerisbn" id="flexCheckChecked" type="checkbox" value="">
                                        </div>
                                    </div>

                                </th>
                            </tr>
                        </thead>
                            

                        <tbody class="border">     

                        </tbody>

                    </table>
                </div>

        </div>
        
    </div>
 </div>




@endsection

@section('scriptJS')


<script>



// function isbnappendISBNTableNotInEditTableandProjectiond(docnum) {

//     $(".forapprovalprojectionrow").each(function () {
//         var row = $(this);

//         // check if this row belongs to the clicked customer
//         var rowDcnum = (row.find(".for_approval_projection_isbn_docnum").val() || "").trim();
//         if (rowDcnum !== String(docnum).trim()) return true; // continue loop

//         // get isbn and skip if empty
//         var isbn = (row.find(".for_approval_projection_isbn").val() || "").trim();
//         if (!isbn) return true; // continue loop

//         // skip if already present
        
//         // collect other fields
//         var unitpClean   = (row.find(".for_approval_projection_isbn_unitp").val() || "").trim();
//         var unitpDisplay = numberFormat(unitpClean);
//         var approve            = (row.find(".for_approval_projection_isbn_approve").val() || "").trim();
//         var isbn            = (row.find(".for_approval_projection_isbn").val() || "").trim();
//         var rsmqty            = (row.find(".for_approval_projection_rsm_qty").val() || "").trim();
//         var population        = (row.find(".for_approval_projection_population_qty").val() || "").trim();
//         var projection        = (row.find(".for_approval_projection_projtn_qty").val() || "").trim();
//         var linetotal    = numberFormat((parseInt(rsmqty || 0, 10)) * (parseInt(unitpClean || 0, 10)));

//             // 5) if exists → replace; else → append
//             var $existing = ISBNTablefindIsbnEditRow(docnum, isbn);

//             if ($existing.length) {

//                 // update lang values/texts dito, wag palitan buong row
//                 if(approve === '1') {
//                     $('.'+ docnum + isbn + 'editisbnrow' ).addClass('bg-success-100')
//                 }
//                 else {
//                     $('.'+ docnum + isbn + 'editisbnrow' ).removeClass('bg-success-100')
//                 }
            
//                 $existing.find(".for_approval_projection_edit_projtn_rsm_qty").val(rsmqty);
//                 $existing.find(".for_approval_projection_edit_projtn_qty").val(projection);
//                 $existing.find(".for_approval_projection_edit_population_qty").val(population);
//                 $existing.find(".for_approval_projection_edit_linetotal_amount_display").text(linetotal);

//             } 
//     });
// }


// helper: get the existing <tr> in .isbntable for a (customercode + isbn) pair
function ISBNTablefindIsbnEditRow(docnum, isbn) {
    return $(".isbntable tbody tr").filter(function () {
        var $tr = $(this);
        var dcnum = ($tr.find(".for_approval_projection_edit_isbn_docnum").val() || "").trim();
        var code = ($tr.find(".for_approval_projection_edit_isbn_customercode").val() || "").trim();
        var vIsbn = ($tr.find(".for_approval_projection_edit_isbn").val() || "").trim();
        return dcnum === String(docnum).trim() && vIsbn === String(isbn).trim();
    }).first();
}


function customerISBNListDisplay (basedocnum,username,docnum) {

    
    var forapprovalisbnclass = 'isbntable tbody tr';

    $.ajax({
                url:"/datatable_for_approval_projection_customer_isbn_list?basedocnum="+basedocnum+"&name="+username+"&docnum="+docnum, 
                type:'GET',
                headers: {
                        'X-CSRF-TOKEN': getCsrfToken() 
                },
                beforeSend: function() {

                    
                    if ($(forapprovalisbnclass).length <= 0) {
                        
                         showLoadingDiv('.isbntable');
                           $(forapprovalisbnclass).empty();
                    }

                    // showLoadingDiv('.for_approval_projection_card'),setTimeout( () => hideLoadingDiv('.for_approval_projection_card'),1000);

                        
                },
                success:function(data){
                    // console.log(data);
                    var cisbnli = data.customerisbnlist;
                    var cih = data.customerisbnsaleshistorylist;
                    var cib = data.customerisbnbudgetqty;
                    
                    hideLoadingDiv('.isbntable');

               

                    $('.isbntable tbody tr').remove()
                  
                    // if ($(forapprovalisbnclass).length <= 0) {
                    if (cisbnli && cisbnli.length > 0)  {

                        var bsastatus = cisbnli[0].bsastatus;
                        $('.isbnlist_customer_bsastatus').html(type_status_badge('nonbsa'))

                        if(bsastatus === 1) {
                            $('.isbnlist_customer_bsastatus').html(type_status_badge('bsa'))

                        }
                        
                        var aa = '';
                            
                                            
                        for(i=0;i<cisbnli.length;i++) {
                                var d = cisbnli[i]
                        

                                aa += d.tr

                                    
                        }
                            
                        $('.isbntable tbody').append(aa)

                        for(e=0;e<cih.length;e++){

                            var customercodecih = cih[e].customercode
                            var isbn = cih[e].isbn
                            var totalprev1 = cih[e].total_1
                            var totalprev2 = cih[e].total_2
                            var totalprev3 = cih[e].total_3
                            var total_1Value = cih[e].total_1Value

                            var classtotalprev_display1 = customercodecih + isbn +'totalprev1';
                            var classtotalprev_value1 = customercodecih + isbn +'totalprev1value';
                            var classtotalprev_display2 = customercodecih + isbn +'totalprev2';
                            var classtotalprev_display3 = customercodecih + isbn +'totalprev3';

                            $('.'+classtotalprev_value1).val(total_1Value);
                            $('.'+classtotalprev_display1).text(totalprev1);
                            $('.'+classtotalprev_display2).text(totalprev2);
                            $('.'+classtotalprev_display3).text(totalprev3);



                        }

                        
                        for(e=0;e<cib.length;e++){

                            var customercodecib = cib[e].customercode
                            var isbn = cib[e].isbn
                            var qty = cib[e].qty

                            var classtotalbudget = customercodecib + isbn +'totalbudget';

                            $('.'+classtotalbudget).text(qty);

                        }

                        
                        updateProjectionValues();  

                        // isbnappendISBNTableNotInEditTableandProjectiond(docnum);
                        

                    }
                    else {
                        
                        $('#MyForApprovalProjectionISBNListOffCanvas').offcanvas('hide')
                        for_approval_projection_customer_list_table(basedocnum,username)
                    }

                                         
                  
                },

                error:function(data){

                        hideLoadingDiv('.for_approval_projection_card');
                            sweetalert("","Please contact the administrator!", icon = 'error', timer = '5000', btn = false);
                }
            });

}
function updateProjectionValues(className = 1) {


var defaultProjectionQtyClass = $('.for_approval_projection_projtn_qty');

// if(className === 1) {

    defaultProjectionQtyClass.each( function() {

        var trClosest = $(this).closest('tr');
        var projectionQty = parseInt($(this).val()) || 0;
        var customercode = $(this).data('customercode');
        var docnum = trClosest.find('.for_approval_projection_isbn_docnum').val();
        var rsmqty = trClosest.find('.for_approval_projection_rsm_qty').val();
        var isbn = trClosest.find('.for_approval_projection_isbn').val();
        var title = trClosest.find('.for_approval_projection_isbn_title').val();
        var disc = trClosest.find('.for_approval_projection_isbn_disc').val();
        var populationqty = trClosest.find('.for_approval_projection_population_qty').val();
        var unitp = trClosest.find('.for_approval_projection_isbn_unitp').val();
        var lastyearsale = trClosest.find('.for_approval_projection_isbn_prev1_sales').val();

       
        var branchwhouse =  $('.'+ customercode + 'branchwhouse').val();
        var customerlinetotalvalue =  $('.'+ customercode + 'linetotal');
        // var projtntotalvalue =  $('.'+ customercode + 'projtn');
        var projtntotalvalue =  $(`.for_approval_projection_projtn_qty[data-customercode="${customercode}"]`);

        var unitpInt = parseInt(unitp) || 0;
        var populationqtyInt = parseInt(populationqty);
        var lastyearsaleInt = parseInt(lastyearsale);
        var projectionQty = parseInt($(this).val()) || 0;
        var lastyearsaleInt110 = lastyearsaleInt * 0.1;
        var lastyearsaleIntAllowed = lastyearsaleInt +  lastyearsaleInt110;
        var linetotal = projectionQty * unitpInt
        var linetotalDisplay = numberFormat(linetotal)
   

        var approve = $('.'+ docnum + isbn + 'approve').val();
        $('.'+ docnum + isbn + 'editrsmqty').val(rsmqty);

                    
        if(approve === '1') {
            // $('.'+ docnum + isbn + 'editisbnrow' ).addClass('bg-success-100')
            $('.'+ docnum + isbn + 'check' ).prop('checked',true)
        }
        else {
            // $('.'+ docnum + isbn + 'editisbnrow' ).removeClass('bg-success-100')
            $('.'+ docnum + isbn + 'check' ).prop('checked',false)
        }

//list totals
        var linetotaltext = $('.'+docnum + isbn +'linetotaltext');

        linetotaltext.text(linetotalDisplay);
        
        var doctotal = 0;
        var projtntotal = 0;

        customerlinetotalvalue.each(function () {
            var vlt = $(this).val();
            let numeric = parseFloat(vlt) || 0;
            doctotal += numeric;
        });

        projtntotalvalue.each(function () {
            var pjtnt = $(this).val();
            let numeric = parseFloat(pjtnt) || 0;
            projtntotal += numeric;
        });


        var doctotalDisplay = numberFormat(doctotal);
        var projtntotalDisplay = numberFormat( projtntotal);

        $('.'+ customercode + 'doctotalvalue').val(doctotal);
        $('.'+ customercode + 'doctotal').text(doctotalDisplay);
        $('.'+ customercode + 'projtntotal').text(projtntotalDisplay);
        $('.'+ customercode + 'projtntotalvalue').val(projtntotal);

        var customersdoctotal = 0;

        $('.customersdoctotalvalue').each( function(){
            var cdt = $(this).val();
            let numeric = parseFloat(cdt) || 0;
            customersdoctotal += numeric;
        });

        var customersdoctotalDisplay = numberFormat(customersdoctotal);

        $('.thisprjtnperid_totalvalue').val(customersdoctotal);
        // $('.thisprjtnperid_totaldisplay').text(customersdoctotalDisplay);


    //mini dashboard
        var projtntotalvalue = 0;
        
        $('.projtntotalvalue').each( function(){
            var prjt = $(this).val();
            let numeric = parseFloat(prjt) || 0;
            projtntotalvalue += numeric;
        });

        var thisprjtnperid_projtntotal_display = numberFormat(projtntotalvalue);

        $('.thisprjtnperid_projtntotal_display').text(thisprjtnperid_projtntotal_display);
    //-------------
//-------    
    

        
    })

// } else {

// }

}

function for_approval_projection_customer_list_table(projdocnum,username) {

$.ajax({
       url:"/datatable_for_approval_projection_customer_list?basedocnum="+projdocnum+"&username="+username, 
       type:'GET',
       headers: {
               'X-CSRF-TOKEN': getCsrfToken() 
       },
       beforeSend: function() {

        $('#for-approval-projection-customer-list-table tbody tr').empty()
        $('.submit_approve_projection tr').remove()
        // showLoadingDiv('.for_approval_projection_card'),setTimeout( () => hideLoadingDiv('.for_approval_projection_card'),1000);

            showLoadingDiv('.for_approval_projection_card');
            
       },
       success:function(data){
           console.log(data);
            var customerlist = data.customerlist;
            var cshlist = data.cshlist;
            var prjd = data.projectiond;
            var budgetlist = data.budgetlist;

            hideLoadingDiv('.for_approval_projection_card');
            
            if(customerlist[0].systemstatus == '2-2') {

                window.location.href = "{{ route('approvals') }}";

                var aa = `

                <tr>
                    <td colspan="99">No projection for approval </td>
                    </tr>
                
                `

                $('#for-approval-projection-customer-list-table tbody').append(aa)

           
            }

            else if(customerlist[0].systemstatus == '2-1') {

                var aa = '';
  
                for(i=0;i<customerlist.length;i++) {
                        var d = customerlist[i]
                        
                        var num = d.num;
                        var numtitles = d.numtitles;
                        var customername = d.customername;
                        var customercode = d.customercode;
                        var motheracct = d.motheracct;
                        var amount = d.amount;
                        var thisyearprojtn = d.thisyearprojtn;
                        var isbnTableList = d.isbnTableList;
                        var projection = d.projection;
                        var budget = d.budget;
                        var saleshistoryprev1 = d.saleshistoryprev1;
                        var saleshistoryprev2 = d.saleshistoryprev2;
                        var saleshistoryprev3 = d.saleshistoryprev3;
                        var checkcustomerisbn = d.checkcustomerisbn;
                        
                        var manualybgstriped = (num % 2 === 0) ? 'bg-100' : '';

                    
                        // alert(d.customername);

                        // <td>`+numtitles+`</td>

                        aa += `
                        <tr class="`+manualybgstriped+`">
                                <td scope="row" class="pb-0 text-center px-2 customernum ">
                                        `+num+`

                                        <input name="" value="`+customercode+`" hidden class="d-none un-cl selected_customercode">
                                </td>
                                <td scope="row" class="pb-0 text-start ">
                                    
                                        
                                            `+customername+` <span class="text-danger">`+numtitles+`</span>
                
                                </td>
                                
                                <td class="text-end">`+amount+`</td>
                 
                                
                                <td>`+projection+`</td>
                                <td>`+thisyearprojtn+`</td>
                                <td>`+budget+`</td>
                                
                                <td>
                                    `+saleshistoryprev1+`

                                </td>
                                <td>
                                   `+saleshistoryprev2+`

                                </td>
                                
                                <td>
                                    `+saleshistoryprev3+`

                                </td>
                                   <td>
                                    `+checkcustomerisbn+`

                                </td>
                        
                            </tr> 
                        `

                            
                }


                $('#for-approval-projection-customer-list-table tbody').append(aa)
                
                if (cshlist && cshlist.length > 0) {

                    for(c=0;c<cshlist.length;c++){

                    var customercode = cshlist[c].customercode
                    var totalprev1 = cshlist[c].total_1
                    var totalprev2 = cshlist[c].total_2
                    var totalprev3 = cshlist[c].total_3

                    var classtotalprev_display1 = customercode + 'totalprev1';
                    var classtotalprev_display2 = customercode + 'totalprev2';
                    var classtotalprev_display3 = customercode + 'totalprev3';

                    $('.'+classtotalprev_display1).text(totalprev1);
                    $('.'+classtotalprev_display2).text(totalprev2);
                    $('.'+classtotalprev_display3).text(totalprev3);



                    }

                }
            
                if (budgetlist && budgetlist.length > 0) {
                    for(d=0;d<budgetlist.length;d++){

                        var customercode = budgetlist[d].customercode
                        var budgetqty = budgetlist[d].budgetqty

                        var classtotalbudgetqty = customercode + 'budgetqty';

                        $('.'+classtotalbudgetqty).text(budgetqty);

                    }

                }
           

                   $('.forapprovalprojectionrow').remove();
                
              

            }

            else {

                sweetalert("","Please contact the administrator!", icon = 'error', timer = '5000', btn = false);

            }


            if (prjd && prjd.length > 0) {

                var iprjl = '';

                for(p=0;p<prjd.length;p++){

                    var docnum = prjd[p].docnum;
                    var customercode = prjd[p].customercode;
                    var branchwhouse =  prjd[p].branchwhouse          
                    var isbn =  prjd[p].isbn          
                    var title =  prjd[p].isbn_title    
                    var unitpInt =  prjd[p].isbn_unitp            
                    var disc =  prjd[p].disc          
                    var populationqtyInt =  prjd[p].population            
                    var projectionQty =  prjd[p].qty         
                    var linetotal =  prjd[p].linetotal   

                        iprjl += `
                    <tr class="input-group form-control forapprovalprojectionrow `+docnum+``+isbn+`forapprovalprojectionrow ">
                        <td>
                        
                                <input name="forapproval_projection_docnum[]" value="`+docnum+`" class="for_approval_projection_isbn_docnum">
                                <input name="forapproval_projection_isbn_approve[]" class="for_approval_projection_isbn_approve `+docnum+isbn+`approve `+docnum+`approvealldocnum">
                                <input name="forapproval_projection_customercode[]" value="`+customercode+`" class="for_approval_projection_isbn_customercode">
                                <input name="forapproval_projection_branchwhouse[]" value="`+branchwhouse+`" class="for_approval_projection_branchwhouse">
                                <input name="forapproval_projection_isbn[]" value="`+isbn+`" class="for_approval_projection_isbn">
                                <input name="forapproval_projection_isbn_title[]" value="`+title+`" class="for_approval_projection_isbn_title">
                                <input name="forapproval_projection_isbn_unitp[]" value="`+unitpInt+`" class="for_approval_projection_isbn_unitp">
                                <input name="forapproval_projection_isbn_disc[]" value="`+disc+`" class="for_approval_projection_isbn_disc">
                                <input name="forapproval_projection_isbn_population[]" value="`+populationqtyInt+`" class="for_approval_projection_population_qty">
                                <input name="forapproval_projection_isbn_qty[]" value="`+projectionQty+`" class="for_approval_projection_projtn_qty" data-customercode="`+customercode+`">
                                <input name="forapproval_projection_isbn_rsm_qty[]" value="`+projectionQty+`" class="for_approval_projection_rsm_qty `+customercode+isbn+`rsmqty `+docnum+isbn+`rsmqty" data-customercode="`+customercode+`">
                                <input name="forapproval_projection_isbn_ssm_qty[]" value="0" class="for_approval_projection_ssm_qty" data-customercode="`+customercode+`">
                                <input name="forapproval_projection_isbn_linetotal[]" value="`+linetotal+`" class="for_approval_projection_isbn_linetotal `+customercode+`linetotal `+customercode+isbn+`linetotal `+docnum+isbn+`linetotal">

                        </td>
                    </tr>
                    `
                }       

                $('.submit_approve_projection').append(iprjl);

                updateProjectionValues();

            }
          
           
       },

        error:function(data){

                  hideLoadingDiv('.for_approval_projection_card');
                    sweetalert("","Please contact the administrator!", icon = 'error', timer = '5000', btn = false);
        }
    });


}

var projdocnum = "{{ $projdocnum }}";
var projectionpernr = "{{ $projectionpernr }}";
var projectionusername = "{{ $username }}";


$(document).ready(function(){


    
    get_minidashboard_pernr (projectionpernr,projdocnum,projectionusername);

    for_approval_projection_customer_list_table(projdocnum,projectionusername)

        // var myForApprovalListable = $("#approvals-list-table");
        // var myForApprovalListableURL =  "/datatable_my_for_approval_list_table?";
        // var myForApprovalListableColumns = [
        //         { "data": "num" },
        //         { "data": "approvaltype" },
        //         { "data": "name" },
        //         { "data": "requestedto" },
        //         { "data": "reference" },
        //         { "data": "datesubmit" },
        //         { "data": "tat" },
        //         { "data": "action" },   
        // ];

        // dTable(myForApprovalListable, myForApprovalListableURL, myForApprovalListableColumns, 300,"",true,'',true,0,0);


                
$(document).on('click','.forapproval_return_isbn',function (e) {

    
    var id = $(this).data('id')
    var docnum = $(this).data('docnum')
    var isbn = $(this).data('isbn')
    var titled = $(this).data('title')
    var customercode = $(this).data('customercode')

    swal({
            title: titled,
            text: "Are you sure you want to return?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
    })
    .then((willCancel) => {

        
        if (willCancel) {

            $.ajax({
                        url:"/return_projection_isbn", 
                        data: {
                            id : id,
                            docnum : docnum,
                            return_projection_reason : '',
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
                            var data = data[0];
                            hideLoading();
         
                            var docnum = $('.approvals_isbnlist_docnum_val').val();
                            
                            //    var data = data[0];
                            
                            if(data.status == '2') {
    
                                    //  sweetalert("","Status Updated!", icon = 'success', timer = '1000', btn = false);
                                    
                                    var html = "" 
                                    + "<span class='text-success fw-bold'>Returned to AE</span>"
                                    + "";

                                    toastifyShow(html)  

                                    // for_approval_projection_customer_list_table(projdocnum,projectionusername)
                                    customerISBNListDisplay (projdocnum,projectionusername,docnum) 
                                    updateProjectionValues();  

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

$(document).on('click','.forapproval_approve_isbn',function (e) {

    var id = $(this).data('id')
    var docnum = $(this).data('docnum')
    var isbn = $(this).data('isbn')
    var titled = $(this).data('title')
    var customercode = $(this).data('customercode')
    var approveQty = $(this).closest("tr").find('.for_approval_projection_edit_projtn_rsm_qty').val()
    var unitp = $(this).closest("tr").find('.for_approval_projction_edit_isbn_unitp').val()

    swal({
            title: titled,
            text: "Are you sure you want to approve this item?",
            icon: "info",
            buttons: true,
            dangerMode: true,
    })
    .then((willCancel) => {

        
        if (willCancel) {
            
                $.ajax({
                        url:"/approve_projection_isbn", 
                        data: {
                            id : id,
                            docnum : docnum,
                            approveQty : approveQty,
                            unitp : unitp,
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
         
                            var docnum = $('.approvals_isbnlist_docnum_val').val();
                            
                            //    var data = data[0];
                            
                            if(data.status == '2') {
    
                                    //  sweetalert("","Status Updated!", icon = 'success', timer = '1000', btn = false);
                                    
                                    var html = "" 
                                    + "<span class='text-success fw-bold'>Approved!</span>"
                                    + "";

                                    toastifyShow(html)  
                                  
                                    customerISBNListDisplay (projdocnum,projectionusername,docnum) 

                                    updateProjectionValues();  

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

$(document).on('click','.for_approval_checkallcustomerisbn',function (e) {

   
    var editcustomerisbncheck= $('.for_approval_projection_edit_customerisbn_approve_check') 
 

    if($(this).is(':checked')){

        var v = '1';

        editcustomerisbncheck.prop('checked',true)

    }
    else {
        var v = '0';
        editcustomerisbncheck.prop('checked',false)

    }

    $('.for_approval_projection_isbn_approve').val(v)

});

$(document).on('click','.for_approval_checkallisbn',function (e) {

    
    var editisbnrow = $('.for_approval_projection_edit_isbn_row')
    var editisbncheck= $('.for_approval_projection_edit_isbn_approve_check')
    var docnum = $('.approvals_isbnlist_docnum_val').val();

    if($(this).is(':checked')){

        var v = '1';
   
        editisbncheck.prop('checked',true)
        editisbnrow.addClass('bg-success-100')
    }
    else {
        var v = '0';

        editisbncheck.prop('checked',false)
        editisbnrow.removeClass('bg-success-100')
    }

    $('.' + docnum +'approvealldocnum').val(v)

})

$(document).on('click','.for_approval_projection_edit_customerisbn_approve_check',function (e) {
    var docnum = $(this).data('docnum');
    var customercode = $(this).data('customercode');
    var isbn = $(this).data('isbn');

    // var $existing = $('.' + docnum + isbn + 'editisbnrow');

    if($(this).is(':checked')){
            var v = '1';
            
            // $existing.addClass('bg-success-100')
        }
    else {
        var v = '0';

        // $existing.removeClass('bg-success-100')
    }
        
        $('.'+docnum+'approvealldocnum').val(v)

});


$(document).on('click','.for_approval_projection_edit_isbn_approve_check',function (e) {

    var docnum = $(this).data('docnum');
    var customercode = $(this).data('customercode');
    var isbn = $(this).data('isbn');

    var $existing = $('.' + docnum + isbn + 'editisbnrow');

    if($(this).is(':checked')){
            var v = '1';
            
            $existing.addClass('bg-success-100')
        }
    else {
        var v = '0';

        $existing.removeClass('bg-success-100')
    }
        
        $('.'+docnum+isbn+'approve').val(v)


});

$(document).on('submit', '.submit_return_projection', function(e) {
        e.preventDefault();

        var docnumlist = $('.for_approval_projection_edit_customerisbn_approve_check:checked').map( function () { 
            return $(this).data('docnum')
        }).get()
        .join(',');

        if(!docnumlist) {
            sweetalert("Please select Customer to return"," ", icon = 'error', timer = '3000', btn = false);
            return false;

        }

        var formData = new FormData(this);


        $.ajax({
            url: "/submit_return_projection?docnumlist="+docnumlist,
            data: formData,
            processData: false,
            contentType: false,
            type: 'POST',
            beforeSend: function() {
                showLoading();
            },
            success: function(data) {
                console.log(data);
                hideLoading();

                if (data[0].status == "2") {

                    sweetalert("Refreshing list...","Projection returned to AE", icon = 'success', timer = '3000', btn = false);
                 
                    $('.modal').modal('hide')
                    for_approval_projection_customer_list_table(projdocnum,projectionusername)

                    // setTimeout( function() {
                    //     window.locaton.href = "{{ route('approvals') }}"
                    // }, 4000)


   
                }
                 else {
                    swal("Oops...", "Please contact the administrator", "error");
                }

                ajaxInProgress = false;
            },
            error: function(data) {
         
                swal("Oops...", "Something went wrong. Please contact your administrator", "error");
                hideLoading();

                ajaxInProgress = false;
            }
            
        });
});


$(document).on('submit','.submit_approve_projection',function (e) {

        e.preventDefault();

        var projdocnum = "{{request('pid')}}";
        var username = "{{request('name')}}";

        var formData = new FormData();

        // CSRF
        formData.append('_token', $('input[name="_token"]').val());

        $('.for_approval_projection_isbn_approve').each(function(i){

            if($(this).val() == 1){

                var row = $(this).closest('tr');

                formData.append('forapproval_projection_isbn_approve[]',1);
                formData.append('forapproval_projection_docnum[]',row.find('.for_approval_projection_isbn_docnum').val());
                formData.append('forapproval_projection_customercode[]',row.find('.for_approval_projection_isbn_customercode').val());
                formData.append('forapproval_projection_branchwhouse[]',row.find('.for_approval_projection_branchwhouse').val());
                formData.append('forapproval_projection_isbn[]',row.find('.for_approval_projection_isbn').val());
                formData.append('forapproval_projection_isbn_rsm_qty[]',row.find('.for_approval_projection_rsm_qty').val());
                formData.append('forapproval_projection_isbn_linetotal[]',row.find('.for_approval_projection_isbn_linetotal').val());

            }

        });


        $.ajax({
            url: "/submit_approve_projection?projdocnum="+projdocnum+"&username="+username,
            data: formData,
            processData: false,
            contentType: false,
            type: 'POST',
            beforeSend: function() {
                showLoading();
            },
            success: function(data) {

                console.log(data);
                hideLoading();

                if (data.status == "2") {

                    sweetalert("Refreshing list...","Projection Approved!", icon = 'success', timer = '3000', btn = false);

                    for_approval_projection_customer_list_table(projdocnum,projectionusername)

                }
                else if (data.status == "403") { 

                    sweetalert("Please select ISBN to approve","", icon = 'warning', timer = '3000', btn = false);

                }
                else {

                    swal("Oops...", "Please contact the administrator", "error");

                }

                ajaxInProgress = false;

            },
            error: function(data) {

                swal("Oops...", "Something went wrong. Please contact your administrator", "error");
                hideLoading();

                ajaxInProgress = false;

            }

        });

});


$(document).on('click','.btn-approve',function (e) {
    
  
    var notemptyselected = false;


   if ($('.for_approval_projection_isbn_approve').filter( function () {
        return $(this).val() === '1';
    }).length > 0) {
        
        notemptyselected = true; 

    }
        

    if(!notemptyselected) {

        sweetalert("","Please select ISBN to approve", icon = 'warning', timer = '5000', btn = false);
        return false;
    }


    swal({
            title: "Are you sure you want to approve selected projection?",
            text: "",
            icon: "info",
            buttons: true,
            dangerMode: true,
    })
    .then((willCancel) => {

        var projdocnum = "{{request('pid')}}";
        var username = "{{request('name')}}";

        
        if (willCancel) {
            
            var formData = new FormData();


            $('.for_approval_projection_edit_customerisbn_approve_check:checked').each(function () {
                formData.append('forapproval_projection_docnum[]', $(this).data('docnum'));
          
            });

         

            $.ajax({
                url: "/submit_approve_projection?projdocnum="+projdocnum+"&username="+username,
                data: formData,
                processData: false,
                contentType: false,
                type: 'POST',
                headers: {
                        'X-CSRF-TOKEN': getCsrfToken() 
                },
                beforeSend: function() {
                    showLoading();
                },
                success: function(data) {
                    console.log(data);
                    hideLoading();

                    if (data.status == "2") {

                        sweetalert("Refreshing list...","Projection Approved!", icon = 'success', timer = '3000', btn = false);
                    
                        for_approval_projection_customer_list_table(projdocnum,projectionusername)

                    }
                    else if (data.status == "403") { 
                        sweetalert("Please select ISBN to approve","", icon = 'warning', timer = '3000', btn = false);
                    
                    }
                    else {
                        swal("Oops...", "Please contact the administrator", "error");
                    }

                    ajaxInProgress = false;
                },
                error: function(data) {

                    swal("Oops...", "Something went wrong. Please contact your administrator", "error");
                    hideLoading();

                    ajaxInProgress = false;
                }
            });

            // $('.submit-approve-projection-btn').trigger('click');

        } 
        else {
        
                
        }
    });

    
})
$(document).on('click','.returnprojtnmodalbtn',function (e) {

    var projdocnum = "{{ request('pid')}}";

    $('.projectioniddisplay').text(projdocnum);

});

$(document).on('click','.for_approval_projection_isbn_list_display',function (e) {
            var customercode = $(this).data('customercode');
            var customername = $(this).data('customername');
            var docnum = $(this).data('docnum');
            var basedocnum = "{{request('pid')}}";
            var username = "{{request('name')}}";

            $('#MyForApprovalProjectionISBNListOffCanvas').offcanvas('show')

            $('.for_approval_checkallisbn').prop('checked',false);
            
            // if($('.isbnlist_customercode').text().trim() == customercode) {
            //     return false
            // }
            
            $('.approvals_isbnlist_customercode').text(customercode)
            $('.approvals_isbnlist_customername').text(customername)

            $('.approvals_isbnlist_docnum_val').val(docnum)
            $('.approvals_isbnlist_customercode_val').val(customercode)
            $('.approvals_isbnlist_customername_val').val(customername)

            // Get the target collapse ID for the clicked item
                var targetId = $(this).attr('href'); // ex: "#collapseExample0001804963"

            // Collapse ALL others except the clicked one
            $('.collapse.show').each(function () {
                if ('#' + $(this).attr('id') !== targetId) {
                    $(this).collapse('hide');
                }
            });

            customerISBNListDisplay (basedocnum,username,docnum) 
    
            
});

$(document).on('click','.remove-projtn-approval', function(e) {

    var customercode = $(this).data('customercode');
    var docnum = $(this).data('docnum');
    var isbn = $(this).data('isbn');

    var trClosest = $(this).closest("tr");

    swal({
            title: "Are you sure you want to remove this projection?",
            text: "",
            icon: "info",
            buttons: true,
            dangerMode: true,
    })
    .then((willCancel) => {

        
        if (willCancel) {
            
            trClosest.remove();
            var className = '.'+docnum+''+isbn+'forapprovalprojectionrow';

            $(className).remove();

            updateProjectionValues();

        } 
        else {
        
                
        }
    });
    



});

    $(document).on('change','.for_approval_projection_edit_projtn_rsm_qty', function(e) {
        
        var v = $(this).val();
        var trClosest = $(this).closest('tr');
        var aeprojtn = $(this).data('aeprojtn')
        // var lastyearsale = $(this).data('lastyearsale');
        // var customercode = $(this).data('customercode');
        var docnum =   $(this).data('docnum')
        var aepernr =   $(this).data('aepernr')
        var customercode =  $('.approvals_isbnlist_customercode_val').val();
        var isbn = trClosest.find('.for_approval_projection_edit_isbn').val();
        var title = trClosest.find('.for_approval_projection_edit_isbn_title').val();
        var projectionQty = parseInt(aeprojtn) || 0;
        var rsmqty = parseInt(v) || 0;

        var unitp = trClosest.find('.for_approval_projection_edit_isbn_unitp').val();

        var unitpInt = parseInt(unitp) || 0;
        var linetotal = rsmqty * unitpInt
        var linetotalDisplay = numberFormat(linetotal)
        // alert(lastyearsaleIntAllowed) 

        // Scenario 1: Projection qty is more than population qty
        if ( rsmqty > projectionQty) {
            $(this).val();

            sweetalert(" ","Approve Qty is more than Projection", icon = 'warning', timer = '3000', btn = false);
      
            $(this).focus();
            return false;
        }

        $('.'+docnum+isbn+'rsmqty').val(v)
        $('.'+docnum+isbn+'linetotal').val(linetotal)

        $.ajax({
                url:"/submit_changeprojection_approve_qty", 
                data: {
                    docnum : docnum,
                    aepernr : aepernr,
                    isbn : isbn,
                    qty : v,
                    linetotal : linetotal,
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
                    if(data.status = '2'){

                        var html = "" 
                                    + "<span class='text-success fw-bold'>Approve Qty Updated!</span>"
                                    + "";

                        toastifyShow(html)  

                    }
                    else {

                        swal("Oops...", "Something went wrong updating branch/whouse. Please contact your administrator", "error");
                        
                    }
                    
                    },
                    error:function(data){
                            hideLoading();
                            
                            swal("Oops...", "Something went wrong updating branch/whouse. Please contact your administrator", "error");
                    }
        });

        updateProjectionValues();

        // isbnappendISBNTableNotInEditTableandProjectiond(docnum);

    });


      
   
//END READY
});





</script>

@endsection

 