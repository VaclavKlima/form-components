<?php

namespace Dragan\FormComponents\app\Views\Components;

class Time extends Input
{
    public string $type = 'time';

    public string $class = 'form-control time-input';

    public function formatValue(mixed $value): mixed
    {
        if ($value instanceof \DateTime) {
            $value = $value->format('H:i');
        }
        return $value;
    }
}
