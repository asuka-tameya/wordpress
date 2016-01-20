<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2/_*7bgVE<:W&*~aD2uvl%/X}Z-b-IB+:s<Bg~D1{LB`!U.Mk)MVSjn0OM!F$nps');
define('SECURE_AUTH_KEY',  'R;>jKDO?pqHq)uP1Q$d.z[-?L*WU906Ygx6`Iv>@gbsf 6 kD+yE7>+=YRjfzA7p');
define('LOGGED_IN_KEY',    'dZ}+C;e,WMQqN]0.K-+Hp&(e-0w>-eDq/jTzX|m<J $AYN/0eDk&o/MshO|I5-1R');
define('NONCE_KEY',        '0z|R&MY.vQ/.m#~k<s4QUOh>+MHZ2?0|B;BDw ){c~shK[[z0rTb)Q|cqJl7-L5^');
define('AUTH_SALT',        'R<-vP/-C?2S;nm*u?*lH|Mkc?qj2l.bUeK8&[}~AV}_s`^@Wxti%+<Z}mrGv]{YN');
define('SECURE_AUTH_SALT', ':-OY51wZ14Fl|@g] ?S-bNHO]88~9yo+Ub[.pN4qNF;HXC+nH&91-UW%bsaO+aK]');
define('LOGGED_IN_SALT',   'Xq#h;nQyTd-#(}#c](Vj,T0kk}1MT}Fj5+vjP(a6Z,Zb%y19HGJdS}/hP5m0.]#o');
define('NONCE_SALT',       'bgr*sR1E/AI%}>lx89n~;/}<|!S-KN|n;s.5u|9F1DFL1|WT4++HWxg]b@2o)+9_');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
