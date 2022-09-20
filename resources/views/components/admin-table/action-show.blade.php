@aware(['register'])
@props(['caption' => 'Exibir'])

<a href="{{ route($model::getAdminPathByDotNotation('show'), $register->id) }}" data-id="{{ $register->id }}" class="btn btn-primary btn-sm">
    <i class="fas fa-eye"></i> {{ $caption }}
</a>
