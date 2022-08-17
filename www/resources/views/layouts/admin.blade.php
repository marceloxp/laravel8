<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UMS Admin</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<link rel="stylesheet" href="{{ vasset('/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ url('/adminlte/dist/css/adminlte.min.css?v=3.2.0') }}">
</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		@yield('sidebar')
		
		<div class="content-wrapper">
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">{{ $admin_title }}</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="content">
				@yield('content')	
			</div>
		</div>
		<footer class="main-footer">
			<div class="float-right d-none d-sm-inline"> Anything you want </div> <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
		</footer>
	</div>
	<script src="{{ vasset('/adminlte/plugins/jquery/jquery.min.js') }}"></script>
	<script src="{{ vasset('/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ url('/adminlte/dist/js/adminlte.min.js?v=3.2.0') }}"></script>
</body>

</html>