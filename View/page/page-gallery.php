<?php 
/*
*/
get_header(); ?>
<div id="swup" class="page" data-swup="0">
    <section class="l-wrapper">
        <div class="l-wrapper--chemin">
            <span id="back"></span>
            <span>home</span>
            <span>.</span>
            <span>gallery</span>
        </div>
        <div class="l-wrapper--header">
            <h3>Gallery</h3>
            <strong>Car nôtre produit est tout simplement beau, nous avons decidée de créer une page spécialement dédié pour le contempler. 🤩</strong>
        </div>
        <div class="l-content l-content-gallery">
            <div class="w-gallery">
                <div class="w-gallery-column">
                    <div class="w-gallery-column-square">
                        <div>
                            <div class="w-gallery-img" style="background-image:url('<?php bloginfo( 'template_directory' );?>/img/image6.jpeg');"></div>
                        </div>
                    </div>
                    <div class="w-gallery-column-row">
                        <div>
                            <div class="w-gallery-img" style="background-image:url('<?php bloginfo( 'template_directory' );?>/img/image7.jpeg');"></div>
                        </div>
                        <div>
                            <div class="w-gallery-img" style="background-image:url('<?php bloginfo( 'template_directory' );?>/img/image8.jpg');"></div>
                        </div>
                    </div>
                </div>
                <div class="w-gallery-column">
                    <div class="w-gallery-column-row">
                        <div>
                            <div class="w-gallery-img" style="background-image:url('<?php bloginfo( 'template_directory' );?>/img/image3.jpeg');"></div>
                        </div>
                        <div>
                            <div class="w-gallery-img" style="background-image:url('<?php bloginfo( 'template_directory' );?>/img/image2.jpeg');"></div>
                        </div>
                    </div>
                    <div class="w-gallery-column-square"> 
                        <div>
                            <div class="w-gallery-img" style="background-image:url('<?php bloginfo( 'template_directory' );?>/img/image1.jpeg');"></div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>