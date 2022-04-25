<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SIASMI - {{ $title }}</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="img/icon/stmik-mi.png"/>

	<!-- Custom fonts for this template-->
	<link href="SBAdmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
		type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="SBAdmin/css/sb-admin-2.min.css" rel="stylesheet">

	<!-- Custom styles for this page -->
	<link href="SBAdmin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link href="trix/trix.css" rel="stylesheet">    
	<script type="text/javascript" src="trix/trix.js"></script>

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

        @include('admin.layouts.sidebar')

        
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
            </div>

            @yield('container')

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Page Wrapper -->

    @include('admin.layouts.footer')