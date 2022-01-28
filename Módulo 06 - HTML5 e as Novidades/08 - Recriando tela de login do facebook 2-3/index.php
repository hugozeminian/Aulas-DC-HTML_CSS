<!DOCTYPE html>
<html>
<head>
	<title>Login Facebook</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<header>
		<div class="center">
			<div class="logo">
				<h2>facebook</h2>
			</div><!--logo-->
			
			<form method="post" class="form-login">
				<div class="form-element">
					<p>E-mail ou Telefone:</p>
					<input type="email" name="">
				</div><!--form-elemente-->
				<div class="form-element">
				<p>Senha:</p>
				<input type="password" name="">
				</div><!--form-elemente-->
				<div class="form-element">
				<input type="submit" name="acao" value="Enviar">
				</div><!--form-elemente-->
			</form><!--form-login-->
			<div class="clear"></div>
		</div><!--center-->
	</header>

	<section class="main">
		<div class="center">
			<div class="img-pessoas">
				<img src="img1.PNG">
			</div><!--img-pessoas-->
				<div class="abrir-conta">
					<h2>Abra sua conta</h2>
					<h3>É gratuito e sempre será</h3>

					<form class="criar-conta">
						<div class="w50">
							<input type="text" name="" placeholder="Nome">
						</div><!--w50-->

						<div class="w50">
							<input type="text" name="" placeholder="Sobrenome">
						</div><!--w50-->

						<div class="w100">
							<input type="email" name="" placeholder="E-mail">
						</div><!--w100-->

						<div class="w100">
							<input type="password" name="" placeholder="Password">
						</div><!--w100-->
						
						<div class="w100">
							<h2>Data de nascimento</h2>
							<select name="nascimento-dia" class="nascimento">
								<?php
									for($i = 1; $i <= 31; $i++){
								?>	
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php } ?>
							</select>
							<select name="nascimento-mes" class="nascimento">
								<option value="0">Junho</option>
							</select>
							<select name="nascimento-ano" class="nascimento">
								<option value="1">1990</option>
							</select>
							<div class="clear"></div>
						</div><!--w100-->

						<div class="w100">
							<div class="input-radio">
								<input type="radio" value="masculino" name="sexo">
								<h2>Masculino</h2>
							</div><!--input-radio-->
							<div class="input-radio">
								<input type="radio" value="feminino" name="sexo">
								<h2>Feminino</h2>
							</div><!--input-radio-->
							<div class="clear"></div>
						</div><!--w100-->


						<div class="w100">
							<input type="submit" name="acao" value="Cadastrar!">
						</div><!--w100-->

					<div class="clear"></div>
					</form><!--criar-conta-->
				</div><!--abrir-conta-->

			<div class="clear"></div>
		</div><!--center-->
	</section><!--main-->

	<section class="linguas">
		<div class="center">
			<a class="selected-lingua" href="#">Português (BR)</a>
			<a href="#">Português (BR)</a>
			<a href="#">Português (BR)</a>
			<a href="#">Português (BR)</a>
			<a href="#">Português (BR)</a>
			<a href="#">Português (BR)</a>
			<a href="#">Português (BR)</a>
			<a href="#">Português (BR)</a>
		</div><!--center-->

		<div style="border:0;padding-top:10px;" class="center">
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
			<a href="#">Lorem Ipsum</a>
		</div><!--center-->

	</section><!--linguas-->

</body>
</html>