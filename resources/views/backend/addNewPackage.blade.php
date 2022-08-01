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
                            <h5 class="m-b-10">Add New Package</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Add NEw Package</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->

                
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
				<form class="my-2 p-2" id="actionForm">
					<div class="form-group">
					  <label for="name">Package Name</label>
					  <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required>
					  <input type="hidden" class="form-control" name="addedby" id="addedby" value="{{ Session::get('loginId') }}" required>
					</div>
					<div class="form-group">
						<label for="category">Category</label>
						<select name="category" id="category" class="form-control">
							<option selected disabled>Select Category</option>
							@foreach($category as $category)
								<option value="{{$category['name']}}">{{$category['name']}}</option>
							@endforeach
						</select>
					</div>
					
					<div class="form-group">
						<label for="status">Package Status</label>
						<select name="status" id="status" class="form-control">
							<option value="Inactive" selected>Inactive</option>
							<option value="Active">Active</option>
						</select>
					</div>
					<div class="form-group">
						<label for="price">Basic Price</label>
						<input type="text" class="form-control" name="price" id="price" placeholder="Enter Basic Prise" required>
					</div>
					<div class="form-group">
						<label for="days">Service Days</label>
						<input type="text" class="form-control" name="days" id="days" placeholder="Enter Service Days" required>
					</div>
					<div class="form-group">
						<label for="content">Package Description</label>
						<textarea id="summernote" name="content" class="form-control summernote"></textarea>
					</div>
					<div class="form-group">
						<label for="service">Package Required</label> <br>
						
						@foreach($vendor as $vendor)
							<div class="custom-control custom-checkbox custom-control-inline">
								<input type="checkbox" class="custom-control-input" id="{{$vendor->service}}" name="service[]" value="{{$vendor->service}}">
								<label class="custom-control-label" for="{{$vendor->service}}">{{$vendor->service}}</label>
							</div>
						@endforeach
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
				   
					  <input class="btn btn-primary " name="submit" type="submit" value="Add Package">
					  <a class="btn btn-danger" href="{{ url('package/') }}" role="button">Back</a>
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
	// add package
    $("#actionForm").on("submit", function(e){
        e.preventDefault();
        var formData = new FormData(this);
    
        $.ajax({
        type:'POST',
        url:"{{ url('addNewPackage/add') }}",
        cache:false,
        data :formData,
        contentType : false, // you can also use multipart/form-data replace of false
        processData: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        //  data:{name:name, email:email, contact:contact, cource:cource},
        dataType:'json',
        success:function(data){
            if(data.status ==200){
                $('#summernote').summernote('reset');
                $('#actionForm')[0].reset();
                Command: toastr["success"]("Success", data.message);
            }else{
                Command: toastr["error"]("Failed", data.message);
            }

            
        }
        });

    });
    $("#resetbtn").on("click", function(e){
    e.preventDefault();
        $('#summernote').summernote('reset');
        $('#actionForm')[0].reset();
    });
})
</script>
@endsection