<?php
/**
 * The template for displaying archive pages
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

		    <?php get_template_part( 'template-parts/archive/two-column', get_post_format() );  ?>	
	
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->

<?php
get_footer();
