<?php

use App\Model\Store;

//var_dump(wp_create_nonce( 'wc_store_api' ));
$cart = Store::get_cart();

echo '<pre>';
var_dump($cart);
echo '</pre>';
?>
<div id="cart" class="page p-cart">

    <section class="l-cart" id="l-s0">
        <div class="l-rl">
            <div class="l-tb">
                <ul class="ul-history">
                    <li><a href="/">acceuil</a></li>
                    <li>・</li>
                    <li>panier</li>
                </ul>
                <div class="w-page_title">
                    <h1><span>Votre Panier</span></h1>
                </div>
                <div class="w-cart">
                </div>
            </div>
        </div>
    </section>
    <?php include SRC . 'app/View/common/footer.php'; ?>
</div>
