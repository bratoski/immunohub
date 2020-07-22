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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbimmunohub' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Br@toski727' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3dtcQoO<7Ln=e*DeX0RrT0y+5|;[^6eRecM11;dOZ;HpDIgLDt&W$BTrr;e[Fgsy' );
define( 'SECURE_AUTH_KEY',  '0cyTRc[W*7#]ieh1a.dn7=2U(;ramQ=H)B4z*{Zf52tcg^5@2+@de[gB~F94QV/B' );
define( 'LOGGED_IN_KEY',    'Fxz4%_e]6S/Rjm.MNreE(Q7PfcxkfUsxYvL)t*>jdW1<F!qid]Zaov@$<Og$YN6u' );
define( 'NONCE_KEY',        '?qKU#_*`RUmOMuK;Hr*y!qmtnP%cL>ba4].&sH@v07;A=z%tp>uynpd{Xm8V^U~T' );
define( 'AUTH_SALT',        'q)d}em?Yb:&?8i$Urt lt,p>jNx5-0h^8>L.@~TEy/I`H(rV^Pv?R2?zDV{tO?!E' );
define( 'SECURE_AUTH_SALT', '3a<;bg7pIzg2D2%8Mp[[Ls;g%px>KZNW5:@}j/Pl2+<$K7gfkWQ?@n[tMdHIs#v<' );
define( 'LOGGED_IN_SALT',   'D/Yk8C>vmaId$v0BqBdPBwI9/GuJ2sCTC[BxTBMxb<I3Mpw`>yM)AF*pnz$j~XHu' );
define( 'NONCE_SALT',       'a!_7P>PP>Ufn}X6W!whW,,K:lpvuvqlYJ%XR83[-UW&l=*)9l[-=E|H!PWFL!^hW' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
