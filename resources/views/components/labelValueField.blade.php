@props([
    'id' => 'default',
    'label' => 'default',
    'value' => '',
    'name' => 'default',
    'hiddenValue' => ''
])

<div class="mb-3">
    <label for="{{ $id }}">{{ $label }}</label>
    <div class="form-control" id="{{ $id }}" aria-label="label select example">
        {{ $value }}
    </div>
</div>
<input type="hidden" name="{{ $name }}" value="{{ $hiddenValue }}">