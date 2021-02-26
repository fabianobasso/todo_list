<?php

if(file_exists('../db/todo_list.db')){
    require_once '../config/Connection.php';
    require_once '../app/Model/User.php';



    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){ 

        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
        $name = trim($_POST['name']);
        if(!strlen($name) >= 3){
            header('Location: /?name=erro');
        }
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            header('Location: /?email=erro');
        }
        $email = $_POST['email'];
        $password = md5($_POST['password']); // para cripitrografar a senha no banco

        $user = new User(Connection::connect(), $name, $email, $password);
        try {
            $user->createUser();
            header('Location: /?sucesso=cadastro');
        } catch (PDOException $e) {
            if($e->getCode() == "23000"){
                header('Location: /?duplicidade=email');
            } else {
                echo "Codigo: {$e->getCode()}, Mensagem: {$e->getMessage()}";
            }


        }


    } else {
        header('Location: /?cadastro=erro');
    }
}else{
    header('Location: /?banco=configurar');
}






