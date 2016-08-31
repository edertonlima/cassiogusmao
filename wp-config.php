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
define('DB_NAME', 'edertton_wp11');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '=plUF]]j/iE>phkNsZn<2Nu/3@z7@UM3b+mw)qh)5NI@n(YSi}_+{|%`+66W&CNH');
define('SECURE_AUTH_KEY',  'f8kG.0Fb.`~^9ysq:yhB=4t|wDnh)0Z1LNY9J8HEaAqw&,r7|Cr_U_:6B&C1(!b>');
define('LOGGED_IN_KEY',    '%%!66/k2ta/KpUu>:Gx1<-qQ$$bpRw8=OL]ZkloyCKQ$~=K#7b~zQ-Q0LP;)$m.C');
define('NONCE_KEY',        'McVvk/n:fgOCxr,T<Prr7Mi^lC<)1SmqWdlnsbolZ71zIbT2mm?l :u| iRF67E1');
define('AUTH_SALT',        'e~fYFL&^e7JLmDLl+ :rf9 .rR$}fK5Tp3%k$0dJraAf}a>tvT,tE*JZJKTV?wL^');
define('SECURE_AUTH_SALT', 'u|#c]jYF$)c5#P1ZlcUYv@|zd*QUO%g|<~!WJ_>dE!`!6UoN3yUl=$wOOrNT_q2$');
define('LOGGED_IN_SALT',   '+yK*{|.DP(P,p^{f-ejuhnZ%wD^!!dW[8gC55Bwd@b?;,cP7YF/NvNR4T=B@}%~1');
define('NONCE_SALT',       '$A09sk@&M|O]cIAV5-f$D[f4/I&&3O1JDC)StgBS1tt-D2L6{yEkF~GCu=UtOtCR');

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
