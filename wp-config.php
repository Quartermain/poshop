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
define('DB_NAME', 'poshop');

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
define('AUTH_KEY',         '@L3@t*U^+l9;~V`,}GlqwP?Eg%D7O#bL]_!DVg4@+Kn^cj5+U]YW9P IEhdMr:*a');
define('SECURE_AUTH_KEY',  'l:VFCe4G[`QF_O}dA#n|B6?n~WH^MG=}h9Ma4b]=M`G]q||5ZNP%0)BU~:M&)Db=');
define('LOGGED_IN_KEY',    '^:TEpY@}_9q+AV{QeFWJ|86S=Re9[{exS}fUhp(IaZ26)y0Ty5r?p)pA%q!n#g@F');
define('NONCE_KEY',        'i<2p04!H4xT}Ar3$D^<?EB%uU hzXiiCgs*f({aKY[)/es[#x*DmdK-[Q%(OPK,O');
define('AUTH_SALT',        'MLaHdPAsi4Vah(URvF[t&Y$jzvT0:oY4kA~`NQ/T~eB/oN2_8C7I;gOMH7N4_b1O');
define('SECURE_AUTH_SALT', '1&TIyW3xvs]a_wq=1h282<SoVjZTL#uVi?8.xFRynV+z_2e#Uk`hT/d;l2I[[%|E');
define('LOGGED_IN_SALT',   'G[(2e3U81GU|j|$B?0l]p=K*M$^]hII<FEH@+2R$CpQ/@=1|gRz>dI{[Vp(lC-(A');
define('NONCE_SALT',       'l5<1m/ {{3?pGU|Af$8I}|_1~$Lacsb:H%BpdgSZn1WM2~iTk,>,Mz~LezBCn^Ij');

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
