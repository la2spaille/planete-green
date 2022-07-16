<?php
use App\Config\Details;
$details = Details::data()
?>
<footer id="footer">
    <div class="l-tb">
        <div class="l-rl">
            <div class="w-footer w--flex">
                <nav class="w-nav_footer">
                    <h3><span>Menu</span></h3>
                    <ul class="ul-nav_footer">
                        <?php foreach ($details["menu"] as $menu): ?>
                            <li class="nav_link">
                                <a class="" href="<?= $menu['slug'] ?>"><?= $menu['name'] ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
                <div class="w-contact_footer">
                    <h3><span>Contact</span></h3>
                    <ul class="ul-contact_footer">
                        <li class="c-icon  phone">
                            <a href="tel:+330244361769">02 44 36 17 69</a>
                            <span>:</span>

                        </li>
                        <li class="c-icon  address">
                            <span>7 Passage Gambetta,  85300 Challans</span>
                            <span>:</span>

                        </li>
                    </ul>
                </div>
                <div class="c-logo footer">
                    <img src="<?= URI . 'media/logo_white.png' ?>" alt="Logo">
                </div>
            </div>
            <div class="w-attribution w-flex--sb">
                <ul class="ul-footer">
                    <li><a href="">Condition Général de Ventes</a></li>
                    <li>|</li>
                    <li><a href="">Politique de Protection des Données Personnelles</a></li>
                    <li>|</li>
                    <li><a href="">Mention Légales</a></li>
                </ul>
                <div><span>© Copyright - PLANÈTE GREEN</span></div>
            </div>
        </div>
    </div>
</footer>
