<?php

session_start();
include_once 'conexao.php';

if($_SESSION['email'] == ''){
  header('Location: login.php');
}

$sqlSer = "SELECT * FROM servico WHERE desabilitar_servico = 0";
$dadoSer = mysqli_query($conn, $sqlSer);

$email = $_SESSION['email'];
$senha = $_SESSION['senha'];



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

$sql2 = "SELECT * FROM usuario ";

$dado = mysqli_query($conn, $sql2);

$sql3 = "SELECT * FROM pet ";

$dado3 = mysqli_query($conn, $sql3);

// while($new = mysqli_fetch_assoc($dado))
// {
//   $foto_pet = $new['foto_pet'];

// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminiPet</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.css">
<link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Tela de Inicio -->
  <div class="preloader flex-column justify-content-center align-items-center">

  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="adm.php" class="nav-link">Início</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="adm.php" class="brand-link">
      <span class="brand-text font-weight-light">iPet</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
        <a href="#" class="d-block">Administrador</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Pesquisar" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
         
               <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Financeiro
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="adm.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>inicío</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admFinanceiro.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ganhos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admFinGastos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gastos</p>
                </a>
              </li>
            </ul>
          </li>
          
              
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Cadastrar
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admCadasPet.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pet</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admCadasUsu.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuário</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admCadasFun.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Funcionário</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Consultas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admConsulta.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cadastrar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admConPendentes.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pendentes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admConAceitas.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Aceitas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admConHistorico.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Histórico</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Buscar
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admBusPet.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pet</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admBusUsu.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuário</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admBusFun.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Funcionário</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
              <p>
                Configurar
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admConfExp.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Expediente</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admConfSer.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Serviços</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admConfdesign.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Design</p>
                </a>
              </li>
            </ul>
          </li>
            </ul>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="text-center">Cadastrar Consulta</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <form action="admInserirConsulta.php" method="POST">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="form-group col-4 ">
    <label for="escolhaUsu">Escolha um Usuário</label>
    <select class="form-control" name="id_usu" id="escolhaUsu">
    <?php 
      while($dadoC = mysqli_fetch_assoc($dado) ){
      $nomeUsu = $dadoC['nome_usu'];
      $idUsu = $dadoC['id_usu'];
        echo "<option value='$idUsu'>$nomeUsu</option>";
      }
      ?>
    </select>
    </div>

        <div class="form-group col-4 ">
    <label for="escolhaPet">Escolha um Pet</label>
    <select class="form-control" name="id_pet" id="escolhaPet">
    <?php 
      while($dadoC = mysqli_fetch_assoc($dado3) ){
      $nomeP = $dadoC['nome_pet'];
      $idPet = $dadoC['id_pet'];
        echo "<option value='$idPet'>$nomeP</option>";
      }
      ?>
    </select>
  </div>

<div class="form-group col-4 ">
    <label for="tipoConsulta">Tipo de consulta</label>
    <select class="form-control" name="tipo_con" id="tipoConsulta">
    <option>selecione uma opção</option>
    <?php while($linha = mysqli_fetch_assoc($dadoSer)){
echo"<option value='".$linha['id_servico']."'>".$linha['nome_servico']." = R$".$linha['valor_servico']."</option>";
     }
     ?>
    </select>
  </div>


  <div class="form-group mt-3 col-6">
    <label for="data">Data da consulta</label>
    <input type="date" class="form-control" name="data_con" id="data" placeholder="name@example.com">
  </div>
  <div class="form-group mt-3 col-4">
    <label for="hora">Horario da consulta</label>
    <input type="time" class="form-control" name="hora_con" id="hora" placeholder="name@example.com">
  </div>
  <div class="form-group col-2 mt-3">
    <label for="acompanhar" id="acm">Acompanhar banho <abbr title="kljasdfkjakfjkldafjkldajflkdjfklaj"><img width="10" height="14" style="margin-left:2px;"src="question-solid.svg" alt="quest/svg"></abbr></label>
    <select class="form-control" name="acompanhar" id="acompanhar">
    <option>selecione uma opção</option>
     <option>Sim</option>
      <option>Não</option>
    </select>
  </div>

  
  <div class="form-group mt-3 col-12">
    <label for="descricao">Descreva a consulta</label>
    <textarea class="form-control" name="descricao_con" id="descricao" rows="3"></textarea>
  </div>

    </div>
  <div class=" form-group mt-3 ">
  <button type="submit" class="btn btn-primary">Marcar consulta</button>
  </div>

    </section>
    </div>
</div>
</form>

<!-- jQuery -->
<script src="AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="AdminLTE-3.2.0/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="AdminLTE-3.2.0/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="AdminLTE-3.2.0/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="AdminLTE-3.2.0/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="AdminLTE-3.2.0/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="AdminLTE-3.2.0/plugins/moment/moment.min.js"></script>
<script src="AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="AdminLTE-3.2.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-3.2.0/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="AdminLTE-3.2.0/dist/js/pages/dashboard.js"></script>
</body>
</html>
