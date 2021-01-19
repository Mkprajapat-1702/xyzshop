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
define( 'DB_NAME', 'xyzshop-db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '.Rta5o0mRvq+2 bsm9K*`.OYs!(YJ4%]bE&!*;jte[RekYcZgP0R9^UuQc!7^[;x' );
define( 'SECURE_AUTH_KEY',  'SwI.agunZa7]<qc]|#sE62y>!fYycsXd z =}V1r8q@rdU* $BMyLZ0[lShcx`<L' );
define( 'LOGGED_IN_KEY',    'Gq^,sFK`$NlET$dq;QIo/}?R FHBd]E]2U$UYgqiB`C:a9lEDD4|oTUG6L/|12?8' );
define( 'NONCE_KEY',        'vSm3iHqkjAs!,RaWgz,O=/|bSt7N^s06@6_^aIq-{*e/S]r68YOYTf*F;KU-o`@$' );
define( 'AUTH_SALT',        'L5)(w.2/{1g&tsJ~SyeNcl$3Jrg@M24J,fK9`PF}L`H< e_*3z:SM#>mlho-Bkls' );
define( 'SECURE_AUTH_SALT', '5WI;]2.mFeK{bHY(iz@~hi{3tu;<2.nD.<Te97?92KQkZ{*QVzha{/{QcR$US6= ' );
define( 'LOGGED_IN_SALT',   'UTnN#qTurEQj-^<ra3MGJ3];d/g&;uYbB(u,xk[,Gcx@ZKg9hx|Ji8=MCND3b&@d' );
define( 'NONCE_SALT',       '3.)v``f0nSUpT1EmqT<!#f{O.H3vRgT3[~k<]Q&`PDQcl9f``8:v;6fze1?GfhtB' );

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
