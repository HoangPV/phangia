<?php
/*
 * Template Name: Giới Thiệu
 * Template Post Type: post
 */
  
 get_header();  ?>

<?php while ( have_posts() ) : the_post(); ?>

  <section class="post__about">

    <div class="container">
       
       <div class="section__title__post mt-5">

           <h3 class="h3 mb-5 text-center text-uppercase"><?php the_title(); ?></h3>

       </div>

       <div class="row">

          <div class="col-12">

              <div class="about__post__content">

                   <?php the_content(); ?>

              </div>

              <?php get_template_part( 'template-parts/social'); ?>

          </div> <!-- end col 12 -->

       </div> <!-- end row -->

    </div> <!-- end container -->

  </section>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>