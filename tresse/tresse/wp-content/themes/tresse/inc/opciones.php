<?php 
  function tresse_ajustes(){
    add_menu_page('Tresse', 'Tresse ajustes', 'administrator', 'tresse_ajustes', 'tresse_opciones', '', 20);

    //llamar al registro de las opciones de nuestro tema
    add_action('admin_init', 'tresse_registrar_opciones');
  }

  add_action('admin_menu', 'tresse_ajustes');
  
  function tresse_registrar_opciones(){
    //registrar opciones, una por campo
    register_setting('tresse_opciones_grupo', 'tresse_mail');
    register_setting('tresse_opciones_grupo', 'tresse_telefono');
    register_setting('tresse_opciones_grupo', 'tresse_ciudad');
    register_setting('tresse_opciones_grupo', 'tresse_direccion');

    register_setting('tresse_opciones_gmaps', 'tresse_gmap_latitud');
    register_setting('tresse_opciones_gmaps', 'tresse_gmap_longitud');
    register_setting('tresse_opciones_gmaps', 'tresse_gmap_zoom');
    register_setting('tresse_opciones_gmaps', 'tresse_gmap_apikey');
  }

  function tresse_opciones(){
    ?>
    <div class="wrap">
      <h1>Ajustes tresse</h1>

      <?php 
        if(isset($_GET['tab'])):
          $active_tab = $_GET['tab'];
        endif;
       ?>
      <h2 class="nav-tab-wrapper">
        <a href="?page=tresse_ajustes&tab=tema" class="nav-tab <?php echo $active_tab == 'tema' ? 'nav-tab-active' : '' ?>">Ajustes</a>
        <a href="?page=tresse_ajustes&tab=gmaps" class="nav-tab <?php echo $active_tab == 'gmaps' ? 'nav-tab-active' : '' ?>">Google maps</a>
      </h2>
      <form action="options.php" method="post">

        <?php if($active_tab == 'tema'): ?>
          <?php settings_fields( 'tresse_opciones_grupo' ); ?>
          <?php do_settings_sections( 'tresse_opciones_grupo' ); ?>

          <table class="form-table">
            <tr valign="top">
              <th scope="row">Mail contacto</th>
              <td><input type="text" name="tresse_mail" value="<?php echo esc_attr( get_option('tresse_mail') ); ?>"></td>
            </tr>
            <tr valign="top">
              <th scope="row">Teléfono</th>
              <td><input type="text" name="tresse_telefono" value="<?php echo esc_attr( get_option('tresse_telefono') ); ?>"></td>
            </tr>
            <tr valign="top">
              <th scope="row">Ciudad</th>
              <td><input type="text" name="tresse_ciudad" value="<?php echo esc_attr( get_option('tresse_ciudad') ); ?>"></td>
            </tr>
            <tr valign="top">
              <th scope="row">Dirección</th>
              <td><input type="text" name="tresse_direccion" value="<?php echo esc_attr( get_option('tresse_direccion') ); ?>"></td>
            </tr>
          </table>
        
        <?php else: ?>
          <h2>Google Maps</h2>
          <?php settings_fields( 'tresse_opciones_gmaps' ); ?>
          <?php do_settings_sections( 'tresse_opciones_gmaps' ); ?>
          <table class="form-table">
            <tr valign="top">
              <th scope="row">Latitud</th>
              <td><input type="text" name="tresse_gmap_latitud" value="<?php echo esc_attr( get_option('tresse_gmap_latitud') ); ?>"></td>
            </tr>
            <tr valign="top">
              <th scope="row">Longitud</th>
              <td><input type="text" name="tresse_gmap_longitud" value="<?php echo esc_attr( get_option('tresse_gmap_longitud') ); ?>"></td>
            </tr>
            <tr valign="top">
              <th scope="row">Zoom</th>
              <td><input type="number" name="tresse_gmap_zoom" value="<?php echo esc_attr( get_option('tresse_gmap_zoom') ); ?>"></td>
            </tr>
            <tr valign="top">
              <th scope="row">API Key</th>
              <td><input type="text" name="tresse_gmap_apikey" value="<?php echo esc_attr( get_option('tresse_gmap_apikey') ); ?>"></td>
            </tr>
          </table>
        <?php endif; ?>
        <?php submit_button(); ?>
      </form>
    </div>
    <?php
  }

 ?>