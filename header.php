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

</head>

<body <?php body_class(); ?>>
	<div class="cd-wrapper">
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