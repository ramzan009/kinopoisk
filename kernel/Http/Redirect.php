<?php

namespace App\Kernel\Http;

class Redirect implements RedirectInterface
{

    public static function to(string $url)
    {
        header('Location: ' . $url);
        exit;
    }

}