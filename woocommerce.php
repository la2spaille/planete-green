<?php


constant_init();
if (is_404()) {
    include ROOT . "View/page/404.php";
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