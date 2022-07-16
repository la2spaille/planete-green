<?php


use App\Core\App;
use App\Core\Constant;

$root = get_theme_file_path() . "/";

require $root . 'src/app/Core/Constant.php';
Constant::init();

require SRC . 'app/Core/App.php';
App::init();

if (is_404()) {
    include PAGE . "404.php";
} else {

    get_header();
    if (is_shop()) {
        include PAGE . "products.php";
    } elseif (is_product()) {
        include PAGE . "product_slug.php";
    }
    get_footer();
}

?>