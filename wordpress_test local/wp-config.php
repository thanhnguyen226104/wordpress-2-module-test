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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_testlocal' );

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
define( 'AUTH_KEY',         'nG_o%/1e<&1PAW>0lAspM9HMeePQG{->;F:1a^/gT@w-?q):Ad!a<FY`a]YeGadr' );
define( 'SECURE_AUTH_KEY',  'n%DeE[n%P~9Ww-wkNRhNF#Ycvil&%5N-372me7IE8]dA.mN=.PoF>iNHy6+_lIg0' );
define( 'LOGGED_IN_KEY',    'B}=y+^s]q_eHM4%k0L!9&g,W-Dh?LiIl-uc$`G:!_/:f{&u$JO^.15tIiM+9#2s&' );
define( 'NONCE_KEY',        'x$3Z#h-!B]2L[>1RQ%[nIh46l!s 4-{e]`<.f)[.$,!S4f#j:b2<y|oyhWzzj*[b' );
define( 'AUTH_SALT',        'SDjQ7O9wzH^rIMNG7R%iykn5)MPbz 3fDB;Duon*^fekEjAy(&ERl0A#&=%nNv1H' );
define( 'SECURE_AUTH_SALT', 'qH;TMxP|4e5}@Q<CUd3_JSCdR#m:?w=g [:;ggpMZCR9(m4OHMYbBsk z{a)@1A*' );
define( 'LOGGED_IN_SALT',   'mz<cnDyODk698%ZX/ AVW+~rB00,~. w#EKh<W5^JD.3p.NA^csZ$!(>B8kJ:XK`' );
define( 'NONCE_SALT',       'mzbaJP;V7B~zL-b`_>/q 0wP! 5rX+FYd8r<7*}!tY{9HnQsvtWzK&B@7?JqI@[m' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
