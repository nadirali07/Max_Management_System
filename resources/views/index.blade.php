
@extends('layout')

@section('head')
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

<!-- Custom fonts for this template-->
<link href="{{ asset('man/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

<!-- Page level plugin CSS-->
<link href="{{ asset('man/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

<!-- Custom styles for this template-->
<!-- <link href="{{ asset('man/css/sb-admin.css')}}" rel="stylesheet"> -->

<style type="text/css">
			#myInput::placeholder {
				color: white;
			}
		</style>

@endsection

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
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/coke.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">Coke tin</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/7up.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">7up tin</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/fanta.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">fanta tin</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/cocktail.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">cocktail Juice</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/sprite.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">sprite tin</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/hamburger.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">ham burger</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/buffalo-burger.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">buffalo burger</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/fries.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">fries</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/7up.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">7up tin</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/fanta.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">fanta tin</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/cocktail.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">cocktail Juice</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/sprite.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">sprite tin</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/hamburger.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">ham burger</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/buffalo-burger.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">buffalo burger</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/7up.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">7up tin</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/fanta.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">fanta tin</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/cocktail.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">cocktail Juice</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/sprite.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">sprite tin</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/hamburger.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">ham burger</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/buffalo-burger.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">buffalo burger</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/7up.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">7up tin</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/fanta.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">fanta tin</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/cocktail.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">cocktail Juice</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/sprite.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">sprite tin</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/hamburger.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">ham burger</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/buffalo-burger.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">buffalo burger</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/7up.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">7up tin</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/fanta.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">fanta tin</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/cocktail.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">cocktail Juice</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/sprite.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">sprite tin</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/hamburger.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">ham burger</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/buffalo-burger.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">buffalo burger</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/7up.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">7up tin</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/fanta.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">fanta tin</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/cocktail.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">cocktail Juice</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/sprite.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">sprite tin</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/hamburger.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">ham burger</span>
													</div>
												</div>
												<div class="col-lg-2 col-xs-3">
													<div class="text-center">
														<span><img src="images/buffalo-burger.png" class="pimg mx-auto" width="40px"></span>
														<span class="font-weight-bold text-uppercase text-dark text-center">buffalo burger</span>
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
													<table class="table table-light rounded text-center table-hover" >
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
							<!-- DataTables Example -->
							<div class="card mb-3 bg-transparent text-white">
								<div class="card-header" style="font-size: 20px; background: rgba(255, 182, 6, 0.5);">
									<i class="fas fa-table"></i>
								Max Restaurant Managment</div>
								<div class="card-body" style="background: rgba(0, 0, 0, 0.5);">
									<div class="table-responsive">
										<table class="table table-bordered text-white" id="dataTable" width="100%" cellspacing="0" style="font-size: 16px;">
											<thead class="text-white">
												<tr>
													<th>Name</th>
													<th>Position</th>
													<th>Office</th>
													<th>Age</th>
													<th>Start date</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>Name</th>
													<th>Position</th>
													<th>Office</th>
													<th>Age</th>
													<th>Start date</th>
													<th>Salary</th>
												</tr>
											</tfoot>
											<tbody>
												<tr>
													<td>Tiger Nixon</td>
													<td>System Architect</td>
													<td>Edinburgh</td>
													<td>61</td>
													<td>2011/04/25</td>
													<td>$320,800</td>
												</tr>
												<tr>
													<td>Garrett Winters</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>63</td>
													<td>2011/07/25</td>
													<td>$170,750</td>
												</tr>
												<tr>
													<td>Ashton Cox</td>
													<td>Junior Technical Author</td>
													<td>San Francisco</td>
													<td>66</td>
													<td>2009/01/12</td>
													<td>$86,000</td>
												</tr>
												<tr>
													<td>Cedric Kelly</td>
													<td>Senior Javascript Developer</td>
													<td>Edinburgh</td>
													<td>22</td>
													<td>2012/03/29</td>
													<td>$433,060</td>
												</tr>
												<tr>
													<td>Airi Satou</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>33</td>
													<td>2008/11/28</td>
													<td>$162,700</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer small text-white" style="font-size: 12px;background: rgba(255, 182, 6, 0.5);">Updated yesterday at 11:59 PM</div>
							</div>
						</div>
						

					</div>
					<!-- managment tab end-->

					<!-- statistics tab start-->
					<div role="tabpanel" class="tab-pane" id="statistics">
						<div class="container my-4">
							<!-- Icon Cards-->
							<div class="row">
								<div class="col-xl-3 col-sm-6 mb-3">
									<div class="card text-white o-hidden h-100" style="background: rgba(255, 182, 6, 0.5);">
										<div class="card-body">
											<div class="card-body-icon">
												<i class="fas fa-fw fa-comments"></i>
											</div>
											<div class="mr-5">26 New Complains!</div>
										</div>
										<a class="card-footer text-white clearfix small z-1" href="#">
											<span class="float-left">View Details</span>
											<span class="float-right">
												<i class="fas fa-angle-right"></i>
											</span>
										</a>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 mb-3">
									<div class="card text-white o-hidden h-100" style="background: rgba(255, 182, 6, 0.5);">
										<div class="card-body">
											<div class="card-body-icon">
												<i class="fas fa-fw fa-list"></i>
											</div>
											<div class="mr-5">11 Todays Orders!</div>
										</div>
										<a class="card-footer text-white clearfix small z-1" href="#">
											<span class="float-left">View Details</span>
											<span class="float-right">
												<i class="fas fa-angle-right"></i>
											</span>
										</a>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 mb-3">
									<div class="card text-white o-hidden h-100" style="background: rgba(255, 182, 6, 0.5);">
										<div class="card-body">
											<div class="card-body-icon">
												<i class="fas fa-fw fa-shopping-cart"></i>
											</div>
											<div class="mr-5">123 weekly Orders!</div>
										</div>
										<a class="card-footer text-white clearfix small z-1" href="#">
											<span class="float-left">View Details</span>
											<span class="float-right">
												<i class="fas fa-angle-right"></i>
											</span>
										</a>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 mb-3">
									<div class="card text-white o-hidden h-100" style="background: rgba(255, 182, 6, 0.5);">
										<div class="card-body">
											<div class="card-body-icon">
												<i class="fas fa-fw fa-life-ring"></i>
											</div>
											<div class="mr-5">1300 Monthly Orders!</div>
										</div>
										<a class="card-footer text-white clearfix small z-1" href="#">
											<span class="float-left">View Details</span>
											<span class="float-right">
												<i class="fas fa-angle-right"></i>
											</span>
										</a>
									</div>
								</div>
							</div>

						</div>
						<div class="container my-5">
							<!-- DataTables Example -->
							<div class="card mb-3 bg-transparent text-white">
								<div class="card-header" style="font-size: 20px; background: rgba(255, 182, 6, 0.5);">
									<i class="fas fa-table"></i>
								Max Restaurant Recent Sales</div>
								<div class="card-body" style="background: rgba(0, 0, 0, 0.5);">
									<div class="table-responsive">
										<table class="table table-bordered text-white" id="dataTable" width="100%" cellspacing="0" style="font-size: 16px;">
											<thead class="text-white">
												<tr>
													<th>#</th>
													<th>NAME</th>
													<th>STATUS</th>
													<th>DATE</th>
													<th>PRICE</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>#</th>
													<th>NAME</th>
													<th>STATUS</th>
													<th>DATE</th>
													<th>PRICE</th>
												</tr>
											</tfoot>
											<tbody>
												<tr>
													<td>1</td>
													<td class="txt-oflo">Elite admin</td>
													<td>SALE</td>
													<td class="txt-oflo">April 18, 2017</td>
													<td><span class="text-success">$24</span></td>
												</tr>
												<tr>
													<td>2</td>
													<td class="txt-oflo">Real Homes WP Theme</td>
													<td>EXTENDED</td>
													<td class="txt-oflo">April 19, 2017</td>
													<td><span class="text-info">$1250</span></td>
												</tr>
												<tr>
													<td>3</td>
													<td class="txt-oflo">Ample Admin</td>
													<td>EXTENDED</td>
													<td class="txt-oflo">April 19, 2017</td>
													<td><span class="text-info">$1250</span></td>
												</tr>
												<tr>
													<td>4</td>
													<td class="txt-oflo">Medical Pro WP Theme</td>
													<td>TAX</td>
													<td class="txt-oflo">April 20, 2017</td>
													<td><span class="text-danger">-$24</span></td>
												</tr>
												<tr>
													<td>5</td>
													<td class="txt-oflo">Hosting press html</td>
													<td>SALE</td>
													<td class="txt-oflo">April 21, 2017</td>
													<td><span class="text-success">$24</span></td>
												</tr>
												<tr>
													<td>6</td>
													<td class="txt-oflo">Digital Agency PSD</td>
													<td>SALE</td>
													<td class="txt-oflo">April 23, 2017</td>
													<td><span class="text-danger">-$14</span></td>
												</tr>
												<tr>
													<td>7</td>
													<td class="txt-oflo">Helping Hands WP Theme</td>
													<td>MEMBER</td>
													<td class="txt-oflo">April 22, 2017</td>
													<td><span class="text-success">$64</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer small text-white" style="font-size: 12px;background: rgba(255, 182, 6, 0.5);">Updated yesterday at 11:59 PM</div>
							</div>
							
							<div class="text-white my-4">
								<div class="row">
									<div class="col-md-12 col-lg-12 col-sm-12">
										<div class=" rounded" style="background: rgba(0, 0, 0, 0.5);">
											<h3 class="box-title p-3" style="background: rgba(255, 182, 6, 0.5);">Recent Complains</h3>
											<div class="px-5" style="height: 200px;overflow: auto;">
												<div class="comment-body">
													<div class="user-img"> <i class="fas fa-user fa-2x"></i><span class="h4"> Pavan kumar</span>
													</div>
													<div class="mail-contnet">
														<span class="time">10:20 AM   20  may 2016</span>
														<br/><span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. Aenean commodo dui pellentesque molestie feugiat</span> 
													</div>
												</div>
												<br>
												<div class="comment-body">
													<div class="user-img"> <i class="fas fa-user fa-2x"></i><span class="h4"> Pavan kumar</span>
													</div>
													<div class="mail-contnet">
														<span class="time">10:20 AM   20  may 2016</span>
														<br/><span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. Aenean commodo dui pellentesque molestie feugiat</span> 
													</div>
												</div>
												<br>
												<div class="comment-body">
													<div class="user-img"> <i class="fas fa-user fa-2x"></i><span class="h4"> Pavan kumar</span>
													</div>
													<div class="mail-contnet">
														<span class="time">10:20 AM   20  may 2016</span>
														<br/><span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. Aenean commodo dui pellentesque molestie feugiat</span> 
													</div>
												</div>
												<br>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<!-- statistics tab end -->

					<!-- waiters tab start-->
					<div role="tabpanel" class="tab-pane" id="Items">
						<div class="container pt-5">
							<button class="btn btn-warning">Add New Items</button>
							
						</div>
						<div class="container my-5">
							<!-- DataTables Example -->
							<div class="card mb-3 bg-transparent text-white">
								<div class="card-header" style="font-size: 20px; background: rgba(255, 182, 6, 0.5);">
									<i class="fas fa-table"></i>
								Max Restaurant Items</div>
								<div class="card-body" style="background: rgba(0, 0, 0, 0.5);">
									<div class="table-responsive">
										<table class="table table-bordered text-white" id="dataTable" width="100%" cellspacing="0" style="font-size: 16px;">
											<thead class="text-white">
												<tr>
													<th>Item Name</th>
													<th>Price</th>
													<th>Available Stock</th>
													<th>&nbsp;</th>
													<th>&nbsp;</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>Item Name</th>
													<th>Price</th>
													<th>Available Stock</th>
													<th>&nbsp;</th>
													<th>&nbsp;</th>
												</tr>
											</tfoot>
											<tbody>
												<tr>
													<td>Burger</td>
													<td>$200</td>
													<td>30</td>
													<td class="text-center"><a href="#"><i class="fas fa-edit text-warning"></i></a></td>
													<td class="text-center"><a href="#"><i class="fas fa-trash-alt text-warning"></i></a></td>
												</tr>
												<tr>
													<td>Burger</td>
													<td>$200</td>
													<td>30</td>
													<td class="text-center"><a href="#"><i class="fas fa-edit text-warning"></i></a></td>
													<td class="text-center"><a href="#"><i class="fas fa-trash-alt text-warning"></i></a></td>
												</tr>
												<tr>
													<td>Burger</td>
													<td>$200</td>
													<td>30</td>
													<td class="text-center"> <a href="#"><i class="fas fa-edit text-warning"></i></a></td>
													<td class="text-center"><a href="#"><i class="fas fa-trash-alt text-warning"></i></a></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer small text-white" style="font-size: 12px;background: rgba(255, 182, 6, 0.5);">Updated yesterday at 11:59 PM</div>
							</div>
							
						</div>


						
					</div>
					<!-- waiters tab end-->

					<!-- report tab start-->
					<div role="tabpanel" class="tab-pane" id="Members">
						<div class="container pt-5">
							<input id="myInput" type="text" placeholder="Search.." class="float-right border-white text-white form-control validate col-lg-3 border-warning" style="border:1px solid; background-color:rgba(255, 182, 6, 0.5);">
							<script>
						$(document).ready(function(){
							$("#myInput").on("keyup", function() {
								var value = $(this).val().toLowerCase();
								$("#myTable tr").filter(function() {
									$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
								});
							});
						});
					</script>
							
						</div>
						<div class="container my-5">
							<!-- DataTables Example -->
							<div class="card mb-3 bg-transparent text-white">
								<div class="card-header" style="font-size: 20px; background: rgba(255, 182, 6, 0.5);">
									<i class="fas fa-table"></i>
								Max Restaurant Members</div>
								<div class="card-body" style="background: rgba(0, 0, 0, 0.5);">
									<div class="table-responsive">
										<table class="table table-bordered text-white" id="dataTable" width="50%" cellspacing="0" style="font-size: 16px;">
											<thead class="text-white">
												<tr>
													<th>Member Name</th>
													<th>Membership No.</th>
													<th>Membership date</th>
													<th>Expiring Date</th>
													
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>Member Name</th>
													<th>Membership No.</th>
													<th>Membership date</th>
													<th>Expiring Date</th>
													
												</tr>
											</tfoot>
											<tbody id="myTable">
												<tr>
													<td>Tiger Nixon</td>
													<td>AXVF123</td>
													<td>12-12-12</td>
													<td>12-12-12</td>
												</tr>
												<tr>
													<td>Tiger Nixon</td>
													<td>AXVF123</td>
													<td>12-12-12</td>
													<td>12-12-12</td>
												</tr>
												<tr>
													<td>Tiger Nixon</td>
													<td>AXVF123</td>
													<td>12-12-12</td>
													<td>12-12-12</td>
												</tr>
												<tr>
													<td>Tiger Nixon</td>
													<td>AXVF123</td>
													<td>12-12-12</td>
													<td>12-12-12</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card-footer small text-white" style="font-size: 12px;background: rgba(255, 182, 6, 0.5);">Updated yesterday at 11:59 PM</div>
							</div>
						</div>
						

						
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


<!-- managment script -->
<!-- Bootstrap core JavaScript-->
<script src="{{asset('man/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('man/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('man/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Page level plugin JavaScript-->
<script src="{{asset('man/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('man/vendor/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('man/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('man/js/sb-admin.min.js')}}"></script>

<!-- Demo scripts for this page-->
<script src="{{asset('man/js/demo/datatables-demo.js')}}"></script>
<script src="{{asset('man/js/demo/chart-area-demo.js')}}"></script>
<!-- managment script -->

</body>
</html>
@endsection