@extends('admin.layout')
@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
<!-- Custom fonts for this template-->
<link href="{{ asset('man/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<style type="text/css">
	.itemhover:hover{
  background-color: #53B4DF;
  color: white;
  cursor: pointer;
}
</style>

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
							<input type="number" class="form-control p-1 text-center font-weight-bold rounded" id="qty" placeholder="QUANTITY">
						</div>
					</div>											
				</div>
				<div class="row">
					<div class="col-lg-12 rounded scroller" style="background: rgba(0, 0, 0, 0.5);">
						<div class="row my-2">
              				@foreach($items as $item)
							<div class="col-sm-3">
								<div class="card mt-4 itemhover" onclick="addrow('{{ $item->item_name }}','{{ $item->item_price }}')">
									<img class="card-img-top pimg mx-auto my-3" src="images/{{ $item->item_img }}" alt="Card image cap">
									<div class="card-body p-1 text-center" style="background-color: #1D7CA7;">
										<span class="font-weight-bold text-white">{{ $item->item_name }}</span>
									</div>
								</div>
							</div>
							@endforeach
							<!-- <div class="col-sm-3">
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
							</div> -->		
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
				<script type="text/javascript">
					function addrow(item_name,item_price) {
				var t = document.getElementById("table");
				var totalrows = document.getElementById("table").rows.length;
				var row = table.insertRow(totalrows);
				var c1 = row.insertCell(0);
				var c2 = row.insertCell(1);
				var c3 = row.insertCell(2);
				var c4 = row.insertCell(3);
				var c5 = row.insertCell(4);
				var qty=document.getElementById("qty").value;
				var cqty;
				var totalprice;
				if (qty=="") {
					cqty=1;
				}
				else
				{
					cqty=qty;
				}
				
				var p=item_price;
				totalprice=cqty*p;


				c1.innerHTML = item_name;
				c2.innerHTML = cqty;
				c3.innerHTML = item_price;
				c4.innerHTML = totalprice;




        }
				</script>
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar ">
							<table class="table table-light rounded text-white saletable " id="table" style="background: rgba(0, 0, 0, 0.5);" >
								<thead>
									<tr>
										<th scope="col" class="text-center">Item Name</th>
										<th scope="col" class="text-center">Qty</th>
										<th scope="col" class="text-center">Price</th>
										<th scope="col" class="text-center">Ext-Price</th>
									</tr>
								</thead>
								<tbody class="text-center">
									<!-- <tr scope="row">
										<td>Burger</td>
										<td>3</td>
										<td>90</td>
										<td>270</td>
									</tr> -->
									<!-- <tr>
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
									</tr> -->
								</tbody>
							</table>
						</div>
					</div>											
				</div>
				<div class="row py-3">
					<div class="col-sm-4">
						<form class="form-inline" action="">
							<label for="coupan" class="text-white font-weight-bold">Coupan No:</label>
							<input type="text" class="form-control text-white" id="coupan" placeholder="AX25VZ" style="background: rgba(0, 0, 0, 0.5);">
						</form>

					</div>
					<div class="col-sm-8">
						<div class="form-inline float-right">
							<label for="stotal" class="text-white font-weight-bold">Sub-Total: </label>
							<input type="number" class="form-control text-white" id="stotal" placeholder="$14.00"style="background: rgba(0, 0, 0, 0.5);" readonly>
						</div>
						<div class="form-inline mt-3 float-right">
							<label for="stotal" class="text-white font-weight-bold">Discount: </label>
							<input type="number" class="form-control text-white" id="stotal" placeholder="-$4.00" style="background: rgba(0, 0, 0, 0.5);" readonly>
						</div>
						<div class="form-inline mt-3 float-right">
							<label for="stotal" class="text-white font-weight-bold">Total: </label>
							<input type="number" class="form-control text-white" id="stotal" placeholder="$10.00" style="background: rgba(0, 0, 0, 0.5);" readonly>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 text-right">
						<button class="btn btn-dark text-white">Cancel</button>
						<button class="btn btn-dark text-white">Print</button>
						<button class="btn btn-dark text-white">Generate</button>
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