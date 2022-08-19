<?php
require "./lib/conn.php";
include "./lib/verificacoes.php";
$erro = false;
if (empty($_POST) || !isset($_POST)) {
        $erro = "<li> Os campos do fomulário estão vazios</li>";
} else {
        foreach ($_POST as $indice => $valor) {
                $valor = trim(strip_tags($valor));
                $$indice = $valor;

                if (empty($_POST[$indice])) {
                        $erro .= "<li> Campo '$indice' vazio.  </li>";
                }
        }



        if (!$erro && !verificarCPF($cpf)) {
                $erro .= "<li> CPF inválido. </li>";
        }

        if (!$erro && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erro .= "<li> Envie o seu E-mail em um formato válido. Exemplo: usuario@gmail.com </li>";
        }

        $sqlVerificaEmail = "SELECT * FROM  pessoa WHERE email = :email";
        $verificaEmail = $conn -> prepare($sqlVerificaEmail);
        $verificaEmail->bindValue(":email", $email);
        $verificaEmail->execute();

        if (!$erro && $verificaEmail -> rowCount() > 0) {
                $erro = "Este e-mail já está sendo usado";
        }
}

if ($erro) {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
                <link rel="stylesheet" href="./css/cadastrarStyle.css">
        </head>

        <body>
                <h2>Algo deu errado</h2>
                <div class="container">

                        <h1>ERRO!!!</h1>
                        <ul>
                                <?= $erro ?>
                        </ul>
                </div>

                <nav>
                        <button><a href="./registerPage.php">Voltar ao cadastro</a></button>
                </nav>
        </body>

        </html>
<?php
} else {
        $sql_cadastrar = "INSERT INTO pessoa VALUES(0, :nome, :cpf, :email, :senha)";
        $stmt = $conn->prepare($sql_cadastrar);
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":cpf", $cpf);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":senha", $senha);
        $stmt->execute();
?>
        <meta http-equiv="refresh" content="0; url=cadastroRealizado.php">
<?php
}
?>