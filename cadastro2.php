
<!DOCTYPE html>
<html lang=pt-br>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google-site-verification" content="7vpmfkcVQ70phEK6-FgbxDx7ev3PgkVdbTVAzFSJDks" />
	<title>JRNET Comunicações</title>
	<link rel="icon" href="img/fav.ico">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="css/custom1.css">
	<link rel="stylesheet" href="css/custom.css">
	

</head>

<body>

	<div class="bar_top">
			<div class="bar_topd">
				<ul class="menu_barrax">
					<li><a href="cadastro.php" title="Cadastre-se">Cadastre-se</a></li>
					<li><a href="https://usuario.gerencianet.com.br/segunda-via" title="2° via Boleto"> 2° Via Boleto</a>
						<li><a href="#" title="contato">&nbsp&nbsp&nbsp(11) 95723-4497</a></li>
					</li>
				</ul>
				<div class="transit hide-on-med-and-down">
					<a href="https://www.facebook.com/profile.php?id=100050804596276" target="_blank"><img src="http://4.bp.blogspot.com/-4di8wyO8reU/T9ieCNjxkrI/AAAAAAAAD34/n9mdGQl36go/s1600/facebook.png" title="Facebook"/></a>
					<a href="https://github.com/LuianAlves" target="_blank"><img src="http://1.bp.blogspot.com/-V6AUHhYK_tw/T9ieDhXQM3I/AAAAAAAAD4Y/2SX5sC04x2c/s1600/twitter.png" title="Twitter"/></a>
				</div>
			</div>
	</div>

<header>

			<ul class="sidenav" id="mobile-nav">
				<li><a class="hide-menu sidenav-close" href="index.php">Home</a></li>
				<li><a class="hide-menu sidenav-close" href="empresa.php">Empresa</a></li>
				<li><a class="hide-menu sidenav-close" href="planos.php">Planos</a></li>
				<li><a class="hide-menu sidenav-close" href="contato.php">Contato</a></li>
			</ul>

	<div class="navbar">
		<nav class="navbar z-depth-0">
			<div class="nav-wrapper container">
				<h1 class="logo_text">JRNET Comunicações</h1>
				<a href="index.php"><img class="logo_img" src="img/logo.png" alt="JRNET"></a>
				<a href="#" data-target="mobile-nav" class="sidenav-trigger right hide-on-large-only"><i class="material-icons">menu</i></a>

				<ul class="right light hide-on-med-and-down">
					<li><a href="index.php">Home</a></li>
					<li><a href="empresa.php">Empresa</a></li>
					<li><a href="planos.php">Planos</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>

				
			</div>
		</nav>
	</div>

</header>

<section class="cadastro bloco scrollspy" id=cadastro>

	<div class="row container">
		<div class="col s12 m12 l4">
			<div class="formulario white center">
				<h4>Ficha de Cadastro</h4>

				<form action="mail.php" method="post">

					<div class="input-field">
						<input type="text" name="name" id="name">
						<label for="name">Nome</label>
					</div>

					<div class="input-field">
						<input type="email" name="email" id="email">
						<label for="email">Email</label>
					</div>


					<div class="input-field">
						<input type="text" name="celular" id="celular">
						<label for="celular">Celular</label>
					</div>
									
					<div class="input-field">
						<input type="text" name="cpf" id="cpf">
						<label for="cpf">CPF</label>
					</div>
					
					<div class="input-field">
						<input type="text" name="rg" id="rg">
						<label for="rg">RG</label>
					</div>

					<div class="input-field">
						<input type="text" name="endereco" id="endereco">
						<label for="endereco">Endereço</label>
					</div>

					<div class="input-field">
						<input type="text" name="cep" id="cep">
						<label for="cep">CEP</label>
					</div>

					<div class="input-field">
    					<select type="text" name="plano" id="plano">
      						<optgroup label="Planos Econômicos">
      							<option value="" disabled selected>Escolha seu Plano</option>
        						<option value="1">3MBS R$42,80</option>
        						<option value="2">4MBS R$52,80</option>
        						<option value="3">5MBS R$59,90</option>

      						</optgroup>	
    					</select>
  					</div>

					<div class="input-field">
						<textarea name="message" id="message" class="materialize-textarea"></textarea>
						<label for="message">Mensagem (Opcional)</label>
					</div>

					<button class="btn blue-logo" type="submit">Enviar</button>
					
				</form>
			</div>
		</div>
	</div>
</section>

<footer class="rodape">
		<div class="row container center">
			<img src="img/lg.png" class="lgg">
			<p class="white-text"> <a href="https://luianalves.com.br">Luian Alves</a> @2019 - Todos os Direitos Reservados </p>
		</div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>

  $(document).ready(function(){
    $('.sidenav').sidenav();

    $(".scrollspy").scrollspy({
    	scrollOffset: 0
    });
  });
  
    $('.carousel.carousel-slider').carousel({
    	fullWidth: true,
    	indicators: true	
    })

    $(".modal").modal();
  
  	$(document).ready(function(){
    $('.materialboxed').materialbox();
 	}); 

  	function autoplay(){
  		$(".carousel").carousel("next");
  		setTimeout(autoplay, 4500);
  	}

  	autoplay();

  $(window).on("scroll", function(){
  	if($(window).scrollTop() > 100) {
  		$(".navbar").addClass("nav-color");
  	} else {
  		$(".navbar").removeClass("nav-color");
  	}
  });

   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  $(document).ready(function(){
    $('select').formSelect();
  });

</script>

<script>
	<?php
	if(isset($GET['status'])):
		if($_GET['status'] == "sucesso"):
		echo "<script>materialize.toast('Enviado com sucesso!', 4000);</script>";
		else:
		echo "<script>materialize.toast('Erro ao enviar', 4000);</script>";
		endif;
	endif;
	?>
</script>



</body>
</html>