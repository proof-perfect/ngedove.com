<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if (is_page_template("page-blog.php")) : ?>
	<div class="side side-author show-for-medium">
		<div class="photo"></div>
		<div class="meta-author">
			<div class="photo"><img src="<?php echo get_template_directory_uri() ?>/img/author-dove.png" alt=""></div>
			<div class="meta">
				<strong>Posted by:</strong> <br>Ange Dove
			</div>
		</div>
	</div>
<?php else: ?>
	<div class="side side-contact">
		<div class="box-info">
			<i class="icon icon-marker"></i>
			<div class="info">
				<div class="meta"><strong>Ange Dove</strong> <br>Singapore, Proof Perfect </div>
				<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.827625519294!2d103.83397411520622!3d1.276850362160206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da196ee2b2a245%3A0x6e3f49e05368c27c!2s45+Kampong+Bahru+Rd%2C+Singapore+169360!5e0!3m2!1sen!2sph!4v1456660259126" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe></div>
			</div>
		</div>
		<div class="box-info">
			<i class="icon icon-phone"></i>
			<div class="info">
				<div class="meta"><strong>+65 6333 4138 </strong></div>
			</div>
		</div>
	</div>
<!--	--><?php //if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
<!--		<aside id="secondary" class="sidebar widget-area" role="complementary">-->
<!--			--><?php //dynamic_sidebar( 'sidebar-1' ); ?>
<!--		</aside><!-- .sidebar .widget-area -->
<!--	--><?php //endif; ?>
<?php endif; ?>
