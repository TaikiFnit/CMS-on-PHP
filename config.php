<?php

define('DB_NAME', 'CMS');
define('DSN', 'mysql:host=localhost;dbname='.DB_NAME);
define('DB_USER', 'cms_user');
define('DB_PASSWORD', 'cms_password');

define('SITE_URL', 'http://localhost/control');
define('PASSWORD_KEY', 'dfaehefa');

error_reporting(E_ALL & ~E_NOTICE);

session_set_cookie_params(0, '/');
