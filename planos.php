
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


<section class="planos bloco scrollspy" id="planos">
	<div class="row container">
		<div class="col s12 center">
			<h2 class="light"> Planos </h2>
		</div>
	</div>

	<div class="row container">

		<!--ECONOMICO-->
		<article class="col s12 m6 l3">
			<div class="card">
				<div class="card-image">
					<img src="img/ecz.jpg" alt="Econômico" class="materialboxed">
					<a href="#economico-modal" class="btn btn-floating halfway-fab blue-logo modal-trigger">
						<i class="material-icons">more_horiz</i>
					</a>
				</div>

				<div class="card-content center">
					<h3 class="card-title"> Econômico </h3>
					<p class="light">Quer Economizar e ainda ter uma boa Conexão? <br> Veja nossos Planos Econômicos!! </p>
				</div>
			</div>
		</article>

		<!--MODAL ECONOMICO-->

		<div class="modal" id="economico-modal">
			<div class="modal-content">
				<ul class="collection-item center">
					<li class="collection-item"><h5>Plano 1</h5>
					<a class="btn btn-blue" href="contato.php"><p> 3Mbs R$42,80 </p></a></li></a>
					<li class="collection-item"><h5>Plano 2</h5>
					<a class="btn btn-blue" href="contato.php"><p>4Mbs R$52,80</p></a></li>
					<li class="collection-item"><h5>Plano 3</h5>
					<a class="btn btn-blue" href="contato.php"><p>5Mbs R$59,90</p></a></li>
				</ul>
			</div>

			<div class="modal-footer">
				<a class="btn blue-logo modal-action modal-close"> Voltar </a>
			</div>
		</div>

		<!--JOGO-->

		<article class="col s12 m6 l3">
			<div class="card">
				<div class="card-image">
					<img src="img/gm.jpg" alt="Jogo" class="materialboxed">
					<a href="#jogo-modal" class="btn btn-floating halfway-fab blue-logo modal-trigger">
						<i class="material-icons">more_horiz</i>
					</a>
				</div>

				<div class="card-content center">
					<h3 class="card-title">Jogos</h3>
					<p class="light">Planos específicos para jogos online. <br>Jogue com Qualidade! </p>
				</div>
			</div>
		</article>

		<!--MODAL JOGOS -->

		<div class="modal" id="jogo-modal">
			<div class="modal-content">
				<ul class="collection-item center">
					<li class="collection-item"><h5>Plano 1</h5>
					<a class="btn btn-blue" href="contato.php"><p> 8Mbs R$69,99 </p></a></li>
					<li class="collection-item"><h5>Plano 2</h5>
					<a class="btn btn-blue" href="contato.php"><p> 10Mbs R$79,99</p></a></li>
					<li class="collection-item"><h5>Plano 3</h5>
					<a class="btn btn-blue" href="contato.php"><p> 15Mbs R$99,99 </p></a></li>
					<li class="collection-item"><h5>Plano 4</h5>
					<a class="btn btn-blue" href="contato.php"><p> 20Mbs R$119,99 </p></a></li>
					<li class="collection-item"><h5>Plano 5</h5>
					<a class="btn btn-blue" href="contato.php"><p> 25Mbs R$139,99 </p></a></li>
				</ul>
			</div>

			<div class="modal-footer">
				<a class="btn blue-logo modal-action modal-close"> Voltar </a>
			</div>
		</div>

		<!--FILME-->

		<article class="col s12 m6 l3">
			<div class="card">
				<div class="card-image">
					<img src="img/fm.jpg" alt="Filme" class="materialboxed">
					<a href="#filme-modal"class="btn btn-floating halfway-fab blue-logo modal-trigger">
						<i class="material-icons">more_horiz</i>
					</a>
				</div>

				<div class="card-content center">
					<h3 class="card-title">Filmes e Séries</h3>
					<p class="light">Assista com Toda a Qualidade e sem travamentos! <br></p>
				</div>
			</div>
		</article>

		<!--MODAL FILMES -->

		<div class="modal" id="filme-modal">
			<div class="modal-content">
				<ul class="collection-item center">
					<li class="collection-item"><h5>Plano 1</h5>
					<a class="btn btn-blue" href="contato.php"><p> 8Mbs R$69,99 </p></a></li>
					<li class="collection-item"><h5>Plano 2</h5>
					<a class="btn btn-blue" href="contato.php"><p> 10Mbs R$79,99</p></a></li>
					<li class="collection-item"><h5>Plano 3</h5>
					<a class="btn btn-blue" href="contato.php"><p> 15Mbs R$99,99 </p></a></li>
					<li class="collection-item"><h5>Plano 4</h5>
					<a class="btn btn-blue" href="contato.php"><p> 20Mbs R$119,99 </p></a></li>
					<li class="collection-item"><h5>Plano 5</h5>
					<a class="btn btn-blue" href="contato.php"><p> 25Mbs R$139,99 </p></a></li>
				</ul>
			</div>

			<div class="modal-footer">
				<a class="btn blue-logo modal-action modal-close"> Voltar </a>
			</div>
		</div>

		<!--PERSONALIZADO-->

		<article class="col s12 m6 l3">
			<div class="card">
				<div class="card-image">
					<img src="img/per.jpg" alt="Personalizado" class="materialboxed">
					<a href="contato.php"class="btn btn-floating halfway-fab blue-logo">
						<i class="material-icons">more_horiz</i>
					</a>
				</div>

				<div class="card-content center">
					<h3 class="card-title">Personalize</h3>
					<p class="light">Nos mande uma mensagem informando qual o plano desejado! </p>
				</div>
			</div>
		</article>

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