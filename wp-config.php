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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pluginwp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'V_<-]]5:n^c!t?S3rK99nSE4~0-7!Hz}g}>DyCF..*A_]8g<JWweQq>y#j1hzqQ>' );
define( 'SECURE_AUTH_KEY',  'dj)+&t5`)hsj9bxB_EdBcs)S|V4R4:$UnG|KTnLR^x0[.T^FRObF%EKwVmjIgldU' );
define( 'LOGGED_IN_KEY',    'SCY<vZ]>pVHIy+r[k==IBVFn7]~Jmvj+2DLE>*BSk&(o*!FeCfDbEt9H*za^+KtC' );
define( 'NONCE_KEY',        'T^LbBdVqIk=0y ;;JU#(8RvhZ]:Q$%(~,JKN5`7I$zT]}q.:(v,Ww,fdZl:d8ga)' );
define( 'AUTH_SALT',        'Uk^7`Gl=^v8E^/]ttWW0zx;|/j$2>t0? ty7]OEsjK}$HWlpF3G,N#687^N$YWom' );
define( 'SECURE_AUTH_SALT', 'y4aisR6h^&9!Yn[n%cZ#D6FPT6VYB|nQXeE<KT&2>9@&z7?L,jZeNv(M*WUr#%I%' );
define( 'LOGGED_IN_SALT',   'B0Is|!Q5KFM47+c%bEYjH/>SaGwaCx`9nz@Sy?TyZ,pV^u.nDRHOqFwE#0[4D+e8' );
define( 'NONCE_SALT',       'x#*E[yK&]AEsY8.IU}]&~I&Xd:5fRf.^^e(E7WN&E4_3893zneo*,IOPkG>Ih]er' );

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
