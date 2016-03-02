<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>


        <?php
          get_template_part("partials/banner");
          get_template_part("partials/form", "download");
        ?>
      <div class="row column">
         <div class="line-division with-arrow"></div>
         <div class="content-entry">
             <h1 class="section-title"> Are you ready for growth?</h1>
            <div class="row">
                <div class="large-7 medium-7 columns">
                    <h3 class="text-center">Hell, yeah!</h3>

                    <p>I’ve been running my own business for over 15 years. I was cruising along on comfortable. Then 10
                        years down the line I got stuck in a rut. I had got too comfortable. My business was no longer
                        growing.</p>

                    <p>New competitors were coming in and my conversion rate plummeted.</p>

                    <p>So I took a good hard look at my business, at what I was doing right, and what wasn’t working any
                        longer and I took MASSIVE action to make the changes needed to set my business back on a growth
                        path.</p>

                    <p class="text-center medium">I wasn’t about to let 15 years of hard work go for nothing!</p>

                    <p>Then it hit me. If this had happened to me, and I had the marketing support in-house that most small
                        and medium sized businesses don’t have, then how many business owners out there were struggling the
                        way I had been?</p>

                    <p class="lead text-center">If that sounds like you, it’s time to fast-track your business growth with my proven system.</p>
                </div>
                <div class="large-5 medium-5 columns">
                    <div class="img sm-center"><img src="<?php echo get_template_directory_uri() ?>/img/img-home.jpg" alt=""></div>
                    <div class="video sm-center"><img src="<?php echo get_template_directory_uri() ?>/img/img-video.jpg" alt=""></div>
                </div>
            </div>
         </div> <!---/.content-entry -->
      </div>

        <?php
            get_template_part("partials/carousel");
            get_template_part("partials/business");
            get_template_part("partials/form", "bottom");

        ?>

<?php get_footer(); ?>
