<?php

use App\Model\Store;

$cart = Store::get_cart();
echo $cart["items_count"];
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
                    <?php if ($cart["items_count"] == 0): ?>
                        <div class="w-empty_cart">
                            <div class="w-illustration">
                                <?php for($i = 0; $i < 3; $i++): ?>

                                    <div
                                            class="card-product">
                                        <div class="c-img products">
                                            <img src=""
                                                 alt="Product image">
                                        </div>
                                        <div class="c-text products">
                                            <h3 class="w-product_name">
                                                <span>Planète Green</span>
                                            </h3>
                                            <strong class="w-product_price">
                                                <span>2,37e</span>
                                            </strong>
                                        </div>

                                    </div>
                                <?php endfor;?>
                            </div>
                            <p><span>Votre panier est vide...</span></p>
                            <a href="/boutique" style="padding: 15px 10px; background: var(--green); color: var(--light)">Retourner à la boutique</a>
                        </div>
                    <?php else: ?>
                        <div class="w-bag_items">
                            <h3 class="">
                                <span>Mon panier</span>
                            </h3>
                            <div class="w-bag_items_list">
                                <?php foreach ($cart['items'] as $item) : ?>
                                    <div class="bag_items">
                                        <div class="w-img">
                                            <div class="c-img c-br">
                                                <img src="" alt="" />
                                            </div>
                                        </div>
                                        <div class="w-bag_item_content">
                                            <div class="w-bag-item-description">
                                                <strong class="bag-item-price"><span>{price} {currency}</span></strong>
                                                <h3 class="bag-item-name"><span>$item['name]</span></h3>
                                                <h3>$item['']</h3>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            </div>
                            <div class="w-bag-sub-total c-br">
                                <p>
                                    <strong>Sous-total</strong><span>{totalPrice}</span>
                                </p>
                            </div>
                        </div>
                        <div class="w-bag_total">
                            <h3 class="bag_total">
                                <span>Total</span> <span><?= $cart['totals']['total_price'] ?></span>
                            </h3>
                            <div class="w-bag-total-detail">
                                <p class="w-flex--sb">
                                    <strong>Sous-total</strong><span><?= $cart['totals']['total_items'] ?></span>
                                </p>
                                <p class="w-flex--sb">
                                    <strong>Livraison</strong><span><?= $cart['totals']['total_shipping'] ?></span>
                                </p>
                            </div>
                            <a href="/caisse">PROCEDER AU PAIMENT</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <?php include SRC . 'app/View/common/footer.php'; ?>
</div>

