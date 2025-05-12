<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// Load environment variables from .env file
if (file_exists(dirname(__FILE__) . '/.env')) {
    $env = parse_ini_file(dirname(__FILE__) . '/.env');
    foreach ($env as $key => $value) {
        putenv("$key=$value");
        $_ENV[$key] = $value;
    }
}

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('DB_NAME') ?: 'savage' );

/** Database username */
define( 'DB_USER', getenv('DB_USER') ?: 'root' );

/** Database password */
define( 'DB_PASSWORD', getenv('DB_PASSWORD') ?: 'test1234' );

/** Database hostname */
define( 'DB_HOST', getenv('DB_HOST') ?: '127.0.0.1' );

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
define( 'AUTH_KEY',         '^vZa-^GN;b*0Lm->>?xc|~PGGGhT Rq{GyPQDEt*vGT>f?auyzSs[/fFW y&K3Lb' );
define( 'SECURE_AUTH_KEY',  'cRYxi*t_a.?_:tac;!G~aLa$5JYFuI]%P0-a]2l1,#6 ciZIDXmS< zevtV;+i;n' );
define( 'LOGGED_IN_KEY',    '~N&gU&!0?*vmG|2raN{i^%kMvr=sX+}jg*{<TTViDk4`))_S$at2R9*/Us$5IUZ%' );
define( 'NONCE_KEY',        'XX!$%@xUT6o+<Zy43gWN)$}#@|g>@=bm[}?6C>ZNYgrFqx,v43jVn$-41jV>0nU[' );
define( 'AUTH_SALT',        '#y~OM:80/i6/KX_k8@URe#c==/]7G1Ngt<7?6*qRe_n*Nrh].C@53G5tcgm?LeB;' );
define( 'SECURE_AUTH_SALT', '@R03|92QhR-_~I+0i2(X@n40K-@(hK<eno:)*!J9~8Vj^fzd`;hs3&izf:yBc5qs' );
define( 'LOGGED_IN_SALT',   'AvM:mS**-m:utT ;(w~Zey9ir8ceE]VClo.GdY=V^l;|+ft{F95`-c2f!`d.9&Vx' );
define( 'NONCE_SALT',       '<+7h+!!F?-eP)ZZ/<C|3!^y[^vg5kh$7k)|^[z;Pl,6j,DXdrO&:PFzVJ>|j9_kX' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
