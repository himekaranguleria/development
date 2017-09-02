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
define('DB_NAME', 'deepakadmin_acronis');

/** MySQL database username */
define('DB_USER', 'deepakadmin_acronis');

/** MySQL database password */
define('DB_PASSWORD', '1%U-e=BK+0fk');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1]ofp?=;(@eNAFPqI_6hh(PO9|Pp4(J,A3Ua@AJCi~s/;mI}qe[D_tV8C#KYw)|~');
define('SECURE_AUTH_KEY',  ':34)_hKu(?>#$.#c8h^n3[F]Tx!56jH<!k{U/v0A#vbU*ye>7>%5Gpk/<J9Y<czl');
define('LOGGED_IN_KEY',    'mzV>GL1b3&p9^AS|cj]dMxgXN5&p:PT.F0m8g;EG#=^[La F.=9boer:}xCMXUvH');
define('NONCE_KEY',        'D}`W1oMc;P)-@t,i%T{`GL{F1|40t`9#Y^^tW<q3]W5aO^EnvG;;#u@g472&^G2G');
define('AUTH_SALT',        'F+e7bjUuS^C/F:&(YVAq0&[?$%7!+1h5LC0b.7q&y;a :9C4Afh-+2LH>s!nh.EI');
define('SECURE_AUTH_SALT', 'F_zQ3s@i#>A|!GB]VHKH|mv[`}ZF!h@I9[pXUsBYh)^#Oa^`b?rIhdcQ-Ay+T:yK');
define('LOGGED_IN_SALT',   '=n(@}]%4qS_}6.L9G_[JH@d=Umo8Z1M5w2htwx_R,;~OW,ZG1g2RXeZ D_JBHkV-');
define('NONCE_SALT',       '}rguatWv *Xw8SO%}lAxA=@il.TZmW$dxdwL)TGyyya,uA/[T#AlR1dT*|-Ef^Uc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
