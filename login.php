<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login iPet</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/dist/css/adminlte.min.css">
<link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">

<style>
  body{
    /* background-image: linear-gradient( to bottom, #E89829, #F5A659, #B9B4B1 ); 
     background-attachment: fixed; */
     background-color: 	#8FBC8F;
  }
</style>
</head>

<body >
    

<div class="container" style="width: 100vw; 
height: 100vh;
display: flex;
flex-direction: row;
justify-content: center;
align-items: center;">
<div class="card mt-5 " style="width: 24rem;">
              <div class="card-header ">
                <h4 class="text-center">Login</h4>
                <?php
                if(isset($_SESSION['loginErro'])){
                  echo '<h6 class="text-center text-danger">'.$_SESSION['loginErro'].'</h6>';
                  $_SESSION['loginErro'] = null;
                }
                ?>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="loginB.php" method="POST">
                <div class="card-body" >
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email_usu" id="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" name="senha_usu" id="senha" placeholder="Senha">
                  </div>
                  <div class="form-group">
                  <button type="submit" class="btn btn-primary" style="">Logar</button>
                  </div>
                <a href="registro.php">Não tenho uma conta</a>
                </div>
<!-- jQuery -->
<script src="AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="AdminLTE-3.2.0/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>

<!-- Page specific script -->


</body>
</html>