<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="clearfix"></div>
				
				<?php while( have_posts()) : the_post(); ?>
				<!--Content section start-->
				<div class="cd-content long-pad-footer">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="cd-post-page-content">
									<div class="cd-feature-long-content">
										<div class="row">
											<div class="col-md-12 text-center cd-long-feature">
												<?php if ( has_post_thumbnail() ) {
												the_post_thumbnail();
												} else { ?>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/feature_img_swf.png" alt="<?php the_title(); ?>" />
											<?php } ?>
											</div>
										</div>
									</div>
									<div class="cd-post-content-header text-center">
										<div class="row">
											<div class="col-md-12">
												<div class="cd-headigns-long">
													<h1><strong><?php the_title(); ?></strong></h1>
												</div>
											</div>
											<div class="col-md-12">
												<div class="cd-heading-content">
													<?php the_content(); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--Content section end-->
				<?php endwhile; ?>
				
				
			<div class="clearfix"></div>

<?php get_footer();
