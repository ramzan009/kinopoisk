<?php

namespace App\Kernel\Http;

class Redirect
{

    public static function to(string $url)
    {
        header('Location: ' . $url);
        exit;
    }

}