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
define( 'DB_NAME', 'id20280287_wp_a716b128c961d07b47de45db04da62ad' );

/** MySQL database username */
define( 'DB_USER', 'id20280287_wp_a716b128c961d07b47de45db04da62ad' );

/** MySQL database password */
define( 'DB_PASSWORD', 'a6d7f4e685073bcc12778b42c1fa4c906210e932' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '*FS0:]SS:fIRiiyX2qMnV*{e{|Q=Hy%3O%mp*>y$% _OhzM[YoO9o||qj:?}_U!>' );
define( 'SECURE_AUTH_KEY',   '<t%c(`T#FdN6,}* M;>0>nY<RNl,G2t$tH;~dd{qKO/g0o.8i>#<R>O<eZZ-B{X+' );
define( 'LOGGED_IN_KEY',     'G]jQlfEbP<R^AoGg{%j;w5D/d[OD3f`SMs OSX~cv^^O:oFLp*@?C}ByfX~{MRsY' );
define( 'NONCE_KEY',         ' @Kp|C*1+3M)|`I=#<Ya[cUBn*xm`bty!0*{qN6qNip6J_*9/]~LLX_pWruCV<KQ' );
define( 'AUTH_SALT',         'sW|+h>IRc$NAIZN!|,0pbR^kOCwo0Ta${k1wtbknJ#0%[-qvX*@o<1jpM[(|*2f)' );
define( 'SECURE_AUTH_SALT',  'bVV0|1]L,4?zQ{|@uFc6U(BsCVc` e75qF.SF76fz3yJ>|uexK9h/qkza(8;Z3e%' );
define( 'LOGGED_IN_SALT',    ':s~ff,{Er.tQe LCdsmXo}BTi7F~)+}(Q;Y%Yg,m=YJO]pz~8)gZlzbYw*lXrPba' );
define( 'NONCE_SALT',        '($D+`y%r)=Kf<o3Yf}cQW-tYaavVhFg=TzeYFiG{*0?(lD4EhQjz>>y@l_QqZ6MD' );
define( 'WP_CACHE_KEY_SALT', 'tT+@}~?ev]ZT(vKva*aW7qazRYVRN[=-9aV[7R:[|,e[Z61dZSX O/&rPoNn~|<Q' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
