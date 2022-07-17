<div id="checkout" class="page p-checkout">

    <section  class="l-checkout" id="l-s0">
        <div class="l-rl">
            <div class="l-tb">
                <ul class="ul-history">
                    <li><a href="/">acceuil</a></li>
                    <li>・</li>
                    <li>paiment</li>
                </ul>
                <div class="w-page_title">
                    <h1><span>Paiement</span></h1>
                </div>
                <div class="w-checkout">
                    <?= do_shortcode('[woocommerce_checkout]') ?>
                </div>
            </div>
        </div>
    </section>
    <?php include SRC . 'app/View/common/footer.php'; ?>
</div>
