<?php


if(file_exists(DATABASE)){
    require_once MODEL . 'User.php';
        
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){ 

        $name = trim($_POST['name']);
        if(strlen($name) < 3){
            echo convertJson('name', 'false');
        }else{
            
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                echo convertJson('email', 'false');
            }else{
                $email = $_POST['email'];
                $password = $_POST['password'];

                $user = new User(Connection::connect(), $name, $email, $password);
                try {
                    $row = $user->createUser();
                    if($row > 0){
                        echo convertJson('register', 'true');
                    }else{
                        echo convertJson('register', 'false');
                    }
                } catch (PDOException $e) {
                    if($e->getCode() == "23000"){
                    echo "$email, já esta cadastrado no sistema";
                } else {
                    echo "Codigo: {$e->getCode()}, Mensagem: {$e->getMessage()}";
                    }


                }   
            }
        }
        
        


    } else {
        echo convertJson('inputs', 'false');
    }
}else{
    echo convertJson('banco', 'false');
}






