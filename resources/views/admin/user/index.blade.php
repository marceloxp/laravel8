@extends('layouts.admin')

@section('content')
	@include('admin.includes.alerts')

	<x-admin-table-nav-bar :search="$search"/>

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
								<x-admin-table :register="$register">
									<!-- admin button component edit with icon -->
									<x-admin-table.action-edit/>
									<!-- x-admin button delete -->
									<x-admin-table.action-delete/>
								</x-admin-table>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

	<!-- add component user pagination links -->
	<x-admin-pagination-links :table="$table" />
@endsection
