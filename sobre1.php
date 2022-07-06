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
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">

    <title>Sobre - iPet</title>
    <style>
      body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button,a {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
        body {
          font-family: "Lato", sans-serif;
          background-color: 	#8FBC8F;
        }
        #div {
            background-color: white;
            border: 1px solid black;
            box-sizing: border-box;
            margin: 200px 100px 0px 100px;
            box-shadow: 0px 5px 15px 0px rgba(0, 0, 0, 0.9);
        }
        h1 {
          font-family: "Lato", sans-serif;
            font: bold 35pt Arial;
            text-align: center;
        }
        h2 {
          font-family: "Lato", sans-serif;
            font: italic 20pt Arial;
            text-align: center;
            margin-top: -20px;
        }
        article {
            font: 15pt Arial;
            text-align: justify;
            padding-top: 50px;
        }
        footer {
            padding-top: 150px;
            padding-bottom: 5px;
            text-align: center;
            font: 10pt Arial;
        }
        p {
            margin-top: -10px;
            margin-left: 50px;
            margin-right: 50px;
        }
    </style>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark shadow p-md-3">
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
            
            <li class="nav-item">
                <a href="sobre1.php" class="nav-link text-white">Sobre</a>
            </li>
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
    <div id="div">
    <h1 class="mb-5">Tudo sobre o iPet</h1>
        <h2 class="mb-5">Saiba tudo sobre nós!</h2> 
            <article><p class="mb-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Olá, a empresa iPet tem como objetivo economizar tempo e recursos naturais através de um site de cadastro de pets e seus donos! Além disso, temos como função a organização e agendamento de horários para diversas atividades para seu pet, tais como agendamento de banhos, tosas e passeios, tudo isso de forma rápida, prática e eficiente através de nosso site.</p><br><p class="mb-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Achou interessante? Pois isso é apenas o começo do projeto! Temos, por meio de nosso site, sistema de acompanhamento do pet ao vivo, passeio personalizado do PetShop que nomeamos de "Pet Táxi", sistema de adoção de um novo pet, sistema de hospedagem de seu bichinho e, por fim, um mecanismo de "creche" do seu animal de estimação para caso o dono queira viajar ou hospedar em outro local que não seja o seu lar!</p><br><p class="mb-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E aí, curtiu o nosso projeto? Saiba que você pode ajudar a divulgação de nosso site compartilhando nas redes sociais com familiares e amigos, seremos muito gratos se você fizer isso!</p></article>
         
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
</body>
<footer>
    Todos os direitos reservados ao iPet&copy, 2022
</footer>
    </div>
</html>