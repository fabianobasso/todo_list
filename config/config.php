<?php

$envPath = '.env.ini';
$env = parse_ini_file($envPath);

define('DRIVE', $env['drive']);
define('DBNAME', $env['dbname']);
define('DATABASE', '../db/todo_list.db');

