<?php
function lapizzeria_ajustes(){
  add_menu_page( 'La Pizzeria', 'La Pizzeria Ajustes', 'administrator', 'lapizzeria_ajustes', 'lapizzeria_opciones', '', 20 );
  add_submenu_page( 'lapizzeria_ajustes', 'Reservaciones', 'Reservaciones', 'administrator', 'lapizzeria_reservaciones', 'lapizzeria_reservaciones');

  //llamar al registro de las opciones del tema

  add_action('admin_init', 'lapizzeria_registrar_opciones');
}
add_action( 'admin_menu', 'lapizzeria_ajustes' );

function lapizzeria_registrar_opciones(){
  //registrar una por campo
  register_setting('lapizzeria_opciones_grupo', 'lapizzeria_direccion');
  register_setting('lapizzeria_opciones_grupo', 'lapizzeria_telefono ');
}
function lapizzeria_opciones(){
?>
  <div class="wrap">
    <h1>Ajustes la pizzeria</h1>
    <form action="options.php" method="post">
      <?php settings_fields( 'lapizzeria_opciones_grupo' ); ?>
      <?php do_settings_sections( 'lapizzeria_opciones_grupo' ); ?>
      <table class="form-table">
        <tr valing="top">
          <th scope="row">Direccion</th>
          <td>
            <input type="text" name="lapizzeria_direccion" value="<?php echo esc_attr( get_option('lapizzeria_direccion')); ?>">
          </td>
        </tr>
        <tr valing="top">
          <th scope="row">Telefono</th>
          <td>
            <input type="text" name="lapizzeria_telefono" value="<?php echo esc_attr( get_option('lapizzeria_telefono')); ?>">
          </td>
        </tr>
      </table>
      <?php submit_button(); ?>
    </form>
<?php
}

function lapizzeria_reservaciones(){
?>
  <div class="wrap">
    <h1>Reservaciones</h1>
    <table class="wp-list-table widefat striped">
      <thead>
        <tr>
          <th class="manage-column">ID</th>
          <th class="manage-column">Nombre</th>
          <th class="manage-column">Fecha de reserva</th>
          <th class="manage-column">Correo</th>
          <th class="manage-column">Celular</th>
          <th class="manage-column">Mensaje</th>
        </tr>
      </thead>
      <tbody>
        <?php global $wpdb;
              $reservaciones = $wpdb->prefix . 'reservaciones';
              $registros = $wpdb->get_results("SELECT * FROM $reservaciones ", ARRAY_A);
              foreach ($registros as $registro) {?>
                <tr>
                  <td><?php echo $registro['id']; ?></td>
                  <td><?php echo $registro['nombre']; ?></td>
                  <td><?php echo $registro['fecha']; ?></td>
                  <td><?php echo $registro['correo']; ?></td>
                  <td><?php echo $registro['celular']; ?></td>
                  <td><?php echo $registro['mensaje']; ?></td>
                </tr>
              <?php } ?>
      </tbody>
    </table>
  </div>
  <?php
}
