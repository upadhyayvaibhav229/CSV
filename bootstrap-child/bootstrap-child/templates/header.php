<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      
      <!-- Logo -->
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
        <?php bloginfo('name'); ?>
      </a>

      <!-- Toggle Button (Mobile) -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- WordPress Dynamic Menu -->
      <div class="collapse navbar-collapse" id="mainNav">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'primary',   // register this in functions.php
            'container'      => false,
            'menu_class'     => 'navbar-nav ms-auto mb-2 mb-lg-0',
            'fallback_cb'    => false,
          ));
        ?>
      </div>

    </div>
  </nav>
</header>
