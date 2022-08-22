@aware(['register'])
@props(['actionRouteName', 'caption' => 'Excluir', $confirm_message='Deseja realmente excluir este registro?'])

<form action="{{ route($actionRouteName, $register->id) }}" method="POST" style="display: inline-block;">
    @csrf
    @method('DELETE')
    <!-- submit button Excluir with icon and confirm -->
    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm($confirm_message)">
        <i class="fas fa-trash"></i> {{ $caption }}
    </button>
</form>
