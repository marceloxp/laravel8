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
					<!-- add user id field -->	
					<x-admin-form-model.id/>

					<!-- add user name field -->
					<x-admin-form-model.text name="name"/>

					<!-- add user email field -->
					<x-admin-form-model.email name="email"/>

					<!-- add user password field -->
					<x-admin-form-model.password name="password"/>

					<!-- add user status field -->
					<x-admin-form-model.active name="status"/>

					<!-- add user roles field -->
					<x-admin-form-model.multiple name="roles" caption="Permissões" :table="$roles"/>
				</x-admin-form-model>
			</div>
			<!-- add Save and Cancel buttons -->
			<x-admin-form-model.buttons/>
		</form>
	</div>
@endsection
