<!doctype html>
<html lang="en">
  <head>
  	<title>Radja Store Barokah Login </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/login/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h1 class="heading-section">Login Radja Store Barokah</h1>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h6 class="mb-3 text-center">Masukan Username & Password</h6>
		      	<form method="post" action="{{ '/login' }}" class="signin-form">
					@csrf
					@method('post')
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Username" name="username" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" name="password" required>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
					<br>
					<a href="/">Back To Home</a>
	            </div>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
@if(Session::has('loginError'))
<script>alert ("{{ session('loginError') }}")</script>
@endif

	</body>
</html>

