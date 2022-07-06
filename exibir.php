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
    <link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">


    <title>Exibir</title>
  </head>
  <body>
    <h3 id="titulo">PETS REGISTRADOS</h3>
    <form action="exibir.php" method="POST" class="form-inline my-2 my-lg-0">
      <div class="container">
      <div class="row ">
        <div class="col-10">
      <input id="pesquisa" class="form-control mr-sm-2" type="search" name="busca" placeholder="Pesquisar" aria-label="Search">
      </div>
      
      <div class="col-2">
      <button id="botao" class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
      </div>  
    </div>
      
    </form id="caixa">
      <div id="caixap">
      <table class="table table-hover mt-5" >
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
       $nome = $linha['nome_pet'];
       $animal = $linha['animal_pet'];
       $raca = $linha['raca_pet'];
       $contagem ++;
      
        echo " <tr>
       <th scope='row'>$contagem</th>
       <td>$nome</td>
       <td>$animal</td>
       <td>$raca</td>
       
      </tr>";
      
      }
      
        
       ?>
         
         
        </tbody>
      </table>
      </div>
</div>
<footer><p>Todos os direitos reservados: iPet&#169;</p></footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>