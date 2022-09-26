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
            @if ($user)
                <table class="table table-hover table-striped">
                    <x-admin-field-show.id :text="$user->id" />
                    <x-admin-field-show.avatar caption="Avatar" :src="$user->avatar" />
                    <x-admin-field-show.text caption="Nome" :text="$user->name" />
                    <x-admin-field-show.text caption="E-mail" :text="$user->email" />
                    <x-admin-field-show.text caption="Status" :text="$user->status" />
                    <x-admin-field-show.roles caption="Permissões" :roles="$user->roles" />
                    <x-admin-field-show.text caption="Criado em" :text="$user->created_at->brDateTime" />
                    <x-admin-field-show.text caption="Atualizado em" :text="$user->updated_at->brDateTime" />
                </table>
            @else
                <div class="alert">
                    Nenhum registro para esta consulta.
                </div>
            @endif
        </div>
        <div class="card-footer clearfix">
            <a href="{{ admin_crud_route('user', 'index') }}" class="btn btn-success">
                <i class="fa fa-fw fa-arrow-left"></i> Voltar
            </a>
        </div>
    </div>
@endsection
