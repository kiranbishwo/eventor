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
                            <form id="actionForm">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" value="{{ $data->name }}">
                                    <input type="hidden" name="id" id="id" class="form-control" value="{{ $data->id }}">
                                    <span class="text-danger" id="nameError"></span>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" disabled name="email" id="email" class="form-control" value="{{ $data->email }}">
                                    <span class="text-danger" id="emailError"></span>

                                </div>
                                <div class="form-group">
                                    <label for="contact">Phone NUmber</label>
                                    <input type="text" name="contact" id="contact" class="form-control" value="{{ $data->contact }}">
                                    <span class="text-danger" id="contactError"></span>

                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea name="address" id="address" class="textarea form-control" rows="3">{{ $data->address }}</textarea>
                                    <span class="text-danger" id="addressError"></span>

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
        url:"{{ url('update-profile') }}",
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
              $('#nameError').text(response.responseJSON.errors.name);
              $('#emailError').text(response.responseJSON.errors.email);
              $('#addressError').text(response.responseJSON.errors.address);
              $('#contactError').text(response.responseJSON.errors.contact);
           }
        });

    });
    
});
</script>
@endsection