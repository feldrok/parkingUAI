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
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', '7YDbN^]Vh=e{dCheD1Cc`2i3eAzV| $QbfLuM<Q.&#d]a#VOk}%GAzkj<x*.g!Zr');
define('SECURE_AUTH_KEY', '.h mN:,8-U#aS3JP?P5kPZK #;|Y:1[W6a{U_`EiaBexoY<{vq;UHj._rMDOvqO.');
define('LOGGED_IN_KEY', 'X@`s3]PX)Hs).nL00k@mN+iDV4A<mywsM#_v{4v5W:7,9+vK0Ok(Q?/$w`[]I9K4');
define('NONCE_KEY', 'AzItWb8oH:&4UDEvZE4D5f2BB6cr{OIz=sLvI/zJR^oy6Gh`Z)xI[$2Gy${{[F3$');
define('AUTH_SALT', '59v#CXE:g-czz8N?o%e<O[`bc.TwG+hFsv;{a_,@WxFNe9wz~|{6|y/VX$ _E4.>');
define('SECURE_AUTH_SALT', '%g+HD)Q$1QFNbwsK>Cp>1QSepqK~`c!p<>|cz()pF<-?/^d]1Xt{o/ciiN}oKZ3#');
define('LOGGED_IN_SALT', 'V!:_`kc05*GzD*;U(hBioM~7jx[vJQ-+QP~>IYC=N$s!u*wi5;jG;?Gr9l}L<{F&');
define('NONCE_SALT', '5x}SL$-),:Y`9-?2_s,?U17!o8xtFrXA&m5^)4%!0.B4I,;2Rh2CPniX)$b2T*K&');

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
