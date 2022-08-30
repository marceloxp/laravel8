@aware(['register'])
@props(['caption' => 'Editar'])

<a href="{{ route($model::getAdminRouteName('edit'), $register->id) }}" data-id="{{ $register->id }}" class="btn btn-success btn-sm">
    <i class="fas fa-edit"></i> {{ $caption }}
</a>
