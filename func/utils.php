<?php

function convertJson($key, $value){
    $error = [$key => $value];
    return json_encode($error);
}

// Saudação de acordo com a hora
function salutation(){
    $hour = date('H:s');
    if($hour >= '00:00' && $hour <= '11:59'){
        return 'Bom Dia';
    }elseif($hour <= '17:59'){
        return 'Boa Tarde';
    }elseif($hour <= '23:59'){
        return 'Boa Noite';
    }
}

// Logoff
function logOff(){
    session_start();
    session_destroy();
    header('Location: /');
}

// load view
function loadView($url){
    $view = explode('?', $url);
    return $view[1] . '.phtml';
}