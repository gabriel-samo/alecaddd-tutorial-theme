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

## Lesson 4:

- Fixed asset loading in functions.php:
  - Changed ```get_stylesheet_uri()``` to ```get_template_directory_uri()```
  - Fixed JS file handle from ```'customscript'``` to ```'customsjs'```

- Enhanced header.php:
  - Implemented conditional body classes:
    - Replaced static ```<body>``` tag with dynamic WordPress body classes
    - Added custom conditional logic using ```is_front_page()```:
      ```php
      if( is_front_page() ):
          $alecaddd_classes = array( 'alecaddd-class', 'my-class' );
      else:
          $alecaddd_classes = array( 'not-alecaddd-class' );
      endif;
      ```
    - Implementation details:
      - Front page receives two custom classes: 'alecaddd-class' and 'my-class'
      - Other pages receive 'not-alecaddd-class'
      - Uses ```body_class($alecaddd_classes)``` to merge custom classes with WordPress defaults
    
    - Key functions used:
      - ```is_front_page()```: WordPress conditional tag to check if current page is front page
      - ```body_class()```: Core WordPress function that:
        - Accepts array of custom classes as parameter
        - Automatically adds WordPress default classes
        - Outputs properly formatted class attribute
    
    - Benefits:
      - Allows different styling for front page vs other pages
      - Maintains WordPress standard body classes
      - Makes theme more dynamic and maintainable
      - Improved code organization with conditional logic

- Improved index.php:
  - Added WordPress loop structure:
    - ```have_posts()```: Checks if there are posts to display
    - ```the_post()```: Sets up each post's data
    - Example structure:
      ```php
      if(have_posts()) :
          while(have_posts()) : the_post();
              // Post content here
          endwhile;
      endif;
      ```
  
  - Added post information display using WordPress template tags:
    - ```the_title()```: Displays the post title
    - ```the_date()```: Shows the post's publication date
    - ```the_time()```: Shows the post's publication time
    - ```the_category()```: Lists the post's categories
    - ```the_content()```: Displays the full post content
    - ```the_excerpt()```: Shows a summary of the post
  

### [Tutorial](https://www.youtube.com/watch?v=pJ4NTBdvyj4&list=PLriKzYyLb28nUFbe0Y9d-19uVkOnhYxFE)

## Lesson 5:

- Added page-notitle.php template that can be used in the backend to give a page a custom template.

- ```the_time()``` function is used to display the post's publication time. It takes a format string as an argument.
  - ```'F j, Y'```: Month Day, Year
  - ```'H:i'```: Hour Minute

### [Tutorial](https://www.youtube.com/watch?v=aUxDz7vXilQ&list=PLriKzYyLb28nUFbe0Y9d-19uVkOnhYxFE)