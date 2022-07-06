<!doctype html>
<html lang="pt-br">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">

    <title>petshop</title>
  </head>
  <body class="" style="">

  <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">iPet</a>
   </nav>

  <form action="inserirPet.php" method="post">
  
      <div class="container mt-5">

      <div class="text-center">
        <img src="imagem/cachorro.png" class="text-center" style="margin-left: auto;
    margin-right: auto; width: 6em
" alt="">
</div>
      <h3 class="text-center ">Registre um pet</h3>
      <div class="mt-3">
          <div class="row">
      <div class="col-12">
        <label for="nome">Nome do pet</label>
      <input type="text" name="nome_pet" id="nome" class="form-control" placeholder="Digite o nome do pet">
    </div>
    </div>
  <div class="row mt-3">
    <div class="col-6">
        <label for="animal">Animal</label>
        <select class="form-control" name="animal_pet" id="selectItem">
        <option id="Cachorro" value="0">Selecione um animal</option>
    <option id="Cachorro">Cachorro</option>
    <option id="Gato">Gato</option>
        </select>
      
    </div>
    <div class="col-6" id="racaForm">
    <!-- <label for="raca">Raça</label>
      <input type="text" name="raca_pet" id="raca" class="form-control" placeholder="Digite a raça do animal"> -->
    </div>
  </div>
  
  </div>
 
  <button type="submit" class="btn btn-primary mt-3">Registrar</button>
  
  </div>
  
  
</form>
    

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="index.js"></script>
  </body>
</html>