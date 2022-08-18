<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ vasset('/adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ url('/adminlte/dist/css/adminlte.min.css?v=3.2.0') }}">
</head>

<body class="hold-transition login-page">

@if ($errors->any())
	<div class="alert alert-danger alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<h5><i class="icon fas fa-check"></i> Mensagem do Sistema</h5>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h1>
                    <b>Admin</b>
                </h1>
            </div>
            <div class="card-body">
                <form class="auth-login-form mt-2" action="{{ route('adminLoginPost') }}" method="post">
                    @csrf
                    <div class="input-group mb-0">
                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" autofocus />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="input-group mb-0">
                        <input type="password" class="form-control form-control-merge" id="password" name="password" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Conectar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ vasset('/adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ vasset('/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('/adminlte/dist/js/adminlte.min.js?v=3.2.0') }}"></script>
</body>

</html>