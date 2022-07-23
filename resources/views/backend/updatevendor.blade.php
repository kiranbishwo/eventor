
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
                            <h5 class="m-b-10">Update Vendor</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Update Vendor</a></li>
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
                                <h5>Update Vendor</h5>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <form class="my-2 p-2" id="actionForm">
                            <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required value="{{$vendor['name']}}">
                              <input type="hidden"  name="edit_id" id="edit_id" required value="{{$vendor ['id']}}">

                            </div>
                            <div class="form-group">
                                <label for="service">Service type</label>
                                <select name="service" id="service" class="form-control" value="{{$vendor['service']}}">
                                    <option value="Transportation" @if($vendor['service']=="Transportation") selected @endif>Transportation</option>
                                    <option value="Catering" @if($vendor['service']=="Catering") selected @endif>Catering</option>
                                    <option value="Seminar Hall" @if($vendor['service']=="Seminar Hall") selected @endif>Seminar Hall</option>
                                    <option value="Decorator" @if($vendor['service']=="Decorator") selected @endif>Decorator</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter Contact Number" required value="{{$vendor['contact']}}">
                            </div>
                            
                            <div class="form-group">
                                <label for="status">Vendor Status</label>
                                <select name="status" id="status" class="form-control" value="{{$vendor['status']}}">
                                    <option value="Inactive" @if($vendor['service']=="Inactive") selected @endif>Inactive</option>
                                    <option value="Active" @if($vendor['service']=="Active") selected @endif>Active</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="address">Description</label>
                                <textarea id="address" name="address" class="form-control summernote" row="3">{{$vendor['address']}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="summernote">Description</label>
                                <textarea id="summernote" name="content" class="form-control summernote">{{$vendor['content']}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="photo">Profile Photo</label>
                                <input type="file" id="photo" name="photo" class="form-control-file" id="photo" onchange="document.getElementById('previewImg').src = window.URL.createObjectURL(this.files[0])">
                                <div class="row my-3">
                                    <div class="col-md-3">
                                        <img src="{{ url('images/'.$vendor['photo']) }}" id="previewImg" alt="" class="w-100">
                                    </div>
                                </div>
                            </div>
                           
                              <input class="btn btn-primary " name="submit" type="submit" value="Update Vendor">
                              <a class="btn btn-danger" href="{{ url('vendor/') }}" role="button">Back</a>
                              {{-- <input class="btn btn-warning " id="resetbtn" type="reset" value="Reset"> --}}
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

    
    $("#actionForm").on("submit", function(e){
    e.preventDefault();
    
        var formData = new FormData(this);
    
        $.ajax({
        type:'POST',
        url:"{{ url('/vendor/update') }}",
        cache:false,
        data :formData,
        contentType : false, // you can also use multipart/form-data replace of false
        processData: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        //  data:{name:name, email:email, contact:contact, cource:cource},
        dataType:'json',
        success:function(data){
                if(data.status ==200){
                Command: toastr["success"]("Success", "Vendor Updated Sucessfully");
                }else{
                Command: toastr["error"]("Failed", "Unable to Update");
                }
        }
        });

    });
    
    
    
});
</script>
@endsection