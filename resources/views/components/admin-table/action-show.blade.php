@aware(['register', 'crud'])
@props(['caption' => 'Exibir'])

<a href="{{ admin_crud_route($crud, 'show', $register->id) }}" data-id="{{ $register->id }}" class="btn btn-primary btn-sm">
    <i class="fas fa-eye"></i> {{ $caption }}
</a>
