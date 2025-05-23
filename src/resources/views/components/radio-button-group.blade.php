@aware([
    'model' => [],
])
@if($label)
    <x-form::label :for="$name" :label="$label"/>
@endif
<div class="btn-group d-flex">
    @foreach($values as $optionValue => $optionName)
        <input type="radio" class="btn-check" name="{{ $name }}" id="{{ $id . '-' . str($optionValue)->kebab() }}"
               value="{{ $optionValue }}"  autocomplete="off" @checked((string) $optionValue === data_get($model, $name, $value))>
        <label class="btn flex-fill btn-outline-primary" for="{{ $id . '-' . str($optionValue)->kebab() }}">{{ $optionName }}</label>
    @endforeach
</div>