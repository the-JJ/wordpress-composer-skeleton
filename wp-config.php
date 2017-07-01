<?php

if (file_exists(__DIR__ . '/config/secure-config.php')) {
    include(__DIR__ . '/config/secure-config.php');
} else {
    throw new Exception("No secure config file found.");
}

/**
 * Site url and home url. Remove these if you want to configure them in database.
 */
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);

/**
 * Custom content directory
 */
define('WP_CONTENT_DIR', __DIR__ . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');

/**
 * You almost certainly do not want to change these
 */
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

/**
 * Table prefix
 */
if (defined('DB_PREFIX')) {
    $table_prefix = DB_PREFIX;
} else {
    $table_prefix = '';
}

/**
 * Language
 * Leave blank for American English
 */
define('WPLANG', '');

/**
 * Hide errors
 */
ini_set( 'display_errors', 0);

if (defined('WP_DEBUG') && WP_DEBUG === true) {
    define('WP_LOCAL_DEV', true);
    define('SAVEQUERIES', true);
    define('WP_DEBUG_DISPLAY', true);
}
if (!defined('WP_DEBUG_DISPLAY')) {
    define('WP_DEBUG_DISPLAY', false);
}

/**
 * Bootstrap WordPress
 */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/wp/');
}
require_once(ABSPATH . 'wp-settings.php');
