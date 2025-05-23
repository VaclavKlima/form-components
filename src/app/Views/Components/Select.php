<?php

namespace Dragan\FormComponents\app\Views\Components;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Request;

class Select extends BaseComponent
{
    public const VIEW = 'form::components.select';
    public const TYPE = 'select';

    public function __construct(
        public string           $name,
        public ?string          $label = null,
        public ?string          $id = null,
        public mixed            $value = null,
        public string           $class = 'form-select',
        public array|Collection|\Generator $options = [],
        public bool             $isSearchable = false,
        public bool             $useNameAsValue = false,
    )
    {
        $this->value = Request::old($name, $value);

        if ($this->isSearchable) {
            $this->class .= ' choices is-searchable';
        }
        $this->attributesData = [
            'name' => $this->name,
            'id' => $this->id ?? $this->name,
            'class' => $this->class,
        ];
    }
}
