@aware(['register', 'crud'])
@props(['caption' => 'Editar'])

<a href="{{ admin_crud_route($crud, 'edit', $register->id) }}" data-id="{{ $register->id }}" class="btn btn-success btn-sm">
    <i class="fas fa-edit"></i> {{ $caption }}
</a>
