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
	.cd-white-bg{
		background: <?php echo rwmb_meta('cd_block_bg'); ?>;
	}
	.cd-page-border{
		background: <?php echo rwmb_meta('cd_block_sub_page_bg'); ?>;
	}
	.cd-prv-link-block h4 strong a{
		color: <?php echo rwmb_meta('cd_prv_txt_color_sub'); ?>;
	}
	.cd-block-sub-title span{
		background: <?php echo rwmb_meta('cd_header_text_bg_color_sub_block'); ?>;
		color: <?php echo rwmb_meta('cd_header_text_color_sub_block'); ?>;
	}
	.cd-block-title h3{
		color: <?php echo rwmb_meta('cd_title_color_block_sub'); ?>;
	}
	.cd-block-title:before{
		border-top: 3px solid <?php echo rwmb_meta('cd_title_border_color_block_sub'); ?>;
	}
	.cd-block-title:after{
		border-top: 3px solid <?php echo rwmb_meta('cd_title_border_color_block_sub'); ?>;
	}
	.cd-footer{
		background: <?php echo $ts_theme_option['cd_bg_footer'];?>;
		color: <?php echo $ts_theme_option['cd_footer_text_color'];?>;
	}
	
	<?php echo $ts_theme_option['ts-code-edit-css'];?>	
</style>
</head>

<body <?php body_class(); ?>
	<div class="cd-wrapper cd-white-bg">
	<div class="cd-page-border"></div>
			<div class="cd-main">
				<!--Header section start-->
				<div class="cd-header cd-header-block-sub">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 cd-prv-link-block">
								<h4><strong><a href="<?php echo rwmb_meta('cd_prv_link_sub'); ?>"><?php echo rwmb_meta('cd_prv_block_sub'); ?></a></strong></h4>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
								<div class="cd-block-sub-title"><span><?php echo rwmb_meta('cd_startup_text_sub_block'); ?></span><!-- <php echo rwmb_meta( 'cd_startup_text'); ?> --></div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
						</div>
					</div>
				</div>
				<!--Header section end-->