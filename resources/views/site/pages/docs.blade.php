@extends('layouts.clear')

@section('head')
    @parent
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/5.1.0/github-markdown.min.css" integrity="sha512-KUoB3bZ1XRBYj1QcH4BHCQjurAZnCO3WdrswyLDtp7BMwCw7dPZngSLqILf68SGgvnWHTD5pPaYrXi6wiRJ65g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
<x-a href="/" class="btn btn-primary">Voltar</x-a>

<div class="markdown-body">
@markdown
# Documentação

## Components

### Favicon

```blade
# Component:
@php echo '<x-favicon url="/favicon.png"/>' . PHP_EOL @endphp

# Output:
<link rel="shortcut icon" type="image/png" href="//local.laravel8.com.br:3000/favicon.png"/>
```

### Style

```blade
# Component:
@php echo '<x-css src="/css/style.css"/>' . PHP_EOL @endphp

# Output:
<link rel="stylesheet" type="text/css" href="//local.laravel8.com.br:3000/css/style.css?v=0.0.4">
```

### Image

```blade
# Component:
@php echo '<x-img src="/images/logo.png" alt="Logo"/>' . PHP_EOL @endphp

# Output:
<img src="//local.laravel8.com.br:3000/images/logo.png?v=0.0.4" alt="Logo"/>
```

### Link

```blade
# Component:
@php echo '<x-a href="/" class="btn btn-primary">Voltar</x-a>' . PHP_EOL @endphp

# Output:
<a href="//local.laravel8.com.br:3000" class="btn btn-primary">Voltar</a>
```
@endmarkdown
</div>
@endsection

@section('bottom_scripts')
    {{-- Home Bottom Scripts --}}
@endsection
