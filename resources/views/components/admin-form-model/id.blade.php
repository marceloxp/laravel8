@aware(['register'])
@props(['name' => 'id'])

<input type="hidden" name="{{ $name }}" value="{{ $register->id ?? '' }}">