<?php get_header(); ?>

<div class="row pt-5">

  <div id="alecaddd-carousel" class="carousel carousel-dark slide">

    <div class="carousel-inner">

      <?php

      $args_cat = array(
        'include' => '10, 11, 12',
      );

      $count = 0;
      $indicators = '';

      $categories = get_categories($args_cat);
      foreach ($categories as $category):

        $args = array(
          'type' => 'post',
          'posts_per_page' => 1,
          'category__in' => $category->term_id,
          'category__not_in' => array(1),
        );

        $lastBlog = new WP_Query($args);

        if ($lastBlog->have_posts()):

          while ($lastBlog->have_posts()): $lastBlog->the_post(); ?>

            <div class="carousel-item <?php echo ($count === 0) ? 'active' : ''; ?>" data-bs-interval="10000">
              <div class="carousel-img"><?php the_post_thumbnail('full'); ?></div>
              <div class="carousel-caption d-none d-md-block carousel-caption-text">
                <?php the_title(sprintf('<h3 class="entry-title"><a href="%s">', esc_url(get_permalink())), '</a></h3>'); ?>
                <small> <?php the_category(' '); ?> </small>
              </div>
            </div>

            <?php $indicators .= '<button type="button" data-bs-target="#alecaddd-carousel" data-bs-slide-to="' . $count . '" class="' . ($count === 0 ? 'active' : '') . '" aria-current="true" aria-label="Slide ' . ($count + 1) . '"></button>' ?>

      <?php endwhile;

        endif;

        wp_reset_postdata();

        $count++;
      endforeach;

      ?>

      <div class="carousel-indicators">
        <?php echo $indicators; ?>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#alecaddd-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#alecaddd-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

</div>

<div class="row">

  <div class="col-xs-12 col-sm-8">

    <?php
    if (have_posts()):

      while (have_posts()): the_post(); ?>

        <?php get_template_part('content', get_post_format()); ?>

    <?php endwhile;

    endif;

    // Print other 2 posts not the first one
    /*
      $args = array(
        'type' => 'post',
        'posts_per_page' => 2,
        'offset' => 1,

      );
      $lastBlog = new WP_Query($args);

      if ($lastBlog->have_posts()):

        while ($lastBlog->have_posts()): $lastBlog->the_post(); ?>

          <?php get_template_part('content', get_post_format()); ?>

        <?php endwhile;

      endif;

      wp_reset_postdata();
    */

    // Print only tutorials
    /*
      $lastBlog = new WP_Query('type=post&posts_per_page=-1&category_name=tutorials');
      
      if ($lastBlog->have_posts()):

        while ($lastBlog->have_posts()): $lastBlog->the_post(); ?>

          <?php get_template_part('content', get_post_format()); ?>

        <?php endwhile;

      endif;

      wp_reset_postdata();
    */
    ?>

  </div>

  <div class="col-xs-12 col-sm-4">

    <?php get_sidebar(); ?>

  </div>

</div>

<?php get_footer(); ?>