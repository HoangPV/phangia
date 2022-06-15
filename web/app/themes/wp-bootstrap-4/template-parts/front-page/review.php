        <!-- ===========================
=== START 
-->
<section class="testi_area">
    <div class="container">
        <div class="section__title text-center">
            <h6 class="text-uppercase">Ý KIẾN KHÁCH HÀNG</h6>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="swiper-container swiper2">
                    <div class="swiper-wrapper">
                    <?php  
                    if( have_rows('review','option') ):
                    while ( have_rows('review','option') ) : the_row();  
                            $image = get_sub_field('avatar','option');
                            $name =  get_sub_field('name_review','option');
                            $content = get_sub_field('content_review','option'); ?>
                        <div class="swiper-slide">
                            <div class="sale__item">
                                <div class="test_user">
                                    <div class="avatar_user">
                                        <img src="<?php echo $image['url'] ?>" alt="">
                                    </div>
                                    <div class="content_user">
                                        <h6><?php echo $name; ?></h6>
                                        <p><?php echo $content; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end item -->
                    <?php
                    endwhile;
                    else :
                    endif;?>

                    </div>
                    <!-- Add Pagination -->
                    <!-- <div class="swiper-pagination"></div> -->
                    <!-- Add Pagination -->
                </div>
                <div class="swiper-button-next fa fa-angle-right swiper-button-next_2"></div>
                <div class="swiper-button-prev fa fa-angle-left swiper-button-prev_2"></div>
            </div>
        </div>
    </div>
</section>
<!-- =============== END ====================== -->