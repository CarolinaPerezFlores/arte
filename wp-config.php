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
define( 'DB_NAME', 'u500246793_LyEvf' );

/** MySQL database username */
define( 'DB_USER', 'u500246793_IprKJ' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Wt4LMythbP' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          'YFc9$xP.fI80zjFglb:(zH+&z$?:/Zl-]cX-z|:YPk@jL%Gv;OoYtF-V|.mM3XRq' );
define( 'SECURE_AUTH_KEY',   'gt2^];M+T]>AFaR=<twm/U#A-j??nA(?u;cPiT{X&)I_x;fo#tcDnW]a|Vb20-Jy' );
define( 'LOGGED_IN_KEY',     'm-DOAC+$fly)-D%d/jt*SE0(ev-bXgwwD?p2[ui+N{$pVx+=K$eu+{^7oNn% 9jj' );
define( 'NONCE_KEY',         ' ub}D6?i<$[d=IF0e>%:uQI$=p$^(_M+P,^A4rq;kq=>B4<f1RA~@&SW}H#:%,&h' );
define( 'AUTH_SALT',         'V=`Q]mj-{_Avq)JR-[g;#8RWb<cN/m!XD[^MUr{DFb]gs%hVt?+-TfZ?y#&Gt9.{' );
define( 'SECURE_AUTH_SALT',  't=-:[~Z4YFJv2[jyYz clC(zf Xmq+/Q.{E*syF/R?-GFnAu*b5w*_kq44$^J#xL' );
define( 'LOGGED_IN_SALT',    'd)5rDFi=Zz3S`_Z0Ja1.* 5A/=3Uu3:ngNHw></|QO [NdG7BM:Vc`&j7|MaCw11' );
define( 'NONCE_SALT',        'R%!)F$VhtOWOvQE`z+op%>U54*WmG/[IyJo_kC.K_SERNo2u{F~Y+EZt)>TXxYoR' );
define( 'WP_CACHE_KEY_SALT', '|94`})rD;N|Sr$r[SFhmm}5w_d~`^J&qK}:^]leU]dUB||ie{yX[l>IO.3BYZ1)~' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
