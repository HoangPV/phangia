<?php
/**
 * The template for displaying Taxonomy Thanh Lý
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
		<div class="row">
			<div class="col-12">
				<div class="section__title my-4">
					<h3 class="text-center"><span><?php single_term_title(); ?></span></h3>
				</div>
			</div>
		</div>
		<div class="row">
            <?php while ( have_posts() ) { the_post(); ?>
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
            <?php } ?>
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-12 text-center my-4">
			    <!-- Phân Trang -->
				<?php get_template_part( 'template-parts/pagination' );  ?>
				<!-- End Phân Trang -->
			</div>
		</div>
	</div>
	<!-- /.container -->

<?php
get_footer();
