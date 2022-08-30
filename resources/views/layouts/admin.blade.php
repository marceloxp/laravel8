@php
	use \App\Http\Utilities\Datasite;
	use \App\Http\Utilities\AutoAssets;
@endphp

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UMS Admin</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<link rel="stylesheet" href="{{ vasset('/adminlte/plugins/fontawesome-free/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ url('/adminlte/dist/css/adminlte.min.css?v=3.2.0') }}">
	<link rel="stylesheet" href="{{ vasset('/adminlte/plugins/select2/css/select2.min.css') }}">
	<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<style>
		.dark-mode .select2-container--default .select2-selection--multiple {
			background-color: #343a40;
		}
		.dark-mode .select2-cyan .select2-container--default .select2-search--inline .select2-search__field:focus {
			border: none !important;
		}
		.table_pagination div {
			display: flex;
		}
		.table_pagination_description {
			justify-content: flex-end;
		}
		/* make align center where screeen less than 760 */
		@media (max-width: 760px) {
			.table_pagination div {
				justify-content: center;
			}
		}
	</style>
	@section('styles')

	@show

	@section('datasite')
		<script>window.datasite = @json(Datasite::get())</script>
	@show
</head>

<body class="hold-transition sidebar-mini {{ $darkMode }}">
	<div class="wrapper">
		@include('admin.includes.sidebar')
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
		<x-swal/>
	</div>

	<script src="{{ vasset('/adminlte/plugins/jquery/jquery.min.js') }}"></script>
	<script src="{{ vasset('/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ url('/adminlte/dist/js/adminlte.min.js?v=3.2.0') }}"></script>
	<script type="text/javascript" src="{{ vasset('/lib/cjsbaseclass.slim.min.js') }}" data-jquery-exclusive="true" data-silent-host="www.site.com.br"></script>
	<script src="{{ vasset('/adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
	<script src="{{ vasset('/lib/jquery.SimpleMask.min.js') }}"></script>
	<script>
		$(document).ready(function() {
			$('.select2').select2();
		});
	</script>

	{{-- Page Scripts --}}
	@section('scripts')
		{{ AutoAssets::print('js') }}
	@show

	{{ javascript('/js/admin/common.js') }}
</body>

</html>