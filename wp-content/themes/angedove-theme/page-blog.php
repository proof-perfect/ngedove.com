<?php
get_header();

?>

<?php
    get_template_part("partials/banner");
?>

<div class="row">
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
<?php endforeach; wp_reset_postdata(); ?>

</div>

<?php get_footer(); ?>

