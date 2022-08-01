
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
                            <h5 class="m-b-10">Add New Vendor</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Add New Vendor</a></li>
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
                                <h5>All Vendor</h5>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <form class="my-2 p-2" id="addForm">
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email </label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required >
                            </div>
                            <div class="form-group">
                                <label for="service">Service type</label>
                                <select name="service" id="service" class="form-control">
                                    <option value="Transportation">Transportation</option>
                                    <option value="Catering">Catering</option>
                                    <option value="Seminar Hall">Seminar Hall</option>
                                    <option value="Entertainment">Entertainment</option>
                                    <option value="Media">Media</option>
                                    <option value="Decorator">Decorator</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter Contact Number" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="status">Vendor Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="Inactive">Inactive</option>
                                    <option value="Active">Active</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea id="address" name="address" class="form-control summernote" row="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="summernote">Description</label>
                                <textarea id="summernote" name="content" class="form-control summernote"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="photo">Profile Photo</label>
                                <input type="file" id="photo" name="photo" class="form-control-file" id="photo" onchange="document.getElementById('previewImg').src = window.URL.createObjectURL(this.files[0])">
                                <div class="row my-3">
                                    <div class="col-md-3">
                                        <img src="" id="previewImg" alt="" class="w-100">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact">Password (Default : eventor)</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Contact Number" required value="eventor">
                            </div>
                           
                              <input class="btn btn-primary " name="submit" type="submit" value="Add Vendor">
                              <a class="btn btn-danger" href="{{ url('vendor/') }}" role="button">Back</a>
                              <input class="btn btn-warning" type="reset" value="Reset">
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
    $('#summernote').summernote({
        height: 300,
    });
    // add vendor
    $("#addForm").on("submit", function(e){
        e.preventDefault();
        var formData = new FormData(this);
    
        $.ajax({
        type:'POST',
        url:"{{ url('addnewvendor/add') }}",
        cache:false,
        data :formData,
        contentType : false, // you can also use multipart/form-data replace of false
        processData: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        //  data:{name:name, email:email, contact:contact, cource:cource},
        dataType:'json',
        success:function(data){
            console.log(data);
            if(data.status ==200){
                $('#summernote').summernote('reset');
                $('#addForm')[0].reset();
            
                Command: toastr["success"]("Success", "Vendor Added Sucessfully");
            }else{
                Command: toastr["error"]("Failed", "Unable to Add Blog");
            }

            
        }
        });

    });
    $("#resetbtn").on("click", function(e){
    e.preventDefault();
        $('#summernote').summernote('reset');
        $('#addForm')[0].reset();
    });
    
});
</script>
@endsection