<?php

    require_once '../config/config.php';

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- font awesome 5.15-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <!-- Script jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>

    <div class="modal-bg" id="modal-db">
        <div class="modal-lg" id="modal-prin">
            <div class="modal-title">
                <div>
                    <h3 class="title">Configurar Banco de Dados</h3>
                </div>
                <div class="modal-close">
                    <span class="close-modal">X</span>
                </div>
            </div>
            <div class="modal-contents bg-dark">
                <div><span class="text-terminal" id="line1"></span><span class="cursor">_</span></div>
                <div><span class="text-terminal" id="time-response"></span></div>
            </div>
            <div class="modal-buttons bg-dark">
                <div>
                    <button id="create-db" class="btn btn-warning btn-sm">Criar Banco</button>
                </div>
                <div class="version">
                    <span>Sqlite3</span>
                </div>
            </div>
        </div>
    </div>
    

    <nav class="navbar navbar-light bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand"><img src="assets/img/logo.svg" width="60" height="60" class="d-inline-block align-middle" alt="App Lista de Tarefas"><span class="logo">App Lista de Tarefas</span></a>
        </div>
    </nav>

    <div class="container app" id="todo-container">

        <div class="card">
            <div class="card-header bg-dark td-flex-row">
                <div class="td-icon">
                    <img src="assets/img/logo.svg" width="30" height="30">
                </div>
                <div class="td-title">
                    <h3 class="login-text-change">Login</h3>
                </div>
            </div>

            <div class="card-body"  id="login-todo">
                <?php require_once 'assets/Views/index/login.phtml' ?>
            </div>
            <div class="card-footer text-right bg-dark">
                Configuração <button class="btn-custom-config"><i class="fa fa-cog fa-spin fa-lg"></i></button>
            </div>
        </div>

        <?php if(isset($_GET['auth'])): ?>
            <div class="alert  mt-3 alert-danger alert-login"  role="alert"> É obrigatório fazer o login</div>
        <?php endif ?>
        <div class="alert  mt-3 alerts-todo"  role="alert"></div>
    </div>

    <footer>
        <div class="fixed-bottom todo-footer bg-dark"> 
            <div class="todo-copy">
                Copyright &copy; <?= date('Y') ?> <span class="author">Fabiano Basso</span>  
            </div>
            <div class="todo-version">
                <span class="version">@Versão 1.0</span> 
            </div>
        </div>
    </footer>

    
    <!-- Script app -->
    
    <script src="assets/js/app.js"></script>
    <!-- Script BootStrap -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>