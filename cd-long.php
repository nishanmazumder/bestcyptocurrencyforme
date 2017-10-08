<?php
/**

 Template name: Long Answer 
 Template post type: cd-long

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

get_header('long'); ?>

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
													<span class="cd-post-meta"><?php echo rwmb_meta('cd_post_meta_long'); ?></span>
												</div>
											</div>
											<div class="col-md-12">
												<div class="cd-heading-content">
													<p><?php echo rwmb_meta('cd_post_description_long'); ?></p>
												</div>
											</div>
											<div class="col-md-12">
												<div class="cd-heading-link">
													<a href="#" class="sgs"><?php echo rwmb_meta('cd_post_description_long_link'); ?></a>
												</div>
											</div>
										</div>
									</div>
									<div class="post-link-img">
										<img src="<?php echo get_stylesheet_directory_uri().'/assets/img/post_feature_img.png'; ?>" alt="" />
									</div>
									<div class="cd-post-content-long">
										<div class="row">
											<div class="col-md-12">
												<?php echo rwmb_meta('cd_post_description_long_2'); ?>
											</div>
											<div class="col-md-12 text-center">
												<div class="cd-post-link-social-long">
													<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&t=<?php echo urlencode( $post->post_title ); ?>" target="_blank" rel="noopener noreferrer">
														<i class="fa fa-facebook" aria-hidden="true"></i>
													</a>												
													<a href="http://twitter.com/home?status=Reading: <?php the_permalink(); ?>">
														<i class="fa fa-twitter" aria-hidden="true"></i>
													</a>	
												</div>
											</div>
											<div class="col-md-12 text-center">
												<div class="cd-post-link-long">
													<a href="<?php echo rwmb_meta('cd_post_related_btn_link_long'); ?>"><button class="btn"><?php echo rwmb_meta('cd_post_related_btn_long'); ?></button></a>
												</div>
											</div>
											<div class="col-md-12 text-center">
												<div class="cd-post-link-long">
													<a href="<?php echo rwmb_meta('cd_post_link_long_link_long'); ?>"><?php echo rwmb_meta('cd_post_link_long'); ?></a>
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
				
				<!--Nav section start-->
				<div class="cd-content-nav">
					<div class="container">
						<div class="row">
							<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
								<div class="cd-nav-text text-md-right text-sm-center">
									<p><?php echo $ts_theme_option['cd_nav_text'];?></p>
								</div>
							</div>
							<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
								<?php
								wp_nav_menu( array(
									'menu'              => 'ts_main_menu',
									'theme_location'    => 'ts_main_menu',
									'depth'             => 0,
									'container'         => 'nav',
									'container_class'   => 'navbar navbar-expand-md align-items-start',
									'container_id'      => 'cd-nav',
									'menu_class'        => 'cd-navbar-nav',
									'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
									'walker'            => new WP_Bootstrap_Navwalker())
								);
							?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Nav section end-->
				
			<div class="clearfix"></div>

<?php get_footer();
