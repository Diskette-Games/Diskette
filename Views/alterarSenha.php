<?php
include '../DAO/acessoLogin.php';
$nametag = $_GET["nametag"];
$id_usu = $_GET['id_usu'];
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Diskette - Mundo Game</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../assets/css/w3.css">
		<meta name="viewport" content="width=device-width, initial-scale=1" />		
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="../assets/css/supreme.css" />	
	</head>
	<body class="homepage">
		<div id="page-wrapper">									
				<section id="banner">
					<header>											
						<h2 class="h2s">Alterando seu <strong>Password</strong>.<img src="../assets/css/images/loadinggif.gif" class="logogif"></h2>
						<div class="cadastro">
						<form class="form config2" method="post" action="../DAO/alterarSenha.php">
							<div class="form">
								<div class="w3-row">
								  	<div class="b5 w3-col m6 w3-center">
								  		<input type="hidden" value="<?php echo $id_usu ?>" name="codigo">
								  		<p><label>Nova Senha:</label><input maxlength="30" type="password" class="" required=""  name="senha" id="nome" placeholder="Digite nova senha"></p>
								  	</div>
								 	<div class="b5 w3-col m6 w3-center">
								  		<p><label>Confirme sua Senha:</label><input maxlength="20" type="password" class="" required="" name="conSenha" id="conSenha" placeholder="Confirme sua senha"></p>
								  	</div>	
								  	<input type="submit" class="ajusteAlto color" name="entrar" id="entrar" value="Confirmar">					 
								</div>
							</div>																		
						</form>						
						</div>
					</header>					
				</section>									
				<div id="footer">
					<div class="container">
						<div class="row">
						</div>
						<hr />
						<div class="row">
							<div class="12u">

									<section class="contact">
										<header>
											<h3>Siga-nos em nossas redes sociais e comercias</h3>
										</header>
										<p>Seja o primeiro a receber infrmações e conteúdo de todo universo dos jogos.</p>
										<ul class="icons">
											<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
											<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
										</ul>
									</section>
								
									<div class="copyright">
										<ul class="menu">
											<li>&copy; Todos direitos autorais reservados.</li><li>Design: <a href="http://NadaNadaNada.com">J. Matheus</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.dropotron.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/jquery.onvisible.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
			<!--<script src="../assets/js/confirmarsenha.js"></script>-->
			<script src="../assets/js/jasny-bootstrap.min.js"></script>
	</body>
</html>
