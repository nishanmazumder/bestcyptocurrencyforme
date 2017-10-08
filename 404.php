<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="clearfix"></div>
				

				<!--Content section start-->
				<div class="cd-content long-pad-footer">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="cd-post-page-content">
									<div class="cd-feature-long-content">
										<div class="row">
											<div class="col-md-12 text-center cd-long-feature err-404-img">
												<img src="<?php echo $ts_theme_option['cd_404_img']['url'];?>" alt="" />
											</div>
										</div>
									</div>
									<div class="cd-post-content-header text-center">
										<div class="row">
											<div class="col-md-12">
												<div class="cd-headigns-long">
													<h1><strong><?php echo $ts_theme_option['cd_404_text'];?></strong></h1>
												</div>
											</div>
											<div class="col-md-12">
												<div class="cd-heading-content">
													<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo $ts_theme_option['cd_404_back_link'];?></a>
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

				
				
			<div class="clearfix"></div>

<?php get_footer();