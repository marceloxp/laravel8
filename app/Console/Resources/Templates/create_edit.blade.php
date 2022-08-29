@extends('layouts.admin')

@section('content')
	@include('admin.includes.alerts')

	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Editar Registro</h3>
		</div>
		<form action="{{ $model::getAdminRouteByName('store') }}" method="POST">
			@csrf
			<div class="card-body">
				<x-admin-form-model :register="$register">
					<!-- add table id field -->	
					<x-admin-form-model.id/>

					<!-- add table name field -->
					<x-admin-form-model.text name="name"/>
				</x-admin-form-model>
			</div>
			<!-- add Save and Cancel buttons -->
			<x-admin-form-model.buttons/>
		</form>
	</div>
@endsection
