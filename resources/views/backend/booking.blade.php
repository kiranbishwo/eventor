
	
	
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
                            <h5 class="m-b-10">Bookings</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Bookings</a></li>
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
                        <div class="table-responsive">
                            <table class="table" id="datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Package Name</th>
                                        <th>User Name</th>
                                        <th>Booking Date</th>
                                        <th>Total Amount</th>
                                        <th>Payment Method</th>
                                        <th>Event Status</th>
                                        <th>View Detail</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($invoice as $invoice)
                                    <tr>
                                        <td>{{ $invoice->id }}</td>
                                        <td>{{ $invoice->name }}</td>
                                        <th>{{ $invoice->user_name }}</th>
                                        <th> {{ $invoice->buy_date }}</th>
                                        <th>Rs. {{ $invoice->amount }}</th>
                                        <th>{{ $invoice->pmt_method }}</th>
                                        <td>@if($invoice->status=="Inactive") 
                                                <span class="badge badge-danger">{{ $invoice->status }}</span>
                                            @else 
                                                <span class="badge badge-success">{{ $invoice->status }}</span>
                                            @endif</td>
                                        <td><a href="{{ url('bookingDetails/'.$invoice->id) }}" type="button" class="btn btn-warning btn-sm"><i class="feather mr-2 icon-info"></i>View</a></td>
                                        <td><a href="{{ ('editBooking/'.$invoice->id) }}" type="button" class="btn btn-info btn-sm"><i class="feather mr-2 icon-info"></i>Edit</a></td>
                                    </tr>
                                    
                                    @endforeach
                                    
									
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                


        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

@endsection
