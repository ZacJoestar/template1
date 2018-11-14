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
define('DB_NAME', 'template1');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'c(%<,9^F5+gd$5egZ${M 5p!0c;wZ/N#_ZreG[Hqo*5y;m@tzuze$R7Zb|nV)+m=');
define('SECURE_AUTH_KEY',  '.(i_3FV1HJZSf.g,lUvw%Czrhsw{1tYB=Zm(e3rfcrKH/4zhBOKRBCowks,A]c.`');
define('LOGGED_IN_KEY',    'P7bn6x@@A$st2 XNx`pzq9E0&^xtDyYm8uD=a}2%uLHCpI#NC1gE#H.1[x|^x/C8');
define('NONCE_KEY',        'bVBj*Nq{hRu_3~eEA436Us~YF#g?~zU>rx[Vf1<C,h8{MBsx$$z4 /oOgF2712Ym');
define('AUTH_SALT',        '@V*TEhjEL<j.)=Q`^<WOt}Egf{jU#P=h<^<v9%/X4%Y>#Y9bnwl$]A?hZ.z4bHh6');
define('SECURE_AUTH_SALT', 'hF-|(wvJBKq<Tu*;AMF[t^Y;eM_/t4@}@3p6P[u>(zLQam~^eUVqcf3tp/CdRcDf');
define('LOGGED_IN_SALT',   '4+wc?}z5hz2;?V#:5n}-NYe#Z0|-N3;I0lrvsh* jZY7Og^To87:>P6s0dqo(.7T');
define('NONCE_SALT',       'eOz}-xl^Oph1f%]]|0?Evy/X5;>.!sDjC$Rw_7~}C{X~8zTWG>{jtvQz/aE41<&%');
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
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');