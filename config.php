<?php

define('DB_NAME', 'CMS');
define('DSN', 'mysql:host=localhost;dbname='.DB_NAME);
define('DB_USER', 'cms_user');
define('DB_PASSWORD', 'cms_password');
// ニュースが格納されているtableを特定するために使用するキーワード
// The TABLE_KEYWORD is used to extracts the table which has articles.
// It is used like this : show tables from DB_NAME like TABLE_KEYWORD
// Default value '20%' means the table name include '20xx;
define('TABLE_KEYWORD', '20%');

define('SITE_URL', 'http://localhost/control');
define('PASSWORD_KEY', 'dfaehefa');

error_reporting(E_ALL & ~E_NOTICE);

session_set_cookie_params(0, '/');