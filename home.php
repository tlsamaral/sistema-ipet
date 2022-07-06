<?php
session_start();

include "conexao.php";

$sql = "SELECT * FROM design ";

$dados = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($dados) ){
  $nome = $row['nome_des'];
  $img = $row['img_des'];
  $logo = $row['logo_des'];
  $icone1 = $row['icone1_des'];
  $icone2 = $row['icone2_des'];
  $icone3 = $row['icone3_des'];
  $titulo1 = $row['titulo1_des'];
  $titulo2 = $row['titulo2_des'];
  $titulo3 = $row['titulo3_des'];
  $texto1 = $row['texto1_des'];
  $texto2 = $row['texto2_des'];
  $texto3 = $row['texto3_des'];
  $sobre = $row['sobre_des'];
}

?>

<!DOCTYPE html>
<html lang="en">
  
  <?php
  if(isset($nome) && $nome != '')
  {
   echo "<title>".$nome."</title>";
  }else{
    echo '<title>iPet</title>';
  }
?>
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
  <?php
  if(isset($img) && $img != '')
  {
    echo "background-image: url('design/".$img."');"; 
  }else{
    echo "background-image: url('imagem/cachorro3.jpg');"; 
    
  }
?>
  
  
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  
    /* background-image: linear-gradient( to bottom, #28E5FA , #47E9FA, #91F4FF );
    background-attachment: fixed; */


}

#nav1{
  background-color: #FFFA8B;


}


</style>
<body>

<!-- Navbar -->

<!-- <div class="w3-top">
  <div class="w3-bar  w3-card w3-left-align w3-large" id="nav1">

 
    <div class="row">
  <div class="col-12 col-md-11 col-sm-0">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large " href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
  <h4 style="margin-left: 10px; font-weight: bold;"> iPet</h4>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Página Inicial</a>
    <a href="PerfilContro" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Buscar</a>
    <a href="PerfilUsuContro" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Perfil</a>
    <a href="BuscarAnuncioContro" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Oportunidades</a>
    <a href="perfilUsuContro/logout" type="button" class="w3-bar-item w3-button w3-hide-large w3-hide-small w3-hover-white w3-padding-large ">Sair </a> 
  </div>
  <div class="col-0 col-md-1 col-sm-0">
    <a href="perfilUsuContro/logout" type="button" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white w3-padding-large ">Sair </a>
    </div>
</div>

</div>

  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Página Inicial</a>
    <a href="PerfilUsuContro" class="w3-bar-item w3-button w3-padding-large">Perfil</a>
    <a href="BuscarAnuncioContro" class="w3-bar-item w3-button w3-padding-large">Oportunidades</a>
    <a href="perfilUsuContro/logout" type="button" class="w3-bar-item w3-button w3-padding-large ">Sair </a>
  </div>
  

</div>
</div> -->


<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
  <div class="container">
  <?php
  if(isset($nome) && $nome != '')
  {
   echo "<a  href='#' class='navbar-brand'>".$nome."</a>";
  }else{
    echo '<a  href="#" class="navbar-brand">iPet</a>';
  }
?>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="mx-auto"></div>
    <ul class="navbar-nav">
      <li class="nav-item">
          <a href="home.php" class="nav-link text-white">Inicío</a>
      </li>
      <li class="nav-item">
          <a href="perfil2.php" class="nav-link text-white">Perfil</a>
      </li>
      <?php if($sobre == 0)
      {
        echo "
      <li class='nav-item'>
          <a href='sobre1.php' class='nav-link text-white'>Sobre</a>
      </li>";
      }
      ?>
      <?php
        if(isset($_SESSION['email'])){
        echo "<li class='nav-item'>
          <a href='sair.php' class='nav-link text-white'>Sair</a> </li>";}
          
          else{
            
            echo "<li class='nav-item'>
            <a href='login.php' class='nav-link text-white'>Login</a>
        </li>";

          } ?>
    </ul>

  </div>
  </div>

  

</nav>
<!-- Header -->
<header class="w3-center " id="header1" style="padding:128px 16px ">
<br><br><br><br><br><br>
<?php
  if(isset($logo) && $logo != '')
  {
    echo "<img src='design/".$logo."' alt='imagem.png' style='height: 150px; width: 150px; margin-top: 50px; margin-left: 28px;' >"; 
  }else{
   echo "<img src='imagem/logoipet.png' alt='imagem.png' style='height: 150px; width: 150px; margin-top: 50px; margin-left: 28px;' >"; 
  }
?>
  

  <!-- <p class="w3-xlarge"></p> -->
  <p class="w3-xlarge"></p>
  <a href="login.php" class="w3-button w3-margin-left w3-yellow w3-padding-large w3-large  ">Começar</a>
  <br><br><br><br><br><br><br><br><br><br>
  
</header>

<!-- Primeira barra -->
<div class="jumbotron mt-5" id="corpo">
    <div class="container">
    <?php
  if(isset($nome) && $nome != '')
  {
    echo "<h1 class='text-center'>Serviços do ".$nome."</h1>";
  }else{
    echo "<h1 class='text-center'>Serviços do iPet</h1>";
  }
?>
      
       <br><br>
       <div class="row">
         <div class="col-12 col-md-4 mt-2">
           <div style="display: block; margin-left: auto; margin-right: auto; width: 50px;">
          <br>
          <?php
  if(isset($icone1) && $icone1 != '')
  {
    echo "<img src='design/".$icone1."' >";
  }else{
    echo "<img src='imagem/pata.svg' >";
  }
?>
        <br>
      </div>
    <div>
    <?php
  if(isset($titulo1) && $titulo1 != '')
  {
    echo "<h4 class='text-center'>".$titulo1."</h4>";
  }else{
  echo "<h4 class='text-center'>Levamos seu cachorro para passear </h4>";
  }
?>
<?php
  if(isset($texto1) && $texto1 != '')
  {
    echo"<p class='text-center'>
    ".$texto1."
  </p>";
  }else{
    echo"<p class='text-center'>
    Seu cachorro tera muita segurança e atenção a andar com o iPet somos os melhores do mercado 
  </p>";
  }
?>    
      
    </div>
    </div>
    <div class="col-12 col-md-4">
      <div style="display: block; margin-left: auto; margin-right: auto; width: 50px; margin-top: 10px;">
     <br>
   
     <?php
  if(isset($icone2) && $icone2 != '')
  {
    echo "<img src='design/".$icone2."' >";
  }else{
    echo "<img src='imagem/love.svg'>";
  }
?>
   <br>
 </div>
<div>
<?php
  if(isset($titulo2) && $titulo2 != '')
  {
    echo "<h4 class='text-center'>".$titulo2."</h4>";
  }else{
  echo "<h4 class='text-center'>Cuidado, amor e carinho são nossos princípios. </h4>";
  }
?>
<?php
  if(isset($texto2) && $texto2 != '')
  {
    echo"<p class='text-center'>
    ".$texto2."
  </p>";
  }else{
    echo"<p class='text-center'>
    Fique tranquilo! cuidaremos da melhor maneira possível do seu  bichinho.
  </p>";
  }
?>    

</div>
</div>
<div class="col-12 col-md-4">
<div style="display: block; margin-left: auto; margin-right: auto; width: 50px; margin-top: 20px;">
<br>
<?php
  if(isset($icone3) && $icone3 != '')
  {
    echo "<img src='design/".$icone3."' >";
  }else{
    echo "<img src='imagem/taxi.svg' >";
  }
?>

<br>
</div>
<div>
<?php
  if(isset($titulo3) && $titulo3 != '')
  {
    echo "<h4 class='text-center'>".$titulo3."</h4>";
  }else{
  echo "<h4 class='text-center'> Facilitando sua vida e melhorando a deles </h4>";
  }
?>
<?php
  if(isset($texto3) && $texto3 != '')
  {
    echo"<p class='text-center'>
    ".$texto3."
  </p>";
  }else{
    echo"<p class='text-center'> Buscamos à domicílio.
    </p>";
  }
?>  

</div>
</div>
</div>
</div>
<br><br>
</div>


<!-- Segunda barra -->
<!-- <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
     <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i> 
   <img src="/TccView/img/opus.png"  >
    </div>

    <div class="w3-twothird">
      <h1 class=""></h1>
      <h5 class="w3-padding-32ml-5"></h5>

  
    </div>
  </div>
</div> -->

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64" id="footer">
<h6 class="text-secondary"> iPet © Todos os direitos reservados </h6>
</div>

<!-- Footer -->






<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<script>
var nav = document.querySelector('nav');

window.addEventListener('scroll', function(){
  if(window.pageYOffset > 100){
    nav.classList.add('bg-dark', 'shadow');
  }else{
    nav.classList.remove('bg-dark', 'shadow');
  }
});
</script>

</body>
</html>
