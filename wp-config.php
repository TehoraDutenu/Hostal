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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lhobase' );

/** Database username */
define( 'DB_USER', 'zak' );

/** Database password */
define( 'DB_PASSWORD', 'z@kou' );

/** Database hostname */
define( 'DB_HOST', 'database' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '9{!TQJ~n) FxY#{_#g6Ej9|$w*ciefLdC@,&mOI)VUEP1kg`Y(1DVe:oym<Tv!Q6' );
define( 'SECURE_AUTH_KEY',   'aVZ>M<KX=zf!!g?Z&Cu6Kv/4N!f_Zv,E*!khD/iq+AR3wN;3D9!.=`yG67.4/^AT' );
define( 'LOGGED_IN_KEY',     'UrvBjuZy]r:hZL2X]o=|^,.8<j| gxWF/n&LEgh[BIT)p0^7;pA#i>TX83n{QR+d' );
define( 'NONCE_KEY',         '#vcBYwy5F[{`/=I-YO57L8DxUCM^E?hMVN)d[cULktTjD%ua;qA!ByMA_fqPxOub' );
define( 'AUTH_SALT',         'Rd8=+oLV63{5C^v)^wLF-.*MBfa8wgkqu8aIE8>B7i3<:D 0HyW#yD3v qkmNs+<' );
define( 'SECURE_AUTH_SALT',  '+T0s$[mje3Xd]$P|RI{kJeE?DH^`RjK!3s$c6zU>*b3`sS$we?~O<r7BJA}pzLz)' );
define( 'LOGGED_IN_SALT',    'w:*IUU|=+x>+4Zut1qnLp[0|zRk0d]4]ho0<Ui33wWu[#q=,|Yzawk)0)}pO]D~W' );
define( 'NONCE_SALT',        'f]XoV}_iu[WJH1eKP0{y{bmDCYT:|d&kb,v=>b[ux}hLM|/s^xfh1Dt2Cw5v%QsY' );
define( 'WP_CACHE_KEY_SALT', '}rOlVLP.wQ-5H=[7S}nNmxSv@~7PAIcb5]BmK?)]ZKb]XiEQ{zfp2._a,7MU2rh)' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
