<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.R>cUNjrrx;5lfEFSP5X(8Yi~IS|:Sr]>T iol+Ilgd!tr}ILOxpp&R!`|#e-Rpj' );
define( 'SECURE_AUTH_KEY',  'oNh/+]gL47j{1hm98o,F2{jm2m$~7nI9B$.]<^!dF^Y*pAq5iQjM4Mh0vHH2HEYk' );
define( 'LOGGED_IN_KEY',    '],503#!}9EE;caX.S<0Ht fLU$MNYgF@QslHOjzGIzjmF>6^;L_5^kCm&Zf`.p5m' );
define( 'NONCE_KEY',        'POreN$UO~_yTzw;Q$-^[6wJSa^)W;|z(|`b_WPDIx${u~:|!^VF&q4OBiuxbTBFx' );
define( 'AUTH_SALT',        '!Lz(K9&cLPKVR+KYdGINTa971&VcuM`6])jl2;CbVL_;l~LQ3;=Alwm3/?m5028U' );
define( 'SECURE_AUTH_SALT', 'Xf|Ys} Z/%z2Wdv7` VRBvWTn% xT/nFUn5u.]p3yKr^h?16F#VOoA_mY)p+ckfW' );
define( 'LOGGED_IN_SALT',   ',/-~0DP1#rcXdk4v;5}N.I=)xzS=<GyYmH@+.m|h.zkwst.+:;@R6d0YFJw[=ssM' );
define( 'NONCE_SALT',       '=NdGblfJ<vj&AC0n#uI#&xy`<!/,vg]5Ftqb0QR^K=ty[D;XZBwA;c$E9~Ab&5G*' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp2_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'WC_TEMPLATE_DEBUG_MODE', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
