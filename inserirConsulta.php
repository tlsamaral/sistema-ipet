<?php
session_start();
include "conexao.php";

$id = $_SESSION['id_usu'];

$idPet = $_POST['id_pet'];
echo "$idPet";
$tipo = $_POST['tipo_con'];
echo " $tipo";
$data = $_POST['data_con'];
$hora = $_POST['id_exp'];
$acompanhar = $_POST['acompanhar_con'];
$dataHora = "$data$hora";
echo " $dataHora";
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







$sql = "INSERT INTO `consulta`(`id_pet`, `id_usu`, `id_servico`, `id_exp`, `descricao_con`, `taxi_con`, `endereco_con`, `status_con`, `acompanhar_con`, `data_con`) VALUES ('$idPet','$id','$tipo','$hora','$descricao','$taxi','$endereco','Pendente', '$acompanhar','$data')";

 if (mysqli_query($conn, $sql) ){
       header('Location: perfil2.php');
 }else{
      echo "Deu ruim";
 }

?>