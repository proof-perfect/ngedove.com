<?php
/**
 * Template Name: About Page Template
 */
get_header();

?>

<?php
    get_template_part("partials/banner");
?>


<div class="row column">
    <div class="content-entry" data-equalizer="blurb" data-equalize-on="medium">
        <div class="large-4 columns">
            <div class="box">
                <h3 class="title text-upper">Consultant</h3>
                <div class="img"><img src="<?php echo get_template_directory_uri() ?>/img/icon-consultant.png" alt=""></div>
                <div class="blurb" data-equalizer-watch="blurb">Ange Dove has been helping small-and-medium sized enterprises target their marketing communications internationally and supporting MNCs entering Southeast Asia to focus their communication towards Asian audiences for over a decade. Her fast, fuss-free and most importantly – proven – approach to marketing has seen her delivering winning results for clients – consistently.</div>
                 <div class="action"><a href="get-coached/" class="button"><span>BOOK A CONSULTATION</span></a></div>
            </div>
        </div>
        <div class="large-4 columns">
            <div class="box">
                <h3 class="title text-upper">Author</h3>
                <div class="img"><img src="<?php echo get_template_directory_uri() ?>/img/icon-author.png" alt=""></div>
                <div class="blurb" data-equalizer-watch="blurb">Ange Dove is the author of <em>11 reasons why your 
business is not growing.</em> Often dubbed the accidental entrepreneur, she has grown from copywriter and brandwriter with a background in English language training to CEO of a successful one-stop marketing agency – and all while juggling responsibilities and raising her two kids. Inspired by her entrepreneurial journey over the last decade, the book outlines the common mistakes small businesses make and gives guidance on how to fix them. </div>
                <div class="action"><a href="contact-me/" class="button"><span>BOOK ANGE TO SPEAK <br>AT YOUR EVENT</span></a></div>
            </div>
        </div>
        <div class="large-4 columns">
            <div class="box">
                <h3 class="title text-upper">Copywriter</h3>
                <div class="img"><img src="<?php echo get_template_directory_uri() ?>/img/icon-copywriter.png" alt=""></div>
                <div class="blurb" data-equalizer-watch="blurb">Ange Dove specialises in copywriting and editorial services. With her background of 15 years in English language teaching, Angela has an astute understanding of the nuances of the language and a passion for delivering error-free, grammatically correct copy for her clients. She is adept at creating copy that sells and communicating the voice of MNC brands consistently throughout their marketing materials in print and online. </div>
                <div class="action"><a href="contact-me/" class="button"><span>BOOK AN ASSESSMENT OF YOUR CURRENT MARKETING COPY</span></a></div>
            </div>
<!--        </div>-->
<!--        --><?php //while ( have_posts() ) : the_post(); ?>
<!--            --><?php //if( have_rows('about_me_section') ): ?>
<!---->
<!--                <ul>-->
<!---->
<!--                    --><?php //while( have_rows('about_me_section') ): the_row(); ?>
<!---->
<!--                        <li>sub_field_1 = --><?php //the_sub_field('about_me_title'); ?><!--</li>-->
<!---->
<!---->
<!--                    --><?php //endwhile; ?>
<!---->
<!--                </ul>-->
<!---->
<!--            --><?php //endif; ?>
<!---->
<!--        --><?php //endwhile; // end of the loop. ?>

    </div> <!---/.content-entry -->
</div>

<?php
    get_template_part("partials/carousel");
    get_template_part("partials/form", "bottom");
?>


<?php get_footer(); ?>

