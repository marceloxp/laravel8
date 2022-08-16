@extends('layouts.admin')

@section('content-header')
	{-- admin_breadcrumb(['Home', 'Dashboard'], 'fa fa-tachometer-alt') --}
@endsection

@section('sidebar')
	@include('admin.includes.sidebar')
@endsection

@section('content')
	@include('admin.includes.alerts')

	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Editar Registro</h3>
		</div>
		<form action="{{ route('adminConfigStore') }}" method="POST">
			@csrf
			<div class="card-body">
				<!-- add optional id primary key field -->
				<input type="hidden" name="id" value="{{ $config->id ?? '' }}">
				<div class="form-group">
					<label for="name">{{ $fields_captions->get('name') }}</label>
					<input type="text" class="form-control {{ html_form_class_error($errors, 'name') }}" name="name" id="name" autocomplete="off" value="{{ old('name', $config->name ?? '') }}">
					@if ($errors->has('name'))
						<span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
					@endif
				</div>
				<!-- add config value -->
				<div class="form-group">
					<label for="value">{{ $fields_captions->get('value') }}</label>
					<input type="text" class="form-control {{ html_form_class_error($errors, 'value') }}" name="value" id="value" autocomplete="off" value="{{ old('value', $config->value ?? '') }}">
					@if ($errors->has('value'))
						<span id="value-error" class="error text-danger" for="input-value">{{ $errors->first('value') }}</span>
					@endif
				</div>
				<!-- add config flags -->
				<div class="form-group">
					<label for="flags">{{ $fields_captions->get('flags') }}</label>
					<input type="text" class="form-control {{ html_form_class_error($errors, 'flags') }}" name="flags" id="flags" autocomplete="off" value="{{ old('flags', $config->flags ?? '') }}">
					@if ($errors->has('flags'))
						<span id="flags-error" class="error text-danger" for="input-flags">{{ $errors->first('flags') }}</span>
					@endif
				</div>
				<!-- add config status -->
				<div class="form-group">
					<label for="status">{{ $fields_captions->get('status') }}</label>
					<select class="form-control {{ html_form_class_error($errors, 'status') }}" name="status" id="status" autocomplete="off">
						<option value="Ativo" {{ old('status', $config->status ?? '') == 'Ativo' ? 'selected' : '' }}>Ativo</option>
						<option value="Inativo" {{ old('status', $config->status ?? '') == 'Inativo' ? 'selected' : '' }}>Inativo</option>
					</select>
					@if ($errors->has('status'))
						<span id="status-error" class="error text-danger" for="input-status">{{ $errors->first('status') }}</span>
					@endif
				</div>
			</div>
			<div class="card-footer">
				<button type="submit" class="btn btn-primary">Salvar</button>
				<a href="{{ url('/admin/config') }}" class="btn btn-default">Cancelar</a>
			</div>
		</form>
	</div>
@endsection