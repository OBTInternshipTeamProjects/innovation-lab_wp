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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'zQ[eUf{6h1di&Uiao(3JmLQW29U.^b&iMh+A]EFcDT{u6WzWS.H|^{H7?zjB*VCv');
define('SECURE_AUTH_KEY',  '!SD,*^51`o7-r,a=. 7W>HHSlZg^<5~@TLa7)e9XDu04`C,88p>02kvUCiBk2z~M');
define('LOGGED_IN_KEY',    '?OA[*q3KFxwSsv+Lu=Mrqg@6F,>R^]=T  S,ZT|1@Fk}O`J_^:mrgZAgG%+$=oZ>');
define('NONCE_KEY',        'QrAIm9t:@oNTT=*O|p(/%vv hH#)_Q`]5)oliOjf/IAu$|ZZY#qv5L.L[C]@r*0/');
define('AUTH_SALT',        '9Xt6qs>4TYX~oKf9`:Fz8pqi>t&4JDSa{;vA/MIiwK1$S %SRhT.A/DA ar`hP|c');
define('SECURE_AUTH_SALT', 'dM6$k9gf;JlsoRg@9T#p;#DV`huUm%`k]my_Os<&2r<wEnuTve~R9T%/sgX=z]|i');
define('LOGGED_IN_SALT',   'Xd48s)8|=/Y7+lhxuxlu@6ipreoZ&Jz(O|74H6Ygj;s)n$b?6$m8)OwJe5ndR<6?');
define('NONCE_SALT',       '[M:K)yXlQEBqx[D~>w8M]%1hO[@@.Dy{Y!RPvO3OO3SA8XDUouf>h!U{%[d1Tu;g');

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
