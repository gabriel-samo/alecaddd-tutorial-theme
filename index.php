<?php get_header(); ?>

<div class="row pt-5">

  <div class="col-12 col-sm-8">
    <div class="row text-center">
    
      <?php

      if (have_posts()): $i = 0;
        while (have_posts()): the_post(); 

          if ($i == 0): $column = 12; $class = '';
          elseif ($i > 0 && $i <= 2): $column = 6; $class = 'second-row-padding';
          else: $column = 4; $class = 'third-row-padding';
          endif;

          get_template_part('content', 'blog', array(
            'column' => $column, 
            'class' => $class
          ));

          $i++;
          
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