<?php

use App\Core\App;
use App\Core\Constant;

$root = "/";

require $root . 'src/app/Core/Constant.php';
Constant::init();

require SRC . 'app/Core/App.php';
App::init();

//if (is_404()) {
//    include PAGE . "404.php";
//} else {
//
//    get_header();
//    if (is_front_page()) {
//        include PAGE . "home.php";
//    } elseif (is_cart()) {
//        include PAGE . "cart.php";
//    } elseif (is_checkout()) {
//        include PAGE . "checkout.php";
//    }
//    get_footer();
//}

include ROOT . "header.php";
include PAGE . "products.php";

include ROOT . "footer.php";
?>