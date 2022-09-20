@aware(['register'])
@props(['caption' => 'Excluir', $confirm_message='Deseja realmente excluir este registro?'])

<form method="POST" action="{{ route($model::getAdminPathByDotNotation('destroy'), $register->id) }}" style="display: inline-block;">
    @csrf
    @method('DELETE')
    <!-- submit button Excluir with icon and confirm -->
    <button data-id="{{ $register->id }}" type="submit" class="btn btn-sm btn-danger" onclick="return confirm('{{ $confirm_message }}')">
        <i class="fas fa-trash"></i> {{ $caption }}
    </button>
</form>
