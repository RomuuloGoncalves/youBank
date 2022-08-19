<?php
session_start();

function logar(){
        require "lib/conn.php";

if(verificaVazio($_POST)){
        $query_usuario =  "SELECT  id, email, senha FROM  pessoa  WHERE   email = :email and senha = :senha LIMIT 1";
        $result_usuario = $conn -> prepare ($query_usuario);
        $result_usuario -> bindParam(":email", $_POST["email"]);
        $result_usuario -> bindParam(":senha", $_POST["senha"]);
        $result_usuario -> execute();

        if($result_usuario  && ($result_usuario -> rowCount() != 0)){
                // $row_usuario = $result_usuario -> fetch(PDO::FETCH_ASSOC);
                ?>
                <meta http-equiv="refresh" content="0; url=dashBoardPage.html">
                <?php
        }else{
                $_SESSION['msg'] = "ERRO: Usuário ou senha inválida";

        }

        if(isset($_SESSION["msg"])){
                return $_SESSION["msg"];
                unset($_SESSION["msg"]);
        }
}
}

?>

<meta http-equiv="refresh" content="0; url=loginPage.php">