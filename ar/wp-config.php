<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'sbtcompan_tst');

/** Имя пользователя MySQL */
define('DB_USER', 'sbtcompan_tst');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123qwe123');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5n|+P=bfMlDYSM}4Y,9sI=3y1VZiymr).`r?3zR6s+U;+29#|VUtfGMD5E1B|uqA');
define('SECURE_AUTH_KEY',  '-/{u!A&ptz0qJ*h68>C{W>jmW^C6^#/v3g7-rxOViRbN$14z[4DA$zZ:0yMD`x=V');
define('LOGGED_IN_KEY',    'yO0z%*R}T5XW5?+m|w|WW5Gs(?L]}5vG]#6g-d|U#Ma&d!W5@44.*8%{C]<PI0Om');
define('NONCE_KEY',        'u$8:_wqV2H-Y#7-p IDx$dU_O=sko<}ZO4wQ6|*/m- I*DY|g%(4?cEx08S1OZnG');
define('AUTH_SALT',        '.!(b&B{{L+DVa3wo]b9B!ga++Q2j;R:u2|JK.DW$=B2!RO-0&mV5pRT!J2@4D$-s');
define('SECURE_AUTH_SALT', '+Fc+C[-[Dbz,;F(jN5@Xv?s2:q@`YN7w~[voUP||(WL`C#Fas.e(9{8.bhfX7+ss');
define('LOGGED_IN_SALT',   ',bsjSj|: ab+w&]!9Ptm2Z} (wvvp+gDsLwg~&g>YWT`2g;{l^;~#j9B^U=RQ-L?');
define('NONCE_SALT',       'cx?th&4Xs4kuq%`1|b9Vp_`F8|HPQ*Y$vP+H{H-4yAv[s#1F&Lj2~vpWZuTN(pDV');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
