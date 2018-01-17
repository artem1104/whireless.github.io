<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'summary');

/** Имя пользователя MySQL */
define('DB_USER', 'admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'admin');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '2l @k!X3(JrQEO&x`2{Td=HA,.+>3N8)qE6%G5~G&fhdf/JXDRGtCUJ*QYb<};[,');
define('SECURE_AUTH_KEY',  '#md|62%nqBM,5ujNtTz$)K)N(9a@,>79k_FB{Bx>-I8Z}x|P>NPA,O3wM:6#a70,');
define('LOGGED_IN_KEY',    '`Sev9(kpwfuaq%^C]1JO+|fcl89ntl_ekMn-#DT8,:sj}_M];RYu:Ur2)`9w I)5');
define('NONCE_KEY',        'e7|dz0*v&N@Crq1&bx$>k]Vs>CGF(^)_.$<KxDY:k2MYF_=ZlyrqEQEFG*doexF(');
define('AUTH_SALT',        'k@50b8VaUfFM_xo@:w-hbfr;^18Tpvc**37]+]<>H,cMz-Zk&_-pVGcf7,C*A>Ai');
define('SECURE_AUTH_SALT', '_B j0+HsSP+QTv0@d659!icg<8$,;`lC:v!Xgc#nQ~G0D_i1o02L97n7}sPXAi]#');
define('LOGGED_IN_SALT',   'd]5*WNODIn&Lk9Azd@fMR#<yM_]J&*D3y(0UL.22BjC}82$!2W}htGto_@pd%]OU');
define('NONCE_SALT',       '+2fg,$N3i<*QxIA`fr<e*qUW?%:!QoM+aO0iES/|WB^s/{.{JTLI1aOBXh;rYbPa');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'zxcvbnm12345_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
