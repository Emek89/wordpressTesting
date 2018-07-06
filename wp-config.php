<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mN_*!D1dxm2[/m!T%*9ADAS(:hTQ(FAHu[1y*N?OXFo}e5u:>*kJPi>u aGxs%}3');
define('SECURE_AUTH_KEY',  '>xnLRduHvCK%^-FQgI10i@!~8#k]bV=JbjB)=wq|J+>(dEL:i/A?4~4ta)8.7{F*');
define('LOGGED_IN_KEY',    ':;:}=2CHj.|OggFc?/dtS^K@YylZ!qD%EG}Q2}_7ESA},V&3EW_bOx?c$Mx~@1eX');
define('NONCE_KEY',        'oNp14bDV*a~{=MCuk!bVns B=WL]nyp25b:VbuPv^EAQO#CdG&QQPD c7!?%n3/W');
define('AUTH_SALT',        'noEZ8CWCDKaioz&5H<1^ozv<F=D20=A*sU-)VuplN*(5E>O}X6*K4n7$@FraE?0v');
define('SECURE_AUTH_SALT', 'YTC%mybrLb{cV~<MqR0VUznKJ`aWOMMTW^[~Yh~twg=sPl)Xy9HEsJpm(>xA^0qr');
define('LOGGED_IN_SALT',   'vjH,MK?=W_iHyJa_Qv@/)<I(/+M.G9KNq%!ar]pi6+h9m/JNLCVb*Zp[RkJw vF6');
define('NONCE_SALT',       '](B0V+$>$& PHOp^D@I%zFcz#aj!47MZAqO1{W0lHXyMcZVtIyH%`!*QmL%OMr>U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
