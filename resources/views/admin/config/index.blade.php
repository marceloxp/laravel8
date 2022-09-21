@extends('layouts.admin')

@section('content')
	<x-admin-table-nav-bar crud="config" :model="$model" :search="$search"/>

	<div class="card">
		<div class="card-body table-responsive p-0">
			@if ($table->total() > 0)
				<table class="table table-hover">
					<thead>
						<tr>
							<th>{{ $captions->get('id') }}</th>
							<th>{{ $captions->get('name') }}</th>
							<th>{{ $captions->get('value') }}</th>
							<th>{{ $captions->get('status') }}</th>
							<th>{{ $captions->get('created_at') }}</th>
							<th>{{ $captions->get('updated_at') }}</th>
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
									<x-admin-table :register="$register" crud="config">
										<x-admin-table.action-edit/>
										<x-admin-table.action-show/>
										<x-admin-table.action-delete/>
									</x-admin-table>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			@else
				<div class="alert">
					Nenhum registro para esta consulta.
				</div>
			@endif
		</div>
	</div>

	<x-admin-pagination-links :table="$table" />
@endsection