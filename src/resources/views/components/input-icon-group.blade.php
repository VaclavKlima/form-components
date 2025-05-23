<div class="form-group position-relative">
    @if($label)
        <x-form::label :for="$for ?? ''" :label="$label"/>
    @endif
    <div class="input-group">
        {{ $slot }}
        @if(!empty($icon) || $icon?->hasActualContent())
            @if(is_string($icon))
                <div>
                <span class="input-group-text h-100 pointer-events-none">
                    @if($isIcon())
                        <i class="{{ $icon }}"></i>
                    @else
                        {{ $icon }}
                    @endif
                </span>
                </div>
            @else
                <div>
                    {{ $icon }}
                </div>
            @endif
        @endif
    </div>
</div>
