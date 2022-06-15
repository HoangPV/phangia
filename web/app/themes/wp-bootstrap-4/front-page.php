<?php

if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
}
else {
    if ( ! is_page_template() ) {
        get_header();

        get_template_part( 'template-parts/front-page/slide-homepager' );

        ?>

        <?php
        get_footer();
    }
    else {
        include( get_page_template() );
    }
}
?>
