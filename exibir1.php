<?php
include "conexao.php";

if(isset($_POST['busca'])){
  $pesquisa = $_POST['busca'];
}else{
  $pesquisa = '';
}

$sql = "SELECT * FROM pet WHERE nome_pet LIKE '%$pesquisa%'";

$dados = mysqli_query($conn, $sql);





?>
<!doctype html>
<html lang="pt-br">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">


    <title>Exibir</title>
  </head>
  <body>
    <h3 class="text-center">Pets registrados</h3>
    <form action="exibir.php" method="POST" class="form-inline my-2 my-lg-0">
      <div class="container">
      <div class="row ">
        <div class="col-10">
      <input class="form-control mr-sm-2" type="search" name="busca" placeholder="Pesquisar" aria-label="Search">
      </div>
      <div class="col-2">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
      </div>  
    </div>
      
    </form>
    <div style="box-shadow: 10px 5px 5px #dee2e6;">
    <table class="table table-hover mt-5" style="">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Animal</th>
      <th scope="col">Raça</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
$contagem = 0;
while($linha = mysqli_fetch_assoc($dados) ){
 $id = $linha['id_pet'];
 $nome = $linha['nome_pet'];
 $animal = $linha['animal_pet'];
 $raca = $linha['raca_pet'];
 $contagem++;

  echo "
  <div class='modal fade' id='excluir$id' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Excluir</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
       <h5> Tem certeza que deseja excluir ? </h5>
      </div>
      <div class='modal-footer'>
       <a href='excluir.php?id=$id' type='button' class='btn btn-danger'>Excluir</a>
      </div>
    </div>
  </div>
</div>


  <div class='modal fade' id='editar$id' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Editar informações</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
      <form action='editar.php?id=$id' method='post'>
  
      <div class='container '>
      <div class=''>
          <div class='row'>
      <div class='col-12'>
        <label for='nome'>Nome do pet</label>
      <input type='text' name='nome_pet' id='nome' class='form-control mt-2' placeholder='Digite o nome do pet'>
    </div>
    </div>
  <div class='row mt-3'>
    <div class='col-12'>
        <label for='animal'>Animal</label>
        <select class='form-control mt-2' name='animal_pet' id='animal'>
    <option id='Cachorro'>Cachorro</option>
    <option id='Gato'>Gato</option>
        </select>
      
    </div>
    <div class='col-12 mt-3'>
    <label for='raca'>Raça</label>
      <input type='text' name='raca_pet' id='raca' class='form-control mt-2' placeholder='Digite a raça do animal'>
    </div>
  </div>
  
  </div>
 
  
  
  </div>
  
  
      </div>
      <div class='modal-footer'>
        <button type='submit' class='btn btn-primary mt-3'>Editar</button>
      </div>
    </div>
  </div>
</div>
</form>

   <tr>
 <th scope='row'>$contagem </th>
 <td>$nome</td>
 <td>$animal</td>
 <td>$raca</td>
 <td ><button type='button' class='btn btn-success btn-sm' data-toggle='modal' data-target='#editar$id'>Editar</button>
 <button type='button' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#excluir$id'>Excluir</button></td>
 <td><img width=50 src='imagem/cachorro1.jpg'> </td>
 
 
</tr>";

}

  
 ?>
   
   
  </tbody>
</table>
</div>

</div>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    
  </body>
</html>