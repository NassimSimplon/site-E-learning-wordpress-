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
define( 'DB_NAME', 'e-learning' );

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
define( 'AUTH_KEY',         'F?P;i^$.U&6wc,ki]bonNE#c&#-jt|:vqW(Gsrb68^m|]_;Q<j.=o^.PKir bCM,' );
define( 'SECURE_AUTH_KEY',  'MTZEtG~Y3yo61wr8#C3@8YESN]O#_Bga}=DjC~}eb W.|p%&aHR0D1q|QK;WDz`p' );
define( 'LOGGED_IN_KEY',    '@NQy8fb#@W;{t10[ARe)(4Yu<1n^h+M0Ai0+`2&NjYNmdd7RT8v]d TWJs/_.t3;' );
define( 'NONCE_KEY',        '6kK5B`Mh`%ao8$K7LtZ7bv`N=n{?@=5Knw)@e,rb6sR%xci8i4d?jUntE8;prd_n' );
define( 'AUTH_SALT',        'd)aVi~J5N>iJrx)5[mf1r~yw_c%gI~($/$2fm}C%9LMnM>Ua*@1nqPpn9BmF6d1l' );
define( 'SECURE_AUTH_SALT', '5zN0@N$eUV5O.AI!8RoU$1sy5NxJ}LM6yqng4C,X;1*aFR{rq5}$R&3I=lfqhE)B' );
define( 'LOGGED_IN_SALT',   ')J=vZPO+0cxBK4Qlu# =:2(30oa7*~(U+&D]@DN4IVYz&%[#_!aysGrtq)l=Ti!7' );
define( 'NONCE_SALT',       'D*C_:j}MS}NQ/<^sV9iH8t2OpjryF%#]G/VW;:&*sI p4saBR,U2zDD1PXq4}VZG' );

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
define( 'FS_METHOD', 'direct' );

