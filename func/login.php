<?php
session_start();


require_once 'utils.php';

if(file_exists(DATABASE)){
    $_SESSION['user'] = 'fabiano';
    echo '1';
} else {
    echo erroJson('db', 'banco não exite');
}

