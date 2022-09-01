@extends('layouts.admin')

@section('styles')
	<style>
		.image_uploaded_file {
			max-height: 100px;
		}
	</style>
@endsection

@section('content')
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Editar Registro</h3>
		</div>
		<form name="frmTable" id="frmTable" action="{{ $model::getAdminRouteByName('store') }}" enctype="multipart/form-data" method="POST">
			@csrf
			<div class="card-body">
				<x-admin-form-model :register="$register">
					<!-- add user id field -->	
					<x-admin-form-model.id/>

					<div class="row">
						<div class="col-3 col-sm-3 col-lg-2 col-xl-2">
							<x-image-uploaded-file class="image_uploaded_file" :filename="$register->avatar" noimage="/images/admin/user-no-image.png"/>
						</div>
						<div class="col-9 col-sm-9 col-lg-10 col-xl-10">
							<div class="form-group">
								<label for="avatar">Avatar</label>
								<div class="input-group">
									<div class="custom-file">
										<input type="file" class="custom-file-input" name="avatar" id="avatar">
										<label class="custom-file-label" for="avatar">Selecione o arquivo</label>
									</div>
								</div>
							</div>
						</div>
					</div>

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
