<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">

</head>
<body>
<div class='row border text-center mt-5'>

<div class='card-header'>
<h5 class='card-title text-center'>Consulta</h5>
</div>


<ul class='list-group list-group-flush card col-6'>
<li class='list-group-item'><h5>Cliente: $nomeu</h5> </li>
<li class='list-group-item'><h5>Data: $data 17:00</h5></li>
<li class='list-group-item'><h5>Tipo: $tipo</h5></li>
</ul>
<ul class='list-group list-group-flush card col-6'>
<li class='list-group-item'><h5>Pet:";while($rowp = mysqli_fetch_assoc($dadop)  ){echo $rowp['nome_pet'];}echo"</h5></li>
<li class='list-group-item'><h5>Status: pendente</h5></li>
<li class='list-group-item'><h5>Endereço: $endereco</h5></li>
</ul>
<ul class='list-group list-group-flush card '>
<li class='list-group-item'><h5>Descrição:</h5> $descricao </li>
</ul>



</div>
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