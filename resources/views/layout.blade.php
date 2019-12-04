<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css') }}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	

	<link rel="stylesheet" type="text/css" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css') }}" >
	<link rel="stylesheet" type="text/css" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
	<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>
	<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('https://kit.fontawesome.com/585b051251.js') }}" crossorigin="anonymous"></script>
	<title>Max Administrator</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
</head>
<body class="bg">
@section('header')
<!-- top bar  -->
	<div class="container-fluid " style="background: rgba(255, 182, 6, 0.5);">
		<div class="container py-1">
			<div class="row">
				<div class="col-lg-12">
					<span class="h5 text-white mr-2 font-weight-bold"><i class="far fa-clock text-white "></i> 05:54 PM</span>
					<span class="h5 text-white font-weight-bold"><i class="far fa-calendar-alt text-white"></i> 01 December,2019</span>
					<div class="float-right">
						<span class="h5 text-white font-weight-bold"><i class="far fa-user text-white "></i> Nadir Ali &nbsp &nbsp<i class="fas fa-ellipsis-v text-white "></i></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- top bar  -->

	<!-- nav bar -->
	<div class="container-fluid " style=" box-shadow: 0px 1px 8px #b37e04;background: rgba(0, 0, 0, 0.5); ">
		<div class="container mt-4">
			<div class="row">
				<div class="col-lg-6 logoimg">
					<img src="images/logo.png" width="180px">
				</div>
				<div class="col-lg-6">
					<!-- design process steps--> 
					<!-- Nav tabs -->
					<ul class="nav nav-tabs process-model more-icon-preocess mx-auto" role="tablist">
						<li role="presentation" class="active"><a href="#menu" aria-controls="discover" role="tab" data-toggle="tab"><i class="fa fa-hamburger" aria-hidden="true"></i>
							<p>MENU</p>
						</a></li>
						<li role="presentation"><a href="#managment" aria-controls="strategy" role="tab" data-toggle="tab"><i class="fa fa-users" aria-hidden="true" ></i>
							<p>Managment</p>
						</a></li>
						<li role="presentation"><a href="#statistics" aria-controls="optimization" role="tab" data-toggle="tab"><i class="fa fa-qrcode" aria-hidden="true"></i>
							<p>Statistics</p>
						</a></li>
						<li role="presentation"><a href="#waiters" aria-controls="content" role="tab" data-toggle="tab"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
							<p>Waiters</p>
						</a></li>
						<li role="presentation"><a href="#report" aria-controls="reporting" role="tab" data-toggle="tab"><i class="fa fa-clipboard" aria-hidden="true"></i>
							<p>Report</p>
						</a></li>
					</ul>
					<!-- Nav tabs -->
					<!-- end design process steps--> 
				</div>
			</div>
		</div>
	</div>
	<!-- nav bar -->
@show

@yield('content')

