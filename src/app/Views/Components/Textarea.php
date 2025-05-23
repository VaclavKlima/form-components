<?php

namespace Dragan\FormComponents\app\Views\Components;

use Illuminate\Support\Facades\Request;

class Textarea extends BaseComponent
{
    public const VIEW = 'form::components.textarea';

    public function __construct(
        public string  $name,
        public ?string $label = null,
        public ?string $id = null,
        public mixed   $value = null,
        public string  $class = 'form-control',
    )
    {
        $this->value = Request::old($name, $value);
        $this->id = $id ?? $name;

        $this->attributesData = [
            'name' => $this->name,
            'class' => $this->class,
            'id' => $this->id,
        ];
    }
}
