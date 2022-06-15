        <!-- ===========================
=== START 
-->
<section class="sales_area">
    <div class="container">
        <div class="section__title text-center">
            <h6 class="text-uppercase">SẢN PHẨM</h6>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="swiper-container swiper1">
                    <div class="swiper-wrapper">

                    <?php
					$vnkings = new WP_Query(array(
					'post_type'=>'thanh-ly',
					'post_status'=>'publish',
					'orderby' => 'ID',
					'order' => 'DESC',
					'posts_per_page'=> 10));
					?>
					<?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>
                        <div class="swiper-slide">
                            <div class="sale__item">
                                <article class="article__inner">
                                    <a href="<?php the_permalink(); ?>" title="" class="article__img">
                                    	<?php the_post_thumbnail(); ?>
                                    </a>
                                    <!-- end img -->
                                    <div class="article__content">
                                        <h5><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h5>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <!-- end item -->
                    <?php endwhile ; wp_reset_query() ;?>

                    </div>
                    <!-- Add Pagination -->
                    <!-- <div class="swiper-pagination"></div> -->
                    <!-- Add Pagination -->
                </div>
                <div class="swiper-button-next swiper-button-next_1 fa fa-angle-right"></div>
                <div class="swiper-button-prev swiper-button-prev_1 fa fa-angle-left"></div>
            </div>
        </div>
    </div>
</section>
<!-- =============== END ====================== -->