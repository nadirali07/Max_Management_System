<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Managment | Max Restaurant</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('man/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{ asset('man/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('man/css/sb-admin.css')}}" rel="stylesheet">

</head>
<body>
	<!-- DataTables Example -->
        <div class="card mb-3 bg-transparent text-white">
          <div class="card-header" style="font-size: 20px;background: rgba(255, 182, 6, 0.5);">
            <i class="fas fa-table"></i>
            Max Restaurant Managment</div>
          <div class="card-body" style="background: rgba(0, 0, 0, 0.5);">
            <div class="table-responsive" style="font-size: 15px;">
              <table class="table table-bordered text-white" id="dataTable" width="100%" cellspacing="0">
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
      <!-- /.container-fluid -->



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

</body>
</html>