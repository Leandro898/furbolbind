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
define( 'DB_NAME', 'XcOnSnVzKrhq2S' );

/** MySQL database username */
define( 'DB_USER', 'XcOnSnVzKrhq2S' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jQR22tK8dxqwJ0' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',          'D^,@aXir1b{0VwpN),q7a1D6~:@M1i.`BPB(K]@4*&wX.4ut4T1Y+fpF/Wl,DF> ' );
define( 'SECURE_AUTH_KEY',   'Du7pVaf_zqxu)4A.C1*&&+#iyS-UVWvT=u)4>d``*CF?K|TH9t~PSo9-Lg!PY?E7' );
define( 'LOGGED_IN_KEY',     '<=$Gs~n8ZuQE QFL8FTB];j3QQ;,JG wZu~!Y*T%c7o&x)uM.YYAzzNO{C/nk?Jp' );
define( 'NONCE_KEY',         's9|$l<Kckh/&hgZkIAX`^;[D5{l*T{Zvon4$I~{{0}n=hbZ4r7cIO|#DuKBz+V|g' );
define( 'AUTH_SALT',         '^^*8SzeyEq[1jXuz^ZC@{I7]0MP)IqI0)I.WUcXo(H24Ac+E&]wX=mf0|P!* _6n' );
define( 'SECURE_AUTH_SALT',  'j-3/Kmm!=c3UY|T}T|p+LPkd.Jf7ov:I;7PU@sWl0kBCM{iP^]{23VAPD/1:Jm$c' );
define( 'LOGGED_IN_SALT',    ')IbSk#>FX1W2}W#l~OfYO ?vUewY7j*1/o+iZK.<!k.X,z3KC];jL<FUBkPA4{v&' );
define( 'NONCE_SALT',        'iz(b{{dK8M9[wX#w`QCi.>,mUrDdVwD.HL]YGm;]jCSYS_sn1M@(@38-,_Ea086g' );
define( 'WP_CACHE_KEY_SALT', '3yM}p[Gcoe`?s@n!4E+-*.G:p2A5#]|X)| @-9#AKIAGH95AeD%ihTK5]=QV]gjD' );

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
