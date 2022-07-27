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



                    <!--title  -->
                    <div class="form-outline mb-4">
                        <h3>Vendor Login</h3>
                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3">Email address</label>
                        <input type="email" id="form3Example3" class="form-control " placeholder="Enter a valid email address" />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <label class="form-label" for="form3Example4">Password</label>
                        <input type="password" id="form3Example4" class="form-control " placeholder="Enter password" />
                    </div>
                    <div class="form-group text-center">
                      <input type="submit" name="" id="" class="genric-btn primary circle arrow" value="Login">
                      <a href="vendor-profile">vendor profile</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

@endsection
