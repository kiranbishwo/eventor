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
                        <h2>Change Password</h2>
                        <hr>
                        <table class="table table-borderless mt-4">
                            <form id="actionForm">
                                <div class="form-group">
                                    <label for="">Current Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter Current Password">
                                    <input type="hidden" name="id" id="id" class="form-control" value="{{ Session::get('userLoginId') }}">
                                    <span class="text-danger" id="passwordError"></span>

                                </div>
                                <div class="form-group">
                                    <label for="">New Password</label>
                                    <input type="password" name="new_password" id="new_password" class="form-control" placeholder="Enter New Password">
                                    <span class="text-danger" id="newPasswordError"></span>

                                </div>
                                <div class="form-group">
                                    <label for="">Re Enter Password</label>
                                    <input type="password" name="re_password" id="re_password" class="form-control" placeholder="Re Enter New Password">
                                    <span class="text-danger" id="rePasswordError"></span>

                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn_1" value="Update">
                                </div>
                            </form>
                            <div id="response"></div>
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
@section('script')
<script>
$(document).ready(function(){
    // add vendor
    $("#actionForm").on("submit", function(e){
        e.preventDefault();
        var formData = new FormData(this);
    
        $.ajax({
        type:'POST',
        url:"{{ url('password-change') }}",
        cache:false,
        data :formData,
        contentType : false, // you can also use multipart/form-data replace of false
        processData: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        //  data:{name:name, email:email, contact:contact, cource:cource},
        dataType:'json',
        success:function(data){
            console.log(data);
            if(data.message){
                $('#response').html(' <p class="text-white text-center bg-success alert" > '+data.message+'</p>');
            }else{
                $('#response').html(' <p class="text-white text-center bg-danger alert" > Some error occurs</p>');
            }
        },
        error: function(response) {
              $('#passwordError').text(response.responseJSON.errors.password);
              $('#newPasswordError').text(response.responseJSON.errors.new_password);
              $('#rePasswordError').text(response.responseJSON.errors.re_password);
           }
        });

    });
    
});
</script>
@endsection
