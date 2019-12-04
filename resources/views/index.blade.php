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
	@extends('layout')


	@section('content')


	<!-- body -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="tab-content">
					<!-- menu tab start -->
					<div role="tabpanel" class="tab-pane active" id="menu">
						<div class="container-fluid" style="" >
							<div class="container">
								<div class="row py-5">
									<!-- left side div -->
									<div class="col-lg-6">
										<div class="row">
											<div class="col-lg-6 col-sm-6">
												<div class="form-group">
													<input type="text" class="form-control p-1 text-center font-weight-bold rounded" placeholder="SEARCH">
												</div>
											</div>
											<div class="col-lg-6 col-sm-6">
												<div class="form-group">
													<input type="number" class="form-control p-1 text-center font-weight-bold rounded" placeholder="QUANTITY">
												</div>
											</div>											
										</div>
										<div class="row">
											<div class="col-lg-12 bg-white rounded">
												<div class="row mt-2 scroller">
													<div class="col-lg-2 col-xs-2">
														<div class="text-center">
															<span><img src="images/coke.png" class="pimg mx-auto" width="40px"></span>
															<span class="font-weight-bold text-uppercase text-dark text-center">Coke tin</span>
														</div>
													</div>
													<div class="col-lg-2 col-xs-2">
														<div class="text-center">
															<span><img src="images/7up.png" class="pimg mx-auto" width="40px"></span>
															<span class="font-weight-bold text-uppercase text-dark text-center">7up tin</span>
														</div>
													</div>
													<div class="col-lg-2 col-xs-2">
														<div class="text-center">
															<span><img src="images/fanta.png" class="pimg mx-auto" width="40px"></span>
															<span class="font-weight-bold text-uppercase text-dark text-center">fanta tin</span>
														</div>
													</div>
													<div class="col-lg-2 col-xs-2">
														<div class="text-center">
															<span><img src="images/cocktail.png" class="pimg mx-auto" width="40px"></span>
															<span class="font-weight-bold text-uppercase text-dark text-center">cocktail Juice</span>
														</div>
													</div>
													<div class="col-lg-2 col-xs-2">
														<div class="text-center">
															<span><img src="images/sprite.png" class="pimg mx-auto" width="40px"></span>
															<span class="font-weight-bold text-uppercase text-dark text-center">sprite tin</span>
														</div>
													</div>
													<div class="col-lg-2 col-xs-2">
														<div class="text-center">
															<span><img src="images/hamburger.png" class="pimg mx-auto" width="40px"></span>
															<span class="font-weight-bold text-uppercase text-dark text-center">ham burger</span>
														</div>
													</div>
													<div class="col-lg-2 col-xs-2">
														<div class="text-center">
															<span><img src="images/buffalo-burger.png" class="pimg mx-auto" width="40px"></span>
															<span class="font-weight-bold text-uppercase text-dark text-center">buffalo burger</span>
														</div>
													</div>
													<div class="col-lg-2 col-xs-2">
														<div class="text-center">
															<span><img src="images/fries.png" class="pimg mx-auto" width="40px"></span>
															<span class="font-weight-bold text-uppercase text-dark text-center">fries</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- <div class="row">
											<div class="col-lg-12 mt-3">
												<a href="#" class="btn btn-warning">Items</a>
												<a href="#" class="btn btn-warning">Max Members</a>
											</div>
										</div> -->
									</div>
									<!-- left side div -->

									<!-- right side div -->
									<div class="col-lg-6">
										<div class="row py-2">
											<div class="col-lg-4 pt-4 col-xs-4">
												<span class="font-weight-bold h4 text-white text-uppercase" >Bill No 50/2019</span>
											</div>
											<div class="col-lg-8 mb-2 col-xs-8 mt-xs-2">
												<form class="membership" action="" style="margin-left: auto;max-width:250px">
													<input type="text" placeholder="Membership No." name="search2">
													<button type="submit"><i class="fas fa-user-check text-success"></i></button>
												</form>
												
											</div>
											
										</div>
										<div class="row">
											<div class="col-lg-12">
												<div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar ">
													<table class="table table-light rounded text-center table-hover" style="font-size: 15px">
														<thead>
															<tr>
																<th class="text-center">Item Name</th>
																<th class="text-center">Qty</th>
																<th class="text-center">Price</th>
																<th class="text-center">Ext-Price</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Burger</td>
																<td>3</td>
																<td>90</td>
																<td>270</td>
															</tr>
															<tr>
																<td>Burger</td>
																<td>3</td>
																<td>90</td>
																<td>270</td>
															</tr>
															<tr>
																<td>Burger</td>
																<td>3</td>
																<td>90</td>
																<td>270</td>
															</tr>
															<tr>
																<td>Burger</td>
																<td>3</td>
																<td>90</td>
																<td>270</td>
															</tr>
															<tr>
																<td>Burger</td>
																<td>3</td>
																<td>90</td>
																<td>270</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>											
										</div>
										<div class="row py-3">
											<div class="col-sm-4">
												<form class="form-inline" action="">
													<label for="coupan" class="text-white font-weight-bold">Coupan No:</label>
													<input type="text" class="form-control" id="coupan" placeholder="AX25VZ">
												</form>
												
											</div>
											<div class="col-sm-8">
												<div class="form-inline float-right">
													<label for="stotal" class="text-white font-weight-bold">Sub-Total: </label>
													<input type="number" class="form-control" id="stotal" placeholder="$14.00">
												</div>
												<div class="form-inline mt-3 float-right">
													<label for="stotal" class="text-white font-weight-bold">Discount: </label>
													<input type="number" class="form-control" id="stotal" placeholder="-$4.00">
												</div>
												<div class="form-inline mt-3 float-right">
													<label for="stotal" class="text-white font-weight-bold">Total: </label>
													<input type="number" class="form-control" id="stotal" placeholder="$10.00">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 text-right">
												<button class="btn btn-warning">Cancel</button>
												<button class="btn btn-warning">Print</button>
												<button class="btn btn-warning">Generate</button>
											</div>
										</div>

										
										
									</div>
									<!-- right side div -->
								</div>
								
							</div>
							
						</div>

					</div>
					<!-- menu tab end -->

					<!-- managment tab start-->
					<div role="tabpanel" class="tab-pane" id="managment">
						<div class="container my-5">
							@include('manage')
						</div>
						

					</div>
					<!-- managment tab end-->

					<!-- statistics tab start-->
					<div role="tabpanel" class="tab-pane" id="statistics">

					</div>
					<!-- statistics tab end -->

					<!-- waiters tab start-->
					<div role="tabpanel" class="tab-pane" id="waiters">
						
					</div>
					<!-- waiters tab end-->

					<!-- report tab start-->
					<div role="tabpanel" class="tab-pane" id="report">
						
					</div>
					<!-- report tab end-->
				</div>
				
			</div>
		</div>
	</div>
	<!-- body -->


	






	<script type="text/javascript">
    // script for tab steps
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

    	var href = $(e.target).attr('href');
    	var $curr = $(".process-model  a[href='" + href + "']").parent();

    	$('.process-model li').removeClass();

    	$curr.addClass("active");
    	$curr.prevAll().addClass("visited");
    });
// end  script for tab steps
</script>

</body>
</html>
@endsection