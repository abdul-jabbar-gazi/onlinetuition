@extends('student.layout.mastar')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-10">
      <h2 class="bg-secondary text-white p-2">Student Activities</h2>
    </div>
  </div>
    <center>
      <form class="" action="{{url('searchteacher')}}" method="get">
        <input type="text" name="location" placeholder='Location'>
        <input type="text" name="salary" placeholder='Slary'>
        <input type="text" name="skill" placeholder='Skill'>
        <button type="submit">Search</button>
      </form>
      <form action="{{url('submitrating')}}" method ="get">
        <button type="submit">Give Rating</button>
      </form>
      <form action="{{url('submitreport')}}" method ="get">
        <button type="submit">Report a Teacher</button>
      </form>
    </center>
</div>
@endsection
