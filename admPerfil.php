<?php

session_start();

if($_SESSION['email'] == ''){
  header('Location: login.php');
}

$id = $_GET['id'];

$email = $_SESSION['email'];
$senha = $_SESSION['senha'];

include_once 'conexao.php';

$sql = "SELECT * FROM usuario WHERE id_usu = '$id' LIMIT 1";

$dados = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($dados) ){
  $id = $row['id_usu'];
  $email = $row['email_usu'];
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
<div class="container  w3-card " style=" background-color: white "id="principal">
<div class="mt-5">
  <br>
<h1 class="text-center" id="perfil">Perfil</h1>
</div>
    <div class="row mt-5">
     
    <div class="col-6">
    <h5>Nome:</h5>
    <?php
    echo $nome;
    ?>
    <hr>
    </div>

    
    <div class="col-6 row">
      <div class="col-6">
    <h5>Email:</h5>
    <?php
    echo $email;
    ?>
    </div>
    <div class="col-6">
    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal1">
  Editar
</button>
    </div>
    
    <br><br><br>
    <hr class="mt-3">

    </div>
    
    <div class="col-6">
    <h5>Telefone:</h5>
    <?php
    echo $telefone;
    ?>
    <hr>
    </div>

    <div class="col-6">
    <h5>Cidade:</h5>
    <?php
    if($cidade==''){  
    echo 'não informado';
    }else{
    echo $cidade;
    }
    ?>
    <hr>
    </div>
    <div class="col-6">
    <h5>Bairro:</h5>
    <?php
    if($bairro==''){  
      echo 'não informado';
      }else{
        echo $bairro;
      }
    
    ?>
    <hr>
    </div>

    <div class="col-6">
    <h5>Rua:</h5>
    <?php
  if($rua==''){  
    echo 'não informado';
    }else{
      echo "$rua";
    }
    
   
    ?>
    <hr>
    </div>
    <div class="col-6">
    <h5>Número:</h5>
    <?php
    if($numero==''){  
      echo 'não informado';
      }else{
        echo "$numero";
      }
    ?>
    <hr>
    </div>

    <div class="col-6">
    <h5>Complemento:</h5>
    <?php
    if($complemento==''){  
      echo 'não informado';
      }else{
        echo "$complemento";
      }
    ?>
    <hr>
    </div>

    </div>

    <div class="mt-5 row">

      <div class="col-12 text-center">
          
        <a href="verificarConsulta.php" type="button" class="btn btn-primary " > 
          Verificar Consultas
        </a>
        
        
      </div>


      <div class="col-6">
        <h3>Pets Registrados:</h3>
      </div>
      
  



<div class="row mt-3">

<?php
while($linha = mysqli_fetch_assoc($dado) ){
  echo "

  <div class='modal fade' id='excluir".$linha['id_pet']."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Excluir</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
       <h5> Tem certeza que deseja excluir ?  </h5>
      </div>
      <div class='modal-footer'>
       <a href='excluir.php?id=".$linha['id_pet']."' type='button' class='btn btn-danger'>Excluir</a>
      </div>
    </div>
  </div>
</div>







<div class='modal fade' id='editar".$linha['id_pet']."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
<div class='modal-dialog'>
  <div class='modal-content'>
    <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLabel'>Atualizar Imagem</h5>
      <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div>
    <div class='modal-body'>
    <form action='editarfoto.php?id=".$linha['id_pet']."' method='post' enctype='multipart/form-data'>
    <div class='form-group '>
    <label for='foto' >Foto do pet</label>
    <input type='file' class='form-control' name='foto_pet' id='foto'>
  </div>
    </div>
    <div class='modal-footer'>
    <button type='submit' class='btn btn-success mt-3'>Confirmar</button>
    </form>
    </div>
  </div>
</div>
</div>






  <div class='col-md-6 col-sm-12 text-center mb-5' id='caixac'>
  <div class='card' style='margin-left 15px; ' id='boxpet'>
  <img src=";if($linha['foto_pet'] != ""){echo"'perfilpet/".$linha['foto_pet'];}else{echo"'imagem/cachorro.png";}echo"' class='card-img-top' width=640 height=480 alt='...'>
  <div class=''>
    <h5 class='card-title text-center'>".$linha['nome_pet']."</h5>
    <div class='text-center'>
    <button type='button' class=' btn btn-primary btn-sm' id='bt1'data-toggle='modal' data-target='#editar".$linha['id_pet']."'>Editar Foto</button>
    <button type='button' class=' btn btn-danger btn-sm' id='bt2'data-toggle='modal' data-target='#excluir".$linha['id_pet']."'>Excluir</button>
    </div>
  </div>
  </div>
  </div>";
}

?>




  
  
 



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registre um pet</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="inserirPet.php" method="post" enctype="multipart/form-data">

  
  <div class="container ">
  
  <div class="mt-3">
      <div class="row">
  <div class="col-12">
    <label for="nome">Nome do pet</label>
  <input type="text" name="nome_pet" id="nome" class="form-control" placeholder="Digite o nome do pet">
</div>
</div>
<br>

<div class="form-group ">
      <label for="foto" >Foto do pet</label>
      <input type="file" class="form-control" name="foto_pet" id="foto">
    </div>

<div class="row mt-3">
<div class="col-12">
    <label for="animal">Animal</label>
    <select class="form-control" name="animal_pet" id="selectItem">
    <option id="Cachorro" value="0">Selecione um animal</option>
<option id="Cachorro">Cachorro</option>
<option id="Gato">Gato</option>
    </select>
  
</div>
<div class="col-12 mt-3" id="racaForm">
<!-- <label for="raca">Raça</label>
  <input type="text" name="raca_pet" id="raca" class="form-control" placeholder="Digite a raça do animal"> -->
</div>
</div>

</div>



</div>



      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary mt-3">Registrar</button>
      </form>
      </div>
    </div>
  </div>
</div>

    </div>

    </div>

</div>
      
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Dados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="editarPessoa.php" method="post">
  
 
  <!-- modal de editar  -->
<div class="">
     
  <div class="col-12 mt-3">
    <label for="email">Email</label>
    <?php  echo"<input type='text' name='email_usu' id='email' class='form-control' value='$email' placeholder='Digite o email'>" ?>
</div>

<div class="col-12 mt-3">
    <label for="telefone">Telefone</label>
 <?php echo " <input type='text' name='telefone_usu' id='telefone' class='form-control'  value='$telefone' placeholder='Digite o numero de telefone'>"?>
</div>

<div class="col-12 mt-3">
    <label for="cidade">Cidade</label>
 <?php echo " <input type='text' name='cidade_usu' id='cidade' class='form-control' value='$cidade' placeholder='Digite a cidade'>"?>
</div>

<div class="col-12 mt-3">
    <label for="bairro">Bairro</label>
 <?php echo " <input type='text' name='bairro_usu' id='bairro' class='form-control' value='$bairro' placeholder='Digite o bairro'>"?>
</div>

<div class="col-12 mt-3">
    <label for="rua">Rua</label>
 <?php echo " <input type='text' name='rua_usu' id='rua' class='form-control' value='$rua' placeholder='Digite a rua'>"?>
</div>

<div class="col-12 mt-3">
    <label for="numero">Numero</label>
 <?php echo " <input type='text' name='numero_usu' id='numero' class='form-control' value='$numero' placeholder='Digite o numero do local'>"?>
</div>

<div class="col-12 mt-3">
    <label for="complemento">Complemento</label>
<?php echo "  <input type='text' name='complemento_usu' id='complemento' value='$complemento' class='form-control' placeholder='Digite o complemento'>"?>
</div>

</div>



      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary mt-3">Editar</button>
      </form>
      </div>
    </div>
  </div>
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