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
define( 'DB_NAME', 'petpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hKkeE<ueReg.vq(.Gx/:/Mz,+~oqjW(-iU+U=`ZEf&F&o^J 9@[DwNj$h+=Q3L-V' );
define( 'SECURE_AUTH_KEY',  'I^gBU-TWL7x;9Gu+9^p9U&iFW@@JdC[^+N]%P-& Ojz6LiD.&<gc4^=o`GG/c?Id' );
define( 'LOGGED_IN_KEY',    'Qiru]:+om0?3E7H)5^BWX(X< O[XRoTC^`=R/O,#lduX,|iB3B -.s_t/pRQ;5)E' );
define( 'NONCE_KEY',        'QQsm9G7Z~zt%Y{$D:moP%ma;2f#V37H72{{5 8%_5vC}[(R8F`s*Gt*(=Ej<S*QK' );
define( 'AUTH_SALT',        'oO]?l5^*]0LSm e3d0(txS}8@L9t@I2?4ACA-pdv(K$YMGVs3Xt(Da71D{~,m0R5' );
define( 'SECURE_AUTH_SALT', '7 Q^;}rUV?Q%7/H+?rloU;O.qtEQ6$5AM56aSevKlSY#56Y*o?Yh{O}ej~z?ls)J' );
define( 'LOGGED_IN_SALT',   '$:8|7wIpu~{qS; ?*/]n.m3E-81+kKk7]8Fa 9n{(6sH<1G*AuJ.x&ID}Z$Gl>Vm' );
define( 'NONCE_SALT',       '~fQ%=zsTpT`^>.eQ:g/P9})~1cVChhzA;> T4_ zlv5F<^MWr]r5ZC-yhy|bX#Be' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
