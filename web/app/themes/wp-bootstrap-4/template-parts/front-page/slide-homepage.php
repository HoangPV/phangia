<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'url' ); ?>/wp-content/themes/wp-bootstrap-4/assets/css/slide/style-slide.css" />
<!-- Start WOWSlider -->
<div id="wowslider-container1">
<div class="ws_images">
    <ul>
    <?php  
         if( have_rows('slider-home','option') ):
            while ( have_rows('slider-home','option') ) : the_row();  
                    $image = get_sub_field('image_slider','option');
                    $name =  get_sub_field('name_slider','option');
                    $link = get_sub_field('link_images','option'); ?>
        <li>
            <a href="<?php echo $link; ?>">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $name; ?>" title="slide-home" />
            </a>
        </li>
    <?php
        endwhile;
      else :
      endif;?>
    </ul>
</div>
</div>
<!-- End WOWSlider -->
<script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/wp-bootstrap-4/assets/js/slide/wowslider.js"></script>
<script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/wp-bootstrap-4/assets/js/slide/script.js"></script>
