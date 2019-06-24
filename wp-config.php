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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '2201' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '@;<t.sLOE@@Rzg@TH?T*=t&~#jL;$gV~d-;wDH3c9P([K:t(-B9[y^5l%s36*.P[' );
define( 'SECURE_AUTH_KEY',  's`Zs~*) pSj}cGEo$sI{u~8;x@<2jwFFc02I[.;*l&:?]huMT(n2@,Ose Xxg~<J' );
define( 'LOGGED_IN_KEY',    ' m)s7bEG,f%<-!pR+xs[;cHe~3{zW=e|-LPd 2#!PAq.I|Pa9(AwRW:SjKiCR]xZ' );
define( 'NONCE_KEY',        'WOYVd&cLLFJ?];[fwl~lS;X$[:X|7i|B~a3:Tc0$OUqP4M@RtGOx_TrBy`G7*fFW' );
define( 'AUTH_SALT',        '{rZ[PM>tyBcQrk`|*:7I6YCCD[Olb;V~jqrbrUxt-V>ldD~Q#S/<fw@_c?G!*`)!' );
define( 'SECURE_AUTH_SALT', 'EK,P*0Tl- q}<}xi$scQ_RagKQDNC*mSyA^s]+~VX2))*Q@@J:3r%1}uC&p9%!kx' );
define( 'LOGGED_IN_SALT',   'An?*z#=aW+YTGrBOhB6mgG1@(Tf5z$k+N1[Hy6q1UG3j&&rrDa$l;Ng>E^p[nLMA' );
define( 'NONCE_SALT',       '=I5w^OX_e)Mg|YWrhZK~s,SmY@pj#1U@8.y29,K({A~9Up~2d1P7*Pz7vH;/ZOT3' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
