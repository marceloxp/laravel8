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
                <x-admin-sidebar caption="Administração" icon="fas fa-tachometer-alt" :visible="$user->isDeveloperOrIsMaster()">
                    {{-- add config menu component --}}
                    <x-admin-sidebar.item routeName="adminConfig" caption="Configurações" slug="config" icon="fas fa-cogs"/>
                    {{-- add user menu component --}}
                    <x-admin-sidebar.item routeName="adminUser" caption="Usuários" slug="user" icon="fas fa-users"/>
                    {{-- add clear cache link component --}}
                    <x-admin-sidebar.item routeName="adminClearCache" caption="Limpar Cache ({{ $cached_count }})" slug="clear-cache" icon="fas fa-trash-alt"/>
                    {{-- add logs link --}}
                    <x-admin-sidebar.item routeName="adminLogs" target="_blank" caption="Logs" slug="logs" icon="fas fa-file-alt"/>

                </x-admin-sidebar>
                {{-- add sidebar header component --}}
                <x-admin-sidebar caption="Preferências" icon="fas fa-user-cog" :visible="true">
                    <li class="nav-item">
                        <a href="#" class="nav-link"> <i class="fas fa-desktop nav-icon"></i>
                            <p id="screen-mode">Tema Escuro</p>
                        </a>
                    </li>
                </x-admin-sidebar>
                {{-- add logout link --}}
                <x-admin-sidebar.item routeName="adminLogout" caption="Sair" slug="logout" icon="fas fa-sign-out-alt" :visible="true"/>
            </ul>
        </nav>
    </div>
</aside>