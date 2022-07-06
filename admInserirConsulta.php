<?php
session_start();
include "conexao.php";

$id = $_POST['id_usu'];

$idPet = $_POST['id_pet'];
echo "$idPet";
$tipo = $_POST['tipo_con'];
echo " $tipo";
$data = $_POST['data_con'];
$hora = $_POST['hora_con'];
$dataHora = "$data$hora";
echo " $dataHora";
$acompanhar = $_POST['acompanhar'];
echo " $acompanhar";
$descricao = $_POST['descricao_con'];
echo " $descricao";
$taxi = $_POST['taxi_con'];
echo" $taxi";
$endereco = $_POST['endereco_con'];
echo" $endereco";


if($endereco == 'Outro'){
    $cidade = $_POST['cidade_usu'];
    $bairro = $_POST['bairro_usu'];
    $rua = $_POST['rua_usu'];
    $numero = $_POST['numero_usu'];
    $complemento = $_POST['complemento_usu'];

    $endereco = "$cidade, $bairro, $rua, $numero, $complemento";
}







$sql = "INSERT INTO `consulta`(`id_pet`, `id_usu`, `id_servico`, `descricao_con`, `taxi_con`, `endereco_con`, `status_con`, `data_con`) VALUES ('$idPet','$id','$tipo','$descricao','não','$endereco','pendente','$data')";

 if (mysqli_query($conn, $sql) ){
       header('Location: admConsulta.php');
 }else{
      echo "Deu ruim";
 }

?>