<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('/admin') }}" class="brand-link">
        <img src="{{ vasset('/images/admin/logo.png') }}" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info"> <a href="#" class="d-block">{{ $user->name }}</a> </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active"> <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Administração <i class="right fas fa-angle-left"></i> </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/admin/config') }}" class="nav-link {{ admin_sidebar_active('config') }}"> <i class="fas fa-cogs nav-icon"></i>
                                <p>Configurações</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- add logout link -->
                <li class="nav-item">
                    <a href="{{ route('adminLogout') }}" class="nav-link"> <i class="nav-icon fas fa-times"></i>
                        <p>Sair</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>