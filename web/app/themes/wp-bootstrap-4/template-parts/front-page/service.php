        <!-- ===========================
=== START 
-->
<section class="services_area">
    <div class="container">
        <div class="section__title text-center">
            <h6 class="text-uppercase">DỊCH VỤ CHÍNH</h6>
        </div>
        <!-- end row -->
        <div class="services__tab-title">
            <ul class="nav nav-tabs d-flex justify-content-center">
                <li class="nav-item">
                    <a href="#tab_1" class="nav-link text-capitalize active" data-toggle="tab">Máy Lạnh</a>
                </li>
                <li class="nav-item">
                    <a href="#tab_2" class="nav-link text-capitalize" data-toggle="tab">Tủ Lạnh</a>
                </li>
                <li class="nav-item">
                    <a href="#tab_3" class="nav-link text-capitalize" data-toggle="tab">Máy Giặt</a>
                </li>
            </ul>
        </div>
        <!-- end title tab -->
        <div class="services__tab--content">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="tab_1">
                    <div class="services__item">
                        <div class="row">

                        <?php
						$vnkings = new WP_Query(array(
						'post_type'=>'post',
						'post_status'=>'publish',
						'cat' => 25,
                        'meta_query' => array(
                           /* array(
                                'key' => 'feature',
                                'compare' => '=',
                                'value' => '1'
                            ) */
                        ),
						'orderby' => 'date',
						'order' => 'DESC',
						'posts_per_page'=> 8));
						?>
						<?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>
                            <div class="col-6 col-xl-3">
                                <article class="article__inner">
                                    <a href="<?php the_permalink(); ?>" class="article__img border">
                                    	<?php if ( has_post_thumbnail() ) : ?>
						                  <?php the_post_thumbnail(); ?>
						                <?php elseif ( !has_post_thumbnail() ) : ?>
						                  <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/wp-bootstrap-4/assets/images/default-thumbnail.jpg">
						                <?php endif; ?>
                                    </a>
                                    <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/wp-bootstrap-4/assets/images/home/shadow.png" alt="">
                                    <div class="article__content">
                                        <h5><a href="<?php the_permalink(); ?>" class="text-uppercase text-center"><?php the_title(); ?></a></h5>
                                        <?php the_excerpt(); ?>
                                    </div>
                                </article>
                            </div>
                            <!-- end column -->
                        <?php endwhile ; wp_reset_query() ;?>

                        </div>
                        <div class="row">
                            <div class="col-12 text-center"><a href="<?php bloginfo( 'url' ); ?>/chuyen-muc/dich-vu/may-lanh/" class="btn-more">Xem tất cả</a></div>
                        </div>
                    </div>
                </div>
                <!-- end tab -->
                <div class="tab-pane fade" id="tab_2">
                    <div class="services__item">
                        <div class="row">
                        <?php
						$vnkings1 = new WP_Query(array(
						'post_type'=>'post',
						'post_status'=>'publish',
						'cat' => 26,
                        'meta_query' => array(
                         /*   array(
                                'key' => 'feature',
                                'compare' => '=',
                                'value' => '1'
                            ) */
                        ),
						'orderby' => 'date',
						'order' => 'DESC',
						'posts_per_page'=> 8));
						?>
						<?php while ($vnkings1->have_posts()) : $vnkings1->the_post(); ?>
                            <div class="col-6 col-xl-3">
                                <article class="article__inner">
                                    <a href="<?php the_permalink(); ?>" class="article__img border">
                                    	<?php if ( has_post_thumbnail() ) : ?>
						                  <?php the_post_thumbnail(); ?>
						                <?php elseif ( !has_post_thumbnail() ) : ?>
						                  <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/wp-bootstrap-4/assets/images/default-thumbnail.jpg">
						                <?php endif; ?>
                                    </a>
                                    <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/wp-bootstrap-4/assets/images/home/shadow.png" alt="">
                                    <div class="article__content">
                                        <h5><a href="<?php the_permalink(); ?>" class="text-uppercase text-center"><?php the_title(); ?></a></h5>
                                        <?php the_excerpt(); ?>
                                    </div>
                                </article>
                            </div>
                            <!-- end column -->
                        <?php endwhile ; wp_reset_query() ;?>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center"><a href="<?php bloginfo( 'url' ); ?>/chuyen-muc/dich-vu/tu-lanh/" class="btn-more">Xem tất cả</a></div>
                        </div>
                    </div>
                </div>
                <!-- end tab -->
                <div class="tab-pane fade" id="tab_3">
                    <div class="services__item">
                        <div class="row">

                        <?php
						$vnkings2 = new WP_Query(array(
						'post_type'=>'post',
						'post_status'=>'publish',
						'cat' => 27,
                        'meta_query' => array(
                        /*    array(
                                'key' => 'feature',
                                'compare' => '=',
                                'value' => '1'
                            ) */
                        ),
						'orderby' => 'date',
						'order' => 'DESC',
						'posts_per_page'=> 8));
						?>
						<?php while ($vnkings2->have_posts()) : $vnkings2->the_post(); ?>
                            <div class="col-6 col-xl-3">
                                <article class="article__inner">
                                    <a href="<?php the_permalink(); ?>" class="article__img border">
                                    	<?php if ( has_post_thumbnail() ) : ?>
						                  <?php the_post_thumbnail(); ?>
						                <?php elseif ( !has_post_thumbnail() ) : ?>
						                  <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/wp-bootstrap-4/assets/images/default-thumbnail.jpg">
						                <?php endif; ?>
                                    </a>
                                    <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/wp-bootstrap-4/assets/images/home/shadow.png" alt="">
                                    <div class="article__content">
                                        <h5><a href="<?php the_permalink(); ?>" class="text-uppercase text-center"><?php the_title(); ?></a></h5>
                                        <?php the_excerpt(); ?>
                                    </div>
                                </article>
                            </div>
                            <!-- end column -->
                        <?php endwhile ; wp_reset_query() ;?>

                        </div>
                        <div class="row">
                            <div class="col-12 text-center"><a href="<?php bloginfo( 'url' ); ?>/chuyen-muc/dich-vu/may-giat/" class="btn-more">Xem tất cả</a></div>
                        </div>
                    </div>
                </div>
                <!-- end tab -->
            </div>
        </div>
    </div>
</section>
<!-- =============== END ====================== -->