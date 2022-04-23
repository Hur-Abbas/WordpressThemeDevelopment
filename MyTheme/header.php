<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_the_title();?> |
        <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
        
     <!--  <header>
      </header> -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#"><?php bloginfo( 'name' ) ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <?php
            wp_nav_menu(
                 array( 
                     'theme_location' => 'main-menu',
                     'menu_class' => 'main-menu'
                     
                     ) 
                );

      ?>
      <div class="search-form">
      <?php get_search_form()?>
    </div>
    </div>
  </div>
</nav>
