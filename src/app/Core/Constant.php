<?php

namespace App\Core;

class Constant
{

    public static function init()
    {
        $root = get_theme_file_path() . "/";
        define('ROOT', $root);
        $src = ROOT . "src/";
        define('SRC', $src);
        $page = SRC . "app/View/page/";
        define('PAGE', $page);
        $uri = get_theme_file_uri() . "/";
        define('URI', $uri);

    }

}
