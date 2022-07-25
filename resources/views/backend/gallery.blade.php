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
                            <h5 class="m-b-10">Gallery</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Gallery</a></li>
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
                                <h5>All Photos</h5>
                            </div>
                            <div class="col-6 text-right">
                                <a href="#" class=" btn btn-primary" data-toggle="modal" data-target="#exampleModalLive">Add New Photo</a>
                            </div>
                        </div>
                        
                       
                        
                    </div>
                    <div class="card-body table-border-style" >
                        <div class="row" id="loadphoto">
                            {{-- loadphoto --}}

                        </div>
                        
                

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
                <h5 class="modal-title" id="exampleModalLiveLabel">Add New Photo.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form id="actionForm">
                <div class="modal-body">
                    <label for="photo">Add Photo</label>
                    <input type="file"  class="form-control" name="photo" id="photo">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="submit" class="btn  btn-primary">Add  Photo</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- delete model --}}
<div id="exampleModalLive1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLiveLabel">Delete Conformation!!!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form id="deleteForm">
            <div class="modal-body">
                <input type="hidden" id="delete_id" name="id">
                <p class="mb-0">Are you sure, you want to delete this Photo!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn  btn-danger">Delete</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>

  //   updateTable(categoryList);
  $(document).ready(function(){
      loadtable();        
      function loadtable()
      {
          $.ajax({
              type:"POST",
              url : "{{ url('gallery/loadtable') }}",
              headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
              dataType: "json",
              success: function(response){
              $('#loadphoto').html('');
              $.each(response.gallery, function(key,item){
                console.log(response);
                  $('#loadphoto').append(
                  ` <div class=' col-md-2 col-4 photo  p-2'>
                        <img class='' src='{{ url('images/${item.photo}') }}' alt='Image From Eventor.'>
                        <div class='card-img-overlay row align-content-end'>
                            <div class="col-12 text-center text-white mb-3">
                                
                            </div>
                            <div class='col-4 text-center'>
                                <button value="${item.id}" class='btn btn-sm btn-danger delete-btn border-0' title='Delete' data-toggle='modal' data-target='#exampleModalLive1' data-id='{$row["photo_id"]}'><i class='far fa-trash-alt'></i></button>
                            </div>
                        </div>
                    </div>`
                  )
              });
              
          }
        });  
                 
      }

      // add photo
      $("#actionForm").on("submit", function(e){
          e.preventDefault();
          var formData = new FormData(this);
      
          $.ajax({
          type:'POST',
          url:"{{ url('gallery/add') }}",
          cache:false,
          data :formData,
          contentType : false, // you can also use multipart/form-data replace of false
          processData: false,
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          //  data:{name:name, email:email, contact:contact, cource:cource},
          dataType:'json',
          success:function(data){
            if(data.status ==200){
                loadtable();  
                Command: toastr["success"]("Success", data.message);
            }else{
                Command: toastr["error"]("Failed", data.message);
            }
            $("#exampleModalLive").modal('hide');
            $("#name").val('');
          }
          });

      });

      // delete data
      $(document).on('click', '.delete-btn', function(e){
      e.preventDefault();
      var del_id = $(this).val();
      console.log(del_id);
      $("#exampleModalLive1").modal('show');
      $.ajax({
          type:'GET',
          url:"/gallery/delete/"+del_id,
          success:function(data){
              console.log(data);
          $('#delete_id').val(data.message.id);
          }
      });
      })
      // delete
      $("#deleteForm").on("submit", function(e){
      e.preventDefault();
      var formData = new FormData(this);
      $.ajax({
          
      url: "{{ url('/gallery/destroy') }}",
      type : "POST",
      cache:false,
      data :formData,
      contentType : false, // you can also use multipart/form-data replace of false
      processData: false,
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      dataType:'json',
      success : function(data){
          console.log(data);
          // loadtable();
          if(data.status ==200){
              loadtable();
              Command: toastr["success"]("Success", data.message);
          }else{
          // $('.error_list').text('error occurs.')
              Command: toastr["error"]("Failed", data.message);
          }
          $("#exampleModalLive1").modal('hide');
      }
      });
  });

  })
</script>
@endsection