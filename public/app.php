<?php
    session_start();
    print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Lista de Tarefas</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <!-- Css customizado -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- font awesome 5.15-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
</head>
<body>
    

    <nav class="navbar navbar-light bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand"><img src="assets/img/logo.svg" width="60" height="60" class="d-inline-block align-middle" alt="App Lista de Tarefas"><span class="logo">App Lista de Tarefas</span></a>
            <div class="logout">
                <a href=""><i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>
    </nav>

    <div class="container app"  id="content-home">
        <div class="row">
            <div class="col-md-3 menu">
                <ul class="list-group">
                    <li class="list-group-item azul active"><a href="">Dashboard</a></li>
                    <li class="list-group-item verde"><a href="">Nova tarefa</a></li>
                    <li class="list-group-item vermelho"><a href="">Tarefas pendente</a></li>
                    <li class="list-group-item azul-claro"><a href="">Tarefas concluída</a></li>
                </ul>
            </div>

            <div class="col-md-9">
                <div class="container pagina" id="content-menu">

                    
                    
                </div>
            </div>


        </div>
    </div>

    <!-- Script jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Script app -->
    <script src="assets/js/app.js"></script>
</body>
</html>