
	
	
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
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Package Name</th>
                                        <th>User Name</th>
                                        <th>Booking Date</th>
                                        <th>Payment Status</th>
                                        <th>Event Status</th>
                                        <th>View Detail</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Everest Trek</td>
                                        <td>Binay Doi</td>
                                        <td>2022/2/2</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td><span class="badge badge-success">Active</span></td>
                                        <td><a href="bookingDetails" type="button" class="btn btn-warning btn-sm"><i class="feather mr-2 icon-info"></i>View</a></td>
                                        <td><a href="editBooking" type="button" class="btn btn-info btn-sm"><i class="feather mr-2 icon-info"></i>Edit</a></td>
                                        <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalLive"><i class="feather mr-2 icon-slash"></i>Delete</button></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Annapurna Trek</td>
                                        <td>Saurab John</td>
                                        <td>2022/2/2</td>
                                        <td><span class="badge badge-danger">Unpaid</span></td>
                                        <td><span class="badge badge-danger">Inactive</span></td>
                                        <td><a href="bookingDetails" type="button" class="btn btn-warning btn-sm"><i class="feather mr-2 icon-info"></i>View</a></td>
                                        <td><a href="editBooking" type="button" class="btn btn-info btn-sm"><i class="feather mr-2 icon-info"></i>Edit</a></td>
                                        <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalLive"><i class="feather mr-2 icon-slash"></i>Delete</button></td>
                                    </tr>
									
                                
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

<div id="exampleModalLive" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLiveLabel">Delete Conformation!!!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p class="mb-0">Are you sure, you want to delete this Booking!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn  btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
@endsection