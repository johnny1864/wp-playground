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
define( 'DB_NAME', 'playgrouDBbesv9' );

/** MySQL database username */
define( 'DB_USER', 'playgrouDBbesv9' );

/** MySQL database password */
define( 'DB_PASSWORD', 'z9NTWINQfh' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'hZo!1|8}BVBRkYr,n^0JBQFYrYnbv,j@r^4^3J7QEXMbubq.3<j3F<BbPEXm*i+q' );
define( 'SECURE_AUTH_KEY',  '_~:H5K8Rh-oRk:p~1G5_5OdSFZszcv[@}s|4NC[CVkZJcv>rgz}B!v|8R4NBUko!0' );
define( 'LOGGED_IN_KEY',    '4hNdRk->B0JYFYNcvVo@s|r!4>C}FQjQfUn^cvj@}z}B0J7QEUnTm$q.jy{^3$I7' );
define( 'NONCE_KEY',        'Ybr^r^0,3$}BUETm$fy<6y<${E{AUIbq*2<A.6PDX2LfTiLbu.x#9PD]DWLa9Tm+' );
define( 'AUTH_SALT',        'N~gVk@1w|-:C[CRGZRk-o!o@0|81G4O4NdRkUo!v>r,8NB!4NcR8NgzoYr,3^,7Q' );
define( 'SECURE_AUTH_SALT', '7FYrNcvjzfz}B0.7MfUAQj$qQfy{uj$I7Hbqeu<A+.2M2LAmap*;_l~2H#+;DXD' );
define( 'LOGGED_IN_SALT',   'Xixl+p_2~1H5O;DWLaHat_xl-:G[~:GZ5ODWlSlap_1GVodGZs!hVl~1~:!4K8NgV' );
define( 'NONCE_SALT',       'Ygvcv>@}s|8J}F4NgUJcv>$fy}F^v,4N3NBUn${^3M3<6QjI7Qj$rXn^3<+;EXL2E' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
