<?php


constant_init();
if (is_404()) {
    include ROOT . "View/page/404.php";
} else {

    get_header();
    if (is_front_page()) {
        include PAGE . "home.php";
    } elseif (is_cart()) {
        include PAGE . "cart.php";
    } elseif (is_checkout()) {
        include PAGE . "checkout.php";
    }
    get_footer();
}

?>