<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wpdb_bikcraft');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'wpdb_user');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '16121983');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost:8889');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1i#8J*#go#xtQpR!dXaZ+G2,`yfwE<Ji0coJ<7^$aIY,>n39]+-]t^Z3H<]@{)Km');
define('SECURE_AUTH_KEY',  'YbPzTdnKZa.dy5E>9k)GcF!!+6V33=ueMd$jHc[6%S-r (N6%qi%CLQsMl{HUbn;');
define('LOGGED_IN_KEY',    'A8 NSyW`DFSDW6%HUNN]<OKd/k&5C3&Ex,@V>R)E!jxxy#XTaTT2>uVNMgUH.`O@');
define('NONCE_KEY',        '=wZ`]7x#tWd:6Urz6jNnT-z&I#4{#-&X=OeypDd0=88#4wE5|+ tM+pYNW,c>:0Q');
define('AUTH_SALT',        'tGiz&^Jfz[*.yWx1X5m2>LpBi0M(@c=2%]~U~97=:qw 1=0e@2`hp?v_vQr<Z0:)');
define('SECURE_AUTH_SALT', '9Y?A)bE8pVUFoI@f8e~b0o?>2O`S?[P<>ZW|t[b;ho2_6{wg+X-fPeU7Sjiyvkh:');
define('LOGGED_IN_SALT',   '>{=_C4#p0s<~+DgDkJ6sa@fFs<3ZdIGS/8qp,24r+p7*+_algX6s)oNrrWV*pX)~');
define('NONCE_SALT',       'jCD4&$I:%|+,~;HgaQ`$h]+&g0vvjeC-OT*5`1i(E%ZHb|K*d9VQ]OTW+y$B8bW]');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
