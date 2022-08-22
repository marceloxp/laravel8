@aware(['register'])
@props(['actionRouteName', 'caption' => 'Editar'])

<a href="{{ route($actionRouteName, $register->id) }}" class="btn btn-success btn-sm">
    <i class="fas fa-edit"></i> {{ $caption }}
</a>
