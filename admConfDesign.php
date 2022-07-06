<?php
session_start();
include_once 'conexao.php';



$sqlGanho = "SELECT * FROM consulta WHERE status_con = 'concluida'";
$dadoGanho = mysqli_query($conn, $sqlGanho);

$sqlGasto = "SELECT * FROM gasto";
$dadoGasto = mysqli_query($conn, $sqlGasto);

$sqlUsu = "SELECT * FROM usuario WHERE tipo_usu = 0";
$dadoUsu = mysqli_query($conn, $sqlUsu);

$somaGanho = 0;
$somaGasto = 0;
$somaUsu = 0;
$lucro = 0;


while($linha = mysqli_fetch_assoc($dadoGanho))
{
  $idSer = $linha['id_servico'];
  $sqlSer = "SELECT * FROM servico WHERE id_servico = '$idSer'";
  $dadoSer = mysqli_query($conn, $sqlSer);

  while($linhaSer = mysqli_fetch_assoc($dadoSer))
{
$somaGanho += $linhaSer['valor_servico']; 
}
}

while($linhaGas = mysqli_fetch_assoc($dadoGasto))
{
$somaGasto += $linhaGas['valor_gas'];
}
$lucro = $somaGanho - $somaGasto;
while($linhaUsu = mysqli_fetch_assoc($dadoUsu))
{
$somaUsu++;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminiPet</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
  <style>
    #gear{
      color: #c2c7d0;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Tela de Inicio -->
  < <div class="preloader flex-column justify-content-center align-items-center">

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
            <h1 class="text-center">Configurações de Design</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

 
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row text-center">

        <div class="text-center col-12" style=" ">
            
              <!-- /.card-header -->
              <!-- form start -->
             <br>
                
               <div class="row mb-2">
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <form action="admEditDesign.php" method="POST" enctype="multipart/form-data">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="form-group col-4 ">
    <label for="nome">Nome Petshop</label>
    <input type="text" class="form-control" name="nome_des" id="nome" placeholder="Nome do petshop">
   
    </div>

        <div class="form-group col-4 ">
    <label for="img">Imagem de fundo</label>
    <input type="file" class="form-control" name="img_des" id="logo">
   
  </div>

<div class="form-group col-4 ">
    <label for="logo">Logo</label>
    <input type="file" class="form-control" name="logo_des" id="logo">
    
  </div>

  <div class="form-group mt-3 col-4">
    <label for="icone1">ícone 1</label>
    <input type="file" class="form-control" name="icone1_des" id="icone1">
  </div>
  <div class="form-group mt-3 col-4">
    <label for="icone2">ícone 2</label>
    <input type="file" class="form-control" name="icone2_des" id="icone2">
  </div>
  <div class="form-group col-4 mt-3">
    <label for="icone3">ícone 3</label>
    <input type="file" class="form-control" name="icone3_des" id="icone3">
   
  </div>

  <div class="form-group mt-3 col-4 ">
    <label for="titulo1">Título ícone 1</label>
    <input type="text" class="form-control" name="titulo1_des" id="titulo1" placeholder="Nome do petshop">
    </div>
    <div class="form-group mt-3 col-4 ">
    <label for="titulo2">Título ícone 2</label>
    <input type="text" class="form-control" name="titulo2_des" id="titulo2" placeholder="Nome do petshop">
    </div>
    <div class="form-group mt-3 col-4 ">
    <label for="nome">Título ícone 3</label>
    <input type="text" class="form-control" name="titulo3_des" id="titulo3" placeholder="Nome do petshop">
    </div>
  
  <div class="form-group mt-3 col-4">
    <label for="texto1">Texto ícone 1</label>
    <textarea class="form-control" name="texto1_des" id="texto1" rows="3"></textarea>
  </div>
  <div class="form-group mt-3 col-4">
    <label for="texto2">Texto ícone 2</label>
    <textarea class="form-control" name="texto2_des" id="texto2" rows="3"></textarea>
  </div>
  <div class="form-group mt-3 col-4">
    <label for="texto3">Texto ícone 3</label>
    <textarea class="form-control" name="texto3_des" id="texto3" rows="3"></textarea>
  </div>

  


</div>
<div class=" form-group mt-3 ">
  <button type="submit" class="btn btn-primary">Salvar Edições</button>
</form>
  </div>
  <div class=" form-group mt-3 ">
<form action="reset.php" method="POST">
<button type="submit" class="btn btn-danger">Resetar Edições</button>
</form>
</div>
    </section>
    
    </div>
</div>

 

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
