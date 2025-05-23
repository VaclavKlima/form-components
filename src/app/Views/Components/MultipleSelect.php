<?php

namespace Dragan\FormComponents\app\Views\Components;

use Illuminate\Support\Collection;

class MultipleSelect extends Select
{
    public const VIEW = 'form::components.multiple-select';
    public const TYPE = 'multiple-select';

    public function __construct(
        string $name,
        ?string $label = null,
        ?string $id = null,
        mixed $value = null,
        string $class = 'form-select',
        array|Collection $options = [],
        bool $isSearchable = true,
        bool $useNameAsValue = false
    ) {
        parent::__construct($name, $label, $id, $value, $class, $options, $isSearchable, $useNameAsValue);
    }

}
