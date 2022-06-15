<div class="col-md-12 wp-bp-content-width">			

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			if ( have_posts() ) : ?>

				<header class="page-header mt-2r">
					<h3 class="archive__title text-center text-uppercase">
						<span>
				            <?php
				            if ( is_category() ) :
				              single_cat_title();

				            elseif ( is_tag() ) :
				              single_tag_title();

				            else :
				              _e( 'Archives', '_tk' );

				            endif;
				          ?>
			          </span>
			        </h3>
				</header><!-- .page-header -->
                <div class="row">
				    <?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_format() );

					endwhile; ?>
                </div>

				<!-- Phân Trang -->
				    <?php get_template_part( 'template-parts/pagination' );  ?>
				<!-- End Phân Trang -->


			<?php else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<!-- /.col-md-8 -->