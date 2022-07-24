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
                            <h5 class="m-b-10">Teams</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Update members: </a></li>
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
                                <h5>Update Member</h5>
                            </div>
                        </div>
                        <div>
                            <div class="container">
                                <form id="actionForm">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="name">Full Name</label>
                                          <input type="text" class="form-control" name="name"id="name" placeholder="Enter Name" value="{{$team ['name']}}">
                                          <input type="hidden"  name="edit_id" id="edit_id" required value="{{$team ['id']}}">

                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="password">New Password</label>
                                          <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                        </div>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="contact">phone no:</label>
                                             <input type="text" class="form-control" name="contact" id="contact" placeholder="phone no" value="{{$team ['contact']}}">
                                        </div>
                                            <div class="form-group col-md-6">
                                            <label for="role">Select role</label>
                                            <select class="custom-select" id="role" name="role">
                                                <option selected>Select Role</option>
                                                <option value="Admin" @if($team['role']=="Admin") selected @endif>Admin</option>
                                                <option value="Manager" @if($team['role']=="Manager") selected @endif>Manager</option>
                                                <option value="Accountant" @if($team['role']=="Accountant") selected @endif>Accountant</option>
                                              </select>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="{{$team ['email']}}">
                                         </div>

                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="photo">Cover Photo</label>
                                                <input type="file" class="form-control-file" name="photo" id="photo" onchange="document.getElementById('previewImg').src = window.URL.createObjectURL(this.files[0])">
                                                <div class="row my-3">
                                                    <div class="col-md-3">
                                                        <img src="{{ url('images/'.$team['photo']) }}" id="previewImg" alt="" class="w-100">
                                                    </div>
                                                </div>
                                           </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group">
												<button type="submit" class="btn btn-primary">Update Member</button> 
												<a class="btn btn-danger" href="{{ url('team/') }}" role="button">Back</a>
											</div>
                                        </div>
                                  </form>
                            </div>
                        </div>
                    </div>         
                </div>
            </div>
                


        </div>
    </div>
</div>
@endsection
@section('script')
<script>
$(document).ready(function(){
    $('#summernote').summernote({
        height: 300,
    });
    // add category
    $("#actionForm").on("submit", function(e){
        e.preventDefault();
        var formData = new FormData(this);
    
        $.ajax({
        type:'POST',
        url:"{{ url('team/update') }}",
        cache:false,
        data :formData,
        contentType : false, // you can also use multipart/form-data replace of false
        processData: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        //  data:{name:name, email:email, contact:contact, cource:cource},
        dataType:'json',
        success:function(data){
            // console.log(data);
            if(data.status ==200){
                $('#actionForm')[0].reset();
            
                Command: toastr["success"]("Success", data.message);
            }else{
                Command: toastr["error"]("Failed",  data.message);
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