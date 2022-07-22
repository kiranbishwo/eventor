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
                            <h5 class="m-b-10">Setting</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Setting</a></li>
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
                                <h5>Settings</h5>
                            </div>
                            <div class="col-6 text-right">
                                <a href="editSetting" class="btn btn-primary">Edit Contents</a>
                            </div>
                        </div>
                        
                       
                        
                    </div>
                    <div class="card-body table-border-style">

                        <table class="table">
                            
                            <tbody>
                                <tr>
                                    <td class="w-25"><b>Brand</b></td>
                                    <td>Himalayan PYramid</td>
                                </tr>
                                <tr>
                                    <td class="w-25"><b>Phone</b></td>
                                    <td>+977 6556566</td>
                                </tr>
                                <tr>
                                    <td class="w-25"><b>Mobile</b></td>
                                    <td>9854521545</td>
                                </tr>
                                <tr>
                                    <td class="w-25"><b>Email</b></td>
                                    <td>hp@gmail.com</td>
                                </tr>
                                <tr>
                                    <td class="w-25"><b>Metatext</b></td>
                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, quas non! Soluta aspernatur eveniet ipsum praesentium deserunt perferendis <br>  tenetur natus. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla expedita dicta ullam veritatis at quos dolorum debitis velit sint inventore!</td>
                                </tr>
                                <tr>
                                    <td class="w-25"><b>Meta Keyword</b></td>
                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br> Molestias, quas non! Soluta aspernatur eveniet ipsum praesentium deserunt perferendis tenetur natus.</td>
                                </tr>
                                
                            
                            </tbody>
                        </table>
                  

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
  <!-- Delete Modal End-->
  @endsection