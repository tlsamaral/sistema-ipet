<?php
session_start();
include "conexao.php";

$id = $_GET['id'];
$email = $_POST['email_usu'];
$telefone = $_POST['telefone_usu'];
$cidade = $_POST['cidade_usu'];
$bairro = $_POST['bairro_usu'];
$rua = $_POST['rua_usu'];
$numero = $_POST['numero_usu'];
$complemento = $_POST['complemento_usu'];

if(isset($email) && $email != ''){
    $_SESSION['email'] = $email;
    $sql = "UPDATE `usuario` SET `email_usu` = '$email' WHERE `id_usu` = $id";
  

    if (mysqli_query($conn, $sql) ){
       
    }else{
        echo "Erro";
    }
    }

if(isset($telefone) && $telefone != ''){
    $sql = "UPDATE `usuario` SET `telefone_usu`='$telefone' WHERE `id_usu` = $id";
    
    if (mysqli_query($conn, $sql) ){
       
    }else{
        echo "Erro";
    }
    }

    if(isset($cidade) && $cidade != ''){
        $sql = "UPDATE `usuario` SET `cidade_usu`='$cidade' WHERE `id_usu` = $id";
        
        if (mysqli_query($conn, $sql) ){
        
        }else{
            echo "Erro";
        }
        }

        if(isset($bairro) && $bairro != ''){
            $sql = "UPDATE `usuario` SET `bairro_usu`='$bairro' WHERE `id_usu` = $id";
            
            if (mysqli_query($conn, $sql) ){
            
            }else{
                echo "Erro";
            }
            }

            if(isset($rua) && $rua != ''){
                $sql = "UPDATE `usuario` SET `rua_usu`='$rua' WHERE `id_usu` = $id";
                
                if (mysqli_query($conn, $sql) ){
                
                }else{
                    echo "Erro";
                }
                }

                if(isset($numero) && $numero != ''){
                    $sql = "UPDATE `usuario` SET `numero_usu`='$numero' WHERE `id_usu` = $id";
                    
                    if (mysqli_query($conn, $sql) ){
                    
                    }else{
                        echo "Erro";
                    }
                    }
                    if(isset($complemento) && $complemento != ''){
                        $sql = "UPDATE `usuario` SET `complemento_usu`='$complemento' WHERE `id_usu` = $id";
                        
                        if (mysqli_query($conn, $sql) ){
                        
                        }else{
                            echo "Erro";
                        }
                        }
                

 header('Location: admBusFun.php');

?>