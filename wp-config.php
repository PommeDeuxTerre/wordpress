<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress652' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2[z$KK]5a5Dao6otwdQ<1hXlso<Ym2m7B(ZJVyxk[_p{C=yjmCv!`uX9^1)0nGh;' );
define( 'SECURE_AUTH_KEY',  '}J`a%{9Sy/8Z2?RkDWyw?V5x6!m9[q6UA.OmovFjJ.0c^O><Q`/3FKCIU^3YN<<C' );
define( 'LOGGED_IN_KEY',    '<fBDIE<h%q%@&{)%j^m<]`|g@vk4CA#}{FaS*KR9<GgPx9rQP- u_?#*U=?]P{e3' );
define( 'NONCE_KEY',        '7^scdf/YU@#iN^$-P.-3Ov$cJeI,l=Tfk3g/&b%>9IVuOpd)Pv<F<Qt8W.(}5H{4' );
define( 'AUTH_SALT',        '/Bp|%p%in7@)cf#H0HB&#B=.yekhGUrogD3E~VWQ63<.QBB,2nU<OVi/Fi6K;P!_' );
define( 'SECURE_AUTH_SALT', 'Kc},}{z/cM)G5-:9=8 YEI4D4vb~nPJ4%@6)>S]9#AFCe]0%&K+N(A3cJ&4Y7{ym' );
define( 'LOGGED_IN_SALT',   '~sr#qqWzA{km~NiZA~~^sF~ld86b>~e,]m:A!P<N_EaFzQ00Ey/.P)rVy+I-rD-4' );
define( 'NONCE_SALT',       '$TA~WOvb1{)l|(|VXyfF8BWLd`0gnPbZDsN9CF`.i;5,^ZS6nT<}B!.8:/8SJh%~' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp652_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
