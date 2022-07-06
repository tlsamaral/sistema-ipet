<?php

session_start();

if($_SESSION['email'] == ''){
  header('Location: login.php');
}

$id = $_SESSION['id_usu'];

$email = $_SESSION['email'];
$senha = $_SESSION['senha'];

include_once 'conexao.php';

$sql = "SELECT * FROM consulta WHERE id_usu = '$id'";

$dados = mysqli_query($conn, $sql);

while($rowc = mysqli_fetch_assoc($dados) ){

}

$sql3 = "SELECT * FROM usuario WHERE id_usu = '$id'";

$dadou = mysqli_query($conn, $sql3);


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
<div class="container mt-5 w3-card " style=" background-color: white "id="principal">
<h1 class="text-center">Consultas Marcadas</h1>

<div class="container ">

<?php 
$dados = mysqli_query($conn, $sql);
$dadou = mysqli_query($conn, $sql3);
$rowu = mysqli_fetch_assoc($dadou);
  $nomeu = $rowu['nome_usu'];

  

while($row = mysqli_fetch_assoc($dados)  ){
  $idSer = $row['id_servico'];
  $idp = $row['id_pet'];
  $ide = $row['id_exp'];
  $sql2 = "SELECT * FROM pet WHERE id_pet = '$idp'";
  $dadop = mysqli_query($conn, $sql2);
  $endereco = $row['endereco_con'];
  $acompanhar = $row['acompanhar_con'];
  $id = $row['id_con'];
  $idcripto = md5($id);
  $descricao = $row['descricao_con'];
  $data = $row['data_con'];
  $trans = $row['taxi_con'];
  $status = $row['status_con'];
  $sql4 = "SELECT * FROM servico WHERE id_servico = '$idSer'";
  $dado4 = mysqli_query($conn, $sql4);
  $sql5 = "SELECT * FROM expediente WHERE id_exp = '$ide'";
  $dado5 = mysqli_query($conn, $sql5);

  echo " <div class='row border text-center mt-5'>

  <div class='card-header'>
  <h5 class='card-title text-center'>Consulta</h5>
  </div>


<ul class='list-group list-group-flush card col-6'>
  <li class='list-group-item'><h5>Cliente: $nomeu</h5> </li>
  <li class='list-group-item'><h5>Data: $data ";while($row5 = mysqli_fetch_assoc($dado5)  ){echo $row5['inicio_exp'];}echo"</h5></li>
  <li class='list-group-item'><h5>Tipo:";while($row4 = mysqli_fetch_assoc($dado4)  ){echo $row4['nome_servico'];}echo"</h5></li>
</ul>
<ul class='list-group list-group-flush card col-6'>
  <li class='list-group-item'><h5>Pet:";while($rowp = mysqli_fetch_assoc($dadop)  ){echo $rowp['nome_pet'];}echo"</h5></li>
  <li class='list-group-item'><h5>Status: $status</h5></li>
  <li class='list-group-item'><h5>";if($endereco != "" && isset($endereco) && $trans == "sim"){echo "Endereco:".$endereco;}else{echo "Transporte: Não";}echo"</h5></li>
</ul>
<ul class='list-group list-group-flush card '>
  <li class='list-group-item'><h5>Descrição:</h5> $descricao </li>";if($status == "Aceita" && $acompanhar == "Sim" ){echo"<a href='acompanharBanho.php?id=$id' class='btn btn-success'>Assistir Banho</a>";}echo"
</ul>



</div>";
}

?>






</div>
<br>

</div>


<!-- jQuery -->
<script src="AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="AdminLTE-3.2.0/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
        


</body>
</html>