@props(['url' => '/favicon.png'])

<link rel="shortcut icon" type="image/png" {{ $attributes }} href="{{ url($url) }}"/>
