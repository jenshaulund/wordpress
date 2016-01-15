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
define('DB_NAME', 'jensrune_wordpress');

/** MySQL database username */
define('DB_USER', 'jensrune_rf');

/** MySQL database password */
define('DB_PASSWORD', 'J12essieRU#');

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
define('AUTH_KEY',         'IhWBJD/BQ++`?{KE%5mBurvEZ{p|O^-P|JA8 t+[ C)z:w2#l:k5nBnZ^=TTe*Cr');
define('SECURE_AUTH_KEY',  'fkN^Pjr-o+~MH*?wT_%OKY|0P~(+ow[*8!$UtwW?j?%66Q-4p?tI1B)N7HN!$-u`');
define('LOGGED_IN_KEY',    '?]GS|~z664i2!Ym)jx%BzGP}sh}w[~-r*!{D R6y*tb?5a:rA,5]TfA>Hj&:c,:[');
define('NONCE_KEY',        'PF*k5jP|jO@XV{-)%qN-)Nlx7pTVXKKz3}S$i{)&E5sg+fLazj>(C>]1`+Y+*mj>');
define('AUTH_SALT',        'if|@=UKyZFZnG=RW1,k%Z!5EAJ}h)n1F?xUdlULDwznvmAF|Qq[*8;o$gKU+gc:k');
define('SECURE_AUTH_SALT', ' }2b7$4$;rdG|e1|0%hiAk.$iD7|ZgLJf<*cp_rhZ%pRW2<Qo?T>ByYWJqTP+Hc/');
define('LOGGED_IN_SALT',   '#+~fFvBr+N_1-*Kg3j( =$-qUfa?K,-SQXdaZ+GdkL3O>CQkFYa<xe,{@r%3jzzn');
define('NONCE_SALT',       'xvj{OVS.B! h3MkT8x1uI[Rbo^_.|;~Bn!=$<<^ur7Hf10`BfA8x0Hgjs>*5d8|I');

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
