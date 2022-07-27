@extends('frontend.layouts.main')	
@section('main-container')

    <!-- profile start-->
    <section>
        <div class="container" style="margin-top: 150px;">
            <div class="container rounded bg-white mt-5 mb-5" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                <div class="row p-4">
                    @include('frontend.profile-sidenve')
                    <div class="col-md-8">
                          <div class="row">
                              <div class="col-12">
                                <h2>Add new Package </h2>
                              </div>
                          </div>
                        <hr>
                        <table class="table table-striped mt-4">
                          <form action="">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" disabled name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Phone NUmber</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                              <label for="">Select Category</label>
                              <select name="" id="" class="form-select">
                                <option value="">Select Category</option>
                                <option value="">Select Category</option>
                                <option value="">Select Category</option>
                                <option value="">Select Category</option>
                              </select>
                          </div>
                            <div class="form-group">
                                <label for="">Address</label>
                                <textarea name="" id="" class="textarea form-control" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn_1 m-0" value="Update">
                                <a href="mypackages.html" class="btn btn-lg bg-secondary text-white" >Back</a>
  
                            </div>
                        </form>
                        </table>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    </section>
        
    <!--::profile end::-->

@endsection
