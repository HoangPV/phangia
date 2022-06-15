			
	<div class="col-lg-3 wp-bp-sidebar-width d-none d-lg-block d-xl-block">

		<?php get_sidebar(); ?>

	</div>
	<!-- /.col-md-3 -->

	<div class="col-lg-9 col-md-12 wp-bp-content-width">

		<div id="primary" class="content-area">
			<main id="main" class="site-main my-5">

			<?php
			while ( have_posts() ) : the_post(); ?>

	          <h3 class="mb-4"><?php the_title(); ?></h3>

	          <div class="single__content">

	          	  <?php the_content(); ?>
	          	  
	          </div>

			<?php endwhile; ?>  
			<!-- End of the loop. -->			

			</main><!-- #main -->
		</div><!-- #primary -->
		
	</div>
	<!-- /.col-md-9 -->

