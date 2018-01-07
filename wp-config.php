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
define('DB_NAME', 'habishop');

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
define('AUTH_KEY',         '<S1QBJe/=N>r/jzIt@|P(naBR&}mD?.vRl]a`Wrf.GFJkwPtFLOhgUAtU_LRbl] ');
define('SECURE_AUTH_KEY',  ';1-Ot$*Y!k]w M-7%iU=#ojB%_yl]c*1(L$~PfLh$Eb}EUk#dIuQLPx>&0}czc@v');
define('LOGGED_IN_KEY',    'MXoB WBss4KYI(;%bnE!jg]F.{]`Yd[EeQb_xX3~lATS}BH*XKE%Tj~kNVz[,{Fw');
define('NONCE_KEY',        '!OOqoiCT{qo~[/d3>_kFT{-F0gb{qPjz{iywx2+N9L:32vGqeW[%%fr,KVf +H|a');
define('AUTH_SALT',        '!esrDVD[&j/dIGhEQ*LRY c^(@C(+$_QoLkL-FSHQ{;;1X<p+m@D;-~;5j [Wd-;');
define('SECURE_AUTH_SALT', 'q]_4vp0<U)3=jJHv/6*tV [trmN=!x]_jqg@pVnWi;8k`d{6>c~beSyIj>DG0LPE');
define('LOGGED_IN_SALT',   'B:j>Q9y1:lA[T)qXInI)t9qS4F LoA8R9UG.O3l;/aDkG=eh{ty<vD,hOdrv4LfV');
define('NONCE_SALT',       'lXyD@J~dx&C<c}H.n5IM=e{!!7cDlwovNzCZy7@v64|!gKdjB_3_cJUwz%F},~)6');

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
