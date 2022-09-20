@aware(['register'])
@props(['name', 'caption' => '', 'table'])

<div class="form-group select2-cyan">
    <label for="{{ $name }}">{{ (!empty($caption)) ? $caption : (isset($fields_captions) ? $fields_captions->get($name) : '') }}</label>
    <select data-dropdown-css-class="select2-cyan" class="select2 form-control {{ html_form_class_error($errors, $name) }}" name="{{ $name }}[]" id="{{ $name }}" multiple="multiple>
        @foreach ($table as $item)
            @php
                $selected = '';
                if (isset($register)) {
                    $selected = (in_array($item->id, $register->{$name}->pluck('id')->toArray())) ? 'selected' : '';
                }
            @endphp
            <option value="{{ $item->id }}" {{ $selected }}>{{ $item->name }}</option>
        @endforeach
    </select>
    @if ($errors->has($name))
        <span id="{{ $name }}-error" class="error text-danger" for="{{ $name }}">{{ $errors->first($name) }}</span>
    @endif
</div>