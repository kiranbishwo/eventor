@extends('frontend.layouts.main')	
@section('main-container')

<section class="">
    <div class="container h-custom" style="margin-top:150px">
        <div class="row d-flex justify-content-center align-items-center my-5">
            <div class="col-md-6">
                <img src="{{ url('frontend/assets/img/login.png')}}" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-5 offset-xl-1">
                <form id="actionForm">
                    {{-- @csrf --}}
                    <div class="form-outline mb-2">
                        <h3>Register here!</h3>
                    </div>
                    <!-- name -->
                    <div class="form-outline mb-2">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" id="name" class="form-control" name="name" placeholder="Enter your name" />
                        <span class="text-danger" id="nameError"></span>

                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-2">
                        <label class="form-label" for="email">Email address</label>
                        <input type="email" id="email" class="form-control" name="email" placeholder="Enter a valid email address" />
                        <span class="text-danger" id="emailError"></span>

                    </div>
                    <!-- phone -->
                    <div class="form-outline mb-2">
                        <label class="form-label" for="contact">Phone</label>
                        <input type="text" id="contact" class="form-control" name="contact" placeholder="Enter your phone number" />
                        <span class="text-danger" id="contactError"></span>

                    </div>
                    <!-- address -->
                    <div class="form-outline mb-2">
                        <label class="form-label" for="address">Address</label>
                        <input type="text" id="address" class="form-control" name="address" placeholder="Enter your address." />
                        <span class="text-danger" id="addressError"></span>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-2">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" class="form-control" name="password" placeholder="Enter password" />
                        <span class="text-danger" id="passwordError"></span>
                        
                    </div>
                    <!-- confirm password -->
                    <div class="form-outline mb-2">
                        <label class="form-label" for="password_confirmation">Confirm Password</label>
                        <input type="password" id="password_confirmation" class="form-control " name="password_confirmation" placeholder="Confirm your password" />
                        
                        

                    </div>
                    

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="genric-btn primary circle arrow " style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>
                        <p class=" fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="user-login" class="link-danger">Login</a></p>
                    </div>

                        <div id="response">
                        </div>

                </form>
            </div>
        </div>
    </div>

</section>

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
        url:"{{ url('register-user') }}",
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
                $('#actionForm')[0].reset();
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
              $('#passwordError').text(response.responseJSON.errors.password);
              $('#cPasswordError').text(response.responseJSON.errors.password_confirmation);
           }
        });

    });
    
});
</script>
@endsection