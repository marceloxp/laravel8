<div class="card-footer">
    <!-- add Salvar button submit with icon -->
    <button type="submit" class="btn btn-success mr-3"><i class="fa fa-save"></i> Salvar</button>

    <!-- add link cancel with icon -->
    <a href="{{ $model::getAdminRouteByDotNotation('index') }}" class="btn btn-default">
        <i class="fa fa-fw fa-times-circle"></i> Cancelar
    </a>
</div>
