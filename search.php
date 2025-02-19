<?php get_header(); ?>

<div class="row pt-5">

  <div class="col-12 col-sm-8">
    <div class="row">
    
      <?php

      if (have_posts()):
        while (have_posts()): the_post(); 

          get_template_part('content', 'search');
          
        endwhile;
      endif;

      ?>

    </div>
  </div>  

  <div class="col-12 col-sm-4">
    <?php get_sidebar(); ?>
  </div>

</div>

<?php get_footer(); ?>