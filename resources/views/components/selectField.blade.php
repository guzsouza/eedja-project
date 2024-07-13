@props([
    'name',
    'id',
    'placeholder',
    'options',
    'hide' => false,
    'optionValue' => 'id',
    'showValue' => 'name',
    'arrayOptions' => true
])

<select class="mb-3 form-select" aria-label="Default select example" name="{{ $name }}" id="{{ $id }}" {{ $attributes}} style="{{ $hide ? 'display: none' : ''}}">
    <option selected disabled value="">{{ $placeholder }}</option>
    @if($arrayOptions)
        @foreach ($options as $option)
            <option value="{{ $option['id'] }}">{{ $option['name'] }}</option>
        @endforeach
    @else
        @foreach ($options as $option)
            <option value="{{ $option }}">{{ $option }}</option>
        @endforeach
    @endif
</select>