<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'moozx');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'egycan');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',     'bDBBWW&j;v70dW+[qQ/:L4:yYqY!Fn}i<<#K&>MEt10D)5gW7FSTc0*B{(#_}#}9');
define('SECURE_AUTH_KEY',  's-Zcs;+!cAg G_@48ZG|X_FZ8%)%ozCfds)kz}E 
8ZHnkpJI&3p6YTTX2=}iEaxq');
define('LOGGED_IN_KEY',    
']6eP^&9>g~37u%Z[L>}ftEsnY3|3V!^8&7aun?MY|Cx<-;}f}%VH,ac[WNE V3[s');
define('NONCE_KEY',        
'J&Zd~B^6W2fTSOFn>#U,p]^r:$sXG4]y<nz9Y9N@9O):MK~uSh/H<iVqP0>`KL)]');
define('AUTH_SALT',        
'8_k}pQ^Y*+mvK=t(be}]IyAT1[oH?)^A,Y8NaDzEqKf[Q|eP`u16;[a?;IAm&`k6');
define('SECURE_AUTH_SALT', '*8UnOi8:xnD)w~[k,65)4XE|^s|K6NRhQ,q> 
B>{B#p~:oicLSN,)_r{h!D2WON0');
define('LOGGED_IN_SALT',   '4Vq<+i,ewAXO3Pyu&S}yy9&R,@3^pCUyn 
U7+57i+?<{=fIYU}SQ2tUT8Y#dn+-2');
define('NONCE_SALT',       
'3!T+HPwi{[?BI+T6$4E*--s415b`NZ_p?[QthS_q3s9D^Y?p8|Y]1R/j%.vQf#Qi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
