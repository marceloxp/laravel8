@props(['crud', 'model', 'search', 'show' => true])

<nav class="navbar navbar-expand ml-0 navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ admin_crud_route($crud, 'create') }}" class="nav-link">Adicionar</a>
        </li>
    </ul>
    @if ($show)
        <form class="form-inline ml-3" action="{{ admin_crud_route($crud, 'index') }}" method="get">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" id="search" name="search" type="search" placeholder="Buscar" aria-label="Buscar" value="{{ $search }}">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    @endif
</nav>
