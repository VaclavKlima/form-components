@aware(['model' => []])
@php
    $selectedValue = $value ?? data_get($model, $name);
@endphp
@if($label)
    <x-form::label :for="$name" :label="$label"/>
@endif
<select {{ $attributes->merge($attributesData) }}>
    @foreach($options as $key => $option)
        <option value="{{ $useNameAsValue ? $option : $key }}"
                @selected($selectedValue !== null && (string) ($useNameAsValue ? $option : $key) === (string) $selectedValue)
        >
            {{ $option }}
        </option>
    @endforeach
</select>
