<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'truyenngan' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rFO7i~t3KWk&~HF@@8h/x0}5E!wWv(<DE?).5-kRGV)K:+VV}|@TgWT$0oiG 9kO' );
define( 'SECURE_AUTH_KEY',  '?pcP6t0`$Y`yvB @gN U3#aVS^-@.AvL+yrM>M!MxqZ9 W8$_sC[O)iPx;9/e#Y%' );
define( 'LOGGED_IN_KEY',    'OOqtzS|Z#<%/v)x)@E|)t30.h9%/1K3v9FKwgR#pX!hwu;/eCb=wEEwhLfJp||d-' );
define( 'NONCE_KEY',        ':Ml7,4$=$r]J!/z1]GsaAVmL?at<_2^Ka,|bBITiK6f]kR1%eE<Yyp{PtGuvy:^#' );
define( 'AUTH_SALT',        'F7OG:azxu@mdL.Z{+8!D5% zcbrcDQ}i1 qN@& w`{Addg&t.T`*?sj:$LJB7|>l' );
define( 'SECURE_AUTH_SALT', 'thmb<YSCJid+P(eA#pl>.3Zmp#h7CG<8kU0i#m~654coUiI_93kj8+I$}ot2wWD%' );
define( 'LOGGED_IN_SALT',   ',l )`|p?{e3NXmAW3b,lnkUQ,N=nO+yb}$y+{,D:|Z,VBTV1){&m[w=sNicdMDUo' );
define( 'NONCE_SALT',       ',Vt+pBF.dik4q{zNls(tZxhAoYUm[]ixKtsL`D-XK-W<4=lX]Ri3h!u.)y`$dtrK' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
