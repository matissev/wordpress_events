<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress_calendar');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'matisse');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '84266248');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*7,kRRb]8(so,y8lLS0/#e{pDp8f{83h>dFS:l/kc1VFy,-GJ}wo@ m3-IC.>U`>');
define('SECURE_AUTH_KEY',  '8awi`0)DVJicg]qk~|QrQB^[-zKnc(#gEr]z=e)=(gzUFhaJ=U0DW]!pXqRi>)Y#');
define('LOGGED_IN_KEY',    '?Z|<Yku}&tispaLmz^+@_L,WbiGLw-z93SsP3Y<;njlF<X5MO|$}TWOe9K!naU9j');
define('NONCE_KEY',        '_vDC06EyZtiFEzbCwrH{c}&~>5#XRsXm*Bvef,Q/%sV^5ly*J4}hQ_(O6qRt.2T:');
define('AUTH_SALT',        '%X+GyUH43#wP@LRg7:tTlUoR~#kDV. K!aLUe^l:bG-H&t]3aX613O6[0kElK, ?');
define('SECURE_AUTH_SALT', 'QFGnt##TJd;2@%)[xCxW~v|UnAc749%Z |rj?T$c`D1OeRBcI<x>Jt}`|lmL^xqV');
define('LOGGED_IN_SALT',   '~c8()%[ihYKwq(<|P-.{jca!Kv%Jwm9 c#}yw`-AS)l3DF+RQfjkg9S9~?1+/9Ij');
define('NONCE_SALT',       '>;CXm9i@&)62fsIeb[k;s^{a``EphMOC4/Zyk%HC{5kZ7F1&,)kAPh#1c!7/f5*!');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');