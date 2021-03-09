<?php
error_reporting(0);
require_once '../config/config.php';

if(!empty($_POST['fileLoad'])){
    $fileLoad = $_POST['fileLoad'];
    unset($_POST['fileLoad']);
    try {
        require_once CONTROLLER.$fileLoad.'.php';
        
    } catch (Error $e) {
        echo "O Controller $fileLoad.php não foi encontrada";
        echo $e->getMessage();
    }
    
}else{
    echo convertJson('fileload', 'false');
}


