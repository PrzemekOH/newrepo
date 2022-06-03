<?php

/**

 * The base configuration for WordPress

 *

 * The wp-config.php creation script uses this file during the installation.

 * You don't have to use the web site, you can copy this file to "wp-config.php"

 * and fill in the values.

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

define( 'DB_NAME', "marcusnew" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "root" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'N2Gdm]6I+Y>>QTCf])?p3}tV/Y{.3xIpcDx Nkadu4*V$u[r1+8)DcLQ0l&FSbXm' );

define( 'SECURE_AUTH_KEY',  '9`wun<_Rc6uL*!;Jx):buY.1.x21m~Y]+]>5c>4mL/e0>M1ja(ysv fejBhZ1F0)' );

define( 'LOGGED_IN_KEY',    '/Uy?0^uJQ0skUhO3kt~HuYfOGBZx[,1`H%<*<iM$R3T$t&-U}>1+Asl!;G5zL_^b' );

define( 'NONCE_KEY',        'SHZ9=.(V!~SE.p Nf8Ave7aikwAsg,<ZVro} E7@eHF} d?tXK`pUf8;)p<2cguy' );

define( 'AUTH_SALT',        '<&0LtZQ(>YH6ABOH}``}]XJr40w-._g[ R~goPua,ZkpKu!:}c<eoGUMf$#Rd}<M' );

define( 'SECURE_AUTH_SALT', '(;w.T)+aQyZ&q$9tQWc%W6wsh}*Caj.{$a^qcz*As}QXm04S2?:2{{7R3D|+%[4-' );

define( 'LOGGED_IN_SALT',   'LknPl-ib&d- o*Q-fX22_E6~?g TS8}VJ5`7os]qk6;[*j5,Iy5kw{RecHt,8?ZG' );

define( 'NONCE_SALT',       'vfdw[zQwLCfD3QXDox.y9NmrzHw_>B@zb&%*Na=gKi$ %-K^]oI~mo)[}6Hk&9Ng' );


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

 * @link https://wordpress.org/support/article/debugging-in-wordpress/

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

