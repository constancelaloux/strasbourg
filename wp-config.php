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
define('DB_NAME', 'db736469835');

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
define('AUTH_KEY',         '>mi,iaft,<2Wtu{n9s^fl/9.:=cv5.e46^IcU.S:{y,W>tZ(lZ]Eov=-fqkKZ/)T');
define('SECURE_AUTH_KEY',  'e#&<ZoRa>>/5_-#`tDC^#T-b54KsmYedxm3Ec$ej_P|&Q];e907T>K;dZ&`?fWKU');
define('LOGGED_IN_KEY',    'Jg0[%:.C[K}x{/RA|pc}/J.=S^G4kenQm)wK{aA1{IZZEdrO.ae3K)b{B>>*{iDO');
define('NONCE_KEY',        '^?/L$v#i}#VP]uzZa)NSzG6i4wbqs|DA?Rg?2d9h%o;RHFmL;QK6V>tiQ*5Qck&H');
define('AUTH_SALT',        'tkWd}Plvxq5K.J~50.2TUDv8TR+| j$UF5n$$_&pK?&<e`&zimj+YA9QmK<K];w3');
define('SECURE_AUTH_SALT', 'KP@Y][}5O#5x2[)U0{1=LSrwUa,n{m $s0fn*R* saecDWE?-P+N1.s_aGU_bzfH');
define('LOGGED_IN_SALT',   'j8b9E$&4,je[6t?s_T{6Hx/1rKEiw).y%/borK7$8Fo&{@),8#b.@},|/?P+Y.[%');
define('NONCE_SALT',       'P6s dHG?!n%lvsWz-dp@j{{6]VFvUTKduZe,.s<t/RIksIwd|{1~6-)K11s[ngB&');

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
