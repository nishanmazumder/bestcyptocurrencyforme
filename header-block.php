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
	.block-header-icon i{
		color: <?php echo rwmb_meta('cd_social_color_block'); ?> !important;
	}
	.block-header-icon i:hover{
		color: <?php echo rwmb_meta('cd_social_color_block_hover'); ?> !important;
	}
	.cd-block-title h3{
		color: <?php echo rwmb_meta('cd_title_color_block'); ?>;
	}
	.cd-footer{
		background: <?php echo $ts_theme_option['cd_bg_footer'];?>;
		color: <?php echo $ts_theme_option['cd_footer_text_color'];?>;
	}
	
	<?php echo $ts_theme_option['ts-code-edit-css'];?>	
</style>
</head>

<body <?php body_class(); ?>>
	<div class="cd-wrapper cd-white-bg">
			<div class="cd-main">
				<!--Header section start-->
				<div class="cd-header">
					<div class="container">
						<div class="row justify-content-md-center ">
							<div class="col-lg-auto col-md-auto col-sm-12 col-xs-12 text-center">
								<div class="header-icon-area">
									<ul class="header-icon text-center">
										<li>
											<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&t=<?php echo urlencode( $post->post_title ); ?>" target="_blank" rel="noopener noreferrer">
												<i class="fa fa-facebook" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="http://twitter.com/home?status=Reading: <?php the_permalink(); ?>">
												<i class="fa fa-twitter" aria-hidden="true"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--Header section end-->