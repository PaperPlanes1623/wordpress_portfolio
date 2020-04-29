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
    define( 'DB_NAME', 'wordpress_project' );
    
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
    define( 'AUTH_KEY',         'e*dcyGo1Wv_qKFbmH>/+{7Ys(oguZ*&RH8E]S`bN91Bb,&@|VVgMz6F*#.A*7-p!' );
    define( 'SECURE_AUTH_KEY',  '*77x|ho{)vD]4p;GtY]GkQ$1aJ>>I($!(b=g~}sW:+pD~ ]w0+e=wo<-RhI99mjh' );
    define( 'LOGGED_IN_KEY',    ':?^UI`thJ}fc3.`{g7wVdl @bOz0~Q1Aypv=9db.y^A-gLUE_<~Me4ul<@xHlIh@' );
    define( 'NONCE_KEY',        ';~xZ/iTuW~x7yIGa]tnv6x-Ijc#^zZ3nZw,#kj:!D-Ugbt9uFu{EUem&Zl1D3:XQ' );
    define( 'AUTH_SALT',        '!L{8E03kfm@$x/}BBYbv|CUnU42Kg>RP&)g:9<}bf4W# u[F?dhA]m - Pm05TRg' );
    define( 'SECURE_AUTH_SALT', 'ti)!37v5vZeXe1?cf((LrO6_|GT(NPJ 8J~rjcm wapfHMWs;V#AxP$2C<30!5&|' );
    define( 'LOGGED_IN_SALT',   '0q#<Apdp(KUyb|k?^`DLI(Jgj$5E)|H!F,RadH)7CqQWWPa?>u,tXfnc~n-jV%CK' );
define( 'NONCE_SALT',       'MK_Q8]Z>I_{}&g<KVC)`nwLJAkl1s<w(vv_(tHJA^/?(%>5})mj@[97fs}TJI*N!' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
define( 'UPLOADS', 'wp-content/uploads' );
require_once( ABSPATH . 'wp-settings.php' );
