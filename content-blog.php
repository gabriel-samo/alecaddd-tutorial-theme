<div class="col-<?php echo $args['column']; ?> <?php echo $args['class']; ?>">

  <?php if( has_post_thumbnail() ): 
    $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
  endif; ?>

  <div class="blog-element" style="background-image: url(<?php echo $urlImg; ?>);">
    <div class="blog-element-content">
      <?php the_title(sprintf('<h3 class="entry-title"><a href="%s">', esc_url(get_permalink())), '</a></h3>'); ?>
      <small><?php the_category(' ')?></small>
    </div>
  </div>

</div>
