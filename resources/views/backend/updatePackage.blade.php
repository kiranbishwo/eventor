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
                            <h5 class="m-b-10">Update Package</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Update Package</a></li>
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
						<h5>Update Package</h5>
					</div>
				</div>
			</div>
			<div class="container">
				<form class="my-2 p-2" id="actionForm">
					<div class="form-group">
					  <label for="name">Package Name</label>
					  <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required value="{{$package ['name']}}">
					  <input type="hidden" class="form-control" name="addedby" id="addedby" value="{{ Session::get('loginId') }}" required>
					  <input type="hidden" class="form-control" name="edit_id" id="edit_id" value="{{$package ['id']}}" required>
					</div>
					<div class="form-group">
						<label for="category">Category</label>
						<select name="category" id="category" class="form-control">
							<option selected disabled>Select Category</option>
							@foreach($category as $category)
								<option value="{{$category['name']}}" @if($package['category']==$category['name']) selected @endif >{{$category['name']}}</option>
							@endforeach
						</select>
					</div>
					
					<div class="form-group">
						<label for="status">Package Status</label>
						<select name="status" id="status" class="form-control">
							<option value="Inactive"  @if($package['status']=="Inactive") selected @endif>Inactive</option>
							<option value="Active" @if($package['status']=="Active") selected @endif>Active</option>
						</select>
					</div>
					<div class="form-group">
						<label for="price">Basic Price</label>
						<input type="text" class="form-control" name="price" id="price" placeholder="Enter Basic Prise" required value="{{$package ['price']}}">
					</div>
					<div class="form-group">
						<label for="content">Package Description</label>
						<textarea id="summernote" name="content" class="form-control summernote">{{$package ['content']}}</textarea>
					</div>
					<div class="form-group">
						<label for="service">Package Required</label> <br>
						
						{{-- {{ json_encode($vendor->service,true) }} --}}
						@foreach($vendor as $vendor)
						
							<div class="custom-control custom-checkbox custom-control-inline">
								<input type="checkbox" class="custom-control-input" id="{{$vendor->service}}" name="service[]" value="{{$vendor->service}}" @if(in_array($vendor->service, $service)) checked @endif >
								<label class="custom-control-label" for="{{$vendor->service}}">{{$vendor->service}}</label>
							</div>
						@endforeach
					</div>
					<div class="form-group">
						<label for="photo">Profile Photo</label>
						<input type="file" id="photo" name="photo" class="form-control-file" id="photo" onchange="document.getElementById('previewImg').src = window.URL.createObjectURL(this.files[0])">
						<div class="row my-3">
							<div class="col-md-3">
								<img src="{{ url('images/'.$package['photo']) }}" id="previewImg" alt="" class="w-100">
							</div>
						</div>
					</div>
				   
					  <input class="btn btn-primary " name="submit" type="submit" value="Update Package">
					  <a class="btn btn-danger" href="{{ url('package/') }}" role="button">Back</a>
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
	// update package
    $("#actionForm").on("submit", function(e){
        e.preventDefault();
        var formData = new FormData(this);
    
        $.ajax({
        type:'POST',
        url:"{{ url('package/update') }}",
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
})
</script>
@endsection