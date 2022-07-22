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
                                <h5>All Albums</h5>
                            </div>
                            <div class="col-6 text-right">
                                <a href="#" class=" btn btn-primary" data-toggle="modal" data-target="#exampleModalLive">Add New Photo</a>
                            </div>
                        </div>
                        
                       
                        
                    </div>
                    <div class="card-body table-border-style">

                        <div class=' col-lg-2 col-md-3 col-6 photo  p-2'>
                            <img class='' src='{{ url('backend/assets/images/light-box/l1.jpg') }}' alt='Image From RED Academy.'>
                            <div class='card-img-overlay row align-content-end'>
								<div class="col-12 text-center text-white mb-3">
									Everest Trek Management
								</div>
                                <div class='col-4 text-center'>
                                    <button class='btn btn-sm btn-warning border-0 show-btn' title='Edit Album' data-toggle="modal" data-target="#exampleModalLive"><i class="far fa-edit"></i></button>
                                </div>
                                <div class='col-4 text-center'>
                                    <a href="album" class='btn btn-sm btn-primary  border-0' title='Open Album' ><i class="far fa-folder-open"></i></a>
                                </div>
                                <div class='col-4 text-center'>
                                    <button class='btn btn-sm btn-danger delete-btn border-0' title='Delete' data-toggle='modal' data-target='#deleteItemModal' data-id='{$row["photo_id"]}'><i class='far fa-trash-alt'></i></button>
                                </div>
                            </div>
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
                <h5 class="modal-title" id="exampleModalLiveLabel">Add New Album.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="">
            <div class="modal-body">
                <label for="title">Album Title</label>
                <input type="text" placeholder="Enter Album name." class="form-control" id="title" name="title">
                <label for="title">Album Cover Photo</label>
                <input type="file"  class="form-control" name="coverphoto" id="coverphoto">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn  btn-primary">Add  New Album</button>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- Delete Modal start-->
  <div id="deleteItemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLiveLabel">Conformation!!!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p class="mb-0">Are you sure, you want to delete this Album!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn  btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
@endsection