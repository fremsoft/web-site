<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>
  </head>
  <body>
  <header>
      <h1><?php bloginfo( 'name' ); ?></h1>
      <h2><?php bloginfo( 'description' ); ?></h2>
    </header>
    <nav>
      <?php 
wp_nav_menu ( 
  array ('theme_location' => 'my-custom-menu',
         'container_class' => 'custom-menu-class')); ?>
    </nav>
