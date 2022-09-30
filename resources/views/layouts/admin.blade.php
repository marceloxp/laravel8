<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UMS Admin</title>
    {{ css('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}
    {{ css('/adminlte/plugins/fontawesome-free/css/all.min.css') }}
    {{ css('/adminlte/dist/css/adminlte.min.css') }}
    {{ css('/adminlte/plugins/select2/css/select2.min.css') }}
    {{ css('//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css') }}
    {{ js('//cdn.jsdelivr.net/npm/sweetalert2@11') }}
    {{ css('/adminlte/dist/css/adminlte.custom.css') }}
    @section('styles')

    @show
    @section('datasite')
        {!! Datasite::getHtmlScript() !!}
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
        <x-admin-default-swal />
    </div>

    {{ javascript('/adminlte/plugins/jquery/jquery.min.js') }}
    {{ javascript('/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}
    {{ javascript('/adminlte/dist/js/adminlte.min.js') }}
    <script type="text/javascript" src="{{ vasset('/lib/cjsbaseclass.slim.min.js') }}" data-jquery-exclusive="true" data-silent-host="www.site.com.br"></script>
    {{ javascript('/adminlte/plugins/select2/js/select2.full.min.js') }}
    {{ javascript('/lib/jquery.SimpleMask.min.js') }}
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>

    @section('scripts')
        {{ AutoAssets::print('js') }}
    @show

    {{ javascript('/js/admin/common.js') }}
</body>

</html>
