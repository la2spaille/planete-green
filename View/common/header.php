<header id="header">
    <div class="c-logo header">
        <a href="/"><img src="<?= get_theme_file_uri('/media/logo.png') ?>"" alt=" Logo"></a>
    </div>
    <nav class="w-nav_header">
            <?php wp_nav_menu(
                [
                    'theme_location' => 'Primary',
                    'container' => false,
                    'menu_class'=> 'ul-nav_header',
                    'menu_id'=>'nav_header',
                ]
            ); ?>
    </nav>
    <ul class="ul-cta_header">
        <li><a href="/panier" class="cart c-icon"></a></li>
        <li class="search c-icon"></li>
    </ul>
</header>