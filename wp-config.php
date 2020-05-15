<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'y_db' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7-xe/Cj+VzI4SgJ4x0SMYIK!%%}ro5GS54Zq]?T<m=~b<0As|<uNtVlxuMJi&I8K' );
define( 'SECURE_AUTH_KEY',  'M,R93w|7)YrUO?UMB]r%Vd3t}PL oRG9c;P+DS%tVEz[K(:`qit_`1<r#O9w1oB/' );
define( 'LOGGED_IN_KEY',    '-IFsuh<]18J.8>`: ur),C{m fyn#V.R^Tc!o;_w6Tr5#yB<bgp,*_aKNu+R/|ux' );
define( 'NONCE_KEY',        '&#+Sco4~C-xMM_yt3oGIJ/fkN3]h)g=fe4Q*kc1cb7QRkx7cKrU2~9;n!$8:zi_/' );
define( 'AUTH_SALT',        'kFq6+sEpl +7:[BE=-u$0{!x-:*+&GNg[a;$dV2Q^2)h}dS9N]h{]Lj{Lk?QhNN@' );
define( 'SECURE_AUTH_SALT', '$Z;OiJCLJVx|uEG+TI`BFmHKBw6_FWZ2KpXTQWV/WS|#`,d-%!Cpn|5wT^,V+Jfg' );
define( 'LOGGED_IN_SALT',   'O Dqj?(tp!=kEV`v@qamIo6/{t Hva_:4I2R[=iCP3_r$bS5$A`v}1gwo)4mvZe@' );
define( 'NONCE_SALT',       '8-o%{m1G`]hSA`I.g]/G-{gt9MD<&tzq?|n:(dFML5AAxa3r36(5bgekNEyC]blq' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
