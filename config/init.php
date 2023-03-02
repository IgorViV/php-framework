<?php

define("DEBUG", 1); // 0 production
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/frw');
define("HELPERS", ROOT . '/vendor/frw/helpers');
define("CACHE", ROOT . '/tmp/cache');
define("LOGS", ROOT . '/tmp/logs');
define("CONFIG", ROOT . '/config');
define("LAYOUT", 'main');
define("PATH", 'http://localhost');
define("ADMIN", 'http://localhost/admin');
define("NO_IMAGE", 'uploads/no_image.jpg');

require_once ROOT . '/vendor/autoload.php';

