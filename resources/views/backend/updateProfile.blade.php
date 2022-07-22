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
                            <li class="breadcrumb-item"><a href="#!">Update Profile: </a></li>
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
                                <h5>Update Profile</h5>
                            </div>
                        </div>
                        <div>
                            <div class="container">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="teamname">Full Name</label>
                                          <input type="text" class="form-control" id="teamname" placeholder="Enter Name">
                                        </div>
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="formphn">phone no:</label>
                                             <input type="text" class="form-control" id="formphn" placeholder="phone no">
                                        </div>
                                            <div class="form-group col-md-6">
                                            <label for="teamselect">role</label>
                                            <select class="custom-select" id="teamselect">
                                                <option selected>Choose...</option>
                                                <option value="1">CEO</option>
                                                <option value="2">Manager</option>
                                                <option value="3">Accountant</option>
                                                <option value="4">Tour Manager</option>
                                                <option value="5">Receptionist</option>
                                                <option value="6">Content Writer</option>
                                              </select>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail4">Email:</label>
                                            <input type="email" class="form-control" id="formemail" placeholder="Enter Email">
                                         </div>

                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Cover Photo</label>
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                           </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group">
												<button type="submit" class="btn btn-primary">Update</button> 
												<a href="profile"class="btn btn-secondary">Back</a>
											</div>

                                        </div>
                                  </form>
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
                <h5 class="modal-title" id="exampleModalLiveLabel">Conformation!!!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p class="mb-0">Are you sure, you want to delete this content!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn  btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn  btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>
@endsection