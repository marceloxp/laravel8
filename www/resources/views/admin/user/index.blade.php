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
				<a href="{{ route('adminUserCreate') }}" class="nav-link">Adicionar</a>
			</li>
		</ul>
		<form class="form-inline ml-3" action="{{ route('adminUser') }}/search" method="get">
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
				<!-- add users table header -->
				<thead>
					<tr>
						<th>{{ $fields_captions->get('id') }}</th>
						<th>{{ $fields_captions->get('name') }}</th>
						<th>{{ $fields_captions->get('email') }}</th>
						<th>Permissões</th>
						<th>{{ $fields_captions->get('created_at') }}</th>
						<th>{{ $fields_captions->get('updated_at') }}</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					@foreach($table as $register)
						<tr>
							<td>{{ $register->id }}</td>
							<td>{{ $register->name }}</td>
							<td>{{ $register->email }}</td>
							<td>
								@foreach($register->roles as $role)
									<span class="badge badge-primary">{{ $role->name }}</span>
								@endforeach
							</td>
							<td>{{ $register->created_at }}</td>
							<td>{{ $register->updated_at }}</td>
							<td>
								<!-- button edit with icon -->
								<a href="{{ route('adminUserEdit', $register->id) }}" class="btn btn-success btn-sm">
									<i class="fas fa-edit"></i> Editar
								</a>
								<!-- add delete form button with icon and confirm -->
								<form action="{{ route('adminUserDelete', $register->id) }}" method="post" class="d-inline">
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Deseja realmente excluir este registro?')">
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
		{!! $table->links() !!}
	</div>
@endsection