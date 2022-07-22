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
                            <h5 class="m-b-10">Edit Settings</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Edit Settings</a></li>
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
                                <h5>Edit Settings</h5>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <form class="my-2 p-2">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="brand">Brand Name</label>
                                    <input type="text" class="form-control" name="brand" id="brand" placeholder="Brand Name" value="Himalayan Pyraid">
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Name" value="+977 5475475">
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="mobile">Mobile Number</label>
                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile Number" value="+977 9845252454">
                                </div>
								<div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="hp@gmail.com">
                                </div>
								<div class="form-group col-md-6">
                                    <label for="metatext">Meta Text</label>
									<textarea name="metatext" class="form-control" id="metatext" cols="30" rows="10">
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus vitae vero aspernatur accusantium suscipit nostrum alias porro amet atque commodi?
									</textarea>
                                </div>
								<div class="form-group col-md-6">
                                    <label for="metatext">Meta Keyword</label>
									<textarea name="metatext" class="form-control" id="metatext" cols="30" rows="10">
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus vitae vero aspernatur accusantium suscipit nostrum alias porro amet atque commodi?
									</textarea>
                                </div>
								
                            </div>
                              <input class="btn btn-primary " type="submit" value="Submit">
                              <a class="btn btn-danger" href="setting" role="button">Back</a>
                              <input class="btn btn-warning" type="reset" value="Reset">

                          </form>
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