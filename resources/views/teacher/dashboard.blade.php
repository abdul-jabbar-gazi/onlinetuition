@extends('teacher.layout.mastar')

@section('content')
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
              <th><a href="{{url('rating')}}" class="text-white"><h5>Check Ratings</h5></a></th>
              <th><a href="{{url('teacherprofile')}}" class="text-white"><h5>Manage Skill</h5></a></th>
              <th><a href="{{url('teacheracademic')}}" class="text-white"><h5>Academic</h5></a></th>
            </tr>

          </thead>
        </table>

      </div>
    </div>
    <div class="col-4">

    </div>

  </div>

</div>
@endsection
