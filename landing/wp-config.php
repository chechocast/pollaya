<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'lapizzeria');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'R|.7Y](>T#<_MX(-|iXat-M{P<]P}?T(Lq_I8%eDAI0f!}*IASye#!5d!`=Z^`t}');
define('SECURE_AUTH_KEY', 'tEc/v_H{R5w@VrfcdVBO~oUI,+jhm;K,`9kc;S*LlOdK9dA~wOHdD?#j~C<P)k13');
define('LOGGED_IN_KEY', 'oSGLHD5|gh/@Ub/sSs S= aBa~]^Ah+xcQFL@ny/iK.&`/,24LK${x3vF+Y(ix4P');
define('NONCE_KEY', '6%74fNU^J,{7X4MJ;@5=*7MJ%Bt>a;nW8!K0wTN(^?o0>ZsCF mC**3<+ZNQekAb');
define('AUTH_SALT', 'OFXpVgnGMrQ3M];<,6~M}UGiCCAI*W!L(X$D_i6au-C68Dy/c3W #G1p)Q0{pZCV');
define('SECURE_AUTH_SALT', 'ZH-5N<4&},t*;/+0l+}[<q:`JM_Q}9SJV|k.L!Dr#6:bY6XXZY[<}-w3syJ&AnNl');
define('LOGGED_IN_SALT', 'C[9*g/9V5BHW%&,ceG|0Ue[bTr(Z{%db):*!>S@5zmZ)W48ON/c`mP|A=%(@=&11');
define('NONCE_SALT', 'U;=BtnikH?[-qk4?-.=6}q3000_UjJ_V@X~2:1$`Q&[jn+rxh:(EC>p$JDr9nQmE');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

