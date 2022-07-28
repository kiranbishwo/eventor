@if(!session()->has('loginId'))
{{ redirect('login') }}
@endif
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Eventor - Dashboard</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ url('backend/assets/images/favicon.png')}}" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ url('backend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('backend/assets/css/gallery.css') }}">
    <link rel="stylesheet" href="{{ url('backend/assets/css/formwizard.css') }}">
	<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
	{{-- summernote --}}
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
	<!-- form wizard -->
	<link href="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"  />
    
    

</head>
<body class="">
	
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="{{ url('images/'.Session::get('photo')) }}" alt="User-Profile-Image">
						<div class="user-details">
							<span>{{ Session::get('name') }}</span>
							<div id="more-details">{{ Session::get('role') }}<i class="fa fa-chevron-down m-l-5"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="{{ url('/profile/'.Session::get('loginId') ) }}"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
							<li class="list-group-item"><a href="{{ url('/logout')}}"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
						</ul>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item">
					    <a href="{{ url('/')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
                    <li class="nav-item">
					    <a href="{{ url('/category')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-grid"></i></span><span class="pcoded-mtext">Category</span></a>
					</li>
                    <li class="nav-item">
					    <a href="{{ url('/package')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-package"></i></span><span class="pcoded-mtext">Package</span></a>
					</li>
                    <li class="nav-item">
					    <a href="{{ url('/booking')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layers"></i></span><span class="pcoded-mtext">Bookings</span></a>
					</li> 
                    <li class="nav-item">
					    <a href="{{ url('/blog')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-bold"></i></span><span class="pcoded-mtext">Blog</span></a>
					</li>
                    <li class="nav-item">
					    <a href="{{ url('/team')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">Our Teams</span></a>
					</li>
                    <li class="nav-item">
					    <a href="{{ url('/vendor')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">Vendor</span></a>
					</li>
                    <li class="nav-item">
					    <a href="{{ url('/gallery')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-film"></i></span><span class="pcoded-mtext">Gallery</span></a>
					</li>
                    
                    <li class="nav-item">
					    <a href="{{ url('/setting')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-settings"></i></span><span class="pcoded-mtext">Setting</span></a>
					</li>

			
				
				</ul>
				
				
				
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						<img src="{{ url('backend/assets/images/logo.png')}}" alt="" class="logo rounded-pill" width="150" >
						<img src="{{ url('backend/assets/images/logo-icon.png')}}" alt="" class="logo-thumb">
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav ml-auto">
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-user"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										<img src="{{ url('images/'.Session::get('photo')) }}" class="img-radius" alt="User-Profile-Image" width="50" height="50">
										<span>{{ Session::get('name') }}</span>
										<a href="{{ url('/logout')}}" class="dud-logout" title="Logout">
											<i class="feather icon-log-out"></i>
										</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>
	<!-- [ Header ] end -->