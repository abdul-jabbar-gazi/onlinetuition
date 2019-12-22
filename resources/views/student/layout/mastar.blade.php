<!DOCTYPE html>
<html lang="en">
<head>
@include('student.layout.top')
</head>

<body>

  <!-- Start your project here-->
  <!-- navigation menu -->
@include('student.layout.navigation')
		<!-- navigation manue end -->

		<!-- Dashboard Heading Start -->
@include('student.layout.header')

		<!-- Dashboard Heading End -->
		<!-- Dashboard Content Start -->
@yield('content')

		<!-- Dashboard Content End -->
	<!-- /Start project here -->
	<!-- SCRIPT -->
	<!-- JQuery -->
@include('student.layout.bottom')
</body>

</html>
