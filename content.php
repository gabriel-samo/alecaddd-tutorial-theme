<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="post-title">
    <?php the_title(sprintf('<h3 class="entry-title"><a href="%s">', esc_url(get_permalink())), '</a></h3>'); ?>
    <div class="post-date">
      Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('H:i'); ?>, in <?php the_category(); ?>
    </div>
  </header>

  <div class="row">

    <?php if( has_post_thumbnail() ): ?>

      <div class="col-xs-12 col-sm-4">

        <div class="thumbnail-img"><?php the_post_thumbnail('medium'); ?></div>

      </div>
      <div class="col-xs-12 col-sm-8 post-content">

        <?php the_content(); ?>

			</div>

    <?php else: ?>

      <div class="col-xs-12 col-sm-8 post-content">

        <?php the_content(); ?>

			</div>

    <?php endif; ?>

  </div>

</article>

<hr />