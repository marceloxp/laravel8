@extends('layouts.admin')

@section('content')
	@include('admin.includes.alerts')

	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Editar Registro</h3>
		</div>
		<form action="{{ route('adminUserStore') }}" method="POST">
			@csrf
			<div class="card-body">
				<x-form-model :register="$register">
					<!-- add id field -->
					<x-form-model.id/>

					<!-- add user name field -->
					<x-form-model.text name="name"/>

					<!-- add user email field -->
					<x-form-model.email name="email"/>

					<!-- add user password field -->
					<x-form-model.password name="password"/>

					<!-- add user status field -->
					<x-form-model.active name="status"/>

					<!-- add user roles field -->
					<x-form-model.multiple name="roles" caption="Permissões" :table="$roles"/>
				</x-form-model>
			</div>
			<x-form-model.buttons index-route="{{ route('adminUser') }}"/>
		</form>
	</div>
@endsection
