<div class="form-group position-relative">
    @if($label)
        <x-form::label :for="$for ?? ''" :label="$label"/>
    @endif
    <div class="input-group">
        {{ $slot }}
        @if(!empty($icon) || $icon?->hasActualContent())
            @if(is_string($icon))
                <span class="input-group-text">
                    @if($isIcon())
                        <i class="{{ $icon }}"></i>
                    @else
                        {{ $icon }}
                    @endif
                </span>
            @else
                <div>
                    {{ $icon }}
                </div>
            @endif
        @endif
    </div>
</div>
