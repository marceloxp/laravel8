@extends('layouts.admin')

@section('content')
	@include('admin.includes.alerts')

	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Editar Registro</h3>
		</div>
		<form action="{{ route('adminConfigStore') }}" method="POST">
			@csrf
			<div class="card-body">
				<x-admin-form-model :register="$register">
					<!-- add config id field -->	
					<x-admin-form-model.id/>

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
			<x-admin-form-model.buttons index-route-name="adminConfig"/>
		</form>
	</div>
@endsection