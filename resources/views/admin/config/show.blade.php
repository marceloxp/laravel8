@extends('layouts.admin')

@section('styles')
	<style>
		.crud_admin_fieldcaption {
			width: 150px;
			text-align: right;
			font-weight: bold;
		}

		.image_uploaded_file {
			max-height: 100px;
		}
	</style>
@endsection

@section('content')
	<div class="card">
		<div class="card-body table-responsive p-0">
			@if ($config)
				<table class="table table-hover table-striped">
					<x-admin-field-show.id :text="$config->id"/>
					<x-admin-field-show.text caption="Nome" :text="$config->name"/>
					<x-admin-field-show.text caption="Valor" :text="$config->value"/>
					<x-admin-field-show.text caption="Flags" :text="$config->flags"/>
					<x-admin-field-show.text caption="Status" :text="$config->status"/>
					<x-admin-field-show.text caption="Criado em" :text="$config->created_at"/>
					<x-admin-field-show.text caption="Atualizado em" :text="$config->updated_at"/>
				</table>
			@else
				<div class="alert">
					Nenhum registro para esta consulta.
				</div>
			@endif
		</div>
		<div class="card-footer clearfix">
			<a href="{{ admin_crud_route('config', 'index') }}" class="btn btn-success">
				<i class="fa fa-fw fa-arrow-left"></i> Voltar
			</a>
		</div>
	</div>
@endsection