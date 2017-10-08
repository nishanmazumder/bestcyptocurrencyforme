<?php
/**

 Template name: Block's Page  
 Template post type: cd-block

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

get_header('block'); ?>

<div class="clearfix"></div>
				<?php while( have_posts()) : the_post(); ?>
				<!--Content section start-->
				<div class="cd-content cd-block-content">
					<div class="container text-center">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="cd-block-title text-center">
									<h3><?php the_title(); ?></h3>
								</div>
							</div>
						</div>
					
						<div class="row justify-content-md-center">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
				<!--Content section end-->
				<?php endwhile; ?>
				
				<div class="clearfix"></div>

<?php get_footer(); ?>