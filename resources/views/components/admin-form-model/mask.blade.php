@aware(['register'])
@props(['name', 'type', 'caption' => ''])

<div class="form-group">
    <label for="{{ $name }}">{{ (!empty($caption)) ? $caption : (isset($fields_captions) ? $fields_captions->get($name) : '') }}</label>
    <input type="text" class="form-control {{ html_form_class_error($errors, $name) }}" name="{{ $name }}" id="{{ $name }}" autocomplete="off" value="{{ old($name, $register->$name ?? '') }}">
    @if ($errors->has($name))
        <span id="{{ $name }}-error" class="error text-danger" for="{{ $name }}">{{ $errors->first($name) }}</span>
    @endif
</div>

@section('scripts')
    <script>
        // add onready event to the document
        $(document).ready(function() {
            // add mask to the input
            $('#{{ $name }}').simpleMask({ 'mask': '{{ $type }}' });
        });
    </script>
@endsection
