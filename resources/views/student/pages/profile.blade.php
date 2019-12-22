@extends('teacher.layout.mastar')

@section('content')
	<div class="main-w3layouts wrapper">
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
      </tbody>

    </table>
		<h1>Update Profile</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
        <center>
				<form action="{{url('saveprofile')}}" method="post">
          @csrf
					<input class="text" type="text" name="firstName" placeholder="First Name" required=""><br>
          <input class="text" type="text" name="lastName" placeholder="Last Name" required=""><br>
          <input class="text" type="text" name="permanentAddress" placeholder="Permanent Address" required=""><br>
					<input class="text" type="text" name="currentStatus" placeholder="Current Status" required=""><br>
          <input class="text" type="text" placeholder="Religion" name="religion"><br>
          <input class="text" type="text" placeholder="Marital Status" name="maritalStatus"><br>
          <input class="text" type="date" placeholder="Date of Birth" name="dateOfBirth"><br>
          <select name="gender"><br>
            <option disabled="disabled" selected="selected">GENDER</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
          </select>
					<input type="submit" value="Save">
				</form>
        </center>
			</div>
		</div>
	</div>

  @endsection
