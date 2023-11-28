<!doctype html>
<html lang="en">
<!-- Mirrored from kiswa.net/themes/star-hotel/demo/demo-ltr/admin-demo-ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 07:29:05 GMT -->
<head>
	<title>Admin Dashboard</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="images/favicon.png" type="{{asset('assets')}}/image/x-icon">

	<!-- Framework Stylesheets Start-->

	<!-- Bootstrap Stylesheet -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/bootstrap.min4.2.1.css">
	<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/bootstrap-reboot4.2.1.css">

	<!-- Framework Stylesheets End-->

	<!-- Data Tables Stylesheet -->
	<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/vendors/datatables/datatables.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/custom.datatables.css">

	<!-- Font Awsome Stylesheet -->
	<link rel="stylesheet" href="{{asset('assets')}}/vendors/fontawesome5.7.2/css/all.min.css">

	<!-- Custom Stylesheet Start-->

	<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/style.css">

	<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/responsive.css">

	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

	<!-- Custom Stylesheet End-->

</head>

<body>

	<!-- ===========wrapper============= -->
	<div class="wrapper">

    @include('admin.layouts.header')

    @include('admin.layouts.menu')

    @yield('main-content')

  </div>

@yield('add-js')
</body>
</html>
