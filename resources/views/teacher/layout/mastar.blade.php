<!DOCTYPE html>
<html lang="en">
<head>
@include('teacher.layout.top')
</head>

<body>

  <!-- Start your project here-->
  <!-- navigation menu -->
@include('teacher.layout.navigation')
		<!-- navigation manue end -->

		<!-- Dashboard Heading Start -->
@include('teacher.layout.header')

		<!-- Dashboard Heading End -->
		<!-- Dashboard Content Start -->
@yield('content')

		<!-- Dashboard Content End -->
	<!-- /Start project here -->
	<!-- SCRIPT -->
	<!-- JQuery -->
@include('teacher.layout.bottom')
</body>

</html>
