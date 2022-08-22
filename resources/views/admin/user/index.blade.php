@extends('layouts.admin')

@section('content')
	@include('admin.includes.alerts')

	<x-admin-table-nav-bar route="user" search="{{ isset($search) ? $search : '' }}"/>

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