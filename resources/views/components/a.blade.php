@props(['href' => '#'])

<a href="{{ url($href) }}" {{ $attributes }}>{{ $slot }}</a>
