<?php

namespace Dragan\FormComponents\app\Views\Components;

use Illuminate\Support\Facades\Request;

class Input extends BaseComponent
{
    public const VIEW = 'form::components.input';
    public string $type = 'text';
    public string $class = 'form-control';

    public function __construct(
        public string $name,
        public ?string $label = null,
        public ?string $id = null,
        public mixed $value = null,
        ?string $class = null,
        ?string  $type = null,
    )
    {
        if ($class) {
            $this->class = $class;
        }

        $this->id = $id ?? $name;

        if ($type) {
            $this->type = $type;
        }
        $this->value = Request::old($name, $this->formatValue($this->value));

        $this->attributesData = [
            'name' => $this->name,
            'id' => $this->id,
            'type' => $this->type,
            'class' => $this->class,
        ];
    }
}
