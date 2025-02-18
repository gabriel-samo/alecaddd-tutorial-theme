<?php get_header(); 

  /**
   * Template Name: Page No Title
   */

?>

<div class="row pt-5">

  <div class="col-12 col-sm-8">

    <?php
    if (have_posts()):

      while (have_posts()): the_post(); ?>
      
        <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('H:i'); ?>, in <?php the_category(); ?></small>
        <p><?php the_content(); ?></p>
        <hr/>

    <?php endwhile;
    endif;
    ?>

  </div>  

  <div class="col-12 col-sm-4">

    <?php get_sidebar(); ?>
    
  </div>

</div>

<?php get_footer(); ?>