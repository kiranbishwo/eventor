@extends('frontend.layouts.main')	
@section('main-container')

    <!-- profile start-->
    <section>
        <div class="container" style="margin-top:150px">
            <div class="container rounded bg-white mt-5 mb-5" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                <div class="row p-4">
                    @include('frontend.profile-sidenve')
                    <div class="col-md-8">
                        <h2>Change Password</h2>
                        <hr>
                        <table class="table table-borderless mt-4">
                            <form action="">
                                <div class="form-group">
                                    <label for="">Current Password</label>
                                    <input type="password" name="cpassword" class="form-control" placeholder="Enter Current Password">
                                </div>
                                <div class="form-group">
                                    <label for="">New Password</label>
                                    <input type="password" name="cpassword" class="form-control" placeholder="Enter New Password">
                                </div>
                                <div class="form-group">
                                    <label for="">Re Enter Password</label>
                                    <input type="password" name="cpassword" class="form-control" placeholder="Re Enter New Password">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn_1" value="Update">
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
