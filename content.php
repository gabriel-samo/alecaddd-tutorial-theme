<h1 class="post-title"><?php the_title(); ?></h1>
<div class="thumbnail-img"><?php the_post_thumbnail('medium'); ?></div>
<div class="post-date">
  Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('H:i'); ?>, in <?php the_category(); ?>
</div>
<div class="post-content"><?php the_content(); ?></div>
<hr />