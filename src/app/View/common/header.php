<?php
use App\Config\Details;
$details = Details::data()
?>
<header id="header">
    <div class="c-logo header">
        <a href="<?= HOME?>/"><img src="<?= $details['logo_url'] ?>" alt="Logo"></a>
    </div>
    <nav class="w-nav_header">
        <ul class="ul-nav_header">
            <?php foreach ($details["menu"] as $menu): ?>
                <li class="<?= isset($menu['children']) ? "c-icon expand nav_link" : "nav_link" ?>">
                    <a class="" href="<?= $menu['slug'] ?>"><?= $menu['name'] ?></a>
                    <?php if (isset($menu['children'])): ?>
                        <ul class="ul-drop_link">
                            <?php foreach ($menu['children'] as $child): ?>
                                <li>
                                    <a href="<?= $child['slug'] ?>"><?= $child['name'] ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <ul class="ul-cta_header">
        <li><a href="<?= HOME ?>/panier" class="cart c-icon"></a></li>
        <li class="search c-icon"></li>
    </ul>
</header>