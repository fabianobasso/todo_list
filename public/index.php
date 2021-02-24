

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

    <div class="container app">

        <div>
            <!-- <button id="create-user">teste</button> -->
        </div>

        <div class="card login">
            <div class="card-header text-center login-title" id="login-form">
                Login
            </div>
            <div class="card-body ">
                <div id="login">
                    <form action="" class="login-form">
                        <div class="form-group mb-5">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-lg fa-user"></i></span>
                                <input type="text" name="email" class="form-control" placeholder="usuário">
                            </div>
                            
                        </div>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-lg fa-unlock-alt"></i></span>
                            <input type="password" name="senha" class="form-control" placeholder="senha">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Login</button>
                    </form>    
                </div>

                <div id="cadastro">
                    <form action="" class="cadastro-form">
                        <div class="form-group">
                            <div class="input-group">
                                
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Nome</span>
                                </div>
                                <input type="text" name="nome" class="form-control">

                            </div>
                            
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Email</span>
                                </div>
                                <input type="email" name="email" class="form-control">
                                
                            </div>
                            
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Senha</span>
                                </div>
                                <input type="password" name="senha" class="form-control">
                                
                            </div>
                            
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>    
                </div>
                
                <div class="login-text">  
                    <button id="create-user" class="btn-custom">Criar usuário</button>
                    <button class="btn-custom">Esqueceu a Senha?</button>
                </div>

                <div class="cadastro-text">  
                    <button id="cancel-registry" class="btn-custom">Voltar</button>
                </div>
                
            </div>
            <div class="card-footer text-right login-title">
                Configuração <button class="btn-custom-config"><i class="fa fa-cog fa-spin fa-lg"></i></button>
            </div>
        </div>
    </div>

    <!-- Script jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Script app -->
    <script src="assets/js/app.js"></script>
</body>
</html>