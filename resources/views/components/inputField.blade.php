@props([
    'type' => 'text',
    'name' => 'default',
    'id' => 'default',
    'label' => false,
    'style' => '',
    'value' => '',
    'placeholder' => 'Exemplos',
    'attributes' => '',
    'hide' => false
])

<div class="mb-3">
    @if($label)
        <label for="{{ $id }}">{{ $label }}</label>
    @endif
    <input type="{{ $type }}" class="form-control {{ $style }}" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}" placeholder="{{ $placeholder }}" {{ $attributes }}>
</div>
