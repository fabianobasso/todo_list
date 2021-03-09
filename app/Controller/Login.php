<?php


if(file_exists(DATABASE)){
    require_once MODEL . 'User.php';
        
    if(!empty($_POST['email']) && !empty($_POST['password'])){

        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            echo convertJson('email', 'false');
        }else{
            
            try {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $user = new User(conn: Connection::connect(), email: $email, password: $password);
                $loginApp = $user->login();
                
                if($loginApp){
                    echo convertJson('login', 'true');
                }else{
                    echo convertJson('login', 'false');
                }
            } catch (PDOException $e) {
                echo "Code: {$e->getCode()}, Mensagem: {$e->getMessage()}";
            }
        }
            

    }else{
        echo convertJson('inputs', 'false');    
    }

} else {
    echo convertJson('banco', 'false');
}

