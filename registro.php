<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro iPet</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/dist/css/adminlte.min.css">
<link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">

</head>
<body class="" style="background-color: 	#8FBC8F;">
    

<div class="container" style="width: 100vw;
height: 100vh;
display: flex;
flex-direction: row;
justify-content: center;
align-items: center;">
<div class="card mt-5 " style="width: 28rem; ">
              <div class="card-header ">
                <h4 class="text-center">Registro</h4>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
                <div class="card-body">
                <div class="form-group">
                <form action="inserirUsuario.php" method="post">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome_usu" id="nome" placeholder="Nome">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email_usu" id="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="telefone_usu" id="telefone" placeholder="telefone">
                  </div>
                  <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" name="senha_usu" id="senha" placeholder="Senha">
                  </div>
                  <div class="form-group">
                    <label for="senha2">Repita a senha</label>
                    <input type="password" class="form-control" name="senhaR_usu" id="senha2" placeholder="Repita a senha">
                  </div>
                  <div class="form-group">
                      
                  <button type="submit" class="btn btn-primary" style="">Registrar</button>
                  
                </form>  
                </div>
                <a href="login.php">Já tenho uma conta</a>
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