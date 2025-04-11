<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*D0qmjttpz1$i$a6&m+)aiWB[NQF:zfzRPM2F>;P>-6cD2-HoCY<Aa-*a=i5hukO' );
define( 'SECURE_AUTH_KEY',  'n p2Z&D?-LNl-*XfK>WGc$obvv6bT*$Ju60doBJO2,?2fIuB 1}z1cc2+F.gF/Oc' );
define( 'LOGGED_IN_KEY',    '[B1joX[v_B7dROzea`G>iF0?l:R{KgO^]lJ}=Py`i^&O5EKQHY@FL/L]PPcfTzOi' );
define( 'NONCE_KEY',        'MJxBV]LxBFz7TaPL84W&k>n;%pGYBD3M(oOfP~Jry|l3Tjk}(Ls2h;wk#e3+T~PV' );
define( 'AUTH_SALT',        '|D%F#T*E;aSj+$ .06oL+ :okz.qv48kT_SzVgROm-{3&.e$(A_F,)y42Kf-Snh9' );
define( 'SECURE_AUTH_SALT', '^{yQ45Ob$~!sHiH&Srs4hC]eTAE~|k-N4MPXRFc2!m`-sM/Rn,Y#3&wwL^v+2P**' );
define( 'LOGGED_IN_SALT',   ')_momYi$+XUORt|y0A>~yb<%#Uesh/*Z9]GXb]_GrO0t6]G#Jbj_*^$kMyx! T@d' );
define( 'NONCE_SALT',       'cZJ>.<XHT@7oTls?Itw#eT0xIl[)w[g.H|A_q&8N5:*K>Vx[N<rT{DWOfu]B+pMk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
