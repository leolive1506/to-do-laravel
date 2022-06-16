<?php
if (!function_exists('redirectTo')) {
    function redirectTo($route)
    {
        return redirect()->route($route);
    }
}

if (!function_exists('flashMessage')) {
    function flashMessage($text, $name = 'status')
    {
        request()->session()->flash($name, $text);
    }
}
