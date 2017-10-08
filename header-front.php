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
	.cd-bg-blue{
		background-color: <?php echo $ts_theme_option['cd_bg_home']['background-color'];?>;
		background-image: url(<?php echo $ts_theme_option['cd_bg_home']['background-image'];?>);
		background-repeat:<?php echo $ts_theme_option['cd_bg_home']['background-repeat'];?>;
		background-position: <?php echo $ts_theme_option['cd_bg_home']['background-position'];?>;
		background-attachment: <?php echo $ts_theme_option['cd_bg_home']['background-attachment'];?>;
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
	
	.header-icon i{
		color: <?php echo $ts_theme_option['cd_social_link_color'];?>;
	}
	.header-icon i:hover{
		color: <?php echo $ts_theme_option['cd_social_link_hover_color'];?>;
	}
	
	.cd-big-title h1{
		color: <?php echo $ts_theme_option['cd_big_title_color'];?>;
	}
	.ticker ul li {
	  color: <?php echo $ts_theme_option['cd_ticker_color'];?>;
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
	
	<?php echo $ts_theme_option['ts-code-edit-css'];?>	
</style>
</head>

<body <?php body_class(); ?>>
	<div class="cd-wrapper cd-bg-blue">
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