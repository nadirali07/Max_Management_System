@extends('admin.layout')
@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
<!-- Custom fonts for this template-->
<link href="{{ asset('man/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css') }}" >
@endsection

@section('title', 'Management | ')

@section('menu_active', '')
@section('m_active', 'active')
@section('s_active', '')
@section('i_active', '')
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
								Max Restaurant Managment
					</div>
					<div class="card-body" style="background: rgba(0, 0, 0, 0.5);">
						<table id="example" class="table table-bordered text-white" style="width:100%">
							<thead>
								<tr>
									<th>Name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Age</th>
									<th>Start date</th>
									<th>Salary</th>
								</tr>
							</thead>
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
								<tr>
									<td>Brielle Williamson</td>
									<td>Integration Specialist</td>
									<td>New York</td>
									<td>61</td>
									<td>2012/12/02</td>
									<td>$372,000</td>
								</tr>
								<tr>
									<td>Herrod Chandler</td>
									<td>Sales Assistant</td>
									<td>San Francisco</td>
									<td>59</td>
									<td>2012/08/06</td>
									<td>$137,500</td>
								</tr>
								<tr>
									<td>Rhona Davidson</td>
									<td>Integration Specialist</td>
									<td>Tokyo</td>
									<td>55</td>
									<td>2010/10/14</td>
									<td>$327,900</td>
								</tr>
								<tr>
									<td>Colleen Hurst</td>
									<td>Javascript Developer</td>
									<td>San Francisco</td>
									<td>39</td>
									<td>2009/09/15</td>
									<td>$205,500</td>
								</tr>
								<tr>
									<td>Sonya Frost</td>
									<td>Software Engineer</td>
									<td>Edinburgh</td>
									<td>23</td>
									<td>2008/12/13</td>
									<td>$103,600</td>
								</tr>
								<tr>
									<td>Jena Gaines</td>
									<td>Office Manager</td>
									<td>London</td>
									<td>30</td>
									<td>2008/12/19</td>
									<td>$90,560</td>
								</tr>
							</tbody>
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