<?php
get_header();

?>

<?php
    get_template_part("partials/banner");
?>

<div class="row">


<?php if(have_posts()) : ?>
     <?php while(have_posts()) : the_post(); ?>
          <div class="post"> 

          		 <div class="medium-7 large-7 columns">
         <ul class="no-bullet list-blog">
		    <li>
		        <h2 class="title"><?php the_title(); ?></h2>
		        <div class="meta-data">
		           
		        </div>
		       
		        <div class="post-entry">
		         <?php the_content(); ?>
		        </div>
		    </li>
		</ul>
     </div>
    <div class="medium-5 large-4 columns">
  		 <div class="meta-author">
            <div class="photo"><img src="<?php echo get_template_directory_uri() ?>/img/author-dove.png" alt=""></div>
            <div class="meta">
                <strong>Posted by:</strong> <br><?php the_author(); ?><br><?php the_date(); ?>
            </div>
        </div>

        <br><br>

        <hr>

 

        <?php  get_sidebar(); ?>
    </div>

              </div>
          </div>
     <?php endwhile; ?>
<?php endif; ?>
    
</div>

<?php get_footer(); ?>