<?php

namespace App\Config;
use App\Model\Wordpress;

class Details
{
    public static function data() {
        $wordpress = new Wordpress();
        $details = $wordpress->get_info();
        return $details;
    }
}