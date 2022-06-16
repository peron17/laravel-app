<?php
namespace App\Helper;

class Generator
{
    public static function phoneNumber($prefix = '08', $len = 9)
    {
        $al = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

        $len = !$len ? random_int(7, 12) : $len; // Chose length randomly in 7 to 12

        $ddd = array_map(function($a) use ($al){
            $key = random_int(0, 9);
            return $al[$key];
        }, array_fill(0,$len,0));

        return $prefix . implode('', $ddd);
    }
}