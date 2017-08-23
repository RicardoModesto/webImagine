<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
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
define('DB_NAME', 'webImagine');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'webImagine');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'webImagine2017');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'B#xOO!qR/X8qPfn&omq-W0<*H#MqQ=G{[%l8`WN/m7O.KV?s3u)N-wzbw;heko[L');
define('SECURE_AUTH_KEY',  '+Ydrx=Y5:{geb-*AfQFbCCHP!,c@8,AYdNZ#~<RQjk]IoD^ES*a.d{J_!xg#uAP9');
define('LOGGED_IN_KEY',    'Kcz$1y0lsTg}1OA>nabU#{VS27f&zj9MRP$2NR_{&M1D<z uUi&Ta_ctHqGiBQf_');
define('NONCE_KEY',        '2~5HJ^H$c?,_~[X&xamGdj-H=fR#g~!q~ua[/zRCpS6id@ ssC`}H@zJWRJ0$hs@');
define('AUTH_SALT',        '+NNyxPSzg~[lOD~;1+;e{T-Q*$-9wuw%m]rfk26?e9rUEvKckWc)Ybfsx:1~yw79');
define('SECURE_AUTH_SALT', '{re*KIWkS=z.S?cFx~6E5_[lE6,)XkP[<Hy]1I2w%IJ{KP>M=WLW#pa@<B;Adp,9');
define('LOGGED_IN_SALT',   'IgPIR ;8%TC*:oApIq<RFBt D=is[&IMb8]&!_T~-5rcF8]^88&.O,P0Pl*kB^;5');
define('NONCE_SALT',       'RexPkw_W;R&X/&j+EA@IyYz(RjEW5|lh6DMVKdlYK dW}L`{bwPq.kE.lpueql/l');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
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
