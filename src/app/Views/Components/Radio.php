<?php

namespace Dragan\FormComponents\app\Views\Components;

use Illuminate\Support\Facades\Request;

class Radio extends Checkbox
{
    public const TYPE = 'radio';

    public function __construct(
        public string  $name,
        public mixed   $value,
        public ?string $id = null,
        public ?string $label = null,
        public string  $class = 'form-check-input',
        public ?bool    $checked = false,
    )
    {
        $this->checked = $checked || (Request::old($name) === $value);
        $this->id ??= "{$name}-{$value}";
        $this->attributesData = [
            'name' => $this->name,
            'id' => $this->id,
            'class' => $this->class,
            'value' => $value,
            'type' => $this::TYPE,
        ];
    }
}
