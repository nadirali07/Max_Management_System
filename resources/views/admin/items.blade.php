@extends('admin.layout')
@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
<!-- Custom fonts for this template-->
<link href="{{ asset('man/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css') }}" >
<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection

@section('title', 'Items | ')

@section('menu_active', '')
@section('m_active', '')
@section('s_active', '')
@section('i_active', 'active')
@section('mem_active', '')




@section('content')
<!-- body -->
<div class="container-fluid" style="" >
	<div class="container">
		<div class="row py-5">
			<div class="col-lg-12">
				
				<div class="card bg-transparent text-white" >
					<div class="card-header font-weight-bold" style="font-size: 20px; background: #1C9CD6;">
						<i class="fas fa-table"></i>
						Max Menu Items
						<button class="btn btn-dark text-light float-right" type="button" data-toggle="modal" data-target="#exampleModalCenter">Add New Items</button>
					</div>
					<div class="card-body" style="background: rgba(0, 0, 0, 0.5);">
						<table id="example" class="table table-bordered text-white" style="width:100%">
							<thead>
								<tr>
									<th>Item ID</th>
									<th>Item Name</th>
									<th>Price</th>
									<th>Available Stock</th>
									<th>&nbsp;</th>
									<th>&nbsp;</th>
								</tr>
							</thead>
							<tbody>
								@foreach($items as $item)
								<tr>
									<td>{{ $item->item_id }}</td>
									<td>{{ $item->item_name }}</td>
									<td>Rs {{ $item->item_price }}/-</td>
									<td>{{ $item->item_qty }}</td>
									<td class="text-center"><a href="#" class="text-white"><i class="fas fa-edit text-primary"></i> Edit</a></td>
									<td class="text-center">
										<form action="{{ route('items.destroy', $item->item_id)}}" method="post">
											{{ csrf_field() }}
											@method('DELETE')
											<button class="btn bg-transparent border-0 p-0 text-white" type="submit"><i class="fas fa-trash-alt text-danger"></i> Delete</button>
										</form>

										</td>
									</tr>
									@endforeach
								</tbody>
								<tfoot>
									<tr>
										<th>Item ID</th>
										<th>Item Name</th>
										<th>Price</th>
										<th>Available Stock</th>
										<th>&nbsp;</th>
										<th>&nbsp;</th>
									</tr>
								</tfoot>
							</table>

						</div>
						<div class="card-footer small text-white" style=" background: #1C9CD6;">
							Updated yesterday at 11:59 PM
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- modal for items start -->


	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header bg-dark text-white">
					<h5 class="modal-title" id="exampleModalLongTitle">NEW ITEM DETAILS:</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data" name="add_product">
						{{ csrf_field() }}
						<div class="form-group">
							<label>Item Name:</label>
							<input type="text" name="item_name" id="item_name" class="form-control" placeholder="">
						</div>

						<div class="form-group">
							<label> Quantity:</label>
							<input type="number" name="item_qty" id="item_qty" class="form-control" placeholder="">
						</div>

						<div class="form-group">
							<label> Price:</label>
							<input type="number" name="item_price" id="item_price" class="form-control" placeholder="">
						</div>
						<div class="form-group ">
							<label> Upload Product Image:</label>
							<input type="file" name="item_img" id="file">
						</div>


					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success">Save</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- model end for items -->
	@endsection

	@section('footer')
	<script type="text/javascript">
		$(document).ready(function() {
			$('#example').DataTable();
		} );
	</script>
	<script src="{{asset('https://code.jquery.com/jquery-3.3.1.js')}}"></script>
	<script src="{{asset('https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js')}}"></script>

	@endsection