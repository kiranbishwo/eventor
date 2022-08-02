@extends('frontend.layouts.main')	
@section('main-container')

<section class="">
    <div class="container" style="margin-top:150px">
        <div class="row d-flex justify-content-center align-items-center my-5">
            <div class="col-md-6">
                <img src="{{ url('frontend/assets/img/login.png')}}" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-5 offset-xl-1">
                <form action="{{ url('login-user') }}" method="post">
                    <div class="form-outline mb-4">
                        <h3>Sign In</h3>
                    </div>
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">User Name</label>
                        <input type="email" id="email" name="email" class="form-control " placeholder="Enter your username" />
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control " placeholder="Enter password" />
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                   
                    

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="genric-btn primary circle arrow" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        <p class=" fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="user-register" class="link-danger">Register</a></p>

                    </div>
                    @if(session('error'))
                        <div class="alert bg-danger text-white">{{session('error')}}</div>
                    @endif

                </form>
            </div>
        </div>
    </div>

</section>

@endsection
