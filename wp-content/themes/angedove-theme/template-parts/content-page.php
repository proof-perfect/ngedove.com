<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="container">
	<div class="row columns">
				<div class="entry-content" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php
					the_content();

					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
						'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
						'separator'   => '<span class="screen-reader-text">, </span>',
					) );
					?>

					<?php if (is_page("6")) : ?>
						<h2 class="section-title  text-center">Fast-track your business growth with 1-on-1 coaching</h2>
						<p>When you are running a business, especially if you started it as an expert in your field and not an expert in how to promote it and grow a business, it can be pretty lonely. I know. I’ve been there. But I got help by being coached. I can’t tell you what a difference it makes when someone from the outside comes in, provides an objective view of your business, clarity on the next steps needed and holds you accountable for making change happen.</p>
						<div class="row">
							<div class="large-6 columns">
								<div class="content-block">
									<h3 class="sub-title text-center">Working with me, you’ll get clear on:</h3>
									<ul class="list-style no-bullet">
										<li>Your brand and your message</li>
										<li>Who your ideal clients are</li>
										<li>Where to reach them</li>
										<li>How to connect with them on an emotional level so they buy from you</li>
									</ul>
								</div>
							</div>
							<div class="large-6 columns">
								<div class="content-block">
									<h3 class="sub-title text-center">You’ll get a step-by-step marketing plan to:</h3>
									<ul class="list-style no-bullet">
										<li>Stop competing on price but instead communicate value</li>
										<li>Get in front of the clients who will buy from you</li>
										<li>Convert them into paying customers</li>
										<li>Have them buy from your again and againHave them rave about you so you
											increase your client base
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="row">
							<h2 class="section-title text-center">Ask about my branding, marketing and starter kit coaching packages.</h2>
							<div class="button-block text-center"><a href="" class="button"><span>SEND ME DETAILS NOW!</span></a></div>
						</div>
					<?php endif; ?>
				</div><!-- /.entry-content -->

				<?php
					edit_post_link(
						sprintf(
							/* translators: %s: Name of current post */
							__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
							get_the_title()
						),
						'<footer class="entry-footer"><span class="edit-link">',
						'</span></footer><!-- .entry-footer -->'
					);
				?>

	</div>
</div>

