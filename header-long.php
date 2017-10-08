<?php
/**
 * The header for our theme tristanbains
 * Author Nishan Mazumder
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<?php global $ts_theme_option; ?>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="profile" href="http://gmpg.org/xfn/11"> -->
<!--Google fonts Lato-->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i,900" rel="stylesheet">
<?php wp_head(); ?>

<style type="text/css">
	.cd-bg-blue-long{
		background: <?php echo rwmb_meta('cd_long_page_bg'); ?>;
	}
	.cd-post-content-header{
		background: <?php echo rwmb_meta('cd_long_content_header_bg'); ?>;
	}
	.cd-post-content-long{
		background: <?php echo rwmb_meta('cd_long_post_bg'); ?>;
	}
	.cd-site-logo img{
		margin-top: <?php echo $ts_theme_option['ts_header_logo_spacing']['margin-top'];?>;
		margin-bottom: <?php echo $ts_theme_option['ts_header_logo_spacing']['margin-bottom'];?>;
		margin-left: <?php echo $ts_theme_option['ts_header_logo_spacing']['margin-left'];?>;
		margin-right: <?php echo $ts_theme_option['ts_header_logo_spacing']['margin-right'];?>;
	}
	.cd-site-logo img {
		height: <?php echo $ts_theme_option['ts_logo_dimensions']['height'];?>;
		width: <?php echo $ts_theme_option['ts_logo_dimensions']['width'];?>;
	}
	

	
	.cd-btn{
		background: <?php echo $ts_theme_option['cd_button_color'];?>;
		color: <?php echo $ts_theme_option['cd_button_text_color'];?>;
	}
	.cd-btn:hover{
		background: <?php echo $ts_theme_option['cd_button_hover_color'];?>;
		color: <?php echo $ts_theme_option['cd_button_text_hover_color'];?>;
	}
	
	.cd-navbar-nav li a{
		color: <?php echo $ts_theme_option['cd_nav_color'];?>;
	}
	.cd-navbar-nav li a:hover{
		color: <?php echo $ts_theme_option['cd_nav_color_hover'];?>;
	}
	.cd-nav-text{
		color: <?php echo $ts_theme_option['cd_nav_text_color'];?>;
	}
	.cd-footer{
		background: <?php echo $ts_theme_option['cd_bg_footer'];?>;
		color: <?php echo $ts_theme_option['cd_footer_text_color'];?>;
	}
	
	
	.cd-headigns-long h1{
		color: <?php echo rwmb_meta('cd_main_title_color_long'); ?>;
	}
	.cd-post-meta{
		color: <?php echo rwmb_meta('cd_main_title_color_long'); ?>;
	}
	.cd-heading-link{
		color: <?php echo $ts_theme_option['cd_post_description_long_link_color'];?>;
	}
	.cd-heading-link:hover{
		color: <?php echo $ts_theme_option['cd_post_description_long_link_color_hover'];?>;
	}
	.cd-post-link-social-long button{
		color: <?php echo rwmb_meta('cd_social_color_long'); ?>;
		background: <?php echo rwmb_meta('cd_social_color_bg_long'); ?>;
	}
	.cd-post-link-social-long button a{
		color: <?php echo rwmb_meta('cd_social_color_long'); ?>;
	}
	.cd-post-link-social-long button:hover{
		background: <?php echo rwmb_meta('cd_social_color_bg_hover_long'); ?>;
	}
	.cd-post-link-long button{
		background: <?php echo rwmb_meta('cd_post_related_btn_color_long'); ?>;
		color: <?php echo rwmb_meta('cd_post_related_btn_txt_color_long'); ?>;

	}
	.cd-post-link-long button:hover{
		background: <?php echo rwmb_meta('cd_post_related_btn_link_hover_long'); ?>;
	}
	.cd-post-link-long a{
		color: <?php echo $ts_theme_option['cd_post_related_btn_color_long'];?>;

	}
	.cd-post-link-long a:hover{
		color: <?php echo $ts_theme_option['cd_post_related_btn_link_hover_long'];?>;

	}
	<?php echo $ts_theme_option['ts-code-edit-css'];?>	
</style>
</head>

<body <?php body_class(); ?>>
	<div class="cd-wrapper cd-bg-blue-long">
			<div class="cd-main">
				<!--Header section start-->
				<div class="cd-header">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="cd-site-logo">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
										<img src="<?php echo $ts_theme_option['ts_upload_logo']['url'];?>">	
									</a>
								</div>
							</div>
						</div>