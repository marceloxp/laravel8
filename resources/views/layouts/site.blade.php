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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <x-favicon url="/favicon.png"/>
        <x-css src="/css/style.min.css"/>

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
        {{ javascript('/libs/jquery.min.js') }}
        {{ cjsbaseclass('/libs', true, 'www.site.com.br') }}
        {{ javascript('/libs/sweetalert.min.js') }}
    @show

    {{-- Page Scripts --}}
    @section('scripts')
        {{ AutoAssets::print('js') }}
    @show

    @section('bottom_scripts')

    @show
</body>

</html>
