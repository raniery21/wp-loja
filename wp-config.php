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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp-vendas' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'sr$tEK:+->b*U<1eO[u#G}LcISz=2?gv-Nz5._?C{kJw5[WY<ZU>)$mr5MZL{8,*' );
define( 'SECURE_AUTH_KEY',  '~X; Hg[&6H@=erelg_^MYGfGxXIeFO2zjx2OQwW~0d5!~S^2HU{6_xS7;C|0w.6d' );
define( 'LOGGED_IN_KEY',    '~A/..%h=Y:o2{@vf!l0g]{X;O}4cV;t1*yo4Ra@Jqmya 8GIx|{CJ:m?!~VyH 9i' );
define( 'NONCE_KEY',        'GH0dN^91CC[nlBqyG~%TV13${g~FRyI9MW)|Q N`A`+RhA0TV^0,zG]fLvY2xb,y' );
define( 'AUTH_SALT',        '5>}zoUjy<p4IFkWd+_Nm2<&7r0*y)5h;7]#J}K940l:t3z[aa&ukGE]g5PWV%f$n' );
define( 'SECURE_AUTH_SALT', '.`]$5ahhKFfi8@M<;hU^l3^-JZ`2cjy~9z@C?3=!S4wMC)S-5C_dtSFoNT6xTOWv' );
define( 'LOGGED_IN_SALT',   'G8VSx`a[bk3.tH3dr[Gjt7~(z31Qi&|QU>!,aLE3}hJYWMA|4=At^ 7j3ZVG(z#z' );
define( 'NONCE_SALT',       '5{!;T>u7_514bcX[<}cA<-r1/=o+eBwUIp:8zMw3d-MdQz_f~u,6Uh5O9y{~!G9 ' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
