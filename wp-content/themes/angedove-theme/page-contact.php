<?php
/**
 * Template Name: Contact Page Template
 */
get_header();

?>

<?php
    get_template_part("partials/banner");
?>

<div class="row">
    <div class="content-entry">
         <div class="medium-7 large-7 columns">
             <?php get_template_part("partials/form", "contact"); ?>
         </div>
        <div class="medium-5 large-4 columns">
            <?php  get_sidebar(); ?>
        </div>
    </div> <!---/.content-entry -->
</div>

<?php get_footer(); ?>

