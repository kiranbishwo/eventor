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
                            <h5 class="m-b-10">Edit Settings</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Edit Settings</a></li>
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
                                <h5>Edit Settings</h5>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <form class="my-2 p-2" id="actionForm">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="brand">Brand Name</label>
                                    <input type="text" class="form-control" name="brand" id="brand" placeholder="Brand Name" value="@if(!empty($setting['brand'])){{$setting ['brand']}}@endif">
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Name" value="@if(!empty($setting['phone'])){{$setting ['phone']}}@endif">
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="mobile">Mobile Number</label>
                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile Number" value="@if(!empty($setting['mobile'])){{$setting ['mobile']}}@endif">
                                </div>
								<div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="@if(!empty($setting['email'])){{$setting ['email']}}@endif">
                                </div>
								<div class="form-group col-md-6">
                                    <label for="metatext">Meta Text</label>
									<textarea name="metatext" class="form-control" id="metatext" rows="5">@if(!empty($setting['metatext'])){{$setting ['metatext']}}@endif
									</textarea>
                                </div>
								<div class="form-group col-md-6">
                                    <label for="metakey">Meta Keyword</label>
									<textarea name="metakey" class="form-control" id="metakey" rows="5">@if(!empty($setting['metakey'])){{$setting ['metakey']}}@endif
									</textarea>
                                </div>
								
                            </div>
                              <input class="btn btn-primary " type="submit" value="Update Setting">
                              <a class="btn btn-danger" href="{{ url('setting/') }}" role="button">Back</a>

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
    // add category
    $("#actionForm").on("submit", function(e){
        e.preventDefault();
        var formData = new FormData(this);
    
        $.ajax({
        type:'POST',
        url:"{{ url('editSetting/update') }}",
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
  
    
});
</script>
@endsection