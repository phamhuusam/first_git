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
define('DB_NAME', 'wordpress4');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'z==_[yE`n+2mm-r8In14g-P1anU6~R:0wvrIT^aj{<irX41Y~2?n`z:XL [MA`2b');
define('SECURE_AUTH_KEY',  '_k9]jA<)2lUH~sp)Oi@tG$TcFX=O7wfto{_)HcMi;l].BAFGwk:inX|1l]NGqk!<');
define('LOGGED_IN_KEY',    'S*@@TvZh4[;-i!eB_i/9Jk/-dhe=LtC~)J~j$#gOx(o0#e{5Ol;-7~x8EHAoVQDx');
define('NONCE_KEY',        '8@{dbTA4U@|.f>zsjKVIsZC>RXXwN&*vT!%!%}tk&e$-aSJ6[X34@Yao&~Se+KcS');
define('AUTH_SALT',        'GFHjtFJ/KWP;gzZH]kgiwh/|ASK.bCf{xzx!zgvz`QR72r{Nks!Yi|>XIM)Fq~Mg');
define('SECURE_AUTH_SALT', '%1U<AgahY*J{BHMg|h%!GYOiq8Cv!6+pf7-kG5cRLkp?&F%9i^n/k,@#Y5MoU0,_');
define('LOGGED_IN_SALT',   '&Gq7B8b}!qaqwR1UWN>d{VMe~BiB*zzd3>942GRnQbv?$xEYkzws-gyM|NCEk|S~');
define('NONCE_SALT',       '^)MxXFB]|As{~YrnCbXM3mfR<gfDbF-G`Y&qq-9$4!CYHkk 5B6vuW4#+7nh2X=u');

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
define ('WPLANG', '');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
