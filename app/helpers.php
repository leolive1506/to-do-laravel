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

if (!function_exists('getFileExtension')) {
    function getFileExtension($file)
    {
        $orinalName = $file->getClientOriginalName();
        [$name, $extension] = explode('.', $orinalName);
        return $extension;
    }
}

if (!function_exists('dateFormat')) {
    function dateFormat($date)
    {
        return date('d/m/Y', strtotime($date));
    }
}

if (!function_exists('numberFormat')) {
    function numberFormat($value, $decimal = ',', $thousand = '.')
    {
        if (empty($value)) {
            return $value;
        }

        return number_format($value, 2, $decimal, $thousand);
    }
}

if (!function_exists('getOnlyNumbers')) {
    function getOnlyNumbersDecimal($string)
    {
        if (empty($string)) {
            return $string;
        }
        $string = str_replace('.', '', $string);
        $string = str_replace(',', '.', $string);

        return intval(floatval($string) * 100);
    }
}
