<?php

use App\Model\Woocommerce;

$products = Woocommerce::get_products();
$categories = Woocommerce::get_categories();

echo '<pre>';
//var_dump(wp_create_nonce('wc_store_api'));
echo '</pre>';
//die();
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
                            <?php foreach ($categories as $category) : ?>
                                <li><span><?= $category['name'] ?></span></li>
                            <?php endforeach; ?>

                        </ul>
                    </div>
                    <div class="w-product_card">
                        <?php foreach ($products as $product) : ?>
                            <a
                                    class="card-product"
                                    href="<?= site_url() . "/produit/" . $product['slug'] ?>">
                                <div class="c-img products">
                                    <img src="<?= $product['images'][0]['src'] ?>"
                                         alt="Product image">
                                </div>
                                <div class="c-text products">
                                    <h3 class="w-product_name">
                                        <span><?= $product['name'] ?></span>
                                    </h3>
                                    <strong class="w-product_price">
                                        <?= number_format($product['price'], 2, ',') . " " . "&#8364" . " " . $product['meta_data'][2]['value'] ?>
                                    </strong>
                                </div>
                                <button class="add_to_card c-icon cart"
                                        data-id="<?= $product['id'] ?>"
                                        data-qty="1"
                                        href="<?= site_url() . "/produit/?add-to-cart=" . $product['id'] ?>">
                                </button>

                            </a>
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
