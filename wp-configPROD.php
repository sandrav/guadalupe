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
define('DB_NAME', 'mariaguadalupe');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'mariaguadalupe');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'Fund@c1oN');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'mariaguadalupe.db.8742877.hostedresource.com');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'GQR.^j.[K)CBEAuv<1k+.7VkAdO{o-3G7M+3qZ#vFdUjq8T|2=[CMUIfKV}TZ,GF'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '$nl|DSPk8.]B%<^6]D(yX8Tg!`-/V2+!?zxxu+%1rm7q@Z(8xf@yl]+ioY:7`tLq'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'k|{5pk$8A3M/-_m`n8C8i R|j1{|#Gpzsor9M2|2tCGGgONR!{S}%<M:QInxVMs9'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '4$#X8>ZxQm9{Jz}cN4+82Moup%i.~,& qY4Frb+-&v0Ol%X3r6oj#`hv&Y>+hBi!'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', '@Fxyn:u)~|dX&4@2n4]V_(Gn1jWQ3lo;CgC2y,R-1aQscMV/v|+]K_*NJ,Rd4=*F'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'H_8QoC1{>QUdXn~xYr55me0+<q:T ,6Ccpj((aoy}ecuJ1l3T}<dPyr@`C{r(a4m'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'M;3?c4(>K_e4LrXS%^MB*:OyNvN.?nJ{:nl%d7LH#E@?/g$!zP14R?2K8x>IcC:Q'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'nLaJ$z6a0i:Xj`v#S*`J.K@`eR!F$WV3iREki@krx0GRwGx5%2(z|9-{+KPI=($S'); // Cambia esto por tu frase aleatoria.
/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define ('WPLANG', 'es_ES');

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
?>
