<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="" type="image/ioc" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <title>@yield("title")</title>
    
	<!--favicon-->
  	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!--plugins-->
    
    @include("adminTheme.css")
	@yield("style")
</head>

 <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" style="width:100% !important;" data-col="">
	<!--start header -->
	@include("adminTheme.header")
	<!--end header -->

    <!--navigation-->
    @include("adminTheme.sidebar")
    <!--end navigation-->
    
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-body">
    			@yield("content")
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    @include('adminTheme.alert')

    @include('adminTheme.footer')
    
    @include("adminTheme.script")
	
	@yield("script")
</body>
</html>