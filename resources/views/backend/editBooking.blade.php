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
                            <h5 class="m-b-10">Edit Booking</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="booking">Booking</a></li>
                            <li class="breadcrumb-item"><a href="#!">Edit Booking</a></li>
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
                                <h5>Edit Booking</h5>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <form class="my-2 p-2">
                            <div class="form-row">
                                <div class="form-group col-6">
                                    <label for="payment">Payment Status</label>
                                    <select name="payment" id="payment" class="form-control">
                                        <option selected disabled>Select Payment Status</option>
                                        <option value="paid">Paid</option>
                                        <option value="unpaid">Unaid</option>
                                        <option value="pending">Pending </option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label for="event">Event Status</label>
                                    <select name="event" id="event" class="form-control">
                                        <option selected disabled>Select Event Status</option>
                                        <option value="paid">Active</option>
                                        <option value="unpaid">Inactive</option>
                                        <option value="pending">Running </option>
                                        <option value="rwjwcted">Rejected </option>
                                    </select>
                                </div>
                                
                            </div>
                            
                            
                            
                              <input class="btn btn-primary " type="submit" value="Submit">
                              <a class="btn btn-danger" href="booking" role="button">Back</a>
                              <input class="btn btn-warning" type="reset" value="Reset">

                          </form>
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
                <h5 class="modal-title" id="exampleModalLiveLabel">Conformation!!!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p class="mb-0">Are you sure, you want to delete this content!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn  btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
	$('#summernote').summernote({
	placeholder: 'Enter your Content Here.',
	height: 300,
	});
});
</script>
@endsection