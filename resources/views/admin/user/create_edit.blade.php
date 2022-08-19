@extends('layouts.admin')

@section('styles')
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content-header')
	{-- admin_breadcrumb(['Home', 'Dashboard'], 'fa fa-tachometer-alt') --}
@endsection

@section('sidebar')
	@include('admin.includes.sidebar')
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
	$(document).ready(function() {
		$('.js-example-basic-multiple').select2({theme: "classic"});
	});
</script>
@endsection

@section('content')
	@include('admin.includes.alerts')

	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Editar Registro</h3>
		</div>
		<form action="{{ route('adminUserStore') }}" method="POST">
			@csrf
			<div class="card-body">
				<!-- add optional id primary key field -->
				<input type="hidden" name="id" value="{{ $register->id ?? '' }}">
				<div class="form-group">
					<label for="name">{{ $fields_captions->get('name') }}</label>
					<input type="text" class="form-control {{ html_form_class_error($errors, 'name') }}" name="name" id="name" autocomplete="off" value="{{ old('name', $register->name ?? '') }}">
					@if ($errors->has('name'))
						<span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
					@endif
				</div>
				<div class="form-group">
					<label for="email">{{ $fields_captions->get('email') }}</label>
					<input type="text" class="form-control {{ html_form_class_error($errors, 'email') }}" name="email" id="email" autocomplete="off" value="{{ old('email', $register->email ?? '') }}">
					@if ($errors->has('email'))
						<span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
					@endif
				</div>
				<div class="form-group">
					<label for="password">{{ $fields_captions->get('password') }}</label>
					<input type="password" class="form-control {{ html_form_class_error($errors, 'password') }}" name="password" id="password" autocomplete="off" value="{{ old('password', '') }}">
					@if ($errors->has('password'))
						<span id="password-error" class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
					@endif
				</div>
				<!-- add multiple select field for roles -->
				<div class="form-group">
					<label for="roles">Permissões</label>
					<select class="form-control js-example-basic-multiple {{ html_form_class_error($errors, 'roles') }}" name="roles[]" id="roles" multiple>
						@foreach ($roles as $role)
							<option value="{{ $role->id }}" {{ in_array($role->id, old('roles', $register->roles->pluck('id')->toArray() ?? [])) ? 'selected' : '' }}>{{ $role->name }}</option>
						@endforeach
					</select>
					@if ($errors->has('roles'))
						<span id="roles-error" class="error text-danger" for="input-roles">{{ $errors->first('roles') }}</span>
					@endif
				</div>
			</div>
			<div class="card-footer">
				<!-- add Salvar button submit with icon -->
				<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Salvar</button>
				<!-- add link cancel with icon -->
				<a href="{{ route('adminUser') }}" class="btn btn-default">
					<i class="fa fa-fw fa-times-circle"></i> Cancelar
				</a>
			</div>
		</form>
	</div>
@endsection