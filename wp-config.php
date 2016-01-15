<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'u0108887_default');

/** Имя пользователя MySQL */
define('DB_USER', 'u0108887_default');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'EC!83Ekp');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'n^:ZqQw`]+)`BB|k^w(C*dN|FN^M,o3~Pp5RnJ?:QKJOE)@R=W0NOHil= R&4Jm_');
define('SECURE_AUTH_KEY',  ' 7!3sDKtzx@Bigmr@N}(kovXoyh&>rBQ+r<8ActCTQfY9;nW&QJ*!#!(B|R:5?~j');
define('LOGGED_IN_KEY',    '%(O@.ly`rTdB{*&h/M)NhPs[s8zf_h?*e3z|bWS[3^/}#LM-Du?C6[A pM-#l;,z');
define('NONCE_KEY',        '>py_c;&MD1|xy&_MZ$Bwi;FuS;oE0OV2s|cTL+(E(V<xVi -ePsys8rbeco<qQk8');
define('AUTH_SALT',        'VaJmZ+-c]# ZyuE[^1|OyCELVVZ@-u6@>AQ}b5} .K|@J(f?Nu!%0.-31(`,M|c-');
define('SECURE_AUTH_SALT', '4xniKGa`:--89ezRs8rCgC:PiCg9Cte=Atua:wG/*KhkpB3)?%q+^6$/nJVxJr]F');
define('LOGGED_IN_SALT',   ',M#-KCw$W$-yR-]>K.DDm4-iw/SHs&S?u<~n%ZPiq+65,/$A?+?snn<sJ(2Bf.#6');
define('NONCE_SALT',       '!D;s=kr]%4B-_)rm,-?2AIzz&t}]oD4z:/:S2Dl`+_/(arQ5J2@.ED;-+[iDE5$&');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
