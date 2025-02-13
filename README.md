# Alecaddd Tutorial Theme

This is a WordPress theme following the tutorial by Alecaddd.

## Lesson 1:
- Create style.css for theme details to show in the backend

- Create index.php that is the main page of the theme

- Create header.php for theme header

- Create footer.php for theme footer

- Add header and footer to index.php

### [Tutorial](https://www.youtube.com/watch?v=oTRZYnYQlmo&list=PLriKzYyLb28nUFbe0Y9d-19uVkOnhYxFE)

## Lesson 2:
- Create functions.php for enqueue styles and scripts

- Create css/ and js/ folders and add first style and script files (naming convention is [name-of-the-theme].[extension])

- Edit header.php to enqueue styles 
  ``` php
  <?php wp_head(); ?>
  ``` 

- Edit footer.php to enqueue scripts 
  ``` php
  <?php wp_footer(); ?>
  ``` 

### [Tutorial](https://www.youtube.com/watch?v=NF6r3Ejpris&list=PLriKzYyLb28nUFbe0Y9d-19uVkOnhYxFE)

## Lesson 3:

- add theme support for menus
  ``` php
  function [NAME_OF_THE_THEME]_setup() {
    add_theme_support( 'menus' );
  }
  add_action( 'after_setup_theme', '[NAME_OF_THE_THEME]_setup' );
  ```

- ``` add_action() ``` function is used to add a function to a specific action
  - ``` 'after_setup_theme' ``` action is used to add theme-specific setup functions (runs early, before init)
  - ``` 'init' ``` action is used to add functionality that needs WordPress to be fully loaded

- ``` register_nav_menu() ``` function is used to register a navigation menu
  - first argument is the menu location (primary, secondary, etc.)
  - second argument is the menu name (Primary Header Navigation, Footer Navigation, etc.)

- ``` wp_nav_menu() ``` function is used to display a navigation menu
  - ``` array( 'theme_location' => 'primary' ) ``` we added to the ```header.php``` to display the primary menu
  - ``` array( 'theme_location' => 'secondary' ) ``` we added to the ```footer.php``` to display the secondary menu


### [Tutorial](https://www.youtube.com/watch?v=Sz0z-Gyp3nA&list=PLriKzYyLb28nUFbe0Y9d-19uVkOnhYxFE)


