@extends('admin.layout')
@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
<!-- Custom fonts for this template-->
<link href="{{ asset('man/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
@endsection


@section('title', 'Menu | ')


@section('menu_active', 'active')
@section('m_active', '')
@section('s_active', '')
@section('i_active', '')
@section('mem_active', '')



@section('content')
<!-- body -->
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
					<div class="col-lg-12 rounded bg-white scroller" >
						<div class="row my-2">
							<div class="col-sm-3">
								<div class="card mt-4">
									<img class="card-img-top pimg mx-auto my-3" src="images/coke.png" alt="Card image cap">
									<div class="card-body p-1 text-center" style="background-color: #1D7CA7;">
										<span class="font-weight-bold text-white">Coke Tin</span>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="card mt-4">
									<img class="card-img-top pimg mx-auto my-3" src="images/fanta.png" alt="Card image cap">
									<div class="card-body p-1 text-center"style="background-color: #1D7CA7;">
										<span class="font-weight-bold text-white">Fanta Tin</span>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="card mt-4">
									<img class="card-img-top pimg mx-auto my-3" src="images/7up.png" alt="Card image cap">
									<div class="card-body p-1 text-center" style="background-color: #1D7CA7;"> 
										<span class="font-weight-bold text-white">7Up Tin</span>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="card mt-4">
									<img class="card-img-top pimg mx-auto my-3" src="images/buffalo-burger.png" alt="Card image cap">
									<div class="card-body p-1 text-center" style="background-color: #1D7CA7;">
										<span class="font-weight-bold text-white">buffalo-burger</span>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="card mt-4">
									<img class="card-img-top pimg mx-auto my-3" src="images/hamburger.png" alt="Card image cap">
									<div class="card-body p-1 text-center" style="background-color: #1D7CA7;">
										<span class="font-weight-bold text-white">hamburger</span>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="card mt-4">
									<img class="card-img-top pimg mx-auto my-3" src="images/cocktail.png" alt="Card image cap">
									<div class="card-body p-1 text-center" style="background-color: #1D7CA7;">
										<span class="font-weight-bold text-white">cocktail juice</span>
									</div>
								</div>
							</div>		
						</div>
					</div>
				</div>
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
							<button type="submit"><i class="fas fa-user-check text-white"></i></button>
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
							<input type="number" class="form-control" id="stotal" placeholder="$14.00" readonly>
						</div>
						<div class="form-inline mt-3 float-right">
							<label for="stotal" class="text-white font-weight-bold">Discount: </label>
							<input type="number" class="form-control" id="stotal" placeholder="-$4.00" readonly>
						</div>
						<div class="form-inline mt-3 float-right">
							<label for="stotal" class="text-white font-weight-bold">Total: </label>
							<input type="number" class="form-control" id="stotal" placeholder="$10.00" readonly>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 text-right">
						<button class="btn btn-dark">Cancel</button>
						<button class="btn btn-dark">Print</button>
						<button class="btn btn-dark">Generate</button>
					</div>
				</div>
			</div>
			<!-- right side div -->
		</div>

	</div>

</div>
<div class="container-fluid text-center bg-dark py-3 mt-5">
	<span class="text-white"> Copyright@imnadir07@gmail.com</span>
	
</div>
@endsection