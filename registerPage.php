<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/styleRegisterPage.css">
</head>
<body>
        <div class="container">
                <div class="divisao texto">
                        <h1>Com a YouBank</h1>
                        <h2>Você tem taxa zero para investir</h2>
                        <p>Invista em renda fixa e variável sem taxa de corretagem e custódia</p>
                </div>

                <div class="divisao login">
                        <form action="cadastrar.php" method="post">
                                <h1>Fazer cadastro</h1>
                                <div class="campo">
                                        <label for="nome">Nome:</label>
                                        <input type="text" id="nome" name="nome">
                                </div>
                                <div class="campo">
                                        <label for="cpf">CPF:</label>
                                        <input type="text" id="cpf" name="cpf">
                                </div>
                                <div class="campo">
                                        <label for="dataNasc">Data de Nascimento:</label>
                                        <input type="date" name="dtnascimento" id="dtnascimento" max="<?= date("Y-m-d",time()) ?>" >
                                </div>
                                <div class="campo">
                                        <label for="email">Email:</label>
                                        <input type="text" id="email" name="email">
                                </div>
                                <div class="campo">
                                        <label for="senha">Senha:</label>
                                        <input type="text" id="senha" name="senha">
                                </div>
                                <button type="submit">Cadastre-se</button>
                                <nav>
                                        <a href="./index.php">Voltar à página inicial</a>
                                </nav>
                        </form>

                </div>
        </div>
</body>
</html>