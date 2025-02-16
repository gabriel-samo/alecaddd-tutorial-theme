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

if (is_front_page()):
  $alecaddd_classes = array('alecaddd-class', 'my-class');
else:
  $alecaddd_classes = array('not-alecaddd-class');
endif;

?>

<body <?php body_class($alecaddd_classes); ?>>

  <div class="container">
    <div class="row">
      <div class="col-xs-12">

        <nav class="navbar navbar-expand-lg rounded-3 menu-main-navigation-container">
          <div class="container-fluid">
            <a class="navbar-brand text-white" href="<?php echo home_url(); ?>">Alecaddd Tutorial Theme</a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end px-4" id="navbarSupportedContent">
              <?php wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'nav navbar-nav navbar-right',
              )); ?>
            </div>
          </div>
        </nav>
      
      </div>
    </div>

  <!-- <img src="<?php  ?>" height="<?php  ?>" width="<?php  ?>" alt="">  -->
  <?php if (has_header_image()): ?>
    <img src="<?php header_image(); ?>" width="<?php //get_custom_header()->width; ?>" alt="header image" id="header-image">
  <?php endif; ?>