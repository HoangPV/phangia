<div class="col-md-3 wp-bp-sidebar-width">	
	<?php get_sidebar(); ?>
</div>
<!-- /.col-md-3 -->

<div class="col-lg-9 col-md-12 col-sm-12 mt-2r">
<?php if ( have_posts() ) : ?>
	<div class="heading-page clearfix">
		<?php the_archive_title('<h1>','</h1>') ?>
	</div>
	<div class="blog-content">    
		<div class="list-article-content blog-posts">

		<?php while ( have_posts() ) : the_post(); ?>
			<!-- Begin: Nội dung blog -->		
			<article class="blog-loop">
				<div class="blog-post row">
					
					<div class="col-md-4 col-xs-12 col-sm-12">
						<a href="<?php the_permalink(); ?>" class="blog-post-thumbnail" title="" rel="nofollow">
							<?php if ( has_post_thumbnail() ) : ?>
			                  <?php the_post_thumbnail(); ?>
			                <?php elseif ( !has_post_thumbnail() ) : ?>
			                  <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/wp-bootstrap-4/assets/images/default-thumbnail.jpg">
			                <?php endif; ?>
						</a>
					</div>
					
					<div class="col-md-8 col-xs-12 col-sm-12">
						<h3 class="blog-post-title">
							<a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a>
						</h3>
						<div class="blog-post-meta">   
							<span class="date vcard"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date(); ?></span>
						</div>
						<div class="entry-content"><?php the_excerpt(); ?></div>
					</div>

				</div>						
			</article>							
		<?php endwhile; ?>	
        <!-- Phân Trang -->
		    <?php get_template_part( 'template-parts/pagination' );  ?>
		<!-- End Phân Trang -->
		<?php else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>	
			
		</div>				
     </div>
</div>
<!-- /.col-md-9 -->


<style type="text/css">
.heading-page h1 {
    font-size: 30px;
    font-weight: 700;
    margin-bottom: 30px;
}
.blog-posts .blog-loop {
    margin-bottom: 25px;
}
.blog-posts .blog-post .blog-post-title {
    margin-bottom: 10px;
    font-size: 18px;
    text-transform: none;
    letter-spacing: 0;
}
.blog-posts .blog-post .blog-post-title a {
    color: #5c5c5c;
    display: -webkit-box;
    overflow: hidden;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    text-overflow: ellipsis;
}
.blog-posts .blog-post .blog-post-meta {
    margin-bottom: 15px;
    color: #999;
}
.blog-posts .blog-post .blog-post-thumbnail img {
    -webkit-transition: all 1s ease-in-out 0s;
    -khtml-transition: all 1s ease-in-out 0s;
    -moz-transition: all 1s ease-in-out 0s;
    -ms-transition: all 1s ease-in-out 0s;
    -o-transition: all 1s ease-in-out 0s;
    transition: all 1s ease-in-out 0s;
    -webkit-transform: scale(1);
    -khtml-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1);
    height: 160px;
}
.blog-posts .blog-post .blog-post-thumbnail {
    display: block;
    overflow: hidden;
}
.blog-post .entry-content p {
    display: -webkit-box;
    overflow: hidden;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    text-overflow: ellipsis;
    margin-bottom: 0;
    font-size: 15px;
}
.blog-post .entry-content {
    margin-top: 0.5rem;
}
/* Smartphones (portrait and landscape) ----------- */
@media (max-width: 767px) {
.blog-posts .blog-post .blog-post-title {
    margin: 12px 0;
}
.blog-posts .blog-post .blog-post-thumbnail img {
    height: 230px;
}
.blog-posts .blog-loop {
    margin-bottom: 30px;
}	
}
</style>