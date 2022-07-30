@extends('frontend.layouts.main')	
@section('main-container')

    <!-- profile start-->
    <section >
        <div class="container" style="margin-top: 150px;">
            <div class="container rounded bg-white mt-5 mb-5" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                <div class="row p-4">
                    @include('frontend.profile-sidenve')
                    <div class="col-8">
                          <div class="row">
                              <div class="col-6">
                                  <h2>My Packages </h2>
                              </div>
                              <div class="col-6">
                                  <a href="addnew-package" class="btn_4 float-right " style="border-radius: 20px;">Add Package</a>
                              </div>
                          </div>
                        <hr>
                        <table class="table table-striped mt-4">
                            <thead class="text-white" style="background-color:#FF9100;">
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Main Package</th>
                                    <th>Amaunt</th>
                                    <th>Status</th>
                                    <th>Action</th>
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
        </div>
    </section>
        
    <!--::profile end::-->

{{-- delete model --}}
<div id="exampleModalLive" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
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
                <button type="button" class="btn btn-sm  bg-secondary rounded text-white" data-dismiss="modal">Cancel</button>
                <button type="submit" class="rounded btn_4">Delete</button>
            </div>
            </form>
        </div>
    </div>
</div>

{{-- sub package detail --}}
    <!-- Modal vendor info-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Vendor Package name</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-3">ID</div><div class="col-1">:</div><div class="col-8" id="subpackage-id"></div>
                    <div class="col-3">Name</div><div class="col-1">:</div><div class="col-8" id="subpackage-name"></div>
                    <div class="col-3">Package</div><div class="col-1">:</div><div class="col-8" id="subpackage-package"></div>
                    <div class="col-3">Price</div><div class="col-1">:</div><div class="col-8" id="subpackage-price"></div>
                    <div class="col-3">Content</div><div class="col-1">:</div><div class="col-8" id="subpackage-content"></div>
                    <div class="col-3">Status</div><div class="col-1">:</div><div class="col-8" id="subpackage-status"></div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="rounded btn_4" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
    <!-- Modal vendor info end-->
@endsection
@section('script')
<script>
$(document).ready(function(){
    loadtable();        
    function loadtable()
    {
        $.ajax({
            type:"POST",
            url : "{{ url('mypackage/loadtable') }}",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            dataType: "json",
            success: function(response){
                // console.log(response);
            $('tbody').html('');
            $.each(response.package, function(key,item){
                $('tbody').append(
                `<tr>
                    <td>${item.id}</td>
                    <td>${item.name}</td>
                    <td>${item.package}</td>
                    <td>Rs. ${item.price}</td>
                    <td>${item.status}</td>
                    <td class="text-center">
                        <button value="${item.id}" class="btn btn-sm bg-danger  text-white rounded delete-btn"><i class="ti-archive"></i>
                        </button><a href=
                        '{{ url('update-package/${item.id}') }}' class="btn btn-sm bg-success text-white rounded mx-3"><i class="ti-pencil-alt"></i></a>
                        <button data-id="${item.id}" data-name="${item.name}" data-package="${item.package}" data-status="${item.status}" data-price="${item.price}" data-content="${item.content}" class="btn btn-sm bg-primary text-white rounded detail-btn"><i class="ti-info-alt"></i></button></td>
                </tr>`
                )
            })
        }      
    })
    }
// view package detail



$(document).on('click', '.detail-btn', function(e){
e.preventDefault();
    var id = $(this).data("id");
    var name = $(this).data("name");
    var package = $(this).data("package");
    var price = $(this).data("price");
    var content = $(this).data("content");
    var status = $(this).data("status");
console.log(id);
    
    $('#subpackage-id').text(id);
    $('#subpackage-name').text(name);
    $('#subpackage-package').text(package);
    $('#subpackage-price').text(price);
    $('#subpackage-content').text(content);
    $('#subpackage-status').text(status);

    $("#exampleModalCenter").modal('show');

    // modal show 
})
// delete data
$(document).on('click', '.delete-btn', function(e){
    e.preventDefault();
    var del_id = $(this).val();
    // console.log(del_id);
    $("#exampleModalLive").modal('show');
    $.ajax({
        type:'GET',
        url:"/mypackage/delete/"+del_id,
        
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
        
    url: "{{ url('/mypackage/destroy') }}",
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
        }
        $("#exampleModalLive").modal('hide');
    }
    });
});
});
</script>
@endsection
