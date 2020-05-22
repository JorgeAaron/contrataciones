<?php 
include("conexion/localhost.php");

session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>


    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/propio.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap-theme.css">

      
</head>
  <header>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">CR Publicidad Contrataciones</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="index.php">Inicio<span class="sr-only">(current)</span></a>
        <?php if(isset($_SESSION['login'])) { ?>
          <a class="nav-item nav-link" href="puesto.php">Publicar vacante</a>
          <a class="nav-item nav-link" href="include/logout.php">Salir</a>
       <?php  } else { ?>
        <a class="nav-item nav-link" href="login.php">Iniciar sesión</a>
        <a class="nav-item nav-link" href="registro.php">Registro</a>
       <?php } ?>
        
      </div>
    </div>
  </nav>


  </header>