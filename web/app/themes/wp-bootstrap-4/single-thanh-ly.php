<?php
/**
 * The template for displaying all single Thanh Lý
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_4
 */

get_header(); ?>
<section class="breadcrumb_single_thanhly">
	<div class="container">
		<?php lewis_breadcrumbs() ?>
	</div>
</section>
	<div class="container">
        
		<div class="row my-4">


			<div class="col-lg-3">
				<?php get_sidebar(); ?>
			</div>

            <div class="col-lg-9">
            	<div class="row">
					<!-- CỘT GALLERY -->
					<div class="col-lg-7 col-md-7 mt-2r">
						
					<?php 
					$images = get_field( 'gallery' );
					if ( $images ) {
						?>
						<div class="gallery-sp"><?php
						foreach ($images as $image ) {					
							?>
							<div class="gallery-img">
								<img src="<?php echo $image['url']; ?>" alt="">
							</div>
							<?php 
						}
						?></div><?php
						?> <div class="gallery-sp-nav"> <?php
						foreach ($images as $image ) {					
							?>
							<div class="gallery-thumb">
								<img src="<?php echo $image['url']; ?>" alt="">
							</div>
							<?php 
						}
						?></div><?php 
					}
					 ?>
					</div>
					<!-- END CỘT GALLERY -->
					
					<!-- CỘT THÔNG TIN SẢN PHẨM, MÔ TẢ NGẮN -->
					<div class="col-lg-5 col-md-5 mt-2r">
						<div class="product-short-info">
						    <?php the_title('<h3 class="text-uppercase product-title mb-3"><span class="pb-1">' , '</span></h3>');?>
		                    <div class="price_sanpham">
		                    	<p>Giá: 
		                    		<?php if (get_field( 'price' )) { ?>
		                    			<span><?php the_field( 'price' ); ?> VNĐ</span>
		                    		<?php } else { ?>
		                    			<span>LIÊN HỆ</span>
		                            <?php } ?>
		                    	</p>
		                    </div>
							<div class="text-justify short-des pr-lg-5">
								<?php the_field('description'); ?>
							</div>
		                    <div class="clearfix"></div>
							<!-- SHARE SOCIAL -->
							<div class="single__social my-2 d-flex align-items-center">
								<div class="fb-like" data-href="<? the_permalink()?>" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
								<div style="margin-top: 3px;" class="zalo-share-button" data-href="<? the_permalink()?>" data-oaid="579745863508352884" data-layout="1" data-color="blue" data-customize=false></div>	
							</div>
							<script src="https://sp.zalo.me/plugins/sdk.js"></script>
							<!-- END SHARE SOCIAL -->
						</div>
					</div>
					<!-- END CỘT THÔNG TIN -->   
		            <div class="clearfix"></div>
		            <!-- MÔ TẢ CHI TIẾT -->
					<div class="col-lg-12 my-5">
						<div class="full-des">

							<ul class="nav nav-tabs">
								<li class="nav-item">
									<a class="tab-title-des nav-link active" data-toggle="tab" href="#des">Thông tin chi tiết </a>
								</li>
								<li class="nav-item">
									<a class="tab-title-des nav-link" data-toggle="tab" href="#comment">Bình Luận</a>
								</li>
							</ul>

							<div class="tab-content">
								<div class="tab-pane container active" id="des">
								<?php 
									$post_sp = get_post();
									$noidung = apply_filters ('the_content', $post_sp->post_content)  ;
									echo $noidung;
								 ?>					
								</div>
								<div class="tab-pane container" id="comment">
		                           <?php get_template_part( 'template-parts/comment-fb'); ?>  			
								</div>
							</div>

						</div>

					</div>
					<!-- END MÔ TẢ CHI TIẾT -->
					
                 </div> <!-- END ROW -->
            </div> <!-- END COL-9 -->



	        <div class="clearfix"></div>

	        <!-- SẢN PHẨM LIÊN QUAN -->
			<div class="col-12 related-sp my-2">
				<div class="related-title text-uppercase mb-3">
					<span>Sản phẩm liên quan</span>
				</div>
				<div class="row">
					<?php 
					$args = array(
						'post_type'			=>			'thanh-ly',
						'posts_per_page'	=>			4,
						'post__not_in'		=>			array( $post->ID ),
					);

					$relatedProduct = new WP_Query( $args );

					if ( $relatedProduct->have_posts() ) {
						
						while ( $relatedProduct->have_posts() ) {
							
							$relatedProduct->the_post();
					?>
					
						
						<div class="col-6 col-sm-6 col-md-6 col-lg-3">
                            <div class="sale__item archive_item">
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

					

					<?php 						

						}

					}

					 ?>
				</div>
			</div>
			<!-- END SẢN PHẨM LIÊN QUAN -->         

		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->

<?php
get_footer();
