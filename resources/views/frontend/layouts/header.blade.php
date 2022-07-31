<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Etrain</title>
    <link rel="icon" href="{{ url('frontend/assets/img/favicon.png')}}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/bootstrap.min.css')}}" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/animate.css')}}" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/owl.carousel.min.css')}}" />
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/themify-icons.css')}}" />
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/flaticon.css')}}" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/magnific-popup.css')}}" />
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/slick.css')}}" />
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/style.css')}}" />
 
    <!--main important userprofile css for this page-->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/userprofile.css')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"  />

    @yield('style')

  </head>

  <body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light">
              
              <a class="navbar-brand logo_2" href="{{ url('/') }}">
                <img src="{{ url('frontend/assets/img/logo.png')}}" alt="logo" width="150"/>
              </a>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>

              <div
                class="collapse navbar-collapse main-menu-item justify-content-end"
                id="navbarSupportedContent"
              >
                <ul class="navbar-nav align-items-center">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="blog.html"
                      id="navbarDropdown"
                      role="button"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($category as $category)
                          <a class="dropdown-item" href="{{ url("filter-category/".$category->name) }}">{{ $category->name }}</a>
                        @endforeach
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('packages') }}">Packages</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('blogs') }}">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('aboutus') }}">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ url('contactus') }}">Contact</a>
                  </li>
                  <li class="d-none d-lg-block">
                    @if(session()->has('userLoginId'))
                    <a class="btn_1" href="{{ url('/user-profile/') }}"><i class="ti-user"></i></a>
                    @else 
                    <a class="btn_1" href="{{ url('user-login') }}">Login</a>
                    @endif
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Header part end-->
