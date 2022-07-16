<?php var_dump(wp_create_nonce( 'wc_store_api' ));?>
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
                    <?= do_shortcode('[woocommerce_cart]') ?>
                </div>
            </div>
        </div>
    </section>
    <?php include ROOT . 'View/common/footer.php'; ?>
</div>
