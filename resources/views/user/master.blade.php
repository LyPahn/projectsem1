<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kodesolution.com/html/2023/hoexr-html/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 07:33:24 GMT -->
<head>
<meta charset="utf-8">
<title>Hoexr | Hotel HTML Template | Home Page 02</title>
<!-- Stylesheets -->
<link href="{{asset('fe')}}/css/bootstrap.min.css" rel="stylesheet">
<link href="{{asset('fe')}}/css/flatpickr.min.css" rel="stylesheet">
<link href="{{asset('fe')}}/css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('fe')}}/css/slick-theme.css">
<link rel="stylesheet" type="text/css" href="{{asset('fe')}}/css/slick.css">

<link rel="shortcut icon" href="{{asset('fe')}}/images/favicon.png" type="image/x-icon">
<link rel="icon" href="{{asset('fe')}}/images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">

  @include('user.layouts.header')

  @yield('main-content')

 @include('user.layouts.footer')
</div><!-- End Page Wrapper -->
@yield('add-js')
</body>

<!-- Mirrored from kodesolution.com/html/2023/hoexr-html/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Nov 2023 07:33:29 GMT -->
</html>