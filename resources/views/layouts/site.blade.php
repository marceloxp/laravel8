@php
	use App\Utilities\Datasite;
	use App\Utilities\AutoAssets;
	use App\Utilities\MetaSocial;
@endphp

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		@section('head')
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0, viewport-fit=cover">
			<meta http-equiv="X-UA-Compatible" content="IE=Edge,Chrome=1" >
			<meta name="env" content="{{ env('APP_ENV', 'undefined') }}">
			<meta name="now" content="{{ date('Y-m-d H:i:s') }}">
			<meta name="framework-version" content="{{ App::VERSION() }}">
			<meta name="app-version" content="{{ app_version() }}">
			<link rel="shortcut icon" type="image/png" href="{{ url('/favicon.png') }}"/>
			{{-- css('/css/all.min.css') --}}
			{{ MetaSocial::print() }}

			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
			@section('vendor.css')
				{{ AutoAssets::print('css') }}
			@show

			@section('datasite')
				<script>window.datasite = @json(Datasite::get())</script>
			@show
		@show
	</head>
	<body>
		<div id="wrapper-main">
			@section('header')
				<header>
					@section('menu')
						@include('site/includes/menu')
					@show
				</header>
			@show
			<div id="wrapper-content">
				@yield('content')
			</div>
			<footer>
				@section('footer')
					@include('site/includes/footer')
				@show
			</footer>
		</div>
		
		{{-- Vendor Scripts --}}
		@section('vendor.js')
			<script type="text/javascript" src="{{ vasset('/lib/jquery.min.js') }}"></script>
			<script type="text/javascript" src="{{ vasset('/lib/cjsbaseclass.slim.min.js') }}" data-jquery-exclusive="true" data-silent-host="www.site.com.br"></script>
			{{ javascript('/lib/sweetalert.min.js') }}
		@show

		{{-- Page Scripts --}}
		@section('scripts')
			{{ AutoAssets::print('js') }}
		@show

		@section('bottom_scripts')

		@show
	</body>
</html>