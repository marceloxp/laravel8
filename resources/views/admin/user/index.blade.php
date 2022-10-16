@extends('layouts.admin')

@section('styles')
    <style>
        .image_uploaded_file {
            max-height: 100px;
        }
    </style>
@endsection

@section('content')
    <x-admin-table-nav-bar crud="user" :model="$model" :search="$search" />

    <div class="card">
        <div class="card-body table-responsive p-0">
            @if ($table->total() > 0)
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>{{ $captions->get('id') }}</th>
                            <th>{{ $captions->get('avatar') }}</th>
                            <th>{{ $captions->get('name') }}</th>
                            <th>{{ $captions->get('email') }}</th>
                            <th>Permissões</th>
                            <th>{{ $captions->get('created_at') }}</th>
                            <th>{{ $captions->get('updated_at') }}</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($table as $register)
                            <tr>
                                <td>{{ $register->id }}</td>
                                <td>
                                    <x-image-uploaded-file class="image_uploaded_file" :filename="$register->avatar" noimage="/images/admin/user-no-image.png" />
                                </td>
                                <td>{{ $register->name }}</td>
                                <td>{{ $register->email }}</td>
                                <td>
                                    @foreach($register->roles as $role)
                                        <span class="badge badge-primary">{{ $role->name }}</span>
                                    @endforeach
                                </td>
                                <td>{{ $register->created_at->brDateTime }}</td>
                                <td>{{ $register->updated_at->brDateTime }}</td>
                                <td>
                                    <x-admin-table :register="$register" crud="user">
                                        <x-admin-table.action-edit />
                                        <x-admin-table.action-show />
                                        <x-admin-table.action-delete />
                                    </x-admin-table>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert">
                    Nenhum registro para esta consulta.
                </div>
            @endif
        </div>
    </div>

    <x-admin.pagination-links :table="$table" />
@endsection
