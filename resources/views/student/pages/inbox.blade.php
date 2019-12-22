@extends('teacher.layout.mastar')

@section('content')

<link rel="stylesheet" type="text/css" href="teacher/fontawesome-free-5.11.2-web\css\all.css">
<!-- Bootstrap core css -->
<link href="teacher/css/bootstrap.min.css" rel="stylesheet">
<!-- Matarial Design Bootstrap -->
<link href="teacher/css/mdb.min.css" rel="stylesheet">
<!-- Custom stylees -->
<link href="teacher/css/style.css" rel="stylesheet">



<script type="text/javascript" src="teacher/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="teacher/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="teacher/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="teacher/js/mdb.min.js"></script>



<div class="container-fluid">
  <div class="row">
    <div class="col-8">
      <h2 class="bg-secondary text-white p-2">Teacher Activities</h2>
      <div class="container">
        <!-- creating Table -->
        <table class="table mt-3">
          <thead class="table-dark">
            <tr>
              <th><a href="{{url('teacherperformance')}}" class="text-white"><h5>Performance</h5></a></th>
              <th><a href="{{url('teacherinbox')}}" class="text-white"><h5>Inbox</h5></a></th>
              <th><a href="pay.html" class="text-white"><h5>Pay</h5></a></th>
              <th><a href="statistics.html" class="text-white"><h5>Statistics</h5></a></th>
              <th><a href="manageskill.html" class="text-white"><h5>Manage Skill</h5></a></th>
              <th><a href="{{url('teacheracademic')}}" class="text-white"><h5>Academic</h5></a></th>
          </thead>


          <tbody>
            <tr>
              <td><h5>Inbox</h5></td>
            </tr>
          </tbody>


        </table>
        <table>
          <tbody>
            <tr>

              <td><a href="#" class="btn-outline-secondary btn-sm">Unread Messages</a></td>
              <td><a href="#" class="btn-outline-secondary btn-sm">Unread Notification</a></td>
              <td><a href="#" class="btn-outline-secondary btn-sm">Pending Request</a></td>
              <td><a href="#" class="btn-outline-secondary btn-sm">Accepted Request</a></td>
              <td><a href="#" class="btn-outline-secondary btn-sm">Current Dume</a></td>

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
