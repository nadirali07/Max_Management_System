<!DOCTYPE html>
<html>
<head>
	@yield('head')
</head>
<body class="bg">
@section('header')
<!-- top bar  -->
	<div class="container-fluid " style="background: #53B4DF;">
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
	<div class="container-fluid " style=" box-shadow: 0px 1px 8px #1D7CA7;background: #1D7CA7; ">
		<div class="container mt-4">
			<div class="row">
				<div class="col-lg-6 logoimg">
					<img src="images/logo.png" width="180px">
				</div>
				<div class="col-lg-6">
					<!-- design process steps--> 
					<!-- Nav tabs -->
					<ul class="nav nav-tabs process-model more-icon-preocess mx-auto" role="tablist">
						<li role="presentation" class="active"><a href="#menu" aria-controls="menu" role="tab" data-toggle="tab"><i class="fa fa-hamburger" aria-hidden="true"></i>
							<p>MENU</p>
						</a></li>
						<li role="presentation"><a href="#managment" aria-controls="managment" role="tab" data-toggle="tab"><i class="fa fa-users" aria-hidden="true" ></i>
							<p>Managment</p>
						</a></li>
						<li role="presentation"><a href="#statistics" aria-controls="statistics" role="tab" data-toggle="tab"><i class="fa fa-qrcode" aria-hidden="true"></i>
							<p>Statistics</p>
						</a></li>
						<li role="presentation"><a href="#Items" aria-controls="Items" role="tab" data-toggle="tab"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
							<p>Items</p>
						</a></li>
						<li role="presentation"><a href="#Members" aria-controls="Members" role="tab" data-toggle="tab"><i class="fa fa-user-check" aria-hidden="true"></i>
							<p>Max Members</p>
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

