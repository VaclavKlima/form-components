@aware(['model' => []])
@if($label)
    <x-form::label :for="$id" :label="$label"/>
@endif
<input {{ $attributes->merge($attributesData) }} value="{{ $value ?? data_get($model, $name) }}" />