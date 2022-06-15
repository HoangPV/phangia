<div class="col-md-12 wp-bp-content-width">

	<div id="primary" class="content-area">
		<main id="main" class="site-main my-5">

		<?php
		while ( have_posts() ) : the_post(); ?>

          <h3 class="mb-4"><?php the_title(); ?></h3>

          <div class="single__content">

          	  <?php the_content(); ?>
          	  
          </div>

		<?php endwhile; // End of the loop.
		?>

		<!-- social -->        
        <?php get_template_part( 'template-parts/social'); ?>

        <?php get_template_part( 'template-parts/comment-fb'); ?>
		<!-- end social -->

		<?php get_template_part( 'template-parts/related-post'); ?>

		<!-- Tin Liên quan -->

		</main><!-- #main -->
	</div><!-- #primary -->
	
</div>
<!-- /.col-md-12 -->