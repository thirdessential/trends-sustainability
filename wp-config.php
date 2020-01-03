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
define( 'DB_NAME', 'lattimoreandfriends' );

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

define( 'WP_MEMORY_LIMIT', '512M' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$y*@0w5`ASj`]eYfbR)8G~6=?a$Kb`z!s]]SjT5hP7^@b]|_jtLyT~Ry_PfIPC#w' );
define( 'SECURE_AUTH_KEY',  'I/:v,=.Pj7qUVc+yNH-nq)a8N`_%cZ3;&7*|?;c#cCg~[4k yyO5P>[qOP:o{`^/' );
define( 'LOGGED_IN_KEY',    '5&+btlH_8iG*LYa2ZKKV7h5C-q=?aE}opZ#RBbt)l9Ou1$?$+=b&no_|MiCz0Q`E' );
define( 'NONCE_KEY',        '}yftTk+a?RH2QZ^f7tp_iPy~M=>FjoIY;OPiVV|`Q0vxtb*p)`1}dV;fbF<!oDz>' );
define( 'AUTH_SALT',        '~*Ec!W;9+;S$PR_`?OERM$I=X57i*#E+fG[Rnq+XZkBI8Dc&+hzf<F1*rUHjPc3P' );
define( 'SECURE_AUTH_SALT', 'w!X$HmErT}8a#BuZLO9aP[Fl7* n<NsA&fC+8NsQXZ&sg<fXj3Q9*?/NhY/2^v2x' );
define( 'LOGGED_IN_SALT',   'BPNZ)cINkf__YrxVttLP;DT>#]`=@@9M26M],c`Q<TF0?)-]^@60ObZZBgN$u`*f' );
define( 'NONCE_SALT',       'Gy]^xiNcir%Db<5$+ve*l<hd W2 gK:?D{L17L=njX(-qhl-?W.TzzH@,IX5F7f;' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
