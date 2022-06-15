<div class="container">
    <div class="row">
        <div class="col-xl-5 col-12 col-md-7">
            <div class="footer__add">
                <div class="footer_title">
                    <h6>THÔNG TIN LIÊN HỆ</h6>
                </div>
                <h5><?php the_field( 'ten_cong_ty', 'options' ); ?></h5>
                <ul>
                    <li><i class="fa fa-map-marker"></i>Địa chỉ: <?php the_field( 'dia_chi', 'options' ); ?></li>
                    <li><i class="fa fa-phone"></i>Hotline: <?php the_field( 'hotline', 'options' ); ?></li>
                    <li><i class="fa fa-envelope"></i>Email: <?php the_field( 'email', 'options' ); ?></li>
                    <li><i class="fa fa-globe"></i>Website: <?php the_field( 'website', 'options' ); ?></li>
                </ul>
            </div>
        </div>
        <!-- end column -->
        <div class="col-xl-4 col-6 col-md-5 d-none d-xl-block d-md-block">
            <div class="footer__face">
                <div class="footer_title">
                    <h6>FANPAGE FACEBOOK</h6>
                </div>
                <iframe src="https://www.facebook.com/plugins/page.php?href=<?php the_field( 'fanpage', 'options' ); ?>&amp;tabs=dong%20thoi%20gian&amp;width=340&amp;height=160&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=false&amp;appId" width="340" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                <div class="logo_bct">
                    <a href="http://online.gov.vn/Home/WebDetails/84908?AspxAutoDetectCookieSupport=1" target="_blank">
                        <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/wp-bootstrap-4/assets/images/icon_bct.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- end column -->
        <div class="col-xl-3 d-none d-xl-block">
            <div class="footer__maps">
                <div class="footer_title">
                    <h6>BẢN ĐỒ</h6>
                </div>
                <?php the_field( 'ban_do', 'options' ); ?>
            </div>
        </div>
        <!-- end column -->
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-12">
            <div class="coppyright text-center">Copyright © 2019 thuộc ĐIỆN LẠNH PHAN GIA</div>
        </div>
    </div>
</div>

<!-- call 5 -->
<?php $hotline=get_field('hotline','option');?>
<div class="btnClick">
    <a class="call" href="tel:<?php echo preg_replace('/\s+/', '', $hotline); ?>"><i class="fa fa-phone" aria-hidden="true"></i> Gọi điện</a>
    <!-- <a class="request guiYeuCauBottom" href="javascript:void(0);"><i class="fa fa-envelope" aria-hidden="true"></i> Gửi yêu cầu</a> -->
    <a class="zalo" rel="nofollow" target="_blank" href="https://zalo.me/<?php echo preg_replace('/\s+/', '', $hotline); ?>">Chat Zalo</a>
    <!-- <a class="tel" href="tel:0988.56.59.56"><i class="fa fa-phone" aria-hidden="true"></i> Gọi điện</a> -->
    <!-- <a class="fb" rel="nofollow" target="_blank" href="https://m.me/thang.tatthanh"><i class="fa fa-facebook" aria-hidden="true"></i> Chat Facebook</a> -->
</div>

<style type="text/css">
.btnClick {
    position: fixed;
    bottom: 10px;
    left: 10px;
    z-index: 999;
}
.btnClick a {
    font: 16px/30px segoeui;
    color: #fff;
    display: block;
    margin-bottom: 10px;
    height: 30px;
    color: #fff;
    background: #00669b;
    border-radius: 20px;
    padding: 0 10px 0 2px;
}
.btnClick i {
    border-radius: 50%;
    background: #fff;
    color: #00669b;
    width: 26px;
    height: 26px;
    text-align: center;
    line-height: 26px;
    margin-top: 2px;
}
.btnClick a.zalo {
    background: #00669b url(<?php bloginfo( 'url' ); ?>/wp-content/themes/wp-bootstrap-4/assets/images/zaloIcon1.png) no-repeat left 2px center;
    background-size: 25px auto;
    padding-left: 32px;
    transform: translateY(-1px);
}
</style>