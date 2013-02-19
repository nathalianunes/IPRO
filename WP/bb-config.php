<?php
/** 
 * The base configurations of bbPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys and bbPress Language. You can get the MySQL settings from your
 * web host.
 *
 * This file is used by the installer during installation.
 *
 * @package bbPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for bbPress */
define( 'BBDB_NAME', 'languagelink_test' );

/** MySQL database username */
define( 'BBDB_USER', 'languagelink_db' );

/** MySQL database password */
define( 'BBDB_PASSWORD', 'NTnwSC8n' );

/** MySQL hostname */
define( 'BBDB_HOST', 'database.languagelink.ideashop-iit.com' );

/** Database Charset to use in creating database tables. */
define( 'BBDB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'BBDB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/bbpress/ WordPress.org secret-key service}
 *
 * @since 1.0
 */
define( 'BB_AUTH_KEY', 'e.sUFU||2-pr`MJi{A{SHA)j*8IyVve8r!p{s7@5z>_2u#gc,ET<a}-cF^u{A>(t' );
define( 'BB_SECURE_AUTH_KEY', '|]?n}9A0{INg)z2X;,%lGZ5N`>CSZ^y2SAGz9dEDY<h+I2o3L3,<`bEML`^:~-$j' );
define( 'BB_LOGGED_IN_KEY', '-|acQt>fKm_4x`W&>{D=q,6H]j~h=TW[1; z)6[2eX(j;B{G@nrw5&k ?FhD[ayL' );
define( 'BB_NONCE_KEY', 'AKs?g}1X XA67o$8F#ttdNKn=.?]M`_Y-i5X=+W]/cJyFMkF+u4),BTip%j13_X&' );
/**#@-*/

/**
 * bbPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$bb_table_prefix = 'language_bb_';

/**
 * bbPress Localized Language, defaults to English.
 *
 * Change this to localize bbPress. A corresponding MO file for the chosen
 * language must be installed to a directory called "my-languages" in the root
 * directory of bbPress. For example, install de.mo to "my-languages" and set
 * BB_LANG to 'de' to enable German language support.
 */
define( 'BB_LANG', 'en_US' );
$bb->custom_user_table = 'language_users';
$bb->custom_user_meta_table = 'language_usermeta';

$bb->uri = 'http://www.languagelink.ideashop-iit.com/WP/wp-content/plugins/buddypress//bp-forums/bbpress/';
$bb->name = 'Language Link Forums';

define('BB_AUTH_SALT', ',Hwaj_eL,~;KF,D}}Uwonz{zS~.0:s&<Xc|{^>z37NBng?-{KZ;HWk|0GnvCBz9:');
define('BB_LOGGED_IN_SALT', 'zrYWV<J=Lxek+36q8z+mK 8Q,KZIC?N20t+(m:eMZ+53O#gW/.4$xpVK2w3<gQ0y');
define('BB_SECURE_AUTH_SALT', '6L,S},]d(Q]*4A0h%s|h~MCf~K3&VUm+8)+Ox<bW$Ys*qGwO6S&#9hS@++-{SxhD');

define('WP_AUTH_COOKIE_VERSION', 2);

?>