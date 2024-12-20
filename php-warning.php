<?php
// Plugin name: php warning

require __DIR__ . '/php-warning-1.php';
require __DIR__ . '/php-warning-2.php';
require __DIR__ . '/php-warning-3.php';
require __DIR__ . '/php-warning-4.php';
require __DIR__ . '/php-warning-5.php';
require __DIR__ . '/php-warning-6.php';
require __DIR__ . '/php-warning-7.php';
require __DIR__ . '/php-warning-8.php';
require __DIR__ . '/php-warning-9.php';

add_action( 'init', function() {
	if ( is_home() || is_single() || is_admin() ) {
		php_warning_testing9();
	}
});
