<!DOCTYPE html>
<html>
<head>
    <title>Final Requirements</title>
    <style>
        body {
            font-family: "Arial Narrow", Arial, sans-serif !important;
        }

        h2, h3, h4, h5 {
            font-weight: 400;
        }



        .page-break {
            page-break-before: always; /* Forces the content after this class to appear on a new page */
        }

        @media print {
          thead { 
                display: table-header-group; /* Ensure the header repeats on each new page */
            }
            tfoot {
                display: table-footer-group; /* Ensure the footer repeats on each new page */
            }
            table {
                page-break-inside: auto;
            }
            tr {
                page-break-inside: avoid;
                page-break-after: auto;
            }
            
        }

        .footer {
            position: fixed;
            bottom: 1px;
            width: 100%;
            text-align: center;
            font-size: 12px;
            border-top: 1px solid #000;
        }
        
        .page-number:before {
            content: "Page " counter(page);
        }

    </style>
</head>
<body>
@php

      $page = 0;
      $colspan = "15";

@endphp



<div style="height:820px;">
    <table style="border-collapse: collapse; width: 100%; margin-bottom:600px;" width="100%">
        <thead>
        
            <tr style="line-height: 0.3;">
                <th colspan="{{ $colspan }}" style="text-align:left" >
            

                    <div style="" >
                        <img src="data:image/jpeg;base64,{{ base64_encode(file_get_contents(public_path('assets/img/C&EALS_Horizontal.jpg'))) }}" alt="C&EALS" style="max-width: 100%;" />
                        <div style="position: absolute; top: 0; right: 0;">
          
                        </div>
                    </div>
                    
                    <h1>Finalize Requirement Adjustment</h1>
                    
                    <h3><strong>{{ projection_period_display($projdocnum) }}</strong></h3>
                    <h4>For Approval - Without Proposed Requirements</h4>
                    <h5>Date Printed: {{ formatDate($date_now) ?:'-' }}</h5>
                </th>
            </tr>



            <tr style="margin-bottom:50px; " >
                <th colspan="{{$colspan}}"> &nbsp</th>
            </tr>



            <tr style="text-align: center;">
                {{-- <th style="width: 15%; border:1px solid">Type</th> --}}
            
                <th scope="col" style="width: 10%; border:1px solid" class="" width="10%">ISBN</th>
                <th scope="col" style="width: 27%; border:1px solid" width="30%">Title</th>
                <th scope="col" style="width: 7%; border:1px solid" width="5%">Total<br>Projtn</th>
                <th scope="col" style="width: 7%; border:1px solid" width="5%">SOH</th>
                <th scope="col" style="width: 5%; border:1px solid" width="5%">Pull Out<br>In-Transit</th>
                <th scope="col" style="width: 5%; border:1px solid" width="5%">OMS</th>
                <th scope="col" style="width: 5%; border:1px solid" width="5%">On<br>PO</th>
                <th scope="col" style="width: 5%; border:1px solid" width="5%">Buff.<br>Stock</th>
                <th scope="col" style="width: 6%; border:1px solid" width="5%">Adj.<br>Stock</th>
                <th scope="col" style="width: 6%; border:1px solid" width="5%">Req.</th>
                <th scope="col" style="width: 7%; border:1px solid" width="10%" title="Proposed Requirement">Prop.<br>Req.</th>
      
            </tr>
        </thead>
        <tbody>



 
   

        @php 
            $totalprojtnsum = 0;
            $totalpropreqsum = 0;
        @endphp

        @foreach($qfinalreqd as $c)

            @php
                 
                $isbn = $c->EAN11;
                $description = $c->DESCRIPTION;

                $descriptiontruncate = truncatelimitWords($description,30) ;

                $totalproj = $c->TOTALPROJQTY;
                $soh = $c->SOHQTY ?? 0;
                $pullouttransit = $c->PULLOUTQTY ?? 0;
                $onorderoms =  $c->OMSQTY ?? 0;
                $onpo = 0;
                $bufferstock = round(($totalproj * 0.2));
                $adjstock = round($soh + $pullouttransit - $onorderoms + $onpo - $bufferstock);
                $requireqty = $adjstock - $totalproj;
                $roundreqqty = round($requireqty,-2) ?? 0; // -1 is nearest 20 
                $propreqval = $c->PROPOSEREQQTY ?? $roundreqqty;
                $descriptionDisplay = '<span class="" title="'.$description.'"> '.$descriptiontruncate.' </span>';
                $proprequireqty = $propreqval; 
           
                $totalprojDisplay = '<a href="#" data-isbn="'.$isbn.'">'.$totalproj.'</a>';

                $totalpropreqsum += $proprequireqty;
                $totalprojtnsum += $totalproj;

            @endphp
            <tr style="line-height:1.5;">
              
                <td style="text-align:center">{{ $isbn}}</td>
                <td style="text-align:center">{{ $descriptiontruncate }}</td>

                <td style="text-align:center">{{ $totalproj }}</td>
                <td style="text-align:center">{{ $soh }}</td>

                <td style="text-align:center">{{ $pullouttransit }}</td>
                <td style="text-align:center">{{ $onorderoms }}</td>
                <td style="text-align:center">{{ $onpo }}</td>
                <td style="text-align:center">{{ $bufferstock }}</td>
                <td style="text-align:center">{{ $adjstock }}</td>
                <td style="text-align:center">{{ $requireqty }}</td>
                <td style="text-align:center">{{ $proprequireqty }}</td>
            </tr>


            {{-- <tr style="">
                <td style="text-align:center" colspan="{{$colspan}}">&nbsp</td>
            </tr> --}}
{{-- 
            <tr style="line-height:1; margin-top: 500px; padding: 0; border-top: 1px solid black;">
                <td style="text-align:center" colspan="{{$colspan}}"></td>
            </tr> --}}
          
        @endforeach
            {{-- <tr style="line-height: 1; margin: 0; padding: 0;">
                <td style="text-align:left"> Total </td>
                <td style="text-align:center"> {{ number_format($totalbudget,2) ?: 0 }} </td>
                <td style="text-align:center"> {{ number_format($totalactual,2) ?: 0 }} </td>
                <td style="text-align:center"> {{ number_format($totaldifference,2) ?: 0 }} </td>
            </tr>
            
            <tr style="line-height: 1; margin: 0; padding-top: 0; ">
                <td style="text-align:start" colspan="{{$colspan}}"> @php echo $b; @endphp </td>
            </tr>
            
            <tr style="line-height: 1; margin: 0; padding: 0;">
                <td style="text-align:center" colspan="{{$colspan}}"> </td>
            </tr>
            
         

            <tr style="">
                <td style="text-align:start" colspan="{{$colspan}}">&nbsp</td>
            </tr> --}}
            
            <tr style="border-top: 1px solid black; line-height: 1; margin: 0; padding: 0;">
                <td style="text-align:start" colspan="{{$colspan}}">&nbsp</td>
            </tr>

            <tr style="line-height: 1; margin: 0; padding: 0;">
                <td style="text-align:center" colspan="{{$colspan}}"> ****** Nothing Follows ****** </td>
            </tr>

        

            
        

            <tr style="line-height: 3; ">
                <td> &nbsp </td>
            </tr>

            <tr style="line-height: 0.5; ">
           

                <td colspan="1" style="font-size:9px; line-height:1.5; " >
        
                    &nbsp

                </td>
    
                
                <td colspan="8" style="text-align: right;">
                    <h4 style="line-height: 3; margin: 0; padding: 0;">Summary</h4>
                    <h4 style="line-height: 1.2; margin: 0; padding: 0;">Total Projection:</h4>
                    {{-- <h4 style="line-height: 1.2; margin: 0; padding: 0;">Total Propose Requirement:</h4> --}}
              
        

                </td>
                
                <td colspan="8" style="text-align: right;">
                    <h4 style="line-height: 3; margin: 0; padding: 0;">&nbsp;</h4>
                    <h4 style="line-height: 1.2; margin: 0; padding: 0;">
                        <strong>{{ number_format($totalprojtnsum) ?: 0 }}</strong>
                    </h4>
                    {{-- <h4 style="line-height: 1.2; margin: 0; padding: 0;">
                        <strong>{{ number_format($totalpropreqsum) ?: 0 }}</strong>
                    </h4> --}}
                  
                </td>
            </tr>





        </tbody>
    
    </table>

</div>


</body>
</html>