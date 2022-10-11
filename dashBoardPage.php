<?php
require "./lib/conn.php";
$id = (int) $_GET["id"];
$sql = "SELECT * FROM pessoa WHERE id=:id";
$pessoa = $conn -> prepare($sql);
$pessoa->bindValue(":id", $id);
$pessoa ->execute();
$pessoa = $pessoa->fetch(PDO::FETCH_OBJ); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/dashBoard.css">
</head>
<body>
        <header>
                <a id="logo" class="marca" href=""><img src="./image/logotipo svg.png" alt=""></a>
                <div class="perfil">
                        <span>Meu perfil</span>
                        <img src="./image/image-perfil.png" alt="">
                </div>
        </header>
        <section id="welcome">Seja bem vindo, <?=$pessoa->nome?> </section>
        <main>
                <div class="divContainer divContainer1">
                        <div class="pagamentosRealizados">
                                <p>Pagamentos</p>
                                <section class="infos">Transfência para Joana <span>R$ -400.00</span></section>
                                <section class="infos">Transfência para Joana <span>R$ -400.00</span></section>
                                <section class="infos">Transfência para Joana <span>R$ -400.00</span></section>
                        </div>
               
                </div>
                <div class="divContainer divContainer2">
                        <div class="meuSaldo">
                                <p>Meu saldo:</p>
                                <h2>R$ 4500.00</h2>
                                <span>Meus extratos </span>
                        </div>
                        <div class="estatistica">
                                <p>Meus investimentos:</p>
                                <img src="./image/estatisticas.svg" alt="">
                        </div>
                </div>
                <div class="divContainer divContainer3">
                        <p>Meus cartões</p>
                        <div class="cartao">
                                <div class="imagemCartao">
                                        <div class="containerCartao">
                                                <h1>YouBank</h1>
                                                <p id="asterisco"><?=$pessoa->cpf?> </p>
                                                <p id="dadosUsuarioCartao"><?=$pessoa->nome?> <?=date('d/m/Y', strtotime($pessoa->dataNasc)) ?><img src="./image/icone-visa.svg" alt=""></p>
                                        </div>
                                </div>
                        </div>
                        <div class="cartao">
                                <div class="imagemCartao">
                                        <div class="containerCartao">
                                                <h1>YouBank</h1>
                                                <p id="asterisco"><?=$pessoa->cpf?> </p>
                                                <p id="dadosUsuarioCartao"><?=$pessoa->nome?> <?=date('d/m/Y', strtotime($pessoa->dataNasc)) ?><img src="./image/icone-visa.svg" alt=""></p>
                                        </div>
                                </div>
                        </div>
                        <div class="cartao">
                                <div class="imagemCartao">
                                        <div class="containerCartao">
                                                <h1>YouBank</h1>
                                                <p id="asterisco"><?=$pessoa->cpf?> </p>
                                                <p id="dadosUsuarioCartao"><?=$pessoa->nome?> <?=date('d/m/Y', strtotime($pessoa->dataNasc)) ?> <img src="./image/icone-visa.svg" alt=""></p>
                                        </div>
                                </div>
                        </div>
                </div>
        </main>
</body>
</html>