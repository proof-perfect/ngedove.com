<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	 
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="box-enquiry fixed">
	<ul class="no-bullet">
		<li><a href=""><i class="icon icon-call"></i>Call</a></li>
		<li><a href="javascript:void(0)" data-open="form-modal"><i class="icon icon-enquire"></i>Enquire</a></li>
	</ul>
</div>


<div class="off-canvas-wrapper">
	<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">
			<button class="close-button" aria-label="Close menu" type="button" data-close="">
				<span aria-hidden="true">×</span>
			</button>
			<?php wp_nav_menu(array(
				'menu_class' => 'no-bullet menu menu-main vertical'
			)); ?>
		</div>
		<div class="off-canvas-content" data-off-canvas-content>
			<button class="menu-icon hide-for-large" type="button" data-toggle="offCanvasRight"></button>

			 <header>
				  <div class="container container-header">
					   <div class="row">
<button onclick="location.href='https://www.linkedin.com/groups/8487200';" class="socialMedia"><img src="http://image005.flaticon.com/28/svg/34/34227.svg" id="socialMedia">
</button>
<button onclick="location.href='https://www.facebook.com/groups/1670478196554838';" class="socialMedia"><img src="http://image005.flaticon.com/1/svg/59/59439.svg" id="socialMedia">
</button>
							<div class="xlarge-3 large-2 columns">
								<div class="logo"><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo-angel-adove.png" alt=""></a></div>
							</div>
							<div class="xlarge-9 large-10 columns show-for-large">
									<?php wp_nav_menu(array(
										'menu_class' => 'no-bullet menu menu-main'
									)); ?>
							</div>
					   </div>
				  </div>
			 </header>

	<main>
		<div id="content">
