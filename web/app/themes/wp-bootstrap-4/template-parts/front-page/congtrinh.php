        <!-- ===========================
=== START 
-->
<section class="build_top">
    <div class="container">
        <div class="section__title text-center">
            <h6 class="text-uppercase">CÔNG TRÌNH TIÊU BIỂU</h6>
        </div>
        <div class="row">            
            <div class="col-12">

                <div class="swiper-container swiper4">
                    <div class="swiper-wrapper">

                    <?php
                    $vnkings = new WP_Query(array(
                    'post_type'=>'post',
                    'post_status'=>'publish',
                    'cat' => 44,
                    'orderby' => 'ID',
                    'order' => 'DESC',
                    'posts_per_page'=> -1));
                    ?>
                    <?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>
                        <div class="swiper-slide">
                            <div class="build__item">
                                <article class="article__inner">
                                    <a href="<?php the_permalink(); ?>" title="" class="article__img"> <?php the_post_thumbnail(); ?>
                                        <span class="overlay"></span>
                                    </a>
                                    <div class="article__content">
                                        <h5><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                    <?php endwhile ; wp_reset_query() ;?>

                    </div>
                </div>
                <div class="swiper-button-next swiper-button-next_4 fa fa-angle-right"></div>
                <div class="swiper-button-prev swiper-button-prev_4 fa fa-angle-left"></div>

            </div>
        </div>
    </div>
</section>
<!-- =============== END ====================== -->

