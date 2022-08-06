<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/styleHome.css">
        <link rel="stylesheet" href="./css/menu.css">

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
        <header id="header">
                <a id="logo" class="marca" href=""><img src="./image/logotipo svg.png" alt=""></a>
                <nav id="nav">
                        <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">Menu
                                <span id="hamburger"></span>
                        </button>
                        <ul id="menu" role="menu" class="cadastro">
                                <li> <button id="login"><a href="./loginPage.php"><ion-icon name="person-outline"></ion-icon>fazer Login</a></button></li>
                                <li><button id="cadastro"><a href="./registerPage.php"> Cadastre-se </a></button></li>
                        </ul>
                </nav>
        </header>
        <section>
                <div class="texto">
                        <h1>Com YouBank, faça seu dinheiro render mais</h1>
                        <p>Use seu dinheiro a hora que quiser e sem perder o lucro. O dinheiro rende 150% do CDI</p>
                </div>
                <div class="imagem">
                        <img src="./image/woman.png" alt="">
                </div>
        </section>
        <main>
                <div class="container">
                        <div class="texto">
                                <h1>Nós somos a YouBank</h1>
                                <p id="p1">
                                        Um banco 100% digital, sem taxas e com rendimento maior do que a poupança
                                </p>
                                <p id="p2">
                                        Aqui você faz saques e transferências gratuitos e ilimitados, tem segurança ao investir
                                        o seu dinheiro e ainda ganha mimos exclusivos
                                </p>
                        </div>

                        <div class="slide">
                                <ion-icon class="seta" id="seta1" name="chevron-forward-outline"></ion-icon>
                                <div class="info info1">
                                        <img src="./image/icone-cartao.svg" alt="">
                                        <span>Conta e cartão gratuiro</span>
                                        <p>Ter um conta não custa nada. A conta é gratuita e sem tarifa de manutenção.</p>
                                </div>
                                <div class="info info2">
                                        <img src="./image/icone-money.svg" alt="">
                                        <span>Taxa zero para investir</span>
                                        <p>Invista em renda fixa e variável sem taxa de corretagem e custódia.</p>
                                </div>
                                <div class="info info3">
                                        <img src="./image/icone-24horas.svg" alt="">
                                        <span>Atendimento 24h</span>
                                        <p>Ter uma conta não custa nada. A conta é digital e sem tarifa de manutenção.</p>
                                </div>
                                <ion-icon  class="seta" id="seta2" name="chevron-forward-outline"></ion-icon>
                        </div>
                        <div class="cartao">
                                <div class="texto">
                                        <h1>Solicite agora seu cartão</h1>
                                        <p>É totalmente gratís e sem anuidade, livre de taxa burocracias</p>
                                </div>
                                <div class="imagemCartao">
                                        <div class="containerCartao">
                                                <h1>YouBank</h1>
                                                <p id="asterisco">**** **** **** ****</p>
                                                <p id="dadosUsuarioCartao">Seu nome aqui 05/2022 <img src="./image/icone-visa.svg" alt=""></p>
                                        </div>
                                </div>
                        </div>
                </div>
        </main>
        <footer>
		<div class="main-content">
			<div class="left box">
				<h2> Sobre nós</h2>
				<div class="content">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet iste facilis harum eos vel incidunt distinctio corrupti iure? Rem</p>
				
					<div class="social">
						<a href="#"><span class="fab fa-facebook-f"></span></a>
						<a href="#"><span class="fab fa-twitter"></span></a>
						<a href="#"><span class="fab fa-instagram"></span></a>
						<a href="#"><span class="fab fa-youtube"></span></a>
					</div>
				</div>
			</div><!--left box-->
			<div class="center box">
				<h2>Endereço</h2>
				<div class="content">
					<div class="place">
						<span class="fas fa-map-marker"></span>
						<span class="text">Av.Brasil, Nova Capital</span>
					</div>

					<div class="phone">
						<span class="fas fas fa-phone-alt"></span>
						<span class="text">+55 61 9999-9999</span>
					</div>

					<div class="email">
						<span class="fas fa-envelope"></span>
						<span class="text">exemplo@exemplo.com</span>
					</div>
				</div>
			</div>
			<div class="right box">
				<h2>Contato</h2>
				<div class="content">
					<form action="#">
						<div class="email">
							<div class="text">Email *</div>
							<input type="email" name="email" required>
						</div>
						<div class="msg">
							<div class="text">Mensagem *</div>
							<textarea rows="2" cols="25" name="mensagem" required></textarea>
						</div>
						<div class="btn">
							<button type="submit">Enviar</button>
						</div>
					</form>
				</div>
			</div>
		</div><!--main-content-->
		<div class="bottom">
			<div class="center">
				<span class="credit">Criado por:</span>
				<span class="far fa-copyright">Rômulo da Silva Gonçalves</span>
			</div>
		</div>
	</footer>
        <script src="./js/verificarHome.js"></script>
        <script src="./js/menu.js"></script>
</body>
</html>