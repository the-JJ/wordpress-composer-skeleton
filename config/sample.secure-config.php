<?php

define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASSWORD', '');
define('DB_HOST', ''); // Probably 'localhost'
define('DB_PREFIX', 'wp_');

// Set to false (or remove line) on production environment
define('WP_DEBUG', true);

/**
 * Wordpress security salts.
 * Generate these at https://api.wordpress.org/secret-key/1.1/salt
 */
define('AUTH_KEY',         'change me');
define('SECURE_AUTH_KEY',  'change me');
define('LOGGED_IN_KEY',    'change me');
define('NONCE_KEY',        'change me');
define('AUTH_SALT',        'change me');
define('SECURE_AUTH_SALT', 'change me');
define('LOGGED_IN_SALT',   'change me');
define('NONCE_SALT',       'change me');
