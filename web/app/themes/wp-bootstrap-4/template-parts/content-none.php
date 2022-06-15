<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

?>

<section class="no-results not-found card mt-3r">
	<div class="card-body">
		<header class="page-header">
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

		<div class="page-content" style="height: 44vh;">
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

				<p><?php
					printf(
						wp_kses(
							/* translators: 1: link to WP admin new post page. */
							__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'wp-bootstrap-4' ),
							array(
								'a' => array(
									'href' => array(),
								),
							)
						),
						esc_url( admin_url( 'post-new.php' ) )
					);
				?></p>

			<?php elseif ( is_search() ) : ?>

				<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'wp-bootstrap-4' ); ?></p>
				<?php
					get_search_form();

			else : ?>

				<p><?php esc_html_e( 'Nội dung đang được cập nhật...', 'wp-bootstrap-4' ); ?></p>
				<?php
					get_search_form();

			endif; ?>
		</div><!-- .page-content -->
	</div>
	<!-- /.card-body -->
</section><!-- .no-results -->
