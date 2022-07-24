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
                            <h5 class="m-b-10">Package</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Package</a></li>
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
                                <h5>All Packages </h5>
                            </div>
                            <div class="col-6 text-right">
                                <a href="addNewPackage" class=" btn btn-primary" >Add New Package</a>
                            </div>
                        </div>
                        
                       
                        
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table" id="datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th style="width:40%">Package Name</th>
                                        <th>Category</th>
                                        <th>Price</th>
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

{{-- delete model --}}
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
                <p class="mb-0">Are you sure, you want to delete this Package!</p>
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
$(document).ready(function(){
    loadtable();        
    function loadtable()
    {
        $.ajax({
            type:"POST",
            url : "{{ url('package/loadtable') }}",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            dataType: "json",
            success: function(response){
                // console.log(response);
            $('tbody').html('');
            $.each(response.package, function(key,item){
                $('tbody').append(
                ` <tr>
                    <th scope="row">${item.id}</th>
                    <th scope="row">${item.name}</th>
                    <th scope="row">${item.category}</th>
                    <th scope="row">${item.price}</th>
                    <td><a href="{{ url('/package/edit/${item.id}') }}" class="btn btn-sm btn-warning edit-btn">Edit</a></td>
                    <td><button value="${item.id}" class="btn btn-sm btn-danger delete-btn">Delete</button></td>
                </tr>`
                )
            });
            //activate datatable
            $('#datatable').DataTable();
            }
        });         
    }

    // delete data
    $(document).on('click', '.delete-btn', function(e){
        e.preventDefault();
        var del_id = $(this).val();
        // console.log(del_id);
        $("#exampleModalLive").modal('show');
        $.ajax({
            type:'GET',
            url:"/package/delete/"+del_id,
            success:function(data){
            $('#delete_id').val(data.message.id);
            }
        });
    })
    // delete
    $("#deleteForm").on("submit", function(e){
    e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            
        url: "{{ url('/package/destroy') }}",
        type : "POST",
        cache:false,
        data :formData,
        contentType : false, // you can also use multipart/form-data replace of false
        processData: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType:'json',
        success : function(data){
            // console.log(data);
            // loadtable();
            if(data.status ==200){
                loadtable();
                Command: toastr["success"]("Success", data.message);
            }else{
            // $('.error_list').text('error occurs.')
                Command: toastr["error"]("Failed", data.message);
            }
            $("#exampleModalLive").modal('hide');
        }
        });
    });
});
</script>
@endsection