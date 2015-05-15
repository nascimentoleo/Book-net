<?php
session_start();
require_once("../control/Login.php");
require_once("../control/carregarGeneros.php");
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Book.Net</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" media="screen" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" >

</head>

<body>
    <nav class="navbar navbar-fixed-top navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand " href="../index.php">Book.Net</a> 
        </div>
        <div class="collapse navbar-collapse">
          <form class="navbar-form navbar-left " role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Buscar Livro" id="inputBusca">
            </div>

            <button class="btn btn-danger"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
          </form>
          <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
              <button class="btn btn-danger dropdown-toggle botao-categorias" data-toggle="dropdown">Categorias<span class="caret" role="button" aria-expanded="false"></span></button>
                <ul class="dropdown-menu" role="menu">
                  <?php exibirGenerosLista(); ?>
               </ul>
              </li>
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
          <?php
               if (!Login::isLogado()) { 
          ?>
            <li><a href="cadastrarUsuario.php">Cadastre-se</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false">Login<span class="caret"></span></a>
            <div class="dropdown-menu menuLogin" role="menu">
              <form role="form" class="form-horizontal" method="post" action="../control/execLogin.php">
              <div class="form-group">
                  <label for="txtUser">User</label>
                  <input type="text" id="txtUser" name="txtUser" class="form-control" required=""/>
              </div>
              <div class="form-group">
                  <label for="txtSenha">Senha</label>
                  <input type="password" id="txtSenha" name="txtSenha" class="form-control" required=""/>
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-success">Entrar</button>
              </div>
              
              </form>
             </div>
            </li>
          <?php
              }else{

          ?> 
      
              <li><a class="btn btn" href="../control/execLogoff.php"> <?php echo Login::userLogado() ?> - Logoff</a></li>   
          <?php   
           }
          ?>

          </ul>
          
        </div>
      </div>
    </nav>

