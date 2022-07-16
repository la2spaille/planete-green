<?php

use App\Model\Woocommerce;


$products = Woocommerce::get_products();
echo '<pre>';

var_dump(wp_create_nonce( 'wc_store_api' ));
echo '</pre>';
die();
?>
<div id="products" class="page p-products">
    <section id="l-s0" class="l-product">
        <div class="l-rl">
            <div class="l-tb">
                <ul class="ul-history">
                    <li><a href="/">acceuil</a></li>
                    <li>・</li>
                    <li>boutique</li>
                </ul>
                <div class="w-page_title">
                    <h1><span>Nos produits</span></h1>
                </div>
                <div class="w-product w--grid">
                    <div class="w-product_filter">
                        <strong>Filter par :</strong>
                        <ul class="ul-products_categories">
                            <li style="color: var(--green)"><span>Tout les produits</span></li>


                        </ul>
                    </div>
                    <div class="w-product_card">
                        <?php foreach ($products as  $product) : ?>
                        <div class="card-product">
                            <a
                               href="<?= site_url() . "/produit/" . $product['slug'] ?>">
                                <div class="c-img products">
                                    <img src="<?= $product['images']['src'] ?>"
                                         alt="Product image">
                                </div>
                                <div class="c-text products">
                                    <h3 class="w-product_name">
                                        <span><?= $product['name'] ?></span>
                                    </h3>
                                    <strong class="w-product_price">
                                        <?= number_format($product['price'], 2, ',') . " " . "&#8364" . " " ?>
                                    </strong>
                                </div>
                            </a>
                            <a class="add_to_card c-icon cart"
                               href="<?= site_url() . "/produit/?add-to-cart=" . $product['id'] ?>">
                            </a>
                        </div>
                        <?php endforeach ?>
                        <ul class="ul-pagination">
                            <li class="c-icon previous"></li>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>...</li>
                            <li>8</li>
                            <li class="c-icon next"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include SRC . 'app/View/common/footer.php'; ?>
</div>
