<?php
include '../DAO/acessoLogin.php';
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
						<h2 class="h2s">Criando seu <strong>salve</strong>.<img src="../assets/css/images/loadinggif.gif" class="logogif"></h2>												
						<div class="cadastro">
						<form class="form config2" method="post" action="../DAO/cadastro.php">
							<div class="form">
								<div class="w3-row">
								  	<div class="b5 w3-col m4 w3-center">
								  		<p><label>Nome:</label><input maxlength="30" type="text" class="" required=""  name="nome" id="nome" placeholder="Nome"></p>
								  	</div>
								 	<div class="b5 w3-col m4 w3-center">
								  		<p><label>Sobrenome:</label><input maxlength="20" type="text" class="" required="" name="sobrenome" id="sobrenome" placeholder="Sobrenome"></p>
								  	</div>
								  	<div class="b5 w3-col m4 w3-center">
								  		<p><label>Nome Tag:</label><input maxlength="10" type="text" class="" required="" name="nametag" id="nametag" placeholder="Nome Tag"></p>
								  	</div>								  
								</div>
											
								<div class="w3-row">
									<div class="b5 w3-col m3 w3-center">
									    <p><label>Sexo:</label><select name="sexo">									    	
											<option value="M">Masculino</option>
											<option value="F">Feminino</option>
										</select></p>
									</div>

								  	<div class="b5 w3-col m6 w3-center">
								  		<p><label>Data de Nascimento:</label><input maxlength="8" type="text" class="ajusteBaixo" required="" name="data" id="data" data-mask="99/99/9999" placeholder="__/__/____"></p>
								  	</div>

								  	<div class="b5 w3-col m3 w3-center">
								  		<p><label>Pais:</label>
								  			<select name="pais">
								  				<option value="BRA">BRA</option>
								  				<option value="ARG">ARG</option>
								  				<option value="EUA">EUA</option>
								  				<option value="RUS">RUS</option>
								  				<option value="ESP">ESP</option>
								  				<option value="POR">POR</option>
								  				<option value="FRA">FRA</option>
								  				<option value="HOL">HOL</option>
								  				<option value="ALE">ALE</option>
								  				<option value="ITA">ITA</option>
								  				<option value="CHN">CHN</option>
								  				<option value="MEX">MEX</option>
								  				<option value="CHE">CHE</option>
								  				<option value="CHL">CHL</option>
								  				<option value="BOL">BOL</option>
								  			</select></p>
								  </div>
								</div>

								<div class="w3-row">
									<div class="b5 w3-col m3 w3-center">
									    <p><label>CPF:</label><input maxlength="11" type="text" class="ajusteBaixo" required="" name="cpf" id="cpf" data-mask="999.999.999-99" placeholder="000.000.000-00"></p>
									</div>

								  	<div class="b5 w3-col m6 w3-center">
								  		<p><label>Celular:</label><input maxlength="11" type="text" class="ajusteBaixo" required="" name="celular" id="celular" data-mask="(99) 9 9999-9999" placeholder="(00) 0 0000-0000"></p>
								  	</div>								  
								</div>

								<div class="w3-row">
									<div class="b5 w3-col m3 w3-center">
									    <p><label>E-mail:</label><input maxlength="50" type="text" class="ajusteBaixo" required="" name="email" id="email" placeholder="Diskette@gmail.com"></p>
									</div>

								  	<div class="b5 w3-col m6 w3-center">
								  		<p><label>Senha:</label><input maxlength="15" type="password" class="ajusteBaixo" required="" name="senha" id="senha" placeholder="********"></p>
								  	</div>

								  	<div class="b5 w3-col m3 w3-center">
								  		<p><label>Confirmação:</label><input maxlength="15" onfocus="confirmarSenha()" type="password" class="ajusteBaixo" required="" name="conSenha" id="conSenha" placeholder="********"></p>
								  </div>
								</div>	

								<p><label>Biografia:</label><textarea maxlength="300" placeholder="Fale sobre um pouco sobre você" name="bio" id="bio" class="ajusteBaixo" rows="4" cols="50"></textarea>								
								<input required="" type="checkbox"  name="termos" id="termos"> Termos de condições
								</p>																							
										<input type="submit" class="ajusteAlto color" name="entrar" id="entrar" value="Confirmar">			
								</table>
							</div>
							<a href="index.php"><strong>Já tenho uma conta</strong></a>.
						</form>						
						</div>
					</header>					
				</section>			
			
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