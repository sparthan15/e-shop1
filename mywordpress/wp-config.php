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
define( 'DB_NAME', 'mywordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '/.MQ&-rR[w8lRk([91F2`x0-fmdgEG4^ q[MOe`%ybPi)b^`tfDf<%y0}+pap g/' );
define( 'SECURE_AUTH_KEY',  'P}K$S;j}Nq>]F2;p2gj dB}evBV?_S3=|Lb0%mk:8Ek0.=j&{fN[$wZm -#~a&zj' );
define( 'LOGGED_IN_KEY',    'D8+8ngRh&tfz+X5pEa3p%V&9! y5?jE_p9W<y_#tOJ2Up.>F/,%sJBXe=k2 /- {' );
define( 'NONCE_KEY',        'Rg0h{~c@>]gztS0*DhJ)wHZ o@=USf%H5g8 aA;q-C,`n*ea8.XGCm8J$J/qak&~' );
define( 'AUTH_SALT',        ',o{rm=._)jr^4k#7t1eCT>^#[| h!AKzA<h4vk:E/h(nTi)_4f1InP0%&nm*yvV4' );
define( 'SECURE_AUTH_SALT', 'F2G4;On;=+(cGWs^nln9udT_!+iqk-2cQGod%RzYUP2y%H`{7gvp1qU*+wt#J<J~' );
define( 'LOGGED_IN_SALT',   '@^njMNgWe?[K2>h+@7uIz^4hTgC($ca#:~nMh4@=[Av`L5V))6aaV+uyP&brdVq%' );
define( 'NONCE_SALT',       'xn$mtq~3?Hh_ioJt7-C2Dpmn%>~0QLUl?BP[/*lgi1<^Xb0s5OK.Nt &Fd1|0cC1' );

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
