<?php
$product =  wc_get_products([]);
$product = json_decode($product[0], true);
$related_products =[$product,$product,$product,$product];
//echo "<pre>";
//var_dump($related_products);
//var_dump($product);
//echo "</pre>";
//die()
?>
<div id="product_slug" class="page p-product_slug">
    <section id="l-s0" class="l-product_slug">
        <div class="l-rl">
            <div class="l-tb">
                <ul class="ul-history">
                    <li><a href="/">acceuil</a></li>
                    <li>・</li>
                    <li><a href="/boutique">boutique</a></li>
                    <li>・</li>
                    <li><?= $product['name'] ?></li>
                </ul>
                <div class=" w-product_slug">
                    <div class="w-gallery product_slug">
                        <div class="c-img product_slug primary">
                            <img src="<?= $product['images'][0]['src'] ?>" alt="">
                        </div>
                    </div>
                    <div class="c-text product_slug">
                        <h1 class="product_name"><span><?= $product['name'] ?></span></h1>
                        <div class="product_description"><?= $product['description'] ?></div>
                        <div class="w-product_price">
                            <div class="product_price">
                                <span><?= number_format($product['price'], 2, ',') . " " . "&#8364" . " " . $product['meta_data'][2]['value'] ?></span>
                            </div>
                            <?php if ($product['on_sale']) : ?>
                                <div class="product_reduction"></div>
                                <div class="regular_price">
                                    <span><?= number_format($product['regular_price'], 2, ',') . " " . "&#8364" ?></span>
                                </div>
                            <?php endif ?>
                        </div>
                        <div class="c-add_to_cart">
                            <div class="w-add_to_cart_input">
                                <div class="minus"><span>-</span></div>
                                <div data-qty="0" data-id="<?= $product['id'] ?>" data-index=""
                                     data-price="<?= $product['price'] ?>" class="add_to_cart_input"><span>0</span>
                                </div>
                                <div class="plus"><span>+</span></div>
                            </div>
                            <button class="btn-add_to_cart"><span>Ajouter au panier</span></button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="l-s1" class="l-related_products">
        <div class="l-rl">
            <div class="l-tb">
                <div class="w-related_products_title">
                    <h3><span>Produits similaires</span></h3>
                </div>
                <div class="w-related_products">
                    <?php foreach ($related_products as $product): ?>
                        <a class="card-product"
                           href="/produit/<?= $product['slug'] ?>">
                            <div class="c-img products">
                                <img src="<?= $product['images'][0]['src'] ?>"
                                     alt="Product image">
                            </div>
                            <div class="c-text products">
                                <h3 class="w-product_name">
                                    <span><?= $product['name'] ?></span>
                                </h3>
                                <strong class="w-product_price">
                                    <?= number_format($product['price'],2,',') . " " . "&#8364" . " " . $product['meta_data'][2]['value'] ?>
                                </strong>
                            </div>
                            <button class="add_to_card c-icon cart">

                            </button>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <?php include ROOT . 'View/common/footer.php'; ?>

</div>

