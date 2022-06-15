        <!-- ===========================
=== START 
-->
<section class="news_area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="news__left">
                    <div class="news__left__title">
                        <h5 class="text-uppercase">MẸO HAY</h5>
                    </div>
                    <!-- end title -->
                    <div class="news__left__content">
                        <div class="row">
                            <div class="col-12 col-md-6 col-xl-6 pr-0">
                                <div class="news__left__content__left">
                                <?php
                                $vnkings1 = new WP_Query(array(
                                'post_type'=>'post',
                                'post_status'=>'publish',
                                'cat' => 1,
                                'orderby' => 'ID',
                                'order' => 'DESC',
                                'posts_per_page'=> 1));
                                ?>
                                <?php while ($vnkings1->have_posts()) : $vnkings1->the_post(); ?>
                                    <article class="article__inner">
                                        <a href="<?php the_permalink(); ?>" title="" class="article__img"><?php the_post_thumbnail(); ?></a>
                                        <div class="article__content">
                                            <h5><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h5>
                                            <?php the_excerpt(); ?>
                                        </div>
                                    </article>
                                <?php endwhile ; wp_reset_query() ;?>
                                </div>
                            </div>
                            <!-- end column news left -->
                            <div class="col-12 col-md-6 col-xl-6">
                                <div class="vert simply-scroll-container">
                                    <div class="simply-scroll-clip">
                                        <div class="vert simply-scroll-container">
                                            <div class="simply-scroll-clip">
                                                <div class="vert simply-scroll-container">
                                                    <div class="simply-scroll-clip">
                                                        <div class="news__left__content__right simply-scroll-list" id="scroller" style="height: 1020px;">

                                                        <?php
                                                        $vnkings = new WP_Query(array(
                                                        'post_type'=>'post',
                                                        'post_status'=>'publish',
                                                        'cat' => 1,
                                                        'orderby' => 'ID',
                                                        'order' => 'DESC',
                                                        'offset' => 1,
                                                        'posts_per_page'=> 8));
                                                        ?>
                                                        <?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>
                                                            <div class="news__left__content__right__item">
                                                                <article class="article__inner">
                                                                    <a href="<?php the_permalink(); ?>" title="" class="article__img"> <?php the_post_thumbnail(); ?></a>
                                                                    <div class="article__content">
                                                                        <h5><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h5>
                                                                        <p>Ngày đăng : <?php echo get_the_date(); ?></p>
                                                                    </div>
                                                                </article>
                                                            </div>
                                                            <!-- end item -->
                                                        <?php endwhile ; wp_reset_query() ;?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end column news right -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end column -->
            <div class="col-xl-6 d-none d-xl-block">
                <div class="news__right">
                    <div class="news__left__title">
                        <h5 class="text-uppercase">ĐĂNG KÝ NHẬN TIN</h5>
                    </div>
                    <!-- end title -->
                    <div class="news__right__form">
                        <?php echo do_shortcode('[contact-form-7 id="211" title="Form Đăng Ký"]'); ?>
                    </div>
                </div>
            </div>
            <!-- end column -->
        </div>
    </div>
</section>
<!-- =============== END ====================== -->