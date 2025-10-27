<?php

namespace App\Kernel\Http;

interface RedirectInterface
{

    public static function to(string $url);

}