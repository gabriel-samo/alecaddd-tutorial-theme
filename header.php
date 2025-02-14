<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alecaddd Tutorial Theme</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<?php 

  if( is_front_page() ):
    $alecaddd_classes = array( 'alecaddd-class', 'my-class' );
  else:
    $alecaddd_classes = array( 'not-alecaddd-class' );
  endif;

?>

<body <?php body_class($alecaddd_classes); ?>>

  <?php wp_nav_menu(array('theme_location' => 'primary')); ?>

  <!-- <img src="<?php  ?>" height="<?php  ?>" width="<?php  ?>" alt="">  -->
  <img src="<?php header_image(); ?>" height="150px" width="<?php get_custom_header()->width; ?>" alt="" style="display: block; margin: 0 auto;"> 