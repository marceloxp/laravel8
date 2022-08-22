@aware(['register'])
@props(['name', 'caption' => ''])

<div class="form-group">
    <label for="{{ $name }}">{{ (!empty($caption)) ? $caption : (isset($fields_captions) ? $fields_captions->get($name) : '') }}</label>
    <input type="email" class="form-control {{ html_form_class_error($errors, $name) }}" name="{{ $name }}" id="{{ $name }}" autocomplete="off" value="{{ old($name, $register->$name ?? '') }}">
    @if ($errors->has($name))
        <span id="{{ $name }}-error" class="error text-danger" for="{{ $name }}">{{ $errors->first($name) }}</span>
    @endif
</div>
