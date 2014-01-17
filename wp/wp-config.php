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

// Define Environments - may be a string or array of options for an environment
  /******
  define( 'DB_NAME', 'sweaty-site' );
  define( 'DB_USER', 'sweaty-site' );
  define( 'DB_PASSWORD', 'sweaty-site' );
  define( 'DB_HOST', 'localhost' );
  *****************/


define( 'DB_NAME', 'sweatybands' );
define( 'DB_USER', 'sweaty-bands' );
define( 'DB_PASSWORD', 'sweaty-bands' );
define( 'DB_HOST', 'localhost' );


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'z2jT7|*nl}R#fKzz+%;,9>+!o)T-fx9(z%-.0Z-078;PbImXWFJTNH;W1^|- .NQ' );
define( 'SECURE_AUTH_KEY',  'uYc5B[K|E=aS iv-I0-H|x%? c,0t,zNZ=}L+Zi}j@6]3)Fg[~ kq,?L1NBI.%-[' );
define( 'LOGGED_IN_KEY',    'F`<kT||SA34c-a]$=Qa)|!-0C0~HJI>4~Oph6-6e=@awHp`@4jq[-dmN@|bHdjk-' );
define( 'NONCE_KEY',        '@x2t6oXB`0P<aQ2]CR;E aGEy~]GWKqibbzzJRyiT(6>IG<V)O})Z-.J5Opg~B]#' );
define( 'AUTH_SALT',        ',$PMtnbJPXt2P^>m[cD:+ @VYbR^z!<*u|tN{!S=Qod|j Sa|7eC+z#-$.&(IXS}' );
define( 'SECURE_AUTH_SALT', '_J{jOs.:~&v0{p9L|-!!_2NZAs^Y{4JWz]Gde$qYj+Mni3-fajL+zAIo]>zQ,ZS,' );
define( 'LOGGED_IN_SALT',   'giR*DhYlQEIPQnYLVC.AuZ#cG`m^}+ms3b ad}fwF6Qb`Ajc8? ^Jf8LmGS[/Y^=' );
define( 'NONCE_SALT',       'k4MqoGE6MHW[hm.?0|##cOgxv|xyrx`7ts51?8*B6ogQ]MzZLg!-y}-}r-VgWku[' );

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
define( 'WPLANG', '' );

if ( !defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

require_once ABSPATH . 'wp-settings.php';
