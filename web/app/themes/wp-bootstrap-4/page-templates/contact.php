<?php
/*
 Template Name: Liên hệ
 */
get_header(); ?>
<section class="breadcrumb_single_thanhly">
	<div class="container">
		<?php lewis_breadcrumbs() ?>
	</div>
</section>
<section id="contact" class="my-5">
	<div class="container">

        <div class="row my-3">
        	<div class="col-12">
        		  <div class="widget-map">
					  <?php the_field('ban_do','option'); ?>
				  </div>
        	</div>
        </div>
		<div class="row my-3">
				<div class="col-md-4">
				  <div class="widget-lienhe">
					<h3 class="title-head">LIÊN HỆ</h3> 
					<div class="info-contact">
						<?php the_field('contact','option'); ?>
					</div>
				  </div>
				</div>
				<div class="col-md-8">
					<div class="page-login">
						<div id="form-contact">
						<h3 class="title-head">GỬI THÔNG TIN</h3>
						<span class="margin-bottom-10 block">Bạn hãy điền nội dung tin nhắn vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn sau khi nhận được.</span>
						<?php echo do_shortcode('[contact-form-7 id="9" title="Form liên hệ"]');; ?>
						</div>
					</div>
			    </div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
