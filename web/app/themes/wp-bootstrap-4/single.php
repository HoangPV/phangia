<?php
/**
 * The template for displaying all single posts
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

		<div class="row">

            <?php get_template_part( 'template-parts/single/right-sidebar', get_post_type() ); ?>

		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->

<?php
get_footer();
