<?php

    /**
     * Arquivo que configurar as rotas para usar ajax no app
     */
    
    $router = '../';

    $router .= $_POST['directory'].'/';
    unset($_POST['directory']);
    if(!empty($_POST['subdirectory'])){
        $router .= $_POST['subdirectory'].'/';
        unset($_POST['subdirectory']);
    }
    $router .= $_POST['file'] .'.php';
    unset($_POST['file']);
    


    require_once $router;