<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WP_Bootstrap_4
 */

get_header(); ?>

	<div class="container">
		<div class="row">


			<div class="col-md-12 mt-3r wp-bp-content-width">

				<div id="primary" class="content-area wp-bp-404">
					<main id="main" class="site-main" style="height: 57vh;">
                    
                    <div class="card">
	                    <div class="card-body">
		                     <h4 class="my-5 text-center">KHÔNG TÌM THẤY BÀI VIẾT</h4>
		                     <h5 class="my-4">THỬ TÌM KIẾM VỚI TỪ KHÓA KHÁC</h5>
		                     <?php get_search_form(); ?>
	                    </div>
                    </div>  

					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
			<!-- /.col-md-12 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
<?php
get_footer();
