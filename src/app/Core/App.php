<?php

namespace App\Core;

use \Engine\Core\Autoloader;

class App {

    public static function init () {
        require SRC . 'engine/Core/Autoloader.php';
        Autoloader::register();

    }

}
