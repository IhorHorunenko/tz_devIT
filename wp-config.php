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
define('DB_NAME', 'polinadc_wp1');

/** Имя пользователя MySQL */
define('DB_USER', 'polinadc_wp1');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '19972507b');

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
define('AUTH_KEY',         'Z&{5iz&w,=/&_$$|IJiXSQ3<i]{_/WTl]m(NaC?<@rz`=e9_@>oH#Szx/EW$n97r');
define('SECURE_AUTH_KEY',  '|[6rh?ptWV]/qsf:+TS+y>4C*/R}sxvl9b&5nU{dU[Nka]UX2n^F&+-(uTs`LW3`');
define('LOGGED_IN_KEY',    'nraIUX|$j=Gli~IAJ^4j^shW7M4Bg2=$UZJ5Mu}t}D(}z!YkB$,|#&_#RK>gQg#L');
define('NONCE_KEY',        'FRHgrp(4xTjn$*V61mRUFEg22hPDzHj:-O^c6BUuM0EWAS`;;v+Cs++{ZhPWJ[lO');
define('AUTH_SALT',        '!ENO;DV:sWN <JP*].t$NU>(;ae/5ygx4/x4_;zDwG}L--5=+ong%s8S01HeOChW');
define('SECURE_AUTH_SALT', ';X3F>mec[hw@|z[&N~nvE8/83<W[>Gv^@II *ylla4;:B=E-EstbPgcJQkP%*Y5c');
define('LOGGED_IN_SALT',   '&tEAFF:};g1,KEL$ck,6}vro {E`yua/eZkaj]^fpXqrFiDOZ2Q1ep5v;nQ{Yn-h');
define('NONCE_SALT',       'h;PT|1M%X<?j;uym sD_g~uW`H_NLz>L+ O&wxiwctUmPx9m;N%v1m.2f$nk9g|]');

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