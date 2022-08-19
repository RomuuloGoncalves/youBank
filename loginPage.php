<?php
session_start();
require "./lib/conn.php";
require "./lib/verificacoes.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/styleLoginPage.css">
</head>
<body>
        <div class="container">
                <div class="divisao texto">
                        <h1>Com a YouBank</h1>
                        <h2>Você tem taxa zero para investir</h2>
                        <p>Invista em renda fixa e variável sem taxa de corretagem e custódia</p>
                </div>

                <div class="divisao login">
                        <form action="" method="post">
                                <h1>Login</h1>

                                <div class="campo">
                                        <label for="email">Email:</label>
                                        <input type="text" id="email" name="email" value = "">
                                </div>
                                <div class="campo">
                                        <label for="senha">Senha:</label>
                                        <input type="text" id="senha" name="senha" value = "">
                                </div>
                                <?php
                                        $dados = filter_input_array(INPUT_POST,  FILTER_DEFAULT);
                                        if(!empty($dados ["email"])  && !empty($dados["senha"])){
                                        // if(verificaVazio($dados)){
                                                $query_usuario =  "SELECT  id, email, senha FROM  pessoa  WHERE   email = :email and senha = :senha LIMIT 1";
                                                $result_usuario = $conn -> prepare ($query_usuario);
                                                $result_usuario -> bindParam(":email", $dados["email"]);
                                                $result_usuario -> bindParam(":senha", $dados["senha"]);
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
                                                        echo $_SESSION["msg"];
                                                        unset($_SESSION["msg"]);
                                                }
                                        }
                                ?>
                                <button type="submit">Entrar</button>
                                <nav>
                                        <a href="./index.php">Voltar à página inicial</a>
                                </nav>
                        </form>
                </div>
        </div>
</body>
</html>