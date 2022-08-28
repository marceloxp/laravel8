@aware(['register'])
@props(['name', 'caption' => ''])

<div class="form-group">
    <label for="{{ $name }}">{{ (!empty($caption)) ? $caption : (isset($fields_captions) ? $fields_captions->get($name) : '') }}</label>
    <!-- add textarea -->
    <textarea class="form-control" id="{{ $name }}" name="{{ $name }}" rows="3">{{ old($name, $register->$name ?? '') }}</textarea>
    @if ($errors->has($name))
        <span id="{{ $name }}-error" class="error text-danger" for="{{ $name }}">{{ $errors->first($name) }}</span>
    @endif
</div>
