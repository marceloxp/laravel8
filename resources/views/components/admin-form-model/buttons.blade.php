@props(['crud'])

<div class="card-footer">
    <button type="submit" class="btn btn-success mr-3"><i class="fa fa-save"></i> Salvar</button>
    <a href="{{ admin_crud_route($crud, 'index') }}" class="btn btn-default">
        <i class="fa fa-fw fa-times-circle"></i> Cancelar
    </a>
</div>
