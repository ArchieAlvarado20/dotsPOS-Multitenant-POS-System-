<?php

if(PHP_SAPI !== 'cli')
	define('BASE_URL', getBaseURL());

/**database vars**/
define('DB_DRIVER', 'mysql');


	define('DB_HOST', 'localhost');
	define('DB_NAME', 'dotsbrew_db');
	define('DB_USER', 'root');
	define('DB_PASS', '');

	// define('DB_HOST', 'sql105.infinityfree.com');
	// define('DB_NAME', 'if0_39719926_dotsbrew_db');
	// define('DB_USER', 'if0_39719926');
	// define('DB_PASS', 'Ellengay1');

/**unique key for this project**/
define('UNIQUE', 'xdght');

define('APP_NAME', 'dotsPOS');
define('APP_DEBUG', 'true');

