@extends('layouts.admin')

@section('content')
	@include('admin.includes.alerts')

	<x-admin-table-nav-bar route="config" search="{{ isset($search) ? $search : '' }}"/>

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
							<td>{{ $register->id }}</td>
							<td>{{ $register->name }}</td>
							<td>{{ $register->value }}</td>
							<td>{{ $register->status }}</td>
							<td>{{ $register->created_at }}</td>
							<td>{{ $register->updated_at }}</td>
							<td>
								<!-- button edit with icon -->
								<a href="{{ route('adminConfigEdit', ['id' => $register->id]) }}" class="btn btn-sm btn-success">
									<i class="fas fa-edit"></i> Editar
								</a>
								<form action="{{ route('adminConfigDelete', $register->id) }}" method="POST" style="display: inline-block;">
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
		{!! $table->links() !!}
	</div>
@endsection