<?php

session_start();

if($_SESSION['email'] == ''){
  header('Location: login.php');
}



$email = $_SESSION['email'];
$senha = $_SESSION['senha'];

include_once 'conexao.php';

$sql = "SELECT * FROM usuario WHERE email_usu = '$email' && senha_usu = '$senha' LIMIT 1";

$dados = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($dados) ){
  $id = $row['id_usu'];
  $nome = $row['nome_usu'];
  $telefone = $row['telefone_usu'];
  $cidade = $row['cidade_usu'];
  $bairro = $row['bairro_usu'];
  $rua = $row['rua_usu'];
  $numero = $row['numero_usu'];
  $complemento = $row['complemento_usu'];
}
$_SESSION['id_usu'] = $id;

$sql2 = "SELECT * FROM pet WHERE id_usu = '$id'";

$dado = mysqli_query($conn, $sql2);

$sql = "SELECT * FROM design ";

$dados2 = mysqli_query($conn, $sql);
while($row2 = mysqli_fetch_assoc($dados2) ){
  $nomeSite = $row2['nome_des'];
}
$id = $_SESSION['id_usu'];
$sql3 = "SELECT * FROM consulta WHERE id_usu = $id";
$dados3 = mysqli_query($conn, $sql3);
$linkBanho = $_GET['id'];
$linkBanho = md5($linkBanho);
$linkBanho = "https://meet.jit.si/".$linkBanho;
// while($new = mysqli_fetch_assoc($dado))
// {
//   $foto_pet = $new['foto_pet'];

// }

?>

<!DOCTYPE html>
<html lang="en">
<title>iPet</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button,a {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
#peril{
  margin-top: 10px;
}
body{
    overflow: hidden;
}
#header1{

  background-image: url("imagem/gatoedog5.jpg")

}
#nav1{
  background-color: #FFFA8B;


}
#principal{
  box-shadow: 1px 7px 3px 7px rgba( 0, 0 ,0, 0.3);
}
#boxpet{
  box-shadow: 5px 5px 5px rgba( 0, 0 ,0, 0.5);
}
#bt1{
  margin-right: 5px;
  place-items: center;
  margin-bottom: 10px;
  box-shadow: 1.5px 1.5px rgba( 0, 0 ,0, 0.5);
  border-radius: 5px;
} 
#bt2{
  margin-left: 5px;
  place-items: center;
  margin-bottom: 10px;
  box-shadow: 1.5px 1.5px rgba( 0, 0 ,0, 0.5); 
  border-radius: 5px;
} 
#caixac{
  max-width: auto;
  max-height: auto;
}
.form-control{
    border-color: #8FBC8F;
}
footer{
    text-align: right;
}
#princ{
    margin-left: ;
    padding: 30px;
    font-size:21px;
}
#linkbanho{
  border: solid black 1px;
  border-radius: 2px;
  width: ;
  font-size: 15px;
}
</style>
<body style="background-color: 	#8FBC8F;">

<!-- Navbar -->

<nav class="navbar fixed-top navbar-expand-lg bg-dark shadow navbar-dark p-md-3">
  <div class="container">
  <a  href="#" class="navbar-brand">iPet</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="mx-auto"></div>
    <ul class="navbar-nav">
      <li class="nav-item">
          <a href="home.php?=" class="nav-link text-white">Inicío</a>
      </li>
      <li class="nav-item">
          <a href="perfil2.php" class="nav-link text-white">Perfil</a>
      </li>
      <
      <li class="nav-item">
          <a href="sobre1.html" class="nav-link text-white">Sobre</a>
      </li>
      <?php
        if($_SESSION['email'] != ''){
        echo "<li class='nav-item'>
          <a href='sair.php' class='nav-link text-white'>Sair</a> </li>";}else{

          } ?>
      
    </ul>

  </div>
  </div>

</nav>

<br><br>
<div class="container  w3-card " style=" background-color: white "id="principal">
<div class="mt-5">
  <br>
<h1 class="text-center" id="perfil">Acompanhar Banho</h1>
<section id="princ">
    <p class="text-justify">
        Bem vindo <strong><?php echo $nome;?></strong>, esse é nosso ambiente para que você possa acompanhar o banho do seu pet!! <br> <br>
        Fique tranquilo pois trabalhamos com total responsabilidade para maior segurança do seu amiguinho. <br>
        Vamos as orientações: <br> <br>
        

        Logo abaixo você verá um botão que será responsável por te direcionar o ambiente onde realizaremos a chamada. <br>
        Fique atento ao seu horário, nós estaremos lá te esperando no horário exato de sua consulta. <br> <br>
        <?php echo"<a target='_blank' href='".$linkBanho; echo"'";?> id="linkbanho" class=""><?php echo $linkBanho; ?></a>

    </p>
          <footer>Atenciosamente Equipe <?php if(isset($nomeSite) && $nomeSite != ''){echo $nomeSite;}else{echo "iPet";}?>.</footer>
</section>
</div>
    
    </div>

    </div>


</div>


<!-- jQuery -->
<script src="AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="AdminLTE-3.2.0/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
<script src="index.js"></script>
</body>
</html>