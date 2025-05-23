<?php

namespace Dragan\FormComponents\app\Views\Components;

use Closure;
use Illuminate\Contracts\View\View;

interface InputInterface
{
    public const VIEW = '';

    public function render(): View|Closure|string;
}
