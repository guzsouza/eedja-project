@props([
    'name' => 'default',
    'id' => 'default',
    'label' => 'default',
    'style' => '',
    'value' => '',
    'attributes',
    'placeholder' => 'Exemplos'
])

<div class="mb-3">
    <label for="{{ $id }}">{{ $label }}</label>
<textarea class="form-control" id="{{ $id }}" style="height: 80px" name="{{ $name }}" placeholder="{{ $placeholder }}">{{ $value }}</textarea>
</div>