<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo(''); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <!-- container -->
  <div class="container">

  <!-- site-header -->
  <header class="site-header">
    <h1>
      <a href="<?php echo home_url(); ?>">  
        <?php bloginfo('name'); ?>
      </a>
    </h1>

    <h5><?php bloginfo('description'); ?>
  
    <?php if (is_page('portfolio')) { ?>
      - Thank you for viewing my work
    <?php }?>
  </h5>

    <!-- Header Navigation -->
    <nav class="site-nav">

      <?php $args = array(
        'theme_location' => 'primary'
      ); ?>

      <?php wp_nav_menu($args); ?>
    </nav>

  </header>
  <!-- /site-header -->
