<?php

namespace Dragan\FormComponents\app\Views\Components;

use Illuminate\Support\Str;

class InputIconGroup extends BaseComponent
{
    public const VIEW = 'form::components.input-icon-group';

    public function __construct(
        public ?string $for = null,
        public ?string $label = null,
        public ?string $icon = null,
    )
    {
        if (empty($this->for)) {
            $this->for = Str::of($this->label)->slug('-');
        }
    }

    public function isIcon(): bool
    {
        return !empty($this->icon)
            && preg_match('/^(fa[srlbdt]|fa-(solid|regular|light|thin|duotone|brands))\sfa-[\w-]+$/', $this->icon)
            && !preg_match('/<[^>]*>/', $this->icon);
    }
}
