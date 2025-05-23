<?php

namespace Dragan\FormComponents\app\Views\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

abstract class BaseComponent extends Component implements InputInterface
{
    public const VIEW = '';
    public array $attributesData = [];
    public mixed $value = null;

    public function render(): View|Closure|string
    {
        if (!empty($this->attributesData['name']) && empty($this->attributesData['id'])) {
            $this->attributesData['id'] = $this->attributesData['name'];
        }

        return view($this::VIEW);
    }

    public function formatValue(mixed $value): mixed
    {
        return $value;
    }
}
