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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'addon_practice' );

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
define( 'AUTH_KEY',         '<;6aS|r/S2^Sb#}a3aR/WioL|i*eElI*(Pk(9gx*mv@rpXrJ6(?1N2k#Fh!4#x_$' );
define( 'SECURE_AUTH_KEY',  '#p!/u@=79b_2/zjqf@AvCJ|=48=0b%B@FM&_$:n}7/q6%G/qBI6:caA4A- =.CTB' );
define( 'LOGGED_IN_KEY',    'SwQ2Z`<r%~1=97)]m11+]@u)Q`oh)F/n**{.H&,Mw9H$P_%Is%(54/^?=V/sb.jg' );
define( 'NONCE_KEY',        'M0$Y]</PzL}?mR1jG05bJ;4Rf!&?T{1sHdoBX{4o^rFOf&K>_JNm2oduTG>PBq@-' );
define( 'AUTH_SALT',        '=UEB&O5*uhJd[/lw=B=iQw}lKdo|5TxmLgYT&{I~nx[[8;VTFUc-wP|SkDfR`|`<' );
define( 'SECURE_AUTH_SALT', 'DT5| <^}12WWs(i[:_@y14%bs~bM.JE)I_d58A^c|ZO^+6+[sLbt*@3S+QS@[F]?' );
define( 'LOGGED_IN_SALT',   'J?q%>{ lV.[%Qu#/8Mt;0/QeL(*5/^X6M`y;#mKX4E:UMd^DVam5IZhqZ.S1.AxN' );
define( 'NONCE_SALT',       ',SrpcTnemfKr@ldwG>nHC`Hg61JP$5kkVzeo@} SQSyzT%2y<- wyome[<Qm,i9a' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
