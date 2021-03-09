<?php
    session_start();
    if(!empty($_SESSION['id']) && !empty($_SESSION['user'])){
        // Header app
        require_once VIEW . 'header.phtml';

        // Logica para Mudar a VIEW
        require_once VIEW . loadView($_SERVER['REQUEST_URI']);

        // Footer app
        require_once VIEW . 'footer.phtml';
    }else{
        header('Location: /?auth=false');
    }