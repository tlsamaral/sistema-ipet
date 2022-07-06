<?php

session_start();
include_once 'conexao.php';

$sqlFolga = "SELECT * FROM design ";
$dadoFolga = mysqli_query($conn, $sqlFolga);

while($row20 = mysqli_fetch_assoc($dadoFolga))
{
  $sobre = $row20['sobre_des'];
  $transmissao = $row20['transmissao_des'];
  $folga = $row20['folga_des'];
}

$sqlSer = "SELECT * FROM servico WHERE desabilitar_servico = 0";
$dadoSer = mysqli_query($conn, $sqlSer);

if ($_SESSION['email'] == '') {
  header('Location: login.php');
}



$email = $_SESSION['email'];
$senha = $_SESSION['senha'];



$sql = "SELECT * FROM usuario WHERE email_usu = '$email' && senha_usu = '$senha' LIMIT 1";

$dados = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($dados)) {
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
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Lato", sans-serif
  }

  .w3-bar,
  h1,
  button,
  a {
    font-family: "Montserrat", sans-serif
  }

  .fa-anchor,
  .fa-coffee {
    font-size: 200px
  }

  #header1 {

    background-image: url("imagem/gatoedog5.jpg")
  }

  #nav1 {
    background-color: #FFFA8B;


  }

  #principal {
    box-shadow: 1px 7px 3px 7px rgba(0, 0, 0, 0.3);
    padding: 10px;
  }

  #boxpet {
    box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);
  }

  #bt1 {
    margin-right: 5px;
    place-items: center;
    margin-bottom: 10px;
    box-shadow: 1.5px 1.5px rgba(0, 0, 0, 0.5);
    border-radius: 5px;
  }

  #bt2 {
    margin-left: 5px;
    place-items: center;
    margin-bottom: 10px;
    box-shadow: 1.5px 1.5px rgba(0, 0, 0, 0.5);
    border-radius: 5px;
  }

  #caixac {
    max-width: auto;
    max-height: auto;

  }

  .form-control {
    border-color: #8FBC8F;
  }
</style>

<body style="background-color: 	#8FBC8F;">

  <!-- Navbar -->

  <nav class="navbar fixed-top navbar-expand-lg bg-dark shadow navbar-dark p-md-3">
    <div class="container">
      <a href="#" class="navbar-brand">iPet</a>
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
          <?php if($sobre == 0)
      {
        echo "
      <li class='nav-item'>
          <a href='sobre1.php' class='nav-link text-white'>Sobre</a>
      </li>";
      }
      ?>
            <?php
            if ($_SESSION['email'] != '') {
              echo "<li class='nav-item'>
          <a href='sair.php' class='nav-link text-white'>Sair</a> </li>";
            } else {
            } ?>

        </ul>

      </div>
    </div>

  </nav>
  <br><br>
  <div class="container mt-5 w3-card " style=" background-color: white " id="principal">

    <h1 class="text-center">Consultas</h1>

    <form action="inserirConsulta.php" method="POST" onsubmit="return validaDia();">
      <div class="row">
        <div class="form-group col-6 mt-3">
          <label for="escolhaPet">Escolha um Pet</label>
          <select class="form-control" name="id_pet" id="escolhaPet">
            <?php
            while ($dadoC = mysqli_fetch_assoc($dado)) {
              $nomeP = $dadoC['nome_pet'];
              $idPet = $dadoC['id_pet'];
              echo "<option value='$idPet'>$nomeP</option>";
            }
            ?>
          </select>
        </div>

        <div class="form-group col-6 mt-3">
          <label for="tipoConsulta">Tipo de consulta</label>
          <select class="form-control" name="tipo_con" id="tipoConsulta">
            <option>selecione uma opção</option>
            <?php while ($linha = mysqli_fetch_assoc($dadoSer)) {
              echo "<option value=" . $linha['id_servico'] . ">" . $linha['nome_servico'] . " = R$" . $linha['valor_servico'] . "</option>";
            }
            ?>
          </select>
        </div>

      </div>
      <div class="row">
        <div class="form-group mt-3 col-6">
          <label for="data">Data da consulta</label>
          <input type="date" class="form-control" name="data_con" id="data" placeholder="name@example.com">
        </div>
        <?php
        $sql5 = "SELECT * FROM expediente WHERE `desabilitar_exp` = 0";

        $dados5 = mysqli_query($conn, $sql5);

        ?>
        <?php
        if($transmissao == 0)
        {
        echo "<div class='form-group mt-3 col-4'>";
        }else{
          echo "<div class='form-group mt-3 col-6'>";
        }
        ?>
          <label for="hora">Horario da consulta</label>
          <select class="form-control" name="id_exp" id="tipoConsulta">
          <option>selecione uma opção</option>
          <?php while ($linha5 = mysqli_fetch_assoc($dados5)) {
              echo "<option value=" . $linha5['id_exp'] . ">" . $linha5['inicio_exp'] . " - " . $linha5['fim_exp'] . "</option>";
            }
            ?>
          </select>
        </div>
        <?php
        if($transmissao == 0)
        {
        echo "<div class='form-group mt-3 col-2'>
        <label for='acompanhar' id='acm'>Transmissão<abbr title='Acompanhe nosso serviço por meio de uma videochamada'><img width='10' height='14' style='margin-left:2px;' src='question-solid.svg' alt='quest/svg'></abbr></label>
          <select class='form-control' name='acompanhar_con' id='acompanhar'>
            <option>selecione uma opção</option>
            <option>Sim</option>
            <option>Não</option>
          </select>
        </div>";
        }else{
        
        }
        ?>
          
        
      </div>

      <div class="form-group mt-3">
        <label for="descricao">Descreva a consulta (opcional)</label>
        <textarea class="form-control" name="descricao_con" id="descricao" rows="3"></textarea>
      </div>


      <div class="form-group mt-3">
        <label for="transp">Transporte</label>
        <select class="form-control" name="taxi_con" id="transp">
          <option value="sim">Selecione uma opção</option>
          <option value="sim">Sim </option>
          <option value="nao">Não </option>
        </select>
      </div>

      <div class="form-group mt-3" id="escolheEndereco" style="display: none;">

        <label for="selectEnd">Endereço</label>
        <select class="form-control" name="endereco_con" id="selectEnd">
          <option value="">Selecione um endereço</option>
          <?php echo "<option> $cidade, $bairro, $rua, $numero, $complemento   </option>" ?>
          <option>Outro</option>
        </select>

      </div>

      <div class="form-group mt-3" id="enderecoNovo">

      </div>

      <div class="form-group mt-3 ">
        <button type="submit" class="btn btn-primary">Marcar consulta</button>
      </div>

    </form>

    <!--
    <button class="btn btn-primary" onclick="validaDia();">teste</button>
    <p id="demo"></p>
    -->
<script>

function validaDia() {

  var nova_data = new Date(document.getElementById("data").value);
  var data_hoje = new Date();
  var nEndereco = document.querySelector('#enderecoNovo');
  var folga = <?php echo $folga; ?>;

  //document.getElementById("demo").innerHTML = nova_data.getDay();

    if (nova_data.getDay() == folga || isNaN(nova_data.getDay()) ) {
        alert("Estaremos fechados esse dia");
        return false;
      } if(nova_data<data_hoje){
        alert("Data menor que a atual");
        return false;
      }
    }
</script>



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

  <script>
    var transp = document.querySelector('#transp');
    var escolheEndereco = document.querySelector('#escolheEndereco');

    function transporteSim() {
      console.log(transp.value)
      if (transp.value == 'sim') {
        escolheEndereco.style.display = "";
      } else {
        escolheEndereco.style.display = "none";
      }
    }
    transp.addEventListener('change', transporteSim)
  </script>



  <script>
    var nEndereco = document.querySelector('#enderecoNovo');
    var selectEnd = document.querySelector('#selectEnd');

    function listaEndereco() {
      console.log(selectEnd.value)
      if (selectEnd.value == 'Outro') {
        nEndereco.innerHTML = `  
      <div class="row">
      <div class="col-6 mt-3">
      <label for="cidade">Cidade</label>
    <input type="text" name="cidade_usu" id="cidade" class="form-control" placeholder="Digite a cidade">
  </div>
  
  <div class="col-6 mt-3">
      <label for="bairro">Bairro</label>
    <input type="text" name="bairro_usu" id="bairro" class="form-control" placeholder="Digite o bairro">
  </div>
  </div>
  <div class="row">
  <div class="col-6 mt-3">
      <label for="rua">Rua</label>
    <input type="text" name="rua_usu" id="rua" class="form-control" placeholder="Digite a rua">
  </div>
  
  <div class="col-2 mt-3">
      <label for="numero">Numero</label>
    <input type="text" name="numero_usu" id="numero" class="form-control" placeholder="Número ">
  </div>
  
  <div class="col-4 mt-3">
      <label for="complemento">Complemento</label>
    <input type="text" name="complemento_usu" id="complemento" class="form-control" placeholder="Complemento">
  </div>

  </div>`
      } else if (selectEnd.value != 'Outro') {
        nEndereco.innerHTML = `  
<div style="display: none;">
      <div class="row" >
      <div class="col-6 mt-3">
      <label for="cidade">Cidade</label>
    <input type="text" name="cidade_usu" id="cidade" class="form-control" placeholder="Digite a cidade">
  </div>
  
  <div class="col-6 mt-3">
      <label for="bairro">Bairro</label>
    <input type="text" name="bairro_usu" id="bairro" class="form-control" placeholder="Digite o bairro">
  </div>
  </div>
  <div class="row">
  <div class="col-6 mt-3">
      <label for="rua">Rua</label>
    <input type="text" name="rua_usu" id="rua" class="form-control" placeholder="Digite a rua">
  </div>
  
  <div class="col-2 mt-3">
      <label for="numero">Numero</label>
    <input type="text" name="numero_usu" id="numero" class="form-control" placeholder="Número ">
  </div>
  
  <div class="col-4 mt-3">
      <label for="complemento">Complemento</label>
    <input type="text" name="complemento_usu" id="complemento" class="form-control" placeholder="Complemento">
  </div>

  </div>
</div>`

      } else {}
    }


    selectEnd.addEventListener('change', listaEndereco)
  </script>

</body>

</html>