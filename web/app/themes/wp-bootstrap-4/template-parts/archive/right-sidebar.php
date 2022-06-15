	<div class="col-md-9 wp-bp-content-width">			

		<div id="primary" class="content-area">
			<main id="main" class="site-main">

				<?php
				if ( have_posts() ) : ?>

					<header class="page-header mt-3r">
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
						?>
					</header><!-- .page-header -->

					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', get_post_format() );

					endwhile; ?>

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


	<div class="col-md-3 wp-bp-sidebar-width">	
		<?php get_sidebar(); ?>
	</div>
	<!-- /.col-md-4 -->