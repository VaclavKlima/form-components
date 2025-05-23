@props(['formData', 'hiddenFields'])
<form {{ $attributes->merge($attributesData) }}>
    @method($method)
    @csrf
    {{ $slot }}
</form>
