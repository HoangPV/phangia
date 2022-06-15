
<section class="banner_slide">
  <a href="<?php the_field( 'link_banner', 'options' ); ?>"><img src="<?php $img_banner = get_field( 'banner_qc', 'options' ); echo $img_banner['url']; ?>" alt=""></a>
</section>
<!-- ============================= START ========================== -->
<section class="feature_area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-4">
                <div class="feature__item text-center">
                    <div class="feature__icon">
                        <img src="<?php $img1 = get_field( 'anh_1', 'options' ); echo $img1['url']; ?>" alt="">
                    </div>
                    <div class="feature__content text-center">
                        <h6><?php the_field( 'ten_bai_viet_1', 'options' ); ?></h6>
                        <p><?php the_field( 'noi_dung_1', 'options' ); ?>
                        </p>
                        <a href="<?php the_field( 'link_1', 'options' ); ?>" class="btns">Xem thêm</a>
                    </div>
                </div>
            </div>
            <!-- end column -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="feature__item text-center">
                    <div class="feature__icon">
                        <img src="<?php $img2 = get_field( 'anh_2', 'options' ); echo $img2['url']; ?>" alt="">
                    </div>
                    <div class="feature__content text-center">
                        <h6><?php the_field( 'ten_bai_viet_2', 'options' ); ?></h6>
                        <p><?php the_field( 'noi_dung_2', 'options' ); ?></p>
                        <a href="<?php the_field( 'link_2', 'options' ); ?>" class="btns">Xem thêm</a>
                    </div>
                </div>
            </div>
            <!-- end column -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="feature__item text-center">
                    <div class="feature__icon">
                        <img src="<?php $img3 = get_field( 'anh_3', 'options' ); echo $img3['url']; ?>" alt="">
                    </div>
                    <div class="feature__content text-center">
                        <h6><?php the_field( 'ten_bai_viet_3', 'options' ); ?></h6>
                        <p><?php the_field( 'noi_dung_3', 'options' ); ?></p>
                        <a href="<?php the_field( 'link_3', 'options' ); ?>" class="btns">Xem thêm</a>
                    </div>
                </div>
            </div>
            <!-- end column -->
        </div>
    </div>
</section>
<!-- =============== END ====================== -->