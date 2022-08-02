
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
                            <h5 class="m-b-10">Update Blog</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Update Blog</a></li>
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
                                <h5>Update Blog</h5>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <form class="my-2 p-2" id="actionForm">
                            <div class="form-group">
                              <label for="title">Title</label>
                              
                              <input type="text" class="form-control" name="title" id="title" placeholder="enter title" required value="{{$blog['title']}}">
                              <input type="hidden"  name="edit_id" id="edit_id" required value="{{$blog['id']}}">
                            </div>
                            <div class="form-group">
                                <label for="author">Author</label>
                                <input type="text" class="form-control" name="author" id="author" placeholder="enter author name" required value="{{$blog['author']}}">
                              </div>
                            <div class="form-group">
                              <label for="summernote">Description</label>
                              <textarea id="summernote" name="content" class="form-control summernote">{{$blog['content']}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="photo">Cover Photo</label>
                                <input type="file" id="photo" name="photo" class="form-control-file" id="photo" onchange="document.getElementById('previewImg').src = window.URL.createObjectURL(this.files[0])">
                                <div class="row my-3">
                                    <div class="col-md-3">
                                        <img src="{{ url('images/'.$blog['photo']) }}" id="previewImg" alt="" class="w-100">
                                    </div>
                                </div>
                            </div>
                           
                              <input class="btn btn-primary " name="submit" type="submit" value="Update Blog">
                              <a class="btn btn-danger" href="{{ url('blog/') }}" role="button">Back</a>
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

    
    $("#actionForm").on("submit", function(e){
    e.preventDefault();
    
        var formData = new FormData(this);
    
        $.ajax({
        type:'POST',
        url:"{{ url('/blog/update') }}",
        cache:false,
        data :formData,
        contentType : false, // you can also use multipart/form-data replace of false
        processData: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        //  data:{name:name, email:email, contact:contact, cource:cource},
        dataType:'json',
        success:function(data){
                if(data.status ==200){
                Command: toastr["success"]("Success", "Blog Updated Sucessfully");
                }else{
                Command: toastr["error"]("Failed", "Unable to Update");
                }
        }
        });

    });
    
    
});
</script>
@endsection