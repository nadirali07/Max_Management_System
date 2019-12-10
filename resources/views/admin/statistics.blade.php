@extends('admin.layout')
@section('head')

<link rel="stylesheet" type="text/css" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
<!-- Custom fonts for this template-->
<link href="{{ asset('man/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css') }}" >

@endsection

@section('title', 'Statistics | ')

@section('menu_active', '')
@section('m_active', '')
@section('s_active', 'active')
@section('i_active', '')
@section('mem_active', '')



@section('content')
<!-- body -->
<div class="container-fluid">
	<div class="container">
		<div class="row mt-5">
			<div class="col-lg-12">
				<!-- Icon Cards-->
				<div class="row">
					<div class="col-xl-3 col-sm-6 mb-3">
						<div class="card text-white o-hidden h-100" style="background: rgba(0, 0, 0, 0.4);">
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
						<div class="card text-white o-hidden h-100" style="background: rgba(0, 0, 0, 0.4);">
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
						<div class="card text-white o-hidden h-100" style="background: rgba(0, 0, 0, 0.4);">
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
						<div class="card text-white o-hidden h-100" style="background: rgba(0, 0, 0, 0.4);">
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
				<!-- Icon Cards-->
			</div>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="container">
		<div class="row py-5">
			<div class="col-lg-12">
				<div class="card bg-transparent text-white" >
					<div class="card-header font-weight-bold" style="font-size: 20px; background: #1C9CD6;">
						<i class="fas fa-table"></i>
						Max Restaurant Recent Sales
					</div>
					<div class="card-body" style="background: rgba(0, 0, 0, 0.4);">
						<table id="example" class="table table-bordered text-white" style="width:100%">
							<thead>
								<tr>
									<th>#</th>
									<th>NAME</th>
									<th>STATUS</th>
									<th>DATE</th>
									<th>PRICE</th>
								</tr>
							</thead>
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
							<tfoot>
								<tr>
									<th>#</th>
									<th>NAME</th>
									<th>STATUS</th>
									<th>DATE</th>
									<th>PRICE</th>
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

<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="card bg-transparent text-white" >
					<div class="card-header font-weight-bold" style="font-size: 20px; background: #1C9CD6;">
						<i class="fas fa-table"></i>
						Max Recent Complains
					</div>
					<div class="card-body" style="background: rgba(0, 0, 0, 0.4);height: 250px;overflow: auto;">
						<div class="px-5">
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
					<div class="card-footer small text-white" style=" background: #1C9CD6;">
						Updated yesterday at 11:59 PM
					</div>
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>
<div class="container-fluid text-center bg-dark py-3 mt-5">
	<span class="text-white"> Copyright@imnadir07@gmail.com</span>
	
</div>

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