@extends('layouts.admin')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Editar Registro</h3>
        </div>
        <form method="POST" action="{{ admin_crud_route('config', 'update', $config->id) }}">
            @csrf
            @method('PUT')
            <div class="card-body">
                <x-admin-form-model :register="$config">
                    <x-admin-form-model.id />
                    <x-admin-form-model.text name="name" />
                    <x-admin-form-model.text name="value" />
                    <x-admin-form-model.text name="flags" />
                    <x-admin-form-model.active name="status" />
                </x-admin-form-model>
            </div>
            <x-admin-form-model.buttons crud="config" />
        </form>
    </div>
@endsection
