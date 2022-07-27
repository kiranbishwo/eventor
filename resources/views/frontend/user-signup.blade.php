@extends('frontend.layouts.main')	
@section('main-container')

<section class="">
    <div class="container h-custom" style="margin-top:150px">
        <div class="row d-flex justify-content-center align-items-center my-5">
            <div class="col-md-6">
                <img src="{{ url('frontend/assets/img/login.png')}}" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-5 offset-xl-1">
                <form>

                    <div class="form-outline mb-2">
                        <h3>Register here!</h3>
                    </div>
                    <!-- name -->
                    <div class="form-outline mb-2">
                        <label class="form-label" for="form3Example4">Name</label>
                        <input type="text" id="form3Example4" class="form-control " placeholder="Enter your name" />
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-2">
                        <label class="form-label" for="form3Example3">Email address</label>
                        <input type="email" id="form3Example3" class="form-control " placeholder="Enter a valid email address" />
                    </div>
                    <!-- phone -->
                    <div class="form-outline mb-2">
                        <label class="form-label" for="form3Example4">Phone</label>
                        <input type="Phone" id="form3Example4" class="form-control " placeholder="Enter your phone number" />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-2">
                        <label class="form-label" for="form3Example4">Password</label>
                        <input type="password" id="form3Example4" class="form-control " placeholder="Enter password" />
                    </div>
                    <!-- confirm password -->
                    <div class="form-outline mb-2">
                        <label class="form-label" for="form3Example4">Confirm Password</label>
                        <input type="password" id="form3Example4" class="form-control " placeholder="Confirm your password" />
                    </div>
                    <!-- image -->
                    <div class="form-outline mb-2">
                        <p>Upload your image</p>
                        <img src="" alt="">
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="genric-btn primary circle arrow " style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>
                        <p class=" fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="user-login" class="link-danger">Login</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>

</section>

@endsection
