@aware(['model' => []])
@if($label)
    <x-form::label :for="$id" :label="$label"/>
@endif
<textarea {{ $attributes->merge($attributesData) }}>{{ $slot->hasActualContent() ? $slot : $value ?? data_get($model,$name) }}</textarea>
