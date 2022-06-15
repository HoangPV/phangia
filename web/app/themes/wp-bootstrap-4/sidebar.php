<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area sidebar-1-area mt-2r d-none d-lg-block d-xl-block">
   <div class="danhmuc">
   	   <h3 class="text-uppercase text-center">Danh Mục Sản Phẩm</h3>
   	   <ul class="list_none">
           <?php
           $category_products = [
	           [
		           'name' => 'MÁY LẠNH TREO TƯỜNG',
		           'link' => 'https://dienlanhphangia.com/danh-muc/may-lanh-treo-tuong/'
	           ],
	           [
		           'name' => 'MÁY LẠNH ÂM TRẦN',
		           'link' => 'https://dienlanhphangia.com/danh-muc/may-lanh-am-tran/'
	           ],
	           [
		           'name' => 'MÁY LẠNH ÁP TRẦN',
		           'link' => 'https://dienlanhphangia.com/danh-muc/may-lanh-ap-tran/'
	           ],
	           [
		           'name' => 'MÁY LẠNH GIẤU TRẦN',
		           'link' => 'https://dienlanhphangia.com/danh-muc/may-lanh-giau-tran/'
	           ],
	           [
		           'name' => 'MÁY LẠNH TỦ ĐỨNG',
		           'link' => 'https://dienlanhphangia.com/danh-muc/may-lanh-tu-dung/'
	           ],
	           [
		           'name' => 'MÁY LẠNH PACKAGED',
		           'link' => 'https://dienlanhphangia.com/danh-muc/may-lanh-packaged/'
	           ],
	           [
		           'name' => 'MÁY LẠNH MULTI',
		           'link' => 'https://dienlanhphangia.com/danh-muc/may-lanh-multi/'
	           ],
	           [
		           'name' => 'Máy lạnh Daikin VRV',
		           'link' => 'https://dienlanhphangia.com/danh-muc/may-lanh-daikin-vrv/'
	           ]
           ];

           ?>

           <?php foreach ($category_products as $item): ?>
               <li>
                   <a href="<?= $item[ 'link' ] ?>">
                       <h5><?= $item[ 'name' ] ?></h5>
                   </a>
               </li>
           <?php endforeach;?>
           <?php if (false): ?>
          <?php
          $vnkings = new WP_Query(array(
          'post_type'=>'post',
          'post_status'=>'publish',
          'cat' => 44,
          'orderby' => 'ID',
          'order' => 'DESC',
          'posts_per_page'=> 10));
          ?>
          <?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>
           <li>
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail(); ?>
              <h5><?php the_title(); ?></h5>
            </a>
          </li>
        <?php endwhile ; wp_reset_query() ;?>
       <?php endif; ?>
   	   </ul>
   </div>
   <!-- danh mục -->
   <div class="danhmuc">
       <h3 class="text-uppercase text-center">Mẹo Hay</h3>
       <ul class="list_none">        
          <?php
          $vnkings = new WP_Query(array(
          'post_type'=>'post',
          'post_status'=>'publish',
          'cat' => 1,
          'orderby' => 'ID',
          'order' => 'DESC',
          'posts_per_page'=> 10));
          ?>
          <?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>
           <li>
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail(); ?>
              <h5><?php the_title(); ?></h5>
            </a>
          </li>
        <?php endwhile ; wp_reset_query() ;?>
       </ul>
   </div>
   <!-- danh mục -->
</aside><!-- #secondary -->
