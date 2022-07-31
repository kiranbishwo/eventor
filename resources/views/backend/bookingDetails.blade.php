
@extends('backend.layouts.main')	
@section('main-container')	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Booking Details</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="booking">Booking</a></li>
                            <li class="breadcrumb-item"><a href="#!">Booking Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h5>Booking Details</h5>
                            </div>
                        </div>
                        
                       
                        
                    </div>
                    <div class="card-body table-border-style">

                        <table class="table">
                            <tbody>
                                @foreach($invoice as $invoice)
                                <tr>
                                    <td class="w-25"><b>Package Name</b></td>
                                    <td>{{ $invoice->name }}</td>
                                    <td class="w-25"><b>Package Basic Price</b></td>
                                    <td>Rs. {{ $invoice->price }}</td>
                                </tr>
                                <tr>
                                    <td class="w-25"><b>Package Category</b></td>
                                    <td>{{ $invoice->category }}</td>
                                    <td class="w-25"><b>Chooser Subpackage id</b></td>
                                    @php 
                                        $subpackage_idarr = explode(',',$invoice->subpackage_id)
                                    @endphp
                                    <td>{{ $invoice->subpackage_id }}</td>
                                </tr>
                                <tr>
                                    <td class="w-25"><b>Services Provided in package</b></td>
                                    <td>@for( $i = 0 ; $i < count($invoice->service) ; $i++)
                                        {{ $invoice->service[$i]." | " }}
                                        @endfor</td>
                                    <td class="w-25"><b>Buyind Date</b></td>
                                    <td>{{ $invoice->buy_date }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td class="w-25"><b>Total Price</b></td>
                                    <td>Rs. {{ $invoice->amount }}</td>
                                    <td class="w-25"><b>Payment Method</b></td>
                                    <td>{{ $invoice->pmt_method }}</td>
                                </tr>
                                <tr>
                                    <td class="w-25"><b>Booking Status</b></td>
                                    <td>@if($invoice->status=="Inactive") 
                                            <span class="badge badge-danger">{{ $invoice->status }}</span>
                                        @else 
                                            <span class="badge badge-success">{{ $invoice->status }}</span>
                                        @endif</td>
                                </tr>




                                @foreach($subpackage as $subpackage)
                                @for( $i = 0 ; $i < count($subpackage_idarr) ; $i++)
                                    @if($subpackage_idarr[$i] == $subpackage->id)
                                    <tr class="w-25">
                                        <td><b>Subpackage Info</b></td>
                                        <td>{{ $subpackage->name }} | Rs. {{ $subpackage->price }}</td>
                                            
                                    </tr>
                                    @endif
                                @endfor
                                @endforeach
 
                                
                                
                            </tbody>
                        </table>
                  <div class="row pl-4">
                      <a href="{{ URL('booking') }}" class="btn btn-danger">Back</a>
                  </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

@endsection