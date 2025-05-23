@aware([
    'model' => [],
])
@if($label)
    <x-form::label :for="$name" :label="$label"/>
@endif
@if($defaultValue)
    <input type="hidden" value="{{ $defaultValue }}" name="{{ $name }}">
@endif
<div class="btn-group d-flex" @if($checkOnlyOne) data-toggle="check-only-one" @endif>
    @foreach($values as $optionValue => $optionName)
        <input type="checkbox" class="btn-check" name="{{ $name }}"
               value="{{ $optionValue }}" @checked(((string) $optionValue) === ($value ?? data_get($model, $name)))
               id="{{ $id . '-' . str($optionValue)->kebab() }}"
               autocomplete="off"
        >
        <label class="btn flex-fill btn-outline-primary" for="{{ $id . '-' . str($optionValue)->kebab() }}">{{ $optionName }}</label>
    @endforeach
</div>
