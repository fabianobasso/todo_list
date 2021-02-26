<?php

function erroJson($key, $value){
    $error = [$key => $value];
    return json_encode($error);
}