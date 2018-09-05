<!DOCTYPE html>
<html lang="  " dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title></title>

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="header">
      <div class="content">
        <div class="logo">
          <a href="<?php echo esc_url( home_url('/') ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
          </a>
        </div><!--logo-->
        <div class="info-header">
          <div class="redes">
            <?php
              $args = array(
                'theme_location' => 'social-menu',
                'container' => 'nav',
                'container_class' => 'social',
                'container_id' => 'social',
                'link_before' => '<span class="sr-text">',
                'link_after' => '</span>',
              );
              wp_nav_menu($args);

             ?>
          </div>
        </div><!--redes-->
        <div class="direccion">
          <p><?php echo esc_html( get_option('lapizzeria_direccion')); ?></p>
          <p><?php echo esc_html( get_option('lapizzeria_telefono')); ?></p>
        </div>
      </div><!--contenedor -->
    </header>
    <nav class="menu">
      <div class="main-menu">
        <a href="#">menu</a>
      </div>
      <div class="content navegacion">
        <?php
          $args = array(
              'theme_location' => 'header-menu',
              'container' => 'nav',
              'container_class' => 'menu-sitio',
          );
          wp_nav_menu( $agrs );

         ?>
      </div>
    </nav>
