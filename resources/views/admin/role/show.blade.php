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
            @if ($role)
                <table class="table table-hover table-striped">
                    <x-admin-field-show.id :text="$role->id" />
                    <x-admin-field-show.text caption="Nome" :text="$role->name" />
                    <x-admin-field-show.text caption="Descrição" :text="$role->description" />
                    <x-admin-field-show.text caption="Cor" :text="$role->color" />
                    <x-admin-field-show.text caption="Criado em" :text="$role->created_at->brDateTime" />
                    <x-admin-field-show.text caption="Atualizado em" :text="$role->updated_at->brDateTime" />
                </table>
            @else
                <div class="alert">
                    Nenhum registro para esta consulta.
                </div>
            @endif
        </div>
        <div class="card-footer clearfix">
            <a href="{{ admin_crud_route('role', 'index') }}" class="btn btn-success">
                <i class="fa fa-fw fa-arrow-left"></i> Voltar
            </a>
        </div>
    </div>
@endsection
