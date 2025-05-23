<?php

namespace Dragan\FormComponents\app\Views\Components;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;

class Checkbox extends BaseComponent
{
    public const VIEW = 'form::components.checkbox';
    public const TYPE = 'checkbox';

    public bool  $hasDefaultValue = true;
    public mixed $defaultValue = '0';

    public function __construct(
        public string  $name,
        public ?string $id = null,
        public ?string $label = null,
        public string  $class = 'form-check-input',
        public ?bool    $checked = false,
        public mixed   $value = '1',
        bool  $hasDefaultValue = true,
        mixed $defaultValue = '0',
    )
    {
        $this->hasDefaultValue = $hasDefaultValue;
        $this->defaultValue = $defaultValue;

        $this->checked = Request::old($name, $checked);
        $this->id ??= $name . '-' . $this->value;
        $this->attributesData = [
            'name' => $this->name,
            'class' => $this->class,
            'value' => $value,
            'type' => $this::TYPE,
            'id' => $this->id,
        ];
    }

    public function getDataName(): string
    {
        $name = $this->name;

        if (Str::endsWith($name, '[]')) {
            $name = substr($name, 0, -2) . 'Components' . $this->value;
        }

        return preg_replace('/\[(.*?)]/', '.$1', $name);
    }
}
