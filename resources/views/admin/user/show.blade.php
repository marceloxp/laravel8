@extends('layouts.admin')

@section('styles')
	<style>
		.crud_admin_fieldcaption {
			width: 150px;
			text-align: right;
			font-weight: bold;
		}
	</style>
@endsection

@section('content')
	<div class="card">
		<div class="card-body table-responsive p-0">
			@if ($register)
				<table class="table table-hover table-striped">
					@foreach ($userCrud->showFields() as $fieldname => $caption)
						<tr>
							<td class="crud_admin_fieldcaption">{{ $caption }}</td>
							<td>{{ $register->$fieldname }}</td>
						</tr>
					@endforeach
				</table>
			@else
				<div class="alert">
					Nenhum registro para esta consulta.
				</div>
			@endif
		</div>
		<div class="card-footer clearfix">
			<a href="{{ $model::getAdminRouteByDotNotation('index') }}" class="btn btn-success">
				<i class="fa fa-fw fa-arrow-left"></i> Voltar
			</a>
		</div>
	</div>
@endsection