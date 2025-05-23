@aware(['model' => []])
@php
    $value = $value ?? data_get($model, str($name)->replace('[]', ''), []);

    if (is_string($value)) {
        $value = [$value];
    }
@endphp
@if($label)
    <x-form::label :for="$name" :label="$label"/>
@endif
<select {{ $attributes->merge($attributesData) }} multiple>
    @foreach($options as $key => $option)
        <option value="{{ $key }}" @selected(in_array($key, $value))>{{ $option }}</option>
    @endforeach
</select>
