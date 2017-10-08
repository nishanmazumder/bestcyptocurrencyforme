<?php

// Intrigrate Redux framework
require_once ('inc/redux-framework-master/redux-framework.php');
require_once ('inc/theme-function.php');

// Style
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css', array('parent-style')
    );
	
	// Enque Style
	wp_enqueue_style( 'cd-css-bootstrap', get_theme_file_uri( '/assets/css/bootstrap.min.css' ), array( 'twentyseventeen-style' ), '4.0' );
	wp_enqueue_style( 'cd-css-fontawesome', get_theme_file_uri( '/assets/css/font-awesome.min.css' ), array( 'twentyseventeen-style' ), '1.0' );

	
	
	wp_enqueue_script( 'cd-js-jquery-old', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js' , array(), '1.12.4', true );
	wp_enqueue_script( 'cd-js-proper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js' , array(), '1.12.4', true );
	wp_enqueue_script( 'cd-js-proper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js' , array(), '1.11.0', true );
	wp_enqueue_script( 'cd-js-bootstrap', get_theme_file_uri( '/assets/js/bootstrap.min.js' ), array(), '4.0', true );
	wp_enqueue_script( 'cd-js-ticker', get_theme_file_uri( '/assets/js/vendor/jquery.simpleTicker.js' ), array(), '1.0', true );
	wp_enqueue_script( 'cd-js-main', get_theme_file_uri( '/assets/js/main.js' ), array(), '1.0', true );
}

// Menu register
register_nav_menus( array(
        'ts_main_menu' 	=> __( 'Main Menu CD', 'twentyseventeen' ),
		//'cd_social_menu'=> __( 'Social Menu CD', 'twentyseventeen' ),
) );

////////////////////Post template////////////////////////////////
// News Ticker
	register_post_type('cd_news_ticker', array(
		'labels' 	=> array(
			'name' 			=> 'Animate Text',
			'add_new_item'	=> 'Add New Slider'
		), 
		'public' 		=> true,
		'supports'		=> array('title'),
		'menu_position' => 120,
		'menu_icon' 	=> 'dashicons-media-interactive'
	));
		
//// Block answer
	register_post_type('cd-block', array(
		'labels' 	=> array(
			'name' 			=> 'Block',
			'add_new_item'	=> 'Add New Block Page'
		), 
		'public' 		=> true,
		'supports'		=> array('title','editor'),
		'menu_position' => 85,
		'menu_icon' 	=> 'dashicons-welcome-view-site'
	));	
	
//// Block answer
	register_post_type('cd-sub-block', array(
		'labels' 	=> array(
			'name' 			=> 'Sub Block',
			'add_new_item'	=> 'Add New Sub Block Page'
		), 
		'public' 		=> true,
		'supports'		=> array('title','editor'),
		'menu_position' => 86,
		'menu_icon' 	=> 'dashicons-welcome-view-site'
	));	
	
	
//// Short answer
	register_post_type('cd-short', array(
		'labels' 	=> array(
			'name' 			=> 'Short Answer',
			'add_new_item'	=> 'Add New Answer'
		), 
		'public' 		=> true,
		'supports'		=> array('title','thumbnail'),
		'menu_position' => 90,
		'menu_icon' 	=> 'dashicons-format-aside'
	));
	
//// Long answer
	register_post_type('cd-long', array(
		'labels' 	=> array(
			'name' 			=> 'Long Answer',
			'add_new_item'	=> 'Add New Answer'
		), 
		'public' 		=> true,
		'supports'		=> array('title','thumbnail'),
		'menu_position' => 95,
		'menu_icon' 	=> 'dashicons-media-document'
	));

	
//Remove  slug from post type
 
function cd_post_slug_remove_short( $post_link, $post, $leavename ) { 
    if ( 'cd-short' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }
 
    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
 
    return $post_link;
}
add_filter( 'post_type_link', 'cd_post_slug_remove_short', 10, 3 );

function cd_post_slug_remove_long( $post_link, $post, $leavename ) { 
    if ( 'cd-long' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }
 
    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
 
    return $post_link;
}
add_filter( 'post_type_link', 'cd_post_slug_remove_long', 10, 3 );

function cd_post_slug_remove_block( $post_link, $post, $leavename ) { 
    if ( 'cd-block' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }
 
    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
 
    return $post_link;
}
add_filter( 'post_type_link', 'cd_post_slug_remove_block', 10, 3 );

function cd_post_slug_remove_block_sub( $post_link, $post, $leavename ) { 
    if ( 'cd-sub-block' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }
 
    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );
 
    return $post_link;
}
add_filter( 'post_type_link', 'cd_post_slug_remove_block_sub', 10, 3 );

function shapeofweb_parse_request_trick( $query ) {
 
    // Only noop the main query
    if ( ! $query->is_main_query() )
        return;
 
    // Only noop our very specific rewrite rule match
    if ( 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
        return;
    }
 
    // 'name' will be set if post permalinks are just post_name, otherwise the page rule will match
    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'post', 'page', 'cd-short', 'cd-long', 'cd-block', 'cd-sub-block' ) );
    }
}
add_action( 'pre_get_posts', 'shapeofweb_parse_request_trick' );
	
	
	
// create a URL to the child theme
function get_template_directory_child() {
    $directory_template = get_template_directory_uri(); 
    $directory_child = str_replace('storefront', '', $directory_template) . 'child-storefront';

    return $directory_child;
}

// Intrigrate Custom Navigation Walker
require_once('inc/wp-bootstrap-navwalker.php');
	
// Post option removing (Editor)
//function remove_editor() {
  //remove_post_type_support('post','editor');
//}
//add_action('admin_init', 'remove_editor');

// Page option removing (Editor)
//function remove_editor_post() {
 // remove_post_type_support('page','editor');
//}
//add_action('admin_init', 'remove_editor_post');

// Intrigrate Meta Box
require_once ('inc/meta-box/meta-box.php');
require_once ('inc/meta-box-field.php');


// Post template found
flush_rewrite_rules( false );	

// Shortcode

// Shortcode Images block
function block_shortcode($atts) {
    extract(shortcode_atts(array(
		'url' 	=> 'https://www.google.com/',
		'image'	=> get_stylesheet_directory_uri().'/assets/img/feature_img_swf.png',
		'text'	=> 'Run A Startup',
		'color'	=> '#186677',
		), $atts, 'block_shortcode'));
	
    return 
			'<div class="col-md-3 col-lg-3 col-sm-6 col-xs-6 cd-block-row">
				<a href="'.$url.'">
					<div id="cd-block-id" class="cd-block">
						<img id="block-img" src="'.$image.'" alt="" />
						<p style="color:'.$color.';">'.$text.'</p>
					</div>
				</a>
			</div>'
	;
}
add_shortcode('block', 'block_shortcode');

// Alert Short code
function ts_alert_shortcode( $atts ) {
    extract( shortcode_atts( array(
        'content' 	=> 'This is alert',
        'color' 	=> '#BEA424',
		'background'=> '#F7EEBF' 
    ), $atts, 'ts_alert_shortcode' ));

    return '<div style= "color:' .$color.'; background:'.$background.'; width: 100%; padding : 20px;" >'.$content.'</div>';
}
add_shortcode( 'alert', 'ts_alert_shortcode' );	
