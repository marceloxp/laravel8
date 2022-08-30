@extends('layouts.admin')

@section('content')
	<x-admin-table-nav-bar :search="$search"/>

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
					@foreach($table as $register)
						<tr>
							<td><div data-id="{{ $register->id }}">{{ $register->id }}</div></td>
							<td>{{ $register->name }}</td>
							<td>{{ $register->value }}</td>
							<td>{{ $register->status }}</td>
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

	<!-- add component config pagination links -->
	<x-admin-pagination-links :table="$table" />
@endsection