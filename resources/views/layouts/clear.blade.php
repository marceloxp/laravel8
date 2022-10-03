<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @section('head')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0, viewport-fit=cover">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,Chrome=1">
        <meta name="env" content="{{ env('APP_ENV', 'undefined') }}">
        <meta name="now" content="{{ date('Y-m-d H:i:s') }}">
        <meta name="framework-version" content="{{ App::VERSION() }}">
        <meta name="app-version" content="{{ app_version() }}">
        <x-favicon url="/favicon.png"/>
        <x-css src="/css/style.css"/>

        {{ MetaSocial::print() }}
        @section('vendor.css')
            {{ AutoAssets::print('css') }}
        @show

        @section('datasite')
            {!! Datasite::getHtmlScript() !!}
        @show
    @show
</head>

<body>
    <div id="wrapper-main">
        <div id="wrapper-content">
            @yield('content')
        </div>
    </div>

    {{-- Vendor Scripts --}}
    @section('vendor.js')
        {{ javascript('/libs/jquery.min.js') }}
        {{ cjsbaseclass('/libs', true, 'www.site.com.br') }}
    @show

    {{-- Page Scripts --}}
    @section('scripts')
        {{ AutoAssets::print('js') }}
    @show

    @section('bottom_scripts')

    @show
</body>

</html>
