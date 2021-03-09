<?php

$envPath = '.env.ini';
$env = parse_ini_file($envPath);
define('DIR_BASE', '../');
define('MODEL', DIR_BASE. 'app/Model/');
define('CONTROLLER', DIR_BASE .'app/Controller/' );
define('VIEW', DIR_BASE . 'app/View/');
define('DRIVE', $env['drive']);
define('DBNAME', $env['dbname']);
define('DATABASE', '../db/todo_list.db');

require_once 'Connection.php';
require_once '../func/utils.php';

