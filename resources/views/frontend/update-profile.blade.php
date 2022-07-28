@extends('frontend.layouts.main')	
@section('main-container')

    <!-- profile start-->
    <section>
        <div class="container" style="margin-top:150px">
            <div class="container rounded bg-white mt-5 mb-5" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                <div class="row p-4">
                    @if($mode =='user')
                        @include('frontend.userProfile-sidenav')
                    @endif
                    @if($mode =='vendor')
                        @include('frontend.profile-sidenve')
                    @endif

                    
                    <div class="col-md-8">
                        <h2>Update My Profile </h2>
                        <hr>
                        <table class="table table-borderless mt-4">
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
                                    <label for="">Address</label>
                                    <textarea name="" id="" class="textarea form-control" rows="3"></textarea>
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
