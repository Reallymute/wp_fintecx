<?php

define('FS_METHOD', 'direct');

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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db721190325' );

/** MySQL database username */
define( 'DB_USER', 'dbo721190325' );

/** MySQL database password */
define( 'DB_PASSWORD', 'BVQjHfVFftKKuCeWpDkp' );

/** MySQL hostname */
define( 'DB_HOST', 'db721190325.db.1and1.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
/*
define('AUTH_KEY',         '3,-/+M-+ecu]KTmw|+l@L%@)!dO=9T&?nNe{0bfqnQc+,5Te-q#m34LMCjKHMf$#');
define('SECURE_AUTH_KEY',  'XaM8>86]L=c.OO.J-{^#V4-{GqXNp-|d`go+eSoppA0#yCVOv 9-w5>O,+-Bv;,#');
define('LOGGED_IN_KEY',    'S_l[H_61;+RG&7V/xlp.v0wN|ktd&KtbAwZ|p%wmQ~8Bdx+f_&1o2}Ra|)_V[i?G');
define('NONCE_KEY',        '+DBT72Io8#1U7U}FH>G@ jag>H7}BW0NmcT0+U%hD+agm: kN9r(!-aiL#f^r/:c');
define('AUTH_SALT',        '+gN={31ABZ1ppw7K~O+9a+-8p7+dhxmAb94@kSk!@pG!`]%o.(p[5+$m$h] 7&I|');
define('SECURE_AUTH_SALT', '4J H?$b2AB9M?pIpO:pzd ~]BVk<I_8fSb>U5C5|maha~8{`GU9}+?L?&+p!Vnd1');
define('LOGGED_IN_SALT',   ' v!vO[qS4Hh_!n@:Yf!V&7mu3FEU/ ~&]aZa<n`b9-9Fa#y5a3)gE NnQRJ*S+0{');
define('NONCE_SALT',       'N=;FHug]/FGVjoH=ervbH1jX69bX `{%$j6z<@R^CK_ -j.b>:^2Sz-Ym?;prCmF');
*/
// MARC P. rerplaced the defines
define('AUTH_KEY',         'W{p1;/#xk!;>`=TGuj_y:@[la^GtM4[za8|_6(MFaMale-,WF9&!UA@|1$y}SUPV');
define('SECURE_AUTH_KEY',  ':y.ta;7S7S/X%H^;`fvWao<;mx[9tJ:_={Xyd8P52xe6V+[pW#Tl` 616j/J,fRv');
define('LOGGED_IN_KEY',    '5+cX+L@ab&I2M*GZu+,a1.#:v+8j7h-K$onnH.@s2L:-zW^o&V+n}]keW5CrE3f%');
define('NONCE_KEY',        'Q+U4tChIPx|xz.s;6lcFqd|]JLtpqZ*fEwh}RV+m+5eE[YPys1W1`c/679->t=Z8');
define('AUTH_SALT',        'yTVk4?Q[(!zZ!+?f>f*9H:p|y)4p}8y)l*4lWq6=zbMqJNKY=1fv9Jfj;+U3PB*W');
define('SECURE_AUTH_SALT', 'a4Y`+48Wjn-!%0Sov|pTql$vQ|0-) y4~5)>utuvWyXd<QlNlezm8ak-9!l&Kp}#');
define('LOGGED_IN_SALT',   'h%&Sss@r+Z]_8W1wP5N4*v`MIuu-Y@~.,C6|yF=7Lq2ZQ&6f`K9OzM.At^A`_A-|');
define('NONCE_SALT',       '|=-36@{Sp_3wS|XgLtnz-<fD&D%f;Z=9BA^E,|&L&J7a5/Osg~!?r@[%1<(5P`_J');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dfyDdvTR';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
