<?php

namespace Dragan\FormComponents\app\Views\Components;

use Illuminate\Support\Facades\Request;

class CheckboxButtonGroup extends Input
{
    public const VIEW = 'form::components.checkbox-button-group';

    public function __construct(
        public string $name,
        public string|null $id = '',
        public array $values = [],
        public mixed $value = null,
        public string|null $label = '',
        public mixed $defaultValue = null,
        public bool $checkOnlyOne = false,
    )
    {
        $this->value = Request::old($name, $value);

        if(empty($id)) {
            $this->id = $name;
        }
    }
}
