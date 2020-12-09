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
define( 'DB_NAME', 'get_best_writer' );

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
define( 'AUTH_KEY',         'ck,kW63?$6( WAO[fU7I?18FOI7)N,|Cn2l-?DE)J**q.lN)w.k]q+,^DglS7*V6' );
define( 'SECURE_AUTH_KEY',  'qjwzzAmh<D(a]jiphfB:Xb5j 6*)l%XYd*:5[j`}IoQ3!%R*c[Dw@f,Pm8}kfYGi' );
define( 'LOGGED_IN_KEY',    'S-|5KAMZ5tPVu>uB}1D>XC4#7^kc$_KDh_SDI0bkt(AD;<ZoGP`}{B%:wmX9%8Ea' );
define( 'NONCE_KEY',        '}lpD-H7#,_3%U!}L[xx5i*]>D2~g}>y^)hY]H*pST>m_Ash?*vH]$a*]xgz Htkv' );
define( 'AUTH_SALT',        'rCSD/+mI<Lzx>A[c96zOYYI`#4< U$]p+$s&7=7Qp%:0uN27zW$D21VCy2sBvu0V' );
define( 'SECURE_AUTH_SALT', ')`A$*{n.b;hX;m6RWq{iX5KiW>aY:+WZl,a`pg#2I`x{H0s2r}kD9%i=rn!x9CF3' );
define( 'LOGGED_IN_SALT',   ':_NFM!{[[x^JDk<[~I|e_IzC1>_@nPRfVZAA;A%(EL]aMq~J(s-#,5zjp9`QC3J=' );
define( 'NONCE_SALT',       'hB<BBC==`/.g+E9m415W?C.AA44470B)3ql%~9RZ*p*Pe:+%r>Os`{Hl>F<fh`[=' );

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
