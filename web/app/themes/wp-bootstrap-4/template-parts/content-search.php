<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

?>

<div class="col-lg-4 col-md-6">
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'card mt-2r' ); ?>>

      <div class="single__item">

         <div class="single__item__img">

            <a href="<?php the_permalink(); ?>">
            	<?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php elseif ( !has_post_thumbnail() ) : ?>
                  <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/wp-bootstrap-4/assets/images/default-thumbnail.jpg">
                <?php endif; ?>
            </a>
            <div class="single__item__cate">
               <a href="javascript:void(0)"><?php single_cat_title(); ?></a>
            </div>
            
         </div>
         <!-- post thumb image -->
         <div class="single__item__content">

            <div class="single__item__title">
               <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            </div>
            <div class="excerpt"><?php the_excerpt(); ?></div>

         </div>
         <!-- post content -->
      </div>

	</article><!-- #post -->
</div>
