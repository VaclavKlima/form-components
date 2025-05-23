<?php

namespace Dragan\FormComponents\app\Views\Components;

class Model extends Open
{
    public function __construct(
        public string $action = '',
        public array|object|null $model = [],
        public string $method = 'PUT',
    )
    {
        if (is_object($this->model)) {
            if (method_exists($this->model, 'toArray')) {
                $this->model = $this->model->toArray();
            } else {
                $this->model = (array)$this->model;
            }
        }
        $this->model ??= [];

        $this->attributesData = [
            'method' => match (strtoupper($this->method)) {
                'PUT', 'PATCH', 'DELETE' => 'POST',
                default => $this->method,
            },
        ];
    }
}
