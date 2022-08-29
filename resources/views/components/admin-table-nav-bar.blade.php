<nav class="navbar navbar-expand ml-0 navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ $model::getAdminRouteByName('create') }}" class="nav-link">Adicionar</a>
        </li>
    </ul>
    <form class="form-inline ml-3" action="{{ $model::getAdminRouteByName('search') }}" method="get">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" id="search" name="search" type="search" placeholder="Buscar" aria-label="Buscar" value="{{ $search }}">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
</nav>
