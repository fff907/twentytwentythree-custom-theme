<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header class="site-header" style="text-align: center; padding: 2rem 0;">
    <h1 class="site-title" style="margin: 0;">
      <a href="<?php echo esc_url(home_url('/')); ?>" style="text-decoration: none; color: #333;">
        <?php bloginfo('name'); ?>
      </a>
    </h1>
  </header>
