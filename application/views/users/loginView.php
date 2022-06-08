<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel='stylesheet' href='public/bootstrap/css/bootstrap.css'>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?=base_url('');?>">BlackDragons</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="list.php">Listagem dos clientes</a>
                <a class="nav-link" href="create.php">Cadastro</a>
                <a class="nav-link" href="pagina2.php">Listagem dos Filmes</a>
                <a class="nav-link" href="pagina3.php">Cadastro de Filmes</a>
                <a class="nav-link" href="index.php">Login</a>
            </div>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-6 position-absolute top-50 start-50 translate-middle">
            <form action="doLogin.php" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" class="form-control" required></input>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input id="senha" name="senha" type="password" class="form-control" required></input>
                </div>
                <input id="btnLogin" name="btnLogin" type="button" class="btn btn-primary" value="Entrar"></input>
            </form>
        </div>
    </div>

</body>
</html>