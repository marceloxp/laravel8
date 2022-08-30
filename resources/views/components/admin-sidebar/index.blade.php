@props(['caption', 'icon' => 'fas fa-cogs', 'visible' => true])

@if ($visible)
    <li class="nav-item menu-open">
        <a href="#" class="nav-link active"> <i class="nav-icon {{ $icon }}"></i>
            <p> {{ $caption }} <i class="right fas fa-angle-left"></i> </p>
        </a>
        <ul class="nav nav-treeview">
            {{ $slot }}
        </ul>
    </li>
@endif