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
                            <li class="breadcrumb-item"><a href="#!">Profile</a></li>
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
                                <h5>Profile</h5>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ url('/updateProfile/'.Session::get('loginId') ) }}" class="btn btn-primary">Update Info</a>
                            </div>
                        </div>
                        
                       
                        
                    </div>
                    <div class="card-body table-border-style">

                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ url('images/'.$team['photo']) }}" alt="" class="w-100 rounded">
                            </div>
                            <div class="col-md-9">
                                <table class="table">
                            
                                    <tbody>
                                        <tr>
                                            <td class="w-25"><b>Full Name</b></td>
                                            <td>{{$team ['name']}}</td>
                                        </tr>
                                        <tr>
                                            <td class="w-25"><b>Phone</b></td>
                                            <td>{{$team ['contact']}}</td>
                                        </tr>
                                        <tr>
                                            <td class="w-25"><b>Email</b></td>
                                            <td>{{$team ['email']}}</td>
                                        </tr>
                                        <tr>
                                            <td class="w-25"><b>Role</b></td>
                                            <td>{{$team ['role']}}</td>
                                        </tr>
                                        
                                    
                                    </tbody>
                                </table>
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