@props([
    'type' => 'text',
    'id' => 'floatingInput',
    'name',
    'ionic' => '',
    'icon' => true,
    'label',
    'classOptional' => '',
    'attributes'
])

<div class="card">
    <div class="form-floating">
        <input type="{{ $type }}" class="form-control" id="{{ $id }}" placeholder="" name="{{ $name }}">
        <label for="{{ $id }}" class="ionic {{ $classOptional }}" {{ $attributes }}>@if($icon)<ion-icon class="ionic" name="{{ $ionic }}"></ion-icon>@endif<span style="margin-left: 10px" class="ionic">{{ $label }}</span></label>
    </div>
</div>
@error($name)
    <div class="error" style="color: red; font-size: 1rem">{{ $message }}</div>
@enderror