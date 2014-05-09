<?php
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

if ($_SERVER['HTTP_POST'] == 'HTTP_HOST') {
	define('ENVIRONMENT', 'local');
} else {
	define('ENVIRONMENT', 'production');
}
require 'config/'.ENVIRONMENT.'.php';

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
define('AUTH_KEY',         '~~8<1V|j-*`h[Pa+INZ uU4qhmW6!B?-^u::Ltd:Xj*I58jR/ F8]H0}Q;wt+stx');
define('SECURE_AUTH_KEY',  'O1B89)Q,S{]J`[v$Su~7%TMTh~SdNR7<:6Rl1}~k;4m9Oz2+|s+Wk.%q!t2kK9`t');
define('LOGGED_IN_KEY',    'EqSFb=-:u.mD2,btp_SV=%< yO0-&_x2P3/{~hb?RH:LA*M2|E[9aru`7oMYP z#');
define('NONCE_KEY',        '|8&~~A:Px|fKg)jcdF8+,&L)Fu_-1JbD_|jH} F;wD+r&7XUjpbG^X`[;4ZwL&xu');
define('AUTH_SALT',        '.(/ZbRP{-M|V#[c{$L-`LD0U|rP1n&qM3q_Q_/|7Y]=7gBDnlQmK&jPdA.XKmC$+');
define('SECURE_AUTH_SALT', 'IL| +v)p:BLy`$FY&@VcN]:Xi,/~rd9mh|gsUvs1K8e +?,V$gT 9q:;s&iD~j)3');
define('LOGGED_IN_SALT',   '~<@$40|c|TL!!|V fj=VUV)+2aA/OuP;PiYS>)zKGXF{`JF<0y9 lYL/4odk$Ia]');
define('NONCE_SALT',       'Q`9,%suJ>|#V,Z0K}$`LZU0vHt..+pc|0J4$*%m%oTL%oi,mJk)nG1MTH2#Cw!qM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
