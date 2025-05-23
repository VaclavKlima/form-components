@aware([
    'model' => [],
])
<div class="form-check">
    @if($attributesData['type'] !== 'radio' && $hasDefaultValue)
        <input type="hidden" value="{{ $defaultValue }}" name="{{ $name }}">
    @endif
    <input {{ $attributes->merge($attributesData) }} @checked($checked || ($value === data_get($model, $getDataName($name))))>
    <label class="form-check-label" for="{{ $id }}">
        {!! $label !!}
    </label>
</div>
