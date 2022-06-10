<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel='stylesheet' href='<?=base_url('public/bootstrap/css/bootstrap.css')?>'>
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
                <a class="nav-link" href="<?=base_url('listaCliente');?>">Listagem dos clientes</a>
                <a class="nav-link" href="<?=base_url('cadastro');?>">Cadastro</a>
                <a class="nav-link" href="<?=base_url('listaFilmes');?>">Listagem dos Filmes</a>
                <a class="nav-link" href="<?=base_url('cadastroFilme')?>">Cadastro de Filmes</a>
                <a class="nav-link" href="<?=base_url('login');?>">Login</a>
            </div>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-6 position-absolute top-50 start-50 translate-middle">
            <form action="doLogin.php" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="txtEmail" name="email" type="email" class="form-control" required></input>
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input id="txtSenha" name="senha" type="password" class="form-control" required></input>
                </div>
                <input id="btnLogin" name="btnLogin" type="button" class="btn btn-primary" value="Entrar"></input>
            </form>
        </div>
    </div>

</body>
</html>

<script src = 'public/js/jquery-3.6.0.min.js'></script>
<script>
    var base = '<?=base_url('login')?>'

    $('#txtEmail').val('kevinlima138@gmail.com');
    $('#txtSenha').val('123456');

    $("#btnLogin").click(function()
    {
        getDadosCadastro()
        // redirect()
    });

    function getDadosCadastro()
    {
        $.post(
        base + '/login',{

            email:$('#txtEmail').val(),
            senha:$('#txtSenha').val()

            }
        );
    }


    function redirect()
    {
        window.location.replace('<?=base_url('listaCliente')?>')
    }
</script>