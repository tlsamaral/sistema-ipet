<?php
include "conexao.php";

$id = $_GET['id'];
$nome = $_POST['nome_des'];
$titulo1 = $_POST['titulo1_des'];
$titulo2 = $_POST['titulo2_des'];
$titulo3 = $_POST['titulo3_des'];
$texto1 = $_POST['texto1_des'];
$texto2 = $_POST['texto2_des'];
$texto3 = $_POST['texto3_des'];

if(isset($nome) && $nome != ''){
$sql = "UPDATE `design` SET `nome_des`='$nome'";

if (mysqli_query($conn, $sql) ){
   
}else{
    echo "Erro";
}
}
if(isset($titulo1 ) && $titulo1  != ''){
    $sql = "UPDATE `design` SET `titulo1_des`='$titulo1 '";
    
    if (mysqli_query($conn, $sql) ){
       
    }else{
        echo "Erro";
    }
    }

if(isset($titulo2 ) && $titulo2  != ''){
        $sql = "UPDATE `design` SET `titulo2_des`='$titulo2 '";
        
        if (mysqli_query($conn, $sql) ){
           
        }else{
            echo "Erro";
        }
}

if(isset($titulo3 ) && $titulo3  != ''){
            $sql = "UPDATE `design` SET `titulo3_des`='$titulo3 '";
            
            if (mysqli_query($conn, $sql) ){
               
            }else{
                echo "Erro";
            }
}
if(isset($texto1 ) && $texto1  != ''){
    $sql = "UPDATE `design` SET `texto1_des`='$texto1 '";
    
    if (mysqli_query($conn, $sql) ){
       
    }else{
        echo "Erro";
    }
}
if(isset($texto2 ) && $texto2  != ''){
    $sql = "UPDATE `design` SET `texto2_des`='$texto2 '";
    
    if (mysqli_query($conn, $sql) ){
       
    }else{
        echo "Erro";
    }
}
if(isset($texto3 ) && $texto3  != ''){
    $sql = "UPDATE `design` SET `texto3_des`='$texto3 '";
    
    if (mysqli_query($conn, $sql) ){
       
    }else{
        echo "Erro";
    }
}

        if(isset($_FILES['img_des']) && $_FILES['img_des'] != ''){
            $extensao = strtolower(substr($_FILES['img_des']['name'], -4));
            $novo_nome = md5(time()) . $extensao;
            $diretorio = "design/" ;
            $file = $_FILES['img_des'];
            // $file = move('perfilpet', $novo_nome);
        
            move_uploaded_file($_FILES['img_des']['tmp_name'], $diretorio.$novo_nome);
        //     $db = db_connect();
        //     $db->query("UPDATE usuario SET foto_pet='$novo_nome' WHERE email_usu='$email'");
        //     $db->close();
        
        if(isset($extensao) && $extensao != '')
        {
        $sql = "UPDATE `design` SET `img_des`='$novo_nome'";
        if (mysqli_query($conn, $sql) ){
           
        }else{
            echo "Deu ruim";
        }
        }
        else{
            
        }
        
        }

        if(isset($_FILES['logo_des']) && $_FILES['logo_des'] != ''){
            $extensao = strtolower(substr($_FILES['logo_des']['name'], -4));
            $novo_nome = md5(time()) . $extensao;
            $diretorio = "design/" ;
            $file = $_FILES['logo_des'];
            // $file = move('perfilpet', $novo_nome);
        
            move_uploaded_file($_FILES['logo_des']['tmp_name'], $diretorio.$novo_nome);
        //     $db = db_connect();
        //     $db->query("UPDATE usuario SET foto_pet='$novo_nome' WHERE email_usu='$email'");
        //     $db->close();
        
        if(isset($extensao) && $extensao != '')
        {
        $sql = "UPDATE `design` SET `logo_des`='$novo_nome'";
        if (mysqli_query($conn, $sql) ){
           
        }else{
            echo "Deu ruim";
        }
        }
        else{
            
        }
        
        }

        if(isset($_FILES['icone1_des'])){
            $extensao = strtolower(substr($_FILES['icone1_des']['name'], -4));
            $novo_nome = md5(time()) . $extensao;
            $diretorio = "design/" ;
            $file = $_FILES['icone1_des'];
            // $file = move('perfilpet', $novo_nome);
        
            move_uploaded_file($_FILES['icone1_des']['tmp_name'], $diretorio.$novo_nome);
        //     $db = db_connect();
        //     $db->query("UPDATE usuario SET foto_pet='$novo_nome' WHERE email_usu='$email'");
        //     $db->close();
        
        if(isset($extensao) && $extensao != '')
        {
        $sql = "UPDATE `design` SET `icone1_des`='$novo_nome'";
        if (mysqli_query($conn, $sql) ){
           
        }else{
            echo "Deu ruim";
        }
        }
        else{
            
        }
        
        }

        if(isset($_FILES['icone2_des'])){
            $extensao = strtolower(substr($_FILES['icone2_des']['name'], -4));
            $novo_nome = md5(time()) . $extensao;
            $diretorio = "design/" ;
            $file = $_FILES['icone2_des'];
            // $file = move('perfilpet', $novo_nome);
        
            move_uploaded_file($_FILES['icone2_des']['tmp_name'], $diretorio.$novo_nome);
        //     $db = db_connect();
        //     $db->query("UPDATE usuario SET foto_pet='$novo_nome' WHERE email_usu='$email'");
        //     $db->close();
            if(isset($extensao) && $extensao != '')
            {
            $sql = "UPDATE `design` SET `icone2_des`='$novo_nome'";
            if (mysqli_query($conn, $sql) ){
               
            }else{
                echo "Deu ruim";
            }
            }
            else{
                
            }
        }

            if(isset($_FILES['icone3_des'])){
                $extensao = strtolower(substr($_FILES['icone3_des']['name'], -4));
                $novo_nome = md5(time()) . $extensao;
                $diretorio = "design/" ;
                $file = $_FILES['icone3_des'];
                // $file = move('perfilpet', $novo_nome);
            
                move_uploaded_file($_FILES['icone3_des']['tmp_name'], $diretorio.$novo_nome);
            //     $db = db_connect();
            //     $db->query("UPDATE usuario SET foto_pet='$novo_nome' WHERE email_usu='$email'");
            //     $db->close();
            
            if(isset($extensao) && $extensao != '')
            {
            $sql = "UPDATE `design` SET `icone3_des`='$novo_nome'";
            if (mysqli_query($conn, $sql) ){
               
            }else{
                echo "Deu ruim";
            }
            }
            else{
                
            }
        
        }

header('Location: admConfdesign.php');

?>