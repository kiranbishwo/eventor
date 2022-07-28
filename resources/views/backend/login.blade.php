<!DOCTYPE html>
<html lang="en">

<head>

	<title>Eventor Login Page</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="{{ url('backend/assets/images/favicon.png')}}" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="{{ url('backend/assets/css/style.css')}}">
	
	


</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center">
		<div class="card borderless">
			<div class="row align-items-center ">
				<div class="col-md-12">
					<div class="card-body">
						<h4 class="mb-3 f-w-400">Signin</h4>
						<hr>
						<form id="loginForm" action="{{ url('loginadmin') }}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email address">
								
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
								
                            </div>
                            <button class="btn btn-block btn-primary mb-4" type="submit" name="submit">Signin</button>
                        </form>
						<hr>
                        <div id="errormsg">
                            @if(session('error'))
                                <div class="alert bg-danger text-white">{{session('error')}}</div>
                            @endif
                        </div>
                        
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



</body>

</html>
