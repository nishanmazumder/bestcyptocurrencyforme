<?php
/**

 Template name: Short Answer 
 Template post type: cd-short

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

get_header('short'); ?>

<?php while( have_posts()) : the_post(); ?>
<h4><strong><a href="<?php echo rwmb_meta('cd_back_page_link'); ?>"><?php echo rwmb_meta('cd_back_page'); ?></a></strong></h4>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="cd-post-title">
									<h3 class="text-center"><strong><?php the_title(); ?></strong></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--Header section end-->

				
<div class="clearfix"></div>
				

				<!--Content section start-->
				<div class="cd-content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="cd-start-up-content">
									<div class="cd-startup-title text-center"><?php echo rwmb_meta( 'cd_startup_text'); ?></div>
									<div class="cd-post-header text-center">
										<h1><?php echo rwmb_meta( 'cd_post_title'); ?></h1>
									</div>
									<div class="cd-feature-img">
										<div class="col-md-12 text-center">
											<?php if ( has_post_thumbnail() ) {
												the_post_thumbnail();
												} else { ?>
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/feature_img_swf.png" alt="<?php the_title(); ?>" />
											<?php } ?>
										</div>
									</div>
									<div class="cd-post-content">
										<div class="row">
											<div class="col-md-12">
												<p><?php echo rwmb_meta( 'cd_post_description'); ?></p>
											</div>
											<div class="col-md-4 text-center">
												<div class="cd-post-link-social">
													<button class="btn">
														<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&t=<?php echo urlencode( $post->post_title ); ?>" target="_blank" rel="noopener noreferrer" class="social-links__link">
															<i class="fa fa-facebook" aria-hidden="true"></i>
														</a>
													</button>	
													<button class="btn">
														<a href="http://twitter.com/home?status=Reading: <?php the_permalink(); ?>">
															<i class="fa fa-twitter" aria-hidden="true"></i>
														</a>
												    </button>	
												</div>
											</div>
											<div class="col-md-8">
												<div class="cd-post-link">
													<a href="<?php echo rwmb_meta( 'cd_btn_text_link'); ?>"><button class="btn"><?php echo rwmb_meta( 'cd_btn_text'); ?></button></a>
												</div>
											</div>
											<div class="col-md-12 text-center">
												<div class="cd-post-link-repeat">
													<a href="<?php echo rwmb_meta( 'cd_start_again_link'); ?>" class="sgs"><i class="fa fa-repeat" aria-hidden="true"></i> <?php echo rwmb_meta( 'cd_start_again_text'); ?></a>
												</div>
											</div>
										</div>
									</div>
									<div class="cd-advertisement">
										<div class="row">
											<div class="col-md-12">
												<?php echo rwmb_meta('cd_add_img'); ?>
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