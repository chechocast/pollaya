
  <footer>
    <?php
      $args = array(
          'theme_location' => 'header-menu',
          'container' => 'nav',
          'after' => '<span class="separador"> * </span>',
      );
      wp_nav_menu( $agrs );

     ?>
     <p><?php echo esc_html( get_option('lapizzeria_direccion')); ?></p>
     <p><?php echo esc_html( get_option('lapizzeria_telefono')); ?></p>
  </footer>

  <?php wp_footer();  ?>
</body>
</html>
