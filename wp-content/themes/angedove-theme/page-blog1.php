<?php
get_header();

?>

<?php
    get_template_part("partials/banner");
?>

<div id="content" class="narrowcolumn">


<h1> This is the blog 1 </h1>

  <div class="container">
  <div class="row columns">
        <div class="entry-content" id="post-83">
          <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
  <div class="wpb_text_column wpb_content_element ">
    <div class="wpb_wrapper">
    

    </div>
  </div>
</div></div></div></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-8"><div class="vc_column-inner "><div class="wpb_wrapper">
  <div class="wpb_text_column wpb_content_element ">
    <div class="wpb_wrapper">

        <!-- This is where the post is being added -->
        <?php   
          $myposts = get_posts('');
          foreach($myposts as $post) :
          setup_postdata($post);
          ?> 
            <div class="post-item">
              <div class="post-info">
                <h2 class="post-title">
                <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                <?php the_title(); ?>
                </a>
                </h2>
                <p class="post-meta">Posted by <?php the_author(); ?></p>
              </div>
              <div class="post-content">
              <?php the_excerpt(); ?>
              </div>
            </div>
          <?php endforeach; ?> 
          <?php wp_reset_postdata(); ?> 

    </div>
  </div>
</div></div></div>

<div class="wpb_column vc_column_container vc_col-sm-4">
<div class="vc_column-inner "><div class="wpb_wrapper">

  <div class="wpb_text_column wpb_content_element ">
    <div class="wpb_wrapper">


        <!-- This is the area where the side bar is being added -->
        <?php get_sidebar(); ?> 


    </div>
  </div>
</div></div></div></div>

  </div><!-- /.entry-content -->
 
         
  </div>
</div>
 
</div>



<?php get_footer(); ?>
