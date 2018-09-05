<?php
  function lapizzeria_database(){
    global $wpdb;
    global $lapizzeria_dbversion;
     $lapizzeria_dbversion = '1.0';

    $tabla = $wpdb->prefix . 'reservaciones';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $tabla (
      id mediumint(9) NOT NULL AUTO_INCREMENT,
      nombre varchar(50) NOT NULL,
      fecha datetime NOT NULL,
      correo varchar(50) DEFAULT '' NOT NULL,
      celular varchar(10) NOT NULL,
      mensaje longtext NOT NULL,
      PRIMARY KEY (id)
    ) $charset_collate; ";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

    dbDelta($sql);

    add_option('lapizzeria_dbversion', $lapizzeria_dbversion);

    //ACTUALIZACION EN CASO DE SER NECESARIO

    $version_actual = get_option('lapizzeria_dbversion');

    if($lapizzeria_dbversion != $version_actual){
      $tabla = $wpdb->prefix . 'reservaciones';

      $sql = "CREATE TABLE $tabla (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        nombre varchar(50) NOT NULL,
        fecha datetime NOT NULL,
        correo varchar(50) DEFAULT '' NOT NULL,
        celular varchar(10) NOT NULL,
        mensaje longtext NOT NULL,
        PRIMARY KEY (id)
      ) $charset_collate; ";

      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

      dbDelta($sql);

      update_option('lapizzeria_dbversion' , $lapizzeria_dbversion);
    }
  }

  add_action('after_setup_theme', 'lapizzeria_database');

  function lapizzeriadb_revisar(){
      global $lapizzeria_dbversion;
      if(get_site_option('lapizzeria_dbversion') != $lapizzeria_dbversion) {
        lapizzeria_database();
      }
  }

add_action('plugins_loaded', 'lapizzeriadb_revisar');
