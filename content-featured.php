<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if( has_post_thumbnail() ): ?>

    <div class="thumbnail-img"><?php the_post_thumbnail('medium'); ?></div>

  <?php endif; ?>

  <?php the_title(sprintf('<h3 class="entry-title"><a href="%s">', esc_url(get_permalink())), '</a></h3>'); ?>

</article>
