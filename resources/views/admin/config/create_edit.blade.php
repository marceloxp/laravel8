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
				{{-- https://laravel.com/docs/8.x/blade#rendering-components --}}
				<!-- add optional id primary key field -->
				<x-form-model :register="$register">
					<x-form-model.id/>

					<!-- add config name field -->
					<x-form-model.text name="name"/>

					<!-- add config value field -->
					<x-form-model.text name="value"/>

					<!-- add config flags field -->
					<x-form-model.text name="flags"/>

					<!-- add config status active field -->
					<x-form-model.active name="status"/>
				</x-form-model>
			</div>
			<x-form-model.buttons index-route="{{ route('adminConfig') }}"/>
		</form>
	</div>
@endsection