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
                        <form class="my-2 p-2" id="addForm">
                            <div class="form-row justify-content-center">
                                <div class="form-group col-6">
                                   
                                    <label for="status">Booking Status</label>
                                    <input type="hidden" name="id" value="{{ $invoice['id'] }}">
                                    <select name="status" id="status" class="form-control">
                                        <option selected disabled>Select Booking Status</option>
                                        <option value="Active" @if($invoice['status'] =="Active") selected @endif>Active</option>
                                        <option value="Inactive" @if($invoice['status']=="Inactive") selected @endif>Inactive</option>
                                    </select>
                                </div>
                                
                            </div>
                            
                            
                            
                              <input class="btn btn-primary " type="submit" value="Update Status">
                              <a class="btn btn-danger" href="{{ url('booking') }}" role="button">Back</a>

                          </form>
                    </div>
                </div>
            </div>
                


        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

@endsection
@section('script')
<script>
$(document).ready(function(){
    // add category
    $("#addForm").on("submit", function(e){
        e.preventDefault();
        var formData = new FormData(this);
    
        $.ajax({
        type:'POST',
        url:"{{ url('/editBooking/edit') }}",
        cache:false,
        data :formData,
        contentType : false, // you can also use multipart/form-data replace of false
        processData: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        //  data:{name:name, email:email, contact:contact, cource:cource},
        dataType:'json',
        success:function(data){
            if(data.status ==200){
                Command: toastr["success"]("Success", "Blog Added Sucessfully");
            }else{
                Command: toastr["error"]("Failed", "Unable to Add Blog");
            }

            
        }
        });

    });
    
});
</script>
@endsection