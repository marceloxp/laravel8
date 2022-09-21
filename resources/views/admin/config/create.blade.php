@extends('layouts.admin')

@section('content')
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Criar Registro</h3>
		</div>
		<form method="POST" action="{{ admin_crud_route('config', 'store') }}">
			@csrf
			<div class="card-body">
				<x-admin-form-model :register="null">
					<!-- add config name field -->
					<x-admin-form-model.text name="name"/>

					<!-- add config value field -->
					<x-admin-form-model.text name="value"/>

					<!-- add config flags field -->
					<x-admin-form-model.text name="flags"/>

					<!-- add config status active field -->
					<x-admin-form-model.active name="status"/>
				</x-admin-form-model>
			</div>
			<!-- add Save and Cancel buttons -->
			<x-admin-form-model.buttons crud="config"/>
		</form>
	</div>
@endsection