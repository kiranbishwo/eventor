
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
                            <h5 class="m-b-10">Category</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Category</a></li>
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
                                <h5>All Categories </h5>
                            </div>
                            <div class="col-6 text-right">
                                <a href="#" data-toggle="modal" data-target="#exampleModal" class=" btn btn-primary" >Add New Category</a>
                            </div>
                        </div>
                        
                       
                        
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table" id="datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th style="width:80%">Categories Name</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
									
                                
                                </tbody>
                            </table>
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
                <h5 class="modal-title" id="exampleModalLiveLabel">Delete Conformation!!!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form id="deleteForm">
            <div class="modal-body">
                <input type="hidden" id="delete_id" name="id">
                <p class="mb-0">Are you sure, you want to delete this content!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn  btn-danger">Delete</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!--Add  Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<form id="addForm" >
		<div class="modal-body">
			<div class="form-group">
			  <label for="name">Category Name</label>
			  <input type="text" name="name" id="name" class="form-control" placeholder="Enter Category Name" >
			</div>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="submit" id="submit" name="submit" class="btn btn-primary">Save changes</button>
		</div>
		</form>
	  </div>
	</div>
  </div>
  <!--Edit  Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<form id="editForm" >
		<div class="modal-body">
			<div class="form-group">
			  <label for="name">Category Name</label>
              <input type="hidden" id="edit_id" name="edit_id">
			  <input type="text" name="edit_name" id="edit_name" class="form-control" placeholder="Enter Category Name" >
			</div>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		  <button type="submit" id="submit" name="submit" class="btn btn-primary">Save changes</button>
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
                url : "{{ url('category/loadtable') }}",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                dataType: "json",
                success: function(response){
                $('tbody').html('');
                $.each(response.category, function(key,item){
                    $('tbody').append(
                    ` <tr>
                        <th scope="row">${item.id}</th>
                        <th scope="row">${item.name}</th>
                        <td><button value="${item.id}" class="btn btn-sm btn-warning edit-btn">Edit</button></td>
                        <td><button value="${item.id}" class="btn btn-sm btn-danger delete-btn">Delete</button></td>
                    </tr>`
                    )
                });
                //activate datatable
                $('#datatable').DataTable();
                }
            });         
        }

        // add category
        $("#addForm").on("submit", function(e){
            e.preventDefault();
            var formData = new FormData(this);
        
            $.ajax({
            type:'POST',
            url:"{{ url('category/add') }}",
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
                        Command: toastr["success"]("Success", "Category Added Sucessfully");
                    }else{
                        Command: toastr["error"]("Failed", "Unable to Add Category");
                    }
                    $("#exampleModal").modal('hide');
                    $("#name").val('');
            }
            });

        });

        // edit data
        $(document).on('click', '.edit-btn', function(e){
        e.preventDefault();
        var edit_id = $(this).val();
        
        $("#exampleModal1").modal('show');
        $.ajax({
            type:'GET',
            url:"/category/edit/"+edit_id,
            success:function(data){
            $('#edit_id').val(data.message.id);
            $('#edit_name').val(data.message.name);

            }
        });
        })

        $("#editForm").on("submit", function(e){
        e.preventDefault();
        
            var formData = new FormData(this);
        
            $.ajax({
            type:'POST',
            url:"{{ url('/category/update') }}",
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
                    Command: toastr["success"]("Success", "Category Updated Sucessfully");
                    }else{
                    Command: toastr["error"]("Failed", "Unable to Update");
                    }
                    $("#exampleModal1").modal('hide');
            }
            });

        });
        // delete data
        $(document).on('click', '.delete-btn', function(e){
        e.preventDefault();
        var del_id = $(this).val();
        console.log(del_id);
        $("#exampleModalLive").modal('show');
        $.ajax({
            type:'GET',
            url:"/category/delete/"+del_id,
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
            
        url: "{{ url('/category/destroy') }}",
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
                Command: toastr["success"]("Success", "Category Deleted Sucessfully");
            }else{
            // $('.error_list').text('error occurs.')
                Command: toastr["error"]("Failed", "Unable to delete");
            }
            $("#exampleModalLive").modal('hide');
        }
        });
    });

    })
  </script>
  @endsection
  