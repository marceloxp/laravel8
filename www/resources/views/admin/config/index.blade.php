@extends('layouts.admin')

@section('content-header')
	{-- admin_breadcrumb(['Home', 'Dashboard'], 'fa fa-tachometer-alt') --}
@endsection

@section('sidebar')
	@include('admin.includes.sidebar')
@endsection

@section('content')
	@include('admin.includes.alerts')

	<!-- add adminlte table navigator search -->
	<nav class="navbar navbar-expand navbar-white navbar-light ml-0">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
			</li>
			<li class="nav-item d-none d-sm-inline-block">
				<a href="{{ route('adminConfigCreate') }}" class="nav-link">Adicionar</a>
			</li>
		</ul>
		<form class="form-inline ml-3" action="{{ route('adminConfig') }}/search" method="get">
			<div class="input-group input-group-sm">
				<input class="form-control form-control-navbar" id="search" name="search" type="search" placeholder="Buscar" aria-label="Buscar" value="{{ isset($search) ? $search : '' }}">
				<div class="input-group-append">
					<button class="btn btn-navbar" type="submit">
						<i class="fas fa-search"></i>
					</button>
				</div>
			</div>
		</form>
	</nav>

	<!-- add adminlte table -->
	<div class="card">
		<div class="card-body table-responsive p-0">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>{{ $fields_captions->get('id') }}</th>
						<th>{{ $fields_captions->get('name') }}</th>
						<th>{{ $fields_captions->get('value') }}</th>
						<th>{{ $fields_captions->get('status') }}</th>
						<th>{{ $fields_captions->get('created_at') }}</th>
						<th>{{ $fields_captions->get('updated_at') }}</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach($configs as $config)
						<tr>
							<td>{{ $config->id }}</td>
							<td>{{ $config->name }}</td>
							<td>{{ $config->value }}</td>
							<td>{{ $config->status }}</td>
							<td>{{ $config->created_at }}</td>
							<td>{{ $config->updated_at }}</td>
							<td>
								<!-- button edit with icon -->
								<a href="{{ route('adminConfigEdit', ['id' => $config->id]) }}" class="btn btn-sm btn-success">
									<i class="fas fa-edit"></i> Editar
								</a>
								<form action="{{ url('/admin/config/delete/' . $config->id) }}" method="POST" style="display: inline-block;">
									@csrf
									@method('DELETE')
									<!-- submit button Excluir with icon and confirm -->
									<button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Deseja realmente excluir este registro?')">
										<i class="fas fa-trash"></i> Excluir
									</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

	<!-- add config pagination links -->
	<div>
		{!! $configs->links() !!}
	</div>
@endsection