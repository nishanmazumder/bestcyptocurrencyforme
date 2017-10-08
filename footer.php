<?php
/**
 * The template for displaying the footer tristanbains
 * Author : Nishan mazumder
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

 global $ts_theme_option;
 
?>

		<!--Footer section end-->
				<footer class="cd-footer">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="copyright-text">
									<p class="text-center align-middle"><?php echo $ts_theme_option['cd_site_info'];?></p>
								</div>
							</div>
						</div>
					</div>
				</footer>
				<!--Footer section end-->
			</div>
		</div>
		
<?php wp_footer(); ?>
	
</body>
</html>
