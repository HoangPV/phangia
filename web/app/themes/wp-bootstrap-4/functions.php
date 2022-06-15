<?php
/**
 * WP Bootstrap 4 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Bootstrap_4
 */

if ( ! function_exists( 'wp_bootstrap_4_setup' ) ) :
	function wp_bootstrap_4_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'wp-bootstrap-4', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Enable Post formats
		add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio', 'status', 'quote', 'link' ) );

		// Enable support for woocommerce.
		add_theme_support( 'woocommerce' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'wp-bootstrap-4' ),
		) );

		// Switch default core markup for search form, comment form, and comments
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'wp_bootstrap_4_custom_background_args', array(
			'default-color' => 'f8f9fa',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for core custom logo.
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'wp_bootstrap_4_setup' );




/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_4_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_bootstrap_4_content_width', 800 );
}
add_action( 'after_setup_theme', 'wp_bootstrap_4_content_width', 0 );




/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_bootstrap_4_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wp-bootstrap-4' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget border-bottom %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'wp-bootstrap-4' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'wp-bootstrap-4' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'wp-bootstrap-4' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 4', 'wp-bootstrap-4' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'wp_bootstrap_4_widgets_init' );




/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_4_scripts() {
	wp_enqueue_style( 'open-iconic-bootstrap', get_template_directory_uri() . '/assets/css/open-iconic-bootstrap.css', array(), 'v4.0.0', 'all' );
	wp_enqueue_style( 'bootstrap-4', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), 'v4.0.0', 'all' );
	// wp_enqueue_style( 'wp-bootstrap-4-style', get_stylesheet_uri(), array(), '1.0.2', 'all' );
	wp_enqueue_style( 'bootstrap-4-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), 'v1.0.0', 'all' );
	wp_enqueue_style( 'bootstrap-4-swiper', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), 'v1.0.0', 'all' );
	wp_enqueue_style( 'bootstrap-4-scroll', get_template_directory_uri() . '/assets/css/jquery.simplyscroll.css', array(), 'v1.0.0', 'all' );

	// carousel 
	wp_enqueue_style( 'bootstrap-4-carousel', get_template_directory_uri() . '/assets/css/carousel/owl.carousel.min.css', array(), 'v2.3.4', 'all' );
	wp_enqueue_style( 'bootstrap-4-carousel-theme', get_template_directory_uri() . '/assets/css/carousel/owl.theme.default.min.css', array(), 'v2.3.4', 'all' );
	wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/assets/css/slick.css' );
	wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css' );
	wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/assets/js/slick.min.js', array('jquery'), true );

    // js include
	wp_enqueue_script( 'bootstrap-4-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), 'v4.0.0', true );
    wp_enqueue_script( 'bootstrap-4-js-carousel', get_template_directory_uri() . '/assets/js/carousel/owl.carousel.min.js', array('jquery'), 'v2.3.4', true );
    wp_enqueue_script( 'bootstrap-4-js-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'v1.0.0', true );
    wp_enqueue_script( 'bootstrap-4-js-swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array('jquery'), 'v1.0.0', true );
    wp_enqueue_script( 'bootstrap-4-js-scroll', get_template_directory_uri() . '/assets/js/jquery.simplyscroll.min.js', array('jquery'), 'v1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_4_scripts' );


/**
 * Registers an editor stylesheet for the theme.
 */
function wp_bootstrap_4_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'wp_bootstrap_4_add_editor_styles' );


// Implement the Custom Header feature.
require get_template_directory() . '/inc/custom-header.php';

// Implement the Custom Comment feature.
require get_template_directory() . '/inc/custom-comment.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Custom Navbar
require get_template_directory() . '/inc/custom-navbar.php';

// Customizer additions.
require get_template_directory() . '/inc/tgmpa/tgmpa-init.php';

// Use Kirki for customizer API
require get_template_directory() . '/inc/theme-options/add-settings.php';

// Customizer additions.
require get_template_directory() . '/inc/customizer.php';

// Load Jetpack compatibility file.
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Load WooCommerce compatibility file.
if ( class_exists( 'WooCommerce' ) ) {
	// require get_template_directory() . '/inc/woocommerce.php';
}

// Breadcrumb
function lewis_breadcrumbs() {
    $delimiter = '&ensp;/&ensp;';
    $home = '<i class="fa fa-home" aria-hidden="true"></i> Trang chủ'; // chữ thay thế cho phần 'Home' link
    $before = '<span class="current">'; // thẻ html đằng trước mỗi link
    $after = '</span>'; // thẻ đằng sau mỗi link
    if ( !is_home() && !is_front_page() || is_paged() ) {
        echo '<ul id="crumbs" class="breadcrumb">';
        global $post;
        $homeLink = get_bloginfo('url');
        echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
        if ( is_category() ) {
            global $wp_query;
            $cat_obj = $wp_query->get_queried_object();
            $thisCat = $cat_obj->term_id;
            $thisCat = get_category($thisCat);
            $parentCat = get_category($thisCat->parent);
            if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
            echo $before . single_cat_title('', false) . $after;
        } 
        elseif ( is_day() ) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('d') . $after;
        } elseif ( is_month() ) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('F') . $after;
        } elseif ( is_year() ) {
            echo $before . get_the_time('Y') . $after;
        } elseif ( is_single() && !is_attachment() ) {
            if ( get_post_type() != 'post' ) {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
                echo $before . get_the_title() . $after;
            } else {
                $cat = get_the_category(); $cat = $cat[0];
                echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
                echo $before . get_the_title() . $after;
            }
        } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;
        } elseif ( is_attachment() ) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID); $cat = $cat[0];
            echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
            echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;
        } elseif ( is_page() && !$post->post_parent ) {
            echo $before . get_the_title() . $after;
        } elseif ( is_page() && $post->post_parent ) {
            $parent_id = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                $parent_id = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
            echo $before . get_the_title() . $after;
        } elseif ( is_search() ) {
            echo $before . 'Search results for "' . get_search_query() . '"' . $after;
        } elseif ( is_tag() ) {
            echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
        } elseif ( is_author() ) {
            global $author;
            echo $before . 'Articles posted by ' . $userdata->display_name . $after;
        } elseif ( is_404() ) {
            echo $before . 'Error 404' . $after;
        }
        echo '</ul>';
    }
}


// Open graph Meta
//Adding the Open Graph in the Language Attributes
function add_opengraph_doctype( $output ) {
        return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
    }
add_filter('language_attributes', 'add_opengraph_doctype'); 
//Lets add Open Graph Meta Info 
function insert_fb_in_head() {
    global $post;
    if ( !is_singular()) //if it is not a post or a page
        return;
        echo '<meta property="og:title" content="' . get_the_title()  . '"/>';
        echo '<meta property="og:type" content="website"/>';
        echo '<meta property="og:url" content="' . get_permalink() . '"/>';
        echo '<meta property="og:site_name" content="'. get_field('ten_cong_ty','option').'"/>';
    if(!has_post_thumbnail( $post->ID )) { 
        $default_image = get_field('logo','option');
        echo '<meta property="og:image" content="' . $default_image['url'] . '"/>';
    }
    else{
        $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
        echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
    }
    echo "
";
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );


// Theme get_option
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Thông Tin Website',
		'menu_title'	=> 'Thông Tin Website',
		'menu_slug' 	=> 'theme-options',
		'capability'	=> 'edit_posts',
		// 'redirect'		=> false
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Quản lý thông tin chung',
		'menu_title'	=> 'Quản lý thông tin chung',
		'parent_slug'	=> 'theme-options',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Banner',
		'menu_title'	=> 'Banner',
		'parent_slug'	=> 'theme-options',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Liên hệ',
		'menu_title'	=> 'Liên hệ',
		'parent_slug'	=> 'theme-options',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-options',
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Ý Kiến Khách Hàng',
		'menu_title'	=> 'Ý Kiến Khách Hàng',
		'menu_slug' 	=> 'review-options',
		'capability'	=> 'edit_posts'
	));
	acf_add_options_page(array(
		'page_title' 	=> 'Nổi Bật',
		'menu_title'	=> 'Nổi Bật',
		'menu_slug' 	=> 'feature-options',
		'capability'	=> 'edit_posts'
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Quản lý hình ảnh',
		'menu_title'	=> 'Quản lý hình ảnh',
		'menu_slug' 	=> 'image-options',
		'capability'	=> 'edit_posts'
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Quản lý logo đối tác',
		'menu_title'	=> 'Quản lý logo đối tác',
		'parent_slug'	=> 'image-options',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Quản lý slider',
		'menu_title'	=> 'Quản lý slider',
		'parent_slug'	=> 'image-options',
	));

}

// Add item admin bar
function add_item($admin_bar)  {
$args = array(
    'id'        => 'home-link', // Must be a unique name
    'title'     => 'Vào website', // Label for this item
    'href'      =>__ ('/'),
    'meta'  => array(
        'target'=> '_blank', // Opens the link with a new tab
        'title' => __('Vào website'), // Text will be shown on hovering
    ),    
);
$admin_bar->add_menu( $args);
}
add_action('admin_bar_menu', 'add_item', 100); // 10 = Position on the admin bar

function add_item1($admin_bar)  {
$args = array(
    'id'        => 'tk-link', // Must be a unique name
    'title'     => 'Quản lý tài khoản', // Label for this item
    'href'      =>__ ('/wp-admin/profile.php'),
    'meta'  => array(
        'target'=> '_parent', // Opens the link with a new tab
        'title' => __('Quản lý tài khoản'), // Text will be shown on hovering
    ),    
);
$admin_bar->add_menu( $args);
}
add_action('admin_bar_menu', 'add_item1', 90); // 10 = Position on the admin bar

// Remove category
add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_author() ) {
            $title = '<span class="vcard">' . get_the_author() . '</span>' ;
        }
    return $title;
});


// Create a Product Custom Post Type 
function createProductPostType() {

	$labels = array(
		'name'					=>		'Thanh Lý',
		'singular_name'			=>		'Thanh Lý',
		'add_new'				=>		'Thêm mới',
		'add_new_item'			=>		'Thêm Thanh Lý Mới',
		'edit_item'				=>		'Sửa Thanh Lý',
		'view_item'				=>		'Xem Thanh Lý',
		'new_item'				=>		'Thanh Lý Mới',
		'all_items'				=>		'Tất cả Thanh Lý',
	);

	$args = array(
		'labels'				=>		$labels,
		'public'             	=> 		true,
		'publicly_queryable' 	=> 		true,
		'show_ui'            	=> 		true,
		'show_in_menu'       	=> 		true,
		'query_var'          	=> 		true,
		'has_archive'        	=> 		true,		
		'rewrite'            	=> 		array( 'slug' => 'thanh-ly' ),
		'menu_position'			=>		40,
		'menu_icon'				=>		'dashicons-cart',
		'supports'           	=> array( 'title', 'editor', 'thumbnail'),
	);	

	register_post_type( 'thanh-ly',$args );

}
add_action( 'init' , 'createProductPostType' );

// Create a Custom Taxonomy for Product Post Type 
function createTaxForCustomPostType() {

	$labels	= array(
		'name'              => 'Danh Mục Thanh Lý',
		'singular_name'     => 'Danh Mục Thanh Lý',
		'search_items'      => 'Tìm Danh Mục ',
		'all_items'         => 'Tất cả danh mục',
		'parent_item'       => 'Danh mục cha ',
		'parent_item_colon' => 'Danh mục cha: ',
		'edit_item'         => 'Sửa danh mục ',
		'update_item'       => 'Cập nhật danh mục ',
		'add_new_item'      => 'Thêm danh mục mới',
		'new_item_name'     => 'Tên danh mục mới',
		'menu_name'         => 'Danh mục thanh lý',
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'danh-muc' ),
	);

	register_taxonomy( 'danh-muc', array( 'thanh-ly' ), $args );

}

add_action( 'init' , 'createTaxForCustomPostType' );


function wpa66834_role_admin_body_class( $classes ) {
    global $current_user;
    foreach( $current_user->roles as $role )
        $classes .= ' role-' . $role;
    return trim( $classes );
}
add_filter( 'admin_body_class', 'wpa66834_role_admin_body_class' );


add_filter( 'use_block_editor_for_post', '__return_false' );