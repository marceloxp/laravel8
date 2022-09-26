@extends('layouts.admin')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Editar Registro</h3>
        </div>
        <form method="POST" action="{{ admin_crud_route('role', 'update', $role->id) }}">
            @csrf
            @method('PUT')
            <div class="card-body">
                <x-admin-form-model :register="$role">
                    <x-admin-form-model.id />
                    <x-admin-form-model.text name="name" />
                    <x-admin-form-model.text name="description" />
                    <x-admin-form-model.text name="color" />
                </x-admin-form-model>
            </div>
            <x-admin-form-model.buttons crud="role" />
        </form>
    </div>
@endsection
