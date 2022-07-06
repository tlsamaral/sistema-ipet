<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perfil</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<link rel="stylesheet" href="<?= base_url(); ?>/TccView/css/bootstrap.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
#divBusca{
  width:230px;
}

</style>
</head>
<body class="w3-light-gray ">

<div class="w3-top">
<div class="w3-bar w3-blue w3-card w3-left-align w3-large">
<div class="row">
  <div class="col-12 col-md-10 col-sm-0">
  
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large " href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    
    <a href="HomeContro" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Página Inicial</a>
    <a href="PerfilUsuContro" class="w3-bar-item w3-button w3-padding-large w3-white">Perfil</a>
    <a href="BuscarAnuncioContro" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Oportunidades</a>
    <a href="perfilUsuContro/logout" type="button" class="w3-bar-item w3-button w3-hide-large w3-hide-small w3-hover-white w3-padding-large ">Sair </a>
    </div>
    <div class="col-0 col-md-2 col-sm-0">
    <a href="perfilUsuContro/logout" type="button" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white w3-padding-large ">Sair </a>
    </div>
    
    </div>
    </div>

  </div>
<br>
 
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <br>
    <a href="HomeContro" class="w3-bar-item w3-button w3-padding-large">Página Inicial</a>
    <a href="PerfilUsuContro" class="w3-bar-item w3-button w3-padding-large">Perfil</a>
    <a href="BuscarAnuncioContro" class="w3-bar-item w3-button w3-padding-large">Oportunidades</a>
    <a href="perfilUsuContro/logout" type="button" class="w3-bar-item w3-button w3-padding-large ">Sair </a>
  </div>
</div>
</div>
</div>
    


<div class="container mt-5 w3-card " style=" background-color: white">
    <div class="row mt-5">
      
        <div class="col-md-6 col-12 ">
            <br>
            <?php foreach ($dadosP as $row) { 
              if(($row['foto_usu'] == null) || ($row['foto_usu'] == "")) {?>
              <figure>
                <img src="<?= base_url(); ?>/TccView/img/perfilgenerico.jpg" alt="Foto" class="img-fluid">
              </figure>
                
             <?php }else{
              ?>
              
              <figure>
                <img src="<?= base_url(); ?>/public/fotos/<?=$row['foto_usu']?>" alt="Foto" class="img-fluid">
            </figure>
              
            <?php } }?>
            <h3>Descrição:</h3>
        <h6><?php foreach ($dadosP as $row) {
              echo '<h5>'.$row['descricao_usu'].'</h5>';
            } ?></h6>
            <hr style="background-color: #8B8989">
        </div>
        <div class="col-md-6 col-12 ">

          <div class="row">
          
          <div class="col-md-9 col-9">
          
            
          </div>
          <div class="col-md-3 col-3">
         
          </div>
          </div>
          <br>
          <div class="row">
            
            <div class="col-9">
              
          <h4>Nome:</h4>
          </div>
          <div class="col-3">
          <button type="button" class="btn w3-blue" data-toggle="modal" data-target="#exampleModal">
  Editar
</button>
</div>
          <!-- Button trigger modal -->
          </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container">
<form method="POST" action="EditarPerfilContro/atualizar" enctype="multipart/form-data" class="login100-form validate-form">
<?php if(isset($erro)):?>
					<strong class="text-center text-danger"> <?= $erro->listErrors();?></strong>
                <?php endif;?>
                   
<div class="form-group ">
      <label for="profissao" >Profissão</label>
      <input type="text" class="form-control" name="profissao_usu" id="profissao">
    </div>
    <div class="form-group ">
      <label for="telefone" >Telefone</label>
      <input type="text" class="form-control" name="telefone_usu" id="telefone">
    </div>
    <div class="form-group">
    <label for="descricao">Descrição</label>
    <textarea class="form-control" name="descricao_usu" id="descricao" rows="3"></textarea>
  </div>
  <div class="form-group ">
      <label for="foto" >Foto de Perfil</label>
      <input type="file" class="form-control" name="foto_usu" id="foto">
    </div>
  
  

</div>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn w3-green">Editar Perfil</button>
      </form>
      </div>
    </div>
  </div>
</div>
            <p><?php foreach ($dadosP as $row) {
                echo '<h5>'.$row['nome_usu'].'</h5>';
              } ?></p>
            
           
            <hr style="background-color: #8B8989">
            <h4>Profissão:</h4>
            <p><?php foreach ($dadosP as $row) {
                echo '<h5>'.$row['profissao_usu'].'</h5>';
              } ?></p>
            <hr style="background-color: #8B8989">
          
            <div class="text-center ">
            <div class="col 2 text-center">
        <h4>Informações para contato:</h4>
        </div>
            <h4><?php foreach ($dadosP as $row) {
                  echo $row['email_usu'];
                } ?> <br>
          <?php foreach ($dadosP as $row) {
            echo $row['telefone_usu'];
          } ?>
          </h4>
            </div>
            <hr style="background-color: #8B8989">
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-12 ">
        <div class="col 2 mt-2">

        </div>
        <div class="col 4">
          <br>
         
        </div>
       </div>
       <div class="col-md-6 col-12 ">
         
        <div class="col 4 text-center">
          <br>
            <?php
            // include_once "Avaliação.php";
            ?>
        </div>
       </div>
             
    </div>
    <div class="row">
      <div class="col-12 col-md-12 mb-3">
    <h3 class="text center">Anúncios publicados:</h3>
    </div>
    <?php
    foreach ($dadosPa as $row) {

      echo

        '<div class="col-12 col-md-6 col-sm-12">
    <div class="card mb-3" style="">
      <div class="row no-gutters">
        <div class="col-md-12">
          <div class="card-body"  style="box-shadow: 10px 10px 7px #0623484f;">
            <div class="row no-gutters mb-3 w-100 ">
              <div class="col-12">
            <h5 class="card-title text-center"><strong>' . $row['titulo_anun'] . '</strong></h5>
            </div>
            </div>
            <p class="card-text">' . $row['descricao_anun'] . '</p>
            
            <button type="button" class="btn w3-red" data-toggle="modal" data-target="#exampleModal' . $row['id_anun'] . '">Excluir</button>
            <button type="button" class="btn w3-blue" data-toggle="modal" data-target="#ModalEditar' . $row['id_anun'] . '">Editar</button>
          </div>
          </div>
</div>
</div>
</div>
<div class="modal fade" id="exampleModal' . $row['id_anun'] . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Excluir</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p> Tem certeza que deseja excluir o anúncio ? </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <a href="ExcluirContro?id=' . $row['id_anun'] . '" type="button" class="btn w3-red" >Excluir</a>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="ModalEditar' . $row['id_anun'] . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Editar um anuncio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form  method="POST" action="EditarAnun?id=' . $row['id_anun'] . '">
        <div class="form-group">
          <label for="exampleInputEmail1">Titulo</label>
          <input type="text" class="form-control" id="titulo" name = "titulo_anun" >
          <small id="emailHelp" class="form-text text-muted">  </small>
        </div>
        <div class= " form-group">
            <label for="categoria">Categoria</label>
            <select id="categoria" name="categoria_anun" class="form-control">
              <option selected>Escolha uma categoria</option>
              <option>TI</option>
              <option>Tradução</option>
              <option>Construção</option>
              <option>Audiovisual</option>
              <option>Escrita</option>
              <option>Educação e Consultoria</option>
            </select>
        </div>

        <div class="form-group">
          <label for="descricao"> Descrição</label>
          <textarea type="text" class="form-control" id="descricao" name = "descricao_anun"> </textarea>
        </div>

        <div class="modal-footer">
        
        <button  class="btn w3-green" > Salvar </button>
      </div>
  
      </form>
      
      </div>

    </div>
  </div>
</div>
';
    } ?>

</div>
<br><br>
</div>
<!--<a href="SaibaMaisContro?id='. $row['id_anun'] . '" type="button" class="btn w3-blue" >Excluir</a>-->
<script>

function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

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