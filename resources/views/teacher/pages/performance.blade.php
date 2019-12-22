@extends('teacher.layout.mastar')

@section('content')


  <link rel="stylesheet" type="text/css" href="teacher/fontawesome-free-5.11.2-web\css\all.css">
	<!-- Bootstrap core css -->
	<link href="teacher/css/bootstrap.min.css" rel="stylesheet">
	<!-- Matarial Design Bootstrap -->
	<link href="teacher/css/mdb.min.css" rel="stylesheet">
	<!-- Custom stylees -->
	<link href="teacher/css/style.css" rel="stylesheet">


  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="js/mdb.min.js"></script>



<div class="container-fluid">
  <div class="row">
    <div class="col-8">
      <h2 class="bg-secondary text-white p-2">Teacher Activities</h2>
      <div class="container">
        <!-- creating Table -->
        <table class="table mt-3">
          <thead class="table-dark">
            <tr>
              <th><a href="{{url('user')}}" class="text-white"><h5>Performance</h5></a></th>
              <th><a href="{{url('teacherinbox')}}" class="text-white"><h5>Inbox</h5></a></th>
              <th><a href="pay.html" class="text-white"><h5>Pay</h5></a></th>
              <th><a href="{{url('rating')}}" class="text-white"><h5>Check Ratings</h5></a></th>
              <th><a href="manageskill.html" class="text-white"><h5>Manage Skill</h5></a></th>
              <th><a href="{{url('teacheracademic')}}" class="text-white"><h5>Academic</h5></a></th>
          </thead>

          <tbody>
            <tr>
              <td><h5>Performance</h5></td>
            </tr>
          </tbody>

        </table>
        <table>

          <tbody>
            <tr>

              <td><a href="#" class="btn-outline-secondary btn-sm">Ratings</a></td>
              <td><a href="#" class="btn-outline-secondary btn-sm">Response Time</a></td>
              <td><a href="#" class="btn-outline-secondary btn-sm">Total Student</a></td>
              <td><a href="#" class="btn-outline-secondary btn-sm">Expertize</a></td>
              <td><a href="#" class="btn-outline-secondary btn-sm">Behavior</a></td>
              <td><a href="#" class="btn-outline-secondary btn-sm">Accept Ratio</a></td>
            </tr>
          </tbody>
        </table>



      </div>
    </div>
    <div class="col-4">

    </div>

  </div>

</div>

@endsection
