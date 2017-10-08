<?php
/**
 * The front page template file tristanbains
 *	Author : Nishan mazumder
 * If the user has selected a static page for their homepage, this is what will 
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header('front'); ?>
						
						<div class="row justify-content-md-center">
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
				
				<div class="clearfix"></div>
				
				<!--Content section start-->
				<div class="cd-content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="cd-big-title text-center">
									<h1><?php echo $ts_theme_option['ts_post_title'];?></h1>
								</div>
							</div>
						</div>
						<div class="row justify-content-md-center">
							<div class="col-md-3 text-center">
								<div id="cd-ticker" class="ticker">
								  <ul>
									<?php
									$animationText = $ts_theme_option['cd_ticker_color_switch'];
									
									if($animationText == 1):
										$cd_news_ticker = new WP_Query(array(
											'post_type' 	=> 'cd_news_ticker',
											'posts_per_page'=> 100
										)
									);
									
									while($cd_news_ticker -> have_posts()) : $cd_news_ticker -> the_post(); ?>
										<li><?php the_title(); ?></li>	
									<?php endwhile;
											endif; ?>
									
								  </ul>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
								<a href="<?php echo $ts_theme_option['cd_button_url'];?>"><button type="button" class="cd-btn"><?php echo $ts_theme_option['cd_button_text'];?></button></a>
							</div>
						</div>
					</div>
				</div>
				<!--Content section end-->
				
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
				<!--Nav section end-->
				
				<div class="clearfix"></div>


<?php get_footer();
