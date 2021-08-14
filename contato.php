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

<section class="contato bloco scrollspy" id=contato>

	<div class="row container">
		<div class="col s12 center">
			<h2 class="titulo light">Contato</h2>
		</div>

		<div class="col s6">
			<div class="informacoes white-text center light hide-on-med-only">
				
				<h4>Endereço</h4>
				<p class="light">Parque Grajaú </p>
				<h4>Contatos</h4>
				<p class="light">(11) 95723-4497</p>
			
			</div>
		</div>


		<div class="col s6">
			<div class="formulario white center">
				<h4>Fale Conosco</h4>
				<p class="light"> Dúvidas, criticas ou sujestões? Entre em contato conosco, seu feedback é muito importante.</p>

				<form action="enviar-email.php" method="post" class="input-field">

					<div class="input-field">
						<i class="material-icons prefix">face</i>
						<input type="text" name="name">
						<label for="name">Seu Nome</label>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">email</i>
						<input type="email" name="email">
						<label for="email">Seu Email</label>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">settings_phone</i>
						<input type="text" name="telefone">
						<label for="endereco">telefone</label>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">edit</i>
						<textarea name="mensagem" id="message" class="materialize-textarea"></textarea>
						<label for="message">Mensagem</label>
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

</script>



</body>
</html>