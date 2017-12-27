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
define('DB_NAME', 'craft_wp');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'Admin123/');

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
define('AUTH_KEY', 'Cx<n8As8z|BOUkw{9)U%JYQY;:2}<3#nDkBGZL_QQP9aB&gLcj{>KAeO%,e!u`g`');
define('SECURE_AUTH_KEY', 'Ej|Pru]~:j[VereQ{4qKzW~^ka5wD9~fjFF0+R_)2k8Kj~WUSz:q&f4H>9G!?~nL');
define('LOGGED_IN_KEY', 'STowncgPT$@M{jdgkY!sFRD0W8:$^7s?:-n$M)B.k.n*$9xkG0J6|pU|gZNH^Q1J');
define('NONCE_KEY', 'GJ~k@S0oab6d|n}j[zFh69_.h]xTFdvR6w3jMo{W]ENfL|Xuqk Z%|^5F3Z=K~Bu');
define('AUTH_SALT', 'k}P_SfKdsUZJX#?ypM40:aMclQX2y?Bnw<f=C<L0U.Sh6~aZ43)o2OJ!<c;pgrcG');
define('SECURE_AUTH_SALT', 'NXYm(:MBzn3|7bP.>7:R|f#F-%nc;#;Z;fNBcRuc?_M+CI-FXu(yLW3@4j#&4q_k');
define('LOGGED_IN_SALT', 'p_hCU:H8qq}-0%3S.JU0Pv16Ze_0_z@<n7M }B*@xb_aD/1:43)%3JBV_l94Sm;E');
define('NONCE_SALT', 'op*E|gCbL,(p:CWNmyqS58JC~mUWC#LdAA7s^3x5JoN267ArL@Xjt^:^w_xk6muh');

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