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
define( 'DB_NAME', 'mads_webdesign_dk_db' );

/** MySQL database username */
define( 'DB_USER', 'mads_webdesign_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mah78tbx' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql46.unoeuro.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'c#5/O+(94hnuTC_LU@| c-BW~g-!t49]n,yogkavBIemSyJx>jg+;NRbS-o-.=Mr');
define('SECURE_AUTH_KEY',  '/EY+R+7vq/X`xmBc!3/-?=jZ3%vT1B]Lg}hgB,k?^sP?]= yh%bQEA9,(7BbZpy>');
define('LOGGED_IN_KEY',    'V?mS [r#ziK]=-5zpW+3m_ONUqIIQ2Plu#*[3SrvoIGq>[XAT11*k&3nt&9Z&g u');
define('NONCE_KEY',        'hw`.W20ApTr1ih*@GR`DzETz+Q<1t5e)$1B;_qb,;.921+:*B&?!.ER1]W!v|D#H');
define('AUTH_SALT',        '%~!zCwbW-~fu/cwr(Z7XuanF7(dtt%&P~-p>+bGOUz{Y#j`#}(@H 4]U#%^cAD%F');
define('SECURE_AUTH_SALT', '-X0/Mp%xBXR`W_D<|5vZ?W2n>%3N$eG-f~QDL1~ bB/@^.%^HqCCjK5ax9([<1mX');
define('LOGGED_IN_SALT',   '_}$pl=Ls05[7IX>^vZ!ZK3Xvuhvwc=0Yjo:Gm**oR:paVmG)v$2f2ZqI>L6P[tCx');
define('NONCE_SALT',       '5 V--A,N-QlOjP,Brflx)h7~quv&DB0;J%*KDsnA-0+`+#+=XP,&x*s5zFaIh?yI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'portfoliowp_';

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
require_once( ABSPATH . 'wp-settings.php' );
