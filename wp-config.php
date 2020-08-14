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
define( 'DB_NAME', 'website_db' );

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
define( 'AUTH_KEY',         'xdSE~(cn>b%Scpr@gC$.oZZK2=LE<(N-InUq0W#W(nb!`YUFx%rb6Bot_COWnG|f' );
define( 'SECURE_AUTH_KEY',  '8h=F3jz;`6lR_8o},RmF)$:eFFPBIB{B|X}t2Ikh]P)R{Qhvv5JtK%3=rmwd</ks' );
define( 'LOGGED_IN_KEY',    'xw$rDC>D/UIfgiv6VL}EoJ-^1_[vwBQK|n=s{nO3nr!O=^8r y^2rI6HZ:/jFopf' );
define( 'NONCE_KEY',        'Cpep3gI]bNHsAiUOv2G^BX@(+9O``[|lo=u;2L^0}S3WOO%ysk8h[kxj,<#/yNa)' );
define( 'AUTH_SALT',        '?QO8ZAyo9t/0Ujvo^y{mH4)H@0Yq-f+=Cu+.SIEOUM:a&p|,[]wC9`[TePtV7R:$' );
define( 'SECURE_AUTH_SALT', 'KK#KWxTA|WoV$DIgR@[V/} 3qwR{:pV4l1v0=u34/|FWdL1OA/+l7MZsAn%D<m-G' );
define( 'LOGGED_IN_SALT',   'q9}4@CID%<;GhMy!iDK8%6BS|YFk_VTTg%Ry``H@+cE--zd,W7ZCPfi76GVDF#m+' );
define( 'NONCE_SALT',       'MX*sMrm%|=d1Ulo;eUX3T8B*@eSuJH_9euHn-z`<~=O[m^|1Sza$5I^!dNibo7hl' );

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
