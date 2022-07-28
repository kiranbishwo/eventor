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
                            <h5 class="m-b-10">Profile</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Update Profile: </a></li>
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
                                <h5>Update Profile</h5> 
                            </div>
                        </div>
                        <div>
                            <div class="container">
                                <form id="actionForm">
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" name="email" class="form-control" id="email" disabled placeholder="Enter Email" value="{{$team ['email']}}">
                                        <input type="hidden" name="role" class="form-control" id="role" value="{{$team ['role']}}">
                                        <input type="hidden" name="edit_id" class="form-control" id="edit_id" value="{{$team ['id']}}">
                                     </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="name">Full Name</label>
                                          <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="{{$team ['name']}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="contact">phone no:</label>
                                             <input type="text" class="form-control" name="contact" id="contact" placeholder="phone no" value="{{$team ['contact']}}">
                                        </div>
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
												<button type="submit" name="submit" class="btn btn-primary">Update</button> 
												<a href="{{ url('/profile/'.Session::get('loginId') ) }}"class="btn btn-secondary">Back</a>
											</div>

                                        </div>
                                  </form>
                            </div>
                        </div>
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
    // update category
    $("#actionForm").on("submit", function(e){
        e.preventDefault();
        var formData = new FormData(this);
    
        $.ajax({
        type:'POST',
        url:"{{ url('updateProfile/update') }}",
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