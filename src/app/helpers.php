<?php


use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Facades\View;

if (! function_exists('view')) {
    /**
     * Get the evaluated view contents for the given view.
     *
     * @param string|null $view
     * @param array|Arrayable $data
     * @param array $mergeData
     * @return View
     */
    function view(string $view = null, array|Arrayable $data = [], array $mergeData = []): View
    {
       return View::make($view, $data, $mergeData);
    }
}
