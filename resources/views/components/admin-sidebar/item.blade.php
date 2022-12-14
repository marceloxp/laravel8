@props(['routeName', 'caption', 'slug', 'icon' => 'fas fa-cogs', 'visible' => true])

@if ($visible)
    <li class="nav-item">
        <a {{ $attributes }} href="{{ (!empty($routeName)) ? route($routeName) : '#' }}" class="nav-link {{ admin_sidebar_active($slug) }}"> <i class="{{ $icon }} nav-icon"></i>
            <p>{{ $caption }}</p>
        </a>
    </li>
@endif
