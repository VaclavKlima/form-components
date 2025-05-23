<?php

namespace Dragan\FormComponents\app\Views\Components;

class Label extends BaseComponent
{
    public const VIEW = 'form::components.label';

    public function __construct(
        public string $for,
        public ?string $label = null,
        public string $class = 'form-label',
    )
    {
        $this->attributesData = [
            'for' => $this->for,
            'class' => $this->class,
        ];
    }
}
